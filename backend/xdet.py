# -*- coding: utf8 -*-

from flask import Flask, request, render_template
from flask_cors import CORS
from lib.core import *
from lib.utils import *

app = Flask(__name__)
env = app.jinja_env
CORS(app)

SERVER = 'http://127.0.0.1:4000/'
UPLOAD_DIR = 'upload/'
REPORT_DIR = 'templates/report/'

cv, tfidf = load_feature_model()
detect_model = load_detect_model()

def hash_anchor(fn): return md5(fn)
env.filters['hash_anchor'] = hash_anchor

@app.route('/')
def main():
    return 'OK'

@app.route('/upload', methods=['GET', 'POST'])
def upload():
    render_args = {}
    render_args['startTime'] = get_time()

    file_cnt = request.form.get('fileCount')
    report_name = gen_report_name()
    render_args['commandLine'] = f'python3 xdet.py -o report.html \'./{report_name}/\''
    upload_dir = path_join(UPLOAD_DIR, report_name)
    mkdir(upload_dir)

    for fn in request.files:
        f = request.files[fn]
        if fn.endswith('.zip'):
            outd = path_join(upload_dir, fn.rstrip('.zip'))
            unzip(f, outd)
            continue

        fp = path_join(upload_dir, fn)
        f.save(fp)

    prefix = 'upload/' + report_name
    result = detect_sample_dir(upload_dir, cv, tfidf, detect_model)
    vuln = {k:v for k, v in result.items() if v == 1}

    result = {k.replace(prefix, '.'):v for k, v in result.items()}
    
    vulnr = {}

    for fp in vuln.keys():
        fn = fp.replace(prefix, '.')
        vul = {}
        vul['fsize'] = get_file_size(fp)
        vul['fcode'] = open(fp, 'r').read()

        vulnr[fn] = vul

    # print(vulnr.keys())

    render_args['scanResult'] = result
    render_args['vulnResult'] = vulnr
    render_args['filesCount'] = len(result.keys())
    render_args['vulnCount'] = len(vuln.keys())
    render_args['endTime'] = get_time()

    render_html = render_template('report.html', **render_args)
    
    upload_dir_report = path_join(upload_dir, f'{report_name}.html')
    report_path = path_join(REPORT_DIR, f'{report_name}.html')

    open(upload_dir_report, 'w').write(render_html)
    open(report_path, 'w').write(render_html)
    
    report_url = SERVER + report_path.lstrip('templates/')

    return report_url

@app.route('/report/<report_file>')
def report(report_file):
    return render_template(f'report/{report_file}')

if __name__ == '__main__':
    app.run(host='0.0.0.0', port='4000', debug=True)
