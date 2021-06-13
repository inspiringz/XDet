# -*- coding: utf8 -*-

import os
import time
import shutil
import zipfile
import hashlib

def get_time():
    now = time.strftime("%Y-%m-%d-%H:%M:%S", time.localtime())
    return now

def gen_report_name():
    now = time.strftime("%Y-%m-%d-%H%M%S", time.localtime())
    return 'XDet-' + now

def unzip(file, outd):
    zfile = zipfile.ZipFile(file)
    for fn in zfile.namelist():
        if fn.startswith('__MACOSX') or fn.startswith('.'):
            continue
        zfile.extract(fn, outd)
    zfile.close()

def get_file_size(fp):
    size = os.path.getsize(fp)
    if size >= 1000:
        size = str(round(size / 1000, 2)) + 'K'
    else:
        size = str(size) + 'B'
    return size

def md5(hash_str):
    return hashlib.md5(hash_str.encode()).hexdigest()

def path_join(a, b):
    return os.path.join(a, b)

def mkdir(dirp):
    return os.mkdir(dirp)