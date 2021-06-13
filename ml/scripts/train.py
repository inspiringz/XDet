# -*- coding: utf8 -*-

import re
import os
import sys
import pickle
import shutil
import hashlib
import xgboost
import subprocess
from sklearn.tree import DecisionTreeClassifier
from sklearn.ensemble import RandomForestClassifier
from sklearn.neighbors import KNeighborsClassifier
from sklearn.feature_extraction.text import CountVectorizer
from sklearn.feature_extraction.text import TfidfTransformer
from sklearn.metrics import classification_report
from sklearn.model_selection import train_test_split, cross_val_score, cross_val_predict, GridSearchCV

try:
    from rich.console import Console
    console = Console()
    print = console.print
except Exception as e:
    pass

PICKLE_DATA_DIR = '../dataset/pickle/'
WEBSHELL_OPCODE_FILE_PATH = PICKLE_DATA_DIR + 'webshell.pkl'
WHITEFILE_OPCODE_FILE_PATH = PICKLE_DATA_DIR + 'whitefile.pkl'
CVP = PICKLE_DATA_DIR + 'count_vectorizer.pkl'
TFIDFP = PICKLE_DATA_DIR + 'tfidf_transformer.pkl'
X_TRAIN = PICKLE_DATA_DIR + 'train_data.pkl'
Y_LABEL = PICKLE_DATA_DIR + 'train_data_labels.pkl'
DETECTION_MODEL = PICKLE_DATA_DIR + 'trained_model.pkl'

SAMPLE_DIR = '../dataset/sample/'


def pick_file(ind, outd, md5=True):
    if not os.path.exists(outd): os.makedirs(outd)
    
    g = os.walk(ind)
    count = 0

    for path, dir_list, file_list in g:
        for fn in file_list:
            if not fn.lower().endswith('.php'): continue

            fp = os.path.join(path, fn)

            try:
                op = get_file_opcode(fp)
                if not op:
                    os.remove(fp)
                    continue
            except Exception as e:
                continue

            with open(fp, 'rb') as f: fdata = f.read()
            fmd5 = hashlib.md5(fdata).hexdigest()

            nfp = os.path.join(outd, fmd5+'.php')
            shutil.copyfile(fp, nfp)
            count += 1
            print(f'{str(count)} {fp} {nfp}')
    
    print(f'[^] {str(count)} file picked up!')

            
def get_file_opcode(fp):
    php_vld_cmd = ['php', '-dvld.active=1', '-dvld.execute=0', '-dvld.dump_paths=0', '-f', fp]

    try:
        raw_out = subprocess.check_output(php_vld_cmd,
            stderr=subprocess.STDOUT)
        opcodes = re.findall(r'\*       (\b[A-Z_]+\b) ', raw_out.decode())
        return ' '.join(opcodes)
    except Exception as e:
        import traceback
        traceback.print_exc()
        # print(fp, raw_out)
        return None

def extract_opcodes_for_train(ind, outp):
    g = os.walk(ind)
    result = []
    count = 0

    for path, dir_list, file_list in g:
        for fn in file_list:
            if not fn.lower().endswith('.php'): continue

            fp = os.path.join(path, fn)
            try:
                opcode_str = get_file_opcode(fp)
                if opcode_str:
                    result.append(opcode_str)
                    count += 1
                    print(count, fp, len(opcode_str))
            except Exception as e:
                import traceback
                traceback.print_exc()
                print(f'[!] {fp} error occurs!')
                pass
    
    with open(outp, 'wb') as f:
        pickle.dump(result, f)
        print(f'[^] {ind} {str(count)} php opcodes dump to {outp} !')

def extract_opcodes_for_detect(ind):
    g = os.walk(ind)
    fps = []
    opcodes = []
    count = 0

    for path, dir_list, file_list in g:
        for fn in file_list:
            if not fn.lower().endswith('.php'): continue

            fp = os.path.join(path, fn)
            try:
                opcode_str = get_file_opcode(fp)
                if opcode_str:
                    fps.append(fp)
                    opcodes.append(opcode_str)
                    count += 1
                    print(count, fn, len(opcode_str))
            except Exception as e:
                import traceback
                traceback.print_exc()
                print(f'[!] {fp} error occurs!')
                pass
    
    return fps, opcodes

def get_feature_for_train(wsod, wfod, new=False):

    if not new:
        with open(X_TRAIN, 'rb') as f: tfidf_mat = pickle.load(f)
        with open(Y_LABEL, 'rb') as f: labels = pickle.load(f)
        return tfidf_mat, labels

    with open(wsod, 'rb') as f:
        ws_opcode_list = pickle.load(f)
        ws_count = len(ws_opcode_list)
    with open(wfod, 'rb') as f:
        wf_opcode_list = pickle.load(f)
        wf_count = len(wf_opcode_list)
    
    total = wf_count + ws_count
    labels = [1]*ws_count + [0]*wf_count
    corpus = ws_opcode_list + wf_opcode_list

    covec = CountVectorizer(ngram_range=(2, 4), decode_error="ignore", max_features=10000, token_pattern=r'\b\w+\b', min_df=1, max_df=1.0)
    
    # 生成词频矩阵 [i][j] -> k, j 词在 i 文本中的频率为 k
    covec_mat = covec.fit_transform(corpus).toarray()

    transformer = TfidfTransformer(smooth_idf=False)
    tfidf_mat = transformer.fit_transform(covec_mat).toarray()

    with open(CVP, 'wb') as f: pickle.dump(covec, f)
    with open(TFIDFP, 'wb') as f: pickle.dump(transformer, f)
    with open(X_TRAIN, 'wb') as f: pickle.dump(tfidf_mat, f)
    with open(Y_LABEL, 'wb') as f: pickle.dump(labels, f)

    # print(tfidf_mat, total)

    return tfidf_mat, labels

def get_feature_for_detect(opcodes):

    with open(CVP, 'rb') as f: covec = pickle.load(f)
    with open(TFIDFP, 'rb') as f: transformer = pickle.load(f)

    covec_mat = covec.transform(opcodes).toarray()
    tfidf_mat = transformer.transform(covec_mat).toarray()
    
    return tfidf_mat
    
def detect_sample(ind, model_path=DETECTION_MODEL):
    fps, opcodes = extract_opcodes_for_detect(ind)

    x_detect = get_feature_for_detect(opcodes)

    # detect_model = joblib.load(model_path)
    detect_model = pickle.load(open(model_path, 'rb'))
    y_pred = detect_model.predict(x_detect)

    result = dict(zip(fps, y_pred))

    return result

def train_model(x, y, score=False):
    xgb_classifier = xgboost.XGBClassifier(eval_metric='logloss', use_label_encoder=False, max_depth=4)
    x_train, x_test, y_train, y_test = train_test_split(x, y, test_size=0.3, random_state=0)
    xgb_model = xgb_classifier.fit(x_train, y_train)

    # joblib.dump(xgb_model, open(DETECTION_MODEL, 'rb)')
    pickle.dump(xgb_model, open(DETECTION_MODEL, 'wb'))
    
    if score:
        y_pred = xgb_model.predict(x_test)
        # classification_report 用于显示主要分类指标的文本报告, 在报告中显示每个类的精确度,召回率, F1 值等信息
        report = classification_report(y_test, y_pred, output_dict=True, target_names=['Whitefile', 'Webshell'], digits=6)
        print('train_test_split:\n', report)
        print('cross_val_score:', cross_val_score(xgb_classifier, x, y, cv=5).mean())
        y_pred = cross_val_predict(xgb_classifier, x, y, cv=5)
        print('cross_val_predict:\n', classification_report(y_true=y, y_pred=y_pred, target_names=['Whitefile', 'Webshell'], digits=6))

def xgboost_train(x, y):
    xgb_classifier = xgboost.XGBClassifier(eval_metric='logloss', use_label_encoder=False, max_depth=4)

    '''
    # train_test_split 将矩阵随机划分为训练子集和测试子集，返回划分好的训练集测试集样本和训练集测试集标签
    x_train, x_test, y_train, y_test = train_test_split(x, y, test_size=0.3, random_state=0)

    xgb_model = xgb_classifier.fit(x_train, y_train)

    y_pred = xgb_model.predict(x_test)

    # classification_report 用于显示主要分类指标的文本报告, 在报告中显示每个类的精确度,召回率, F1 值等信息
    report = classification_report(y_test, y_pred, output_dict=True, target_names=['Whitefile', 'Webshell'])
    print(':honeybee: XGBoost 分类模型训练结果:')
    print(report)
    
    '''
    # print(cross_val_score(xgb_classifier, x, y, cv=5).mean())
    y_pred = cross_val_predict(xgb_classifier, x, y, cv=5)
    print(':honeybee: [green]XGBoost 分类模型训练结果(5重交叉验证):')
    print(classification_report(y_true=y, y_pred=y_pred, target_names=['Whitefile', 'Webshell'], digits=6))
    

def randomforest_train(x, y):
    rf_classifier = RandomForestClassifier(oob_score=True)

    x_train, x_test, y_train, y_test = train_test_split(x, y, test_size=0.3, random_state=0)
    rf_model = rf_classifier.fit(x_train, y_train)

    # joblib.dump(rf_model, open(DETECTION_MODEL, 'rb)')
    pickle.dump(rf_model, open(DETECTION_MODEL, 'wb'))
    
    print(cross_val_score(rf_classifier, x, y, cv=5).mean())
    y_pred = cross_val_predict(rf_classifier, x, y, cv=5)
    print(classification_report(y_true=y, y_pred=y_pred, target_names=['Whitefile', 'Webshell'], digits=6))

def decisiontree_train(x, y):
    dt_classifier = DecisionTreeClassifier()
    print(cross_val_score(dt_classifier, x, y, cv=5).mean())
    y_pred = cross_val_predict(dt_classifier, x, y, cv=5)
    print(classification_report(y_true=y, y_pred=y_pred, target_names=['Whitefile', 'Webshell'], digits=6))

def grid_search(x, y):
    param_grid = {
        # 'n_estimators': range(97, 104, 1), # 98
        'max_depth': range(3, 11, 1),
    }
    grid_search_cv = GridSearchCV(estimator=RandomForestClassifier(oob_score=True), param_grid=param_grid, cv=5)
    grid_search_cv.fit(x,y)
    print(grid_search_cv.scorer_, grid_search_cv.best_params_, grid_search_cv.best_score_)


def compare_different_clsf(x, y):
    rf_classifier = RandomForestClassifier(oob_score=True)
    dt_classifier = DecisionTreeClassifier()
    xgb_classifier = xgboost.XGBClassifier(eval_metric='logloss', use_label_encoder=False)
    knn_classifier = KNeighborsClassifier()
    
    score_type = ['accuracy', 'precision', 'recall', 'f1']
    
    for st in score_type:
        cvs = cross_val_score(knn_classifier, x, y, cv=5, scoring=st)
        print(st, cvs.mean())
    
    for st in score_type:
        cvs = cross_val_score(dt_classifier, x, y, cv=5, scoring=st)
        print(st, cvs.mean())


if __name__ == '__main__':
    # pick_file('../dataset/notyet/cms/', '../dataset/notyet/cms_ok/')
    if len(sys.argv) > 1:
        with console.status("[bold green]正在提取样本集OPCode序列...") as status:
            extract_opcodes_for_train('../dataset/webshell/', WEBSHELL_OPCODE_FILE_PATH)
            extract_opcodes_for_train('../dataset/whitefile/', WHITEFILE_OPCODE_FILE_PATH)
        with console.status("[bold green]正在进行OPCode文本特征提取(N-Gram+TF-IDF)...") as status:
            x, y = get_feature_for_train(WEBSHELL_OPCODE_FILE_PATH, WHITEFILE_OPCODE_FILE_PATH, new=True)
    else:
        with console.status("[bold green]正在载入OPCode文本特征(N-Gram+TF-IDF)...") as status:
            x, y = get_feature_for_train(WEBSHELL_OPCODE_FILE_PATH, WHITEFILE_OPCODE_FILE_PATH)

    # print('>>> RandomForest')
    #randomforest_train(x, y)
    
    with console.status("[bold green]正在进行XGBoost分类模型训练(5重交叉验证)...") as status:
        xgboost_train(x, y)
    # train_model(x, y)
    # print('>>> DecisionTree')
    # decisiontree_train(x, y)
    # xgboost_train(x, y)
    # det_res = detect_sample('/Users/inspringz/Desktop/xdet/dataset/sample/')
    # print(detect_sample('/Users/inspringz/Downloads/EmpireCMS_7.5_SC_UTF8/'))

    # 结果对比
    # x, y = get_feature_for_train(WEBSHELL_OPCODE_FILE_PATH, WHITEFILE_OPCODE_FILE_PATH)
    # compare_different_clsf(x, y)