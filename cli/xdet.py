# -*- coding: utf8 -*-

import os
from pickle import FALSE
from platform import version
import sys
import shutil
import argparse
from rich.console import Console
from rich.table import Table

from lib.core import *
from lib.utils import *
from lib.report import generate_report

console = Console()
print = console.print

print(ascii_banner())

if __name__ == '__main__':

    parser = argparse.ArgumentParser(add_help=False,)
    parser.add_argument('dest_obj', metavar='dest_obj', nargs='?',
                        help='File or folder to be detected')
    parser.add_argument('-o', '--output', metavar='',
                        help='Generate scan report in HTML format')
    parser.add_argument('-v', '--version', action="store_true",
                        help='Show version about XDet and exit')
    parser.add_argument('-h', '--help', action='help',
                        help='Show this help message and exit')

    args = parser.parse_args()

    if args.version:
        print(version())
        exit()

    dest_obj = args.dest_obj

    if not dest_obj:
        print(f':exclamation:[red]Error[/] Missing required parameters [green3]dest_obj[/].')
        exit()
    
    if os.path.exists(dest_obj):
        if os.path.isfile(dest_obj):
            dest_dir = os.path.join(os.getcwd(), '.tmp')
            if not os.path.exists(dest_dir):
                os.mkdir(dest_dir)
            shutil.copy(dest_obj, dest_dir)
            remove_flag = True
        else:
            dest_dir = dest_obj
            remove_flag = False
    else:
        print(f':exclamation:[red]Error[/] dest_obj [b]{dest_obj}[/] seems not exist!')
        exit()
    
    output_path = args.output
    if output_path:
        if not output_path.endswith('.html'):
            output_path += '.html'
        report = {}
        report['cmdline'] = f'python3 xdet.py -o {output_path} {dest_obj}'

    
    cv, tfidf = load_feature_model()
    dm = load_detect_model()

    if output_path: report['start_time'] = get_time()

    result = detect_sample_dir(dest_dir, cv, tfidf, dm)

    if output_path: 
        report['end_time'] = get_time()
        report['file_count'] = str(len(result))

    vuln = {k:v for k, v in result.items() if v == 1}

    if len(vuln) == 0:
        print(f'[r]No malicious files detected, now exit.')

    _vuln = {}
    for fp in vuln.keys():
        vul = {'label': str(vuln[fp])}
        vul['fsize'] = get_file_size(fp)
        vul['flast'] = get_file_last_modify(fp)
        vul['fcode'] = open(fp, 'r').read()
        _vuln[fp.replace(dest_dir, '.')] = vul
    
    if output_path: 
        report['vuln_count'] = str(len(_vuln))

    table = Table(show_header=True, header_style='orange3')
    table.add_column('File Path')
    table.add_column('Label')
    table.add_column('File Size')
    table.add_column('Last Modify')
    
    for k, v in _vuln.items():
        table.add_row(k, v['label'], v['fsize'], v['flast'])
    
    print(f':smiling_imp: Find out [deep_pink1]{str(len(_vuln.keys()))}[/] malicious files from [cyan2]{str(len(result.keys()))}[/] PHP files.')
    print(table)

    if output_path:
        generate_report(report, result, _vuln, output_path)
        print(f':honeybee: Scan report has been exported to [steel_blue1]{output_path}[/].')
    
    if remove_flag: shutil.rmtree(dest_dir)   
    

