# -*- coding: utf8 -*-


import pickle
from sklearn.feature_extraction.text import CountVectorizer
from sklearn.feature_extraction.text import TfidfTransformer

try:
    from rich.console import Console
    print = Console().print
except Exception as e:
    pass

PICKLE_DATA_DIR = '../dataset/pickle/'
WEBSHELL_OPCODE_FILE_PATH = PICKLE_DATA_DIR + 'webshell.pkl'
WHITEFILE_OPCODE_FILE_PATH = PICKLE_DATA_DIR + 'whitefile.pkl'

MAX_FEATURES = 10000


def get_feature_for_train(wsod, wfod):

    with open(wsod, 'rb') as f:
        ws_opcode_list = pickle.load(f)
        ws_count = len(ws_opcode_list)
    with open(wfod, 'rb') as f:
        wf_opcode_list = pickle.load(f)
        wf_count = len(wf_opcode_list)
    
    total = wf_count + ws_count
    labels = [1]*ws_count + [0]*wf_count
    corpus = ws_opcode_list + wf_opcode_list

    CoVec = CountVectorizer(ngram_range=(2, 4), decode_error="ignore",max_features=MAX_FEATURES, token_pattern=r'\b\w+\b', min_df=1, max_df=1.0)
    
    # 生成词频矩阵 [i][j] -> k, j 词在 i 文本中的频率为 k
    Covec_Mat = CoVec.fit_transform(corpus).toarray()

    transformer = TfidfTransformer(smooth_idf=False)
    Tfidf_Mat = transformer.fit_transform(Covec_Mat).toarray()
    

    CVP = PICKLE_DATA_DIR + 'CoVec.pkl'
    TfidfP = PICKLE_DATA_DIR + 'transformer.pkl'

    with open(CVP, 'wb') as f: pickle.dump(CoVec, f)
    with open(TfidfP, 'wb') as f: pickle.dump(transformer, f)

    print(Tfidf_Mat, total)
    return Tfidf_Mat, labels


if __name__ == '__main__':
    # get_feature_for_train(WEBSHELL_OPCODE_FILE_PATH, WHITEFILE_OPCODE_FILE_PATH)
    pass

