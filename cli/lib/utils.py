# -*- coding: utf8 -*-

import os
import time
import random
from rich.console import Console
from rich.color import ANSI_COLOR_NAMES

def ascii_banner():
    ascii_banner = '''
             ▄▄██████████▄▄             
             ▀▀▀   ██   ▀▀▀             
     ▄██▄   ▄▄████████████▄▄   ▄██▄     
   ▄███▀  ▄████▀▀▀    ▀▀▀████▄  ▀███▄   
  ████▄ ▄███▀              ▀███▄ ▄████  
 ███▀█████▀▄████▄      ▄████▄▀█████▀███ 
 ██▀  ███▀ ██████      ██████ ▀███  ▀██ 
  ▀  ▄██▀  ▀████▀  ▄▄  ▀████▀  ▀██▄  ▀  
     ███           ▀▀           ███     
     ██████████████████████████████     
 ▄█  ▀██  ███   ██    ██   ███  ██▀  █▄ 
 ███  ███ ███   ██    ██   ███▄███  ███ 
 ▀██▄████████   ██    ██   ████████▄██▀ 
  ▀███▀ ▀████   ██    ██   ████▀ ▀███▀  
   ▀███▄  ▀███████    ███████▀  ▄███▀   
     ▀███    ▀▀██████████▀▀▀   ███▀     
       ▀     ▄▄▄   ██   ▄▄▄      ▀      
             ▀▀███████████▀▀   
            
    [dodger_blue1]XDet[/] - Detect all webshells in [red]<?PHP[/]
    '''
    return ascii_banner

def version():
    v = '''[i]Current Version: XDet-dev-1.0 & https://github.com/inspiringz/XDet[/]

              precision    recall  f1-score   support

   Whitefile   0.977637  0.962662  0.970092      2089
    Webshell   0.965759  0.979519  0.972591      2246

    accuracy                       0.971396      4335
   macro avg   0.971698  0.971090  0.971341      4335
weighted avg   0.971483  0.971396  0.971386      4335'''
    return v

def get_time():
    now = time.strftime("%Y-%m-%d-%H:%M:%S", time.localtime())
    return now

def get_file_size(fp):
    size = os.path.getsize(fp)
    if size >= 1000:
        size = str(round(size / 1000, 2)) + 'K'
    else:
        size = str(size) + 'B'
    return size

def timestamp2time(timestamp):
    timestruct = time.localtime(timestamp)
    return time.strftime('%Y-%m-%d %H:%M:%S', timestruct)

def get_file_last_modify(fp):
    t = os.path.getmtime(fp)
    return timestamp2time(t)

if __name__ == '__main__':
    print = Console().print