# -*- coding: utf8 -*-

import os
import shutil
import hashlib
import subprocess

def extract_file(ind, outd):
    if not os.path.exists(outd):
        os.makedirs(outd)
     
    g = os.walk(ind)
    count = 0
    
    for path, dir_list, file_list in g:
        for fn in file_list:
            if str(fn[-3:]).lower() == 'php':
                fp = os.path.join(path, fn)
                count += 1
                print(fp)

                with open(fp, 'rb') as f:
                    fdata = f.read()
                fmd5 = hashlib.md5(fdata).hexdigest()
                nfn = fmd5 + '.php'
                nfp = os.path.join(outd, nfn)

                try:
                    shutil.copyfile(fp, nfp)
                except IOError as e:
                    import traceback
                    traceback.print_exc()
    print(count)


def pick_file(ind, outd):
    php_vld_cmd =  'php -d vld.active=1 -d vld.execute=0 -f {}'
    count = 0
    mv_count = 0

    g = os.walk(ind)

    def _exec(cmd):
        nonlocal mv_count
        nonlocal outd
        if type(cmd) != 'list':
            cmd = cmd.split(' ')

        try:
            output = subprocess.check_output(cmd,
                stderr=subprocess.STDOUT)
            
            if len(output) <= 70000 and mv_count <= 1000:
                fp = cmd[-1]
                fn = fp.split('/')[-1]
                shutil.move(fp, outd+fn if outd[-1] == '/' else outd+'/'+fn)
                mv_count += 1
                return 'move'

            return len(output)
        
        except subprocess.CalledProcessError as e:
            print("Error: %s" % e)
            os.remove(cmd[-1])
            return 'delete'

    for path, dir_list, file_list in g:
        for fn in file_list:
            fp = os.path.join(ind, fn)
            try:
                cmd = php_vld_cmd.format(fp)
                print(count, cmd, _exec(cmd))
                count += 1
            except IOError as e:
                import traceback
                traceback.print_exc()

if __name__ == '__main__':
    pass

