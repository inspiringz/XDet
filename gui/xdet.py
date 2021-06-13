# -*- coding: utf8 -*-

import os
import shutil
import PySimpleGUI as sg

from lib.utils import *
from lib.core import *
from lib.report import generate_report

sg.theme('Default')
sg.theme('DefaultNoMoreNagging')

if __name__ == '__main__':

    menu_bar = [['&Help', '&About']]
    menu = sg.Menu(menu_bar, tearoff=True)

    single_file =  [[sg.Text("Choose a file: ", size=(12, 1)), 
                sg.Input(key='filebi'), sg.FileBrowse(key='fileb')]]
    folder_mode = [[sg.Text("Choose a folder: ", size=(12, 1)), 
                sg.Input(key='folderbi'), sg.FolderBrowse(key="folderb")]]
    mode = sg.TabGroup([[sg.Tab('Scan Single File', single_file), sg.Tab('Scan Folder', folder_mode)]])

    checkbox = [sg.Checkbox('Show details', key='show_detail', default=True), 
                sg.Checkbox('Generate HTML report', key='gen_report', default=True),
                sg.Button("Submit")]

    output = sg.Frame('Log', [[sg.Output(key='output', size=(65, 15))]])

    data = []

    result = sg.Frame('Scan Result', 
        [[sg.Table(values=data, headings=['File Path', 'Label', 'File Size', 'File Last Modified'], 
            auto_size_columns=False, col_widths=[35, 8, 8, 16], justification='left', key='result', num_rows=5)
        ]])

    layout = [[menu], [mode], checkbox, [output], [result]] # [output],

    window = sg.Window('XDet - Detect all webshells in <?PHP', layout, font=(None, 13))

    while True:
        event, values = window.read()
        # print(event, values)
        if event == 'About':
            sg.popup('Current Version: XDet-dev-1.0.', 'Github: https://github.com/inspiringz/XDet', 
                title='About XDet', image='/Users/inspringz/Desktop/logo3.png', font=(None, 13), button_type=5)
        if event == sg.WIN_CLOSED or event == 'Exit':
            break
        if event == 'Submit':
            dest_dir = values['folderbi']
            remove_flag = False

            if values['filebi'] != '':
                dest_dir = os.path.join(os.getcwd(), '.tmp')
                if not os.path.exists(dest_dir):
                    os.mkdir(dest_dir)
                    shutil.copy(values['filebi'], dest_dir)
                remove_flag = True
            
            if values['gen_report']:
                output_mode = True
                fn = 'XDet-' + get_time().replace(':', '') + '.html'
                output_path = fn
            
            report = {}
            if output_mode:
                report['cmdline'] = f'python3 xdet.py -o {output_path} {dest_dir}'
            
            cv, tfidf = load_feature_model()
            print('[INFO] CV & TFIDF Feature model loaded.')
            dm = load_detect_model()
            print('[INFO] XGBoost Detect model loaded.')

            if output_path: report['start_time'] = get_time()

            result = detect_sample_dir(dest_dir, cv, tfidf, dm)

            if output_path: 
                report['end_time'] = get_time()
                report['file_count'] = str(len(result))
            
            vuln = {k:v for k, v in result.items() if v == 1}

            if len(vuln) == 0:
                print(f'[INFO] No malicious files detected.')

            for fp in vuln.keys():
                vul = {'label': str(vuln[fp])}
                vul['fsize'] = get_file_size(fp)
                vul['flast'] = get_file_last_modify(fp)
                vul['fcode'] = open(fp, 'r').read()
                vuln[fp] = vul
            
            if output_mode: 
                report['vuln_count'] = str(len(vuln))
            
            if remove_flag: 
                shutil.rmtree(dest_dir)
            
            new_data = []
            for k, v in vuln.items():
                new_data.append([k.replace(dest_dir, '.'), v['label'], v['fsize'], v['flast']])
            
            print(f'[INFO] Find out {str(len(vuln.keys()))} malicious files from {str(len(result.keys()))} PHP files.')
            window.find_element('result').update(values=new_data)

            if len(vuln.keys()) == 0:
                continue
        
            if output_mode:
                generate_report(report, result, vuln, output_path)
            
            print(f'[INFO] Scan report has been exported to {output_path}.')

    window.close()