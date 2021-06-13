# -*- coding: utf8 -*-

import os
import hashlib
from html import escape
from lib.config import REPORT_DIR

def md5(hash_str):
    return hashlib.md5(hash_str.encode()).hexdigest()

def generate_report(report, result, vuln, output_path):
    raw_html_1 = '''
      <pre>{cmdline}</pre>
      <p class="lead">{start_time} ~ {end_time}<br>
        扫描 PHP 文件 {file_count} 个，发现 {vuln_count} 处隐患。
      </p>
    </div>
    <h2 id="files" class="target">Overview</h2>
    <div class="table-responsive">
      <table id="table-overview" class="table table-striped dataTable" role="grid">
        <thead>
          <tr>
            <th>状态</th>
            <th>文件名</th>
            <th>标签</th>
          </tr>
        </thead>
        <tbody>
    '''.format(**report)

    raw_html_2 = ''
    for fp, label in result.items():
        raw_html_2 += '<tr><td>'
        if label == 1:
            raw_html_2 += '<span class="label label-danger">danger</span>'
        else:
            raw_html_2 += '<span class="label label-success">normal</span>'
        raw_html_2 += '''</td>
            <td><a href="#{filename}">{filename}</a></td>
            <td>{label}</td>
          </tr>
        '''.format(filename=fp, label=str(label))

    raw_html_3 = '''
        </tbody>
      </table>
    </div>
    <h2 id="vulnerabilities" class="target">Vulnerability</h2>
    '''

    for fp, vul in vuln.items():
        raw_html_3 += f'''<div id="{fp}" class="panel panel-default">
      <div class="panel-heading clickable" data-toggle="collapse" data-target="#{md5(fp)}">
        <h3 class="panel-title">{fp}</h3>
      </div>
      <div class="panel-body" id="{md5(fp)}">
        <div class="table-responsive">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th>Level</th>
                <th>Size</th>
                <th>Last Modify</th>
              </tr>
            </thead>
            <tbody>
              <tr class="success">
                <td title="Level" width="10%"><span class="label label-danger">danger</span></td>
                <td title="Function" width="20%">{vul['fsize']}</td>
                <td title="Description">{vul['flast']}</td>
              </tr>
              <tr>
                <td colspan="3">
                  <h5>Code</h5>
                  <pre style="background-color: #fff !important;"><code class="php">{escape(vul['fcode'])}</code></pre>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
    '''

    raw_html_3 += '</div>'

    part_1 = open(os.path.join(REPORT_DIR, 'part_1.html'), 'r').read()
    part2 = raw_html_1 + raw_html_2 + raw_html_3
    part_3 = open(os.path.join(REPORT_DIR, 'part_3.html'), 'r').read()

    html = part_1 + part2 + part_3

    open(output_path, 'w').write(html)