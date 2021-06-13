# -*- coding: utf8 -*-

import re
import os
import pickle
import shutil
import hashlib
from rich import console
import xgboost
import subprocess
from sklearn.tree import DecisionTreeClassifier
from sklearn.ensemble import RandomForestClassifier 
from sklearn.feature_extraction.text import CountVectorizer
from sklearn.feature_extraction.text import TfidfTransformer
from sklearn.metrics import classification_report
from sklearn.model_selection import train_test_split, cross_val_score, cross_val_predict, GridSearchCV

from lib.config import *

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

def extract_opcodes_for_detect(ind, verberos=False):
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
                    if verberos:
                        print(count, fn, len(opcode_str))
                    print(f'Parse {fp}\'s opcode.')
            except Exception as e:
                import traceback
                traceback.print_exc()
                # print(f'[!] {fp} error occurs!')
                pass
    
    if count == 0:
        return None, None
    
    return fps, opcodes

def get_feature_for_detect(opcodes):

    with open(CVP, 'rb') as f: covec = pickle.load(f)
    with open(TFIDFP, 'rb') as f: transformer = pickle.load(f)

    covec_mat = covec.transform(opcodes).toarray()
    tfidf_mat = transformer.transform(covec_mat).toarray()
    
    return tfidf_mat

def load_feature_model():
    with open(CVP, 'rb') as f: covec = pickle.load(f)
    with open(TFIDFP, 'rb') as f: transformer = pickle.load(f)

    return covec, transformer

def get_feature_from_loaded_model(cv, tfidf, opcodes):
    covec_mat = cv.transform(opcodes).toarray()
    tfidf_mat = tfidf.transform(covec_mat).toarray()

    return tfidf_mat

def detect_sample(ind, model_path=DETECTION_MODEL):
    fps, opcodes = extract_opcodes_for_detect(ind)

    x_detect = get_feature_for_detect(opcodes)

    # detect_model = joblib.load(model_path)
    detect_model = pickle.load(open(model_path, 'rb'))
    y_pred = detect_model.predict(x_detect)

    result = dict(zip(fps, y_pred))

    return result

def load_detect_model(model_path=DETECTION_MODEL):
    detect_model = pickle.load(open(model_path, 'rb'))
    return detect_model

def detect_sample_dir(ind, cv, tfidf, detect_model):
    print("[INFO] Extracting PHP File's OPCode Now...")
    
    fps, opcodes = extract_opcodes_for_detect(ind)

    if not fps: return {}
    
    x_detect = get_feature_from_loaded_model(cv, tfidf, opcodes)
    print('[SUCCESS] Features of all files have been extracted!')
    
    y_pred = detect_model.predict(x_detect)
    result = dict(zip(fps, y_pred))
    print('[SUCCESS] Labels of all files have been detected!')

    return result