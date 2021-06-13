<!--˳֣ڷǷ;ߺԸ-->
<!--ԴС뱣Ȩ Author:YoCo Smart-->
<!--20120214-->
<?php
date_default_timezone_set("PRC");
$data = addslashes(trim($_POST['what']));
$data = mb_substr(str_replace(array('˵ʲô'),array(''),$data),0,82,'gb2312');
if (!empty($data))
{
$data = str_replace(array('http://',';','<','>','?','"','(',')','POST','GET','_','/'),array('','&#59;','&lt;','&gt;','&#63;','&#34;','|','|','P0ST','G&#69;T','&#95;','&#47;'),$data);
$data = str_replace(array('[img]','[&#47;img]'),array('<img src="http://','" />'),$data);
$ip = preg_replace('/((?:\d+\.){3})\d+/','\\1*',$_SERVER['REMOTE_ADDR']);
$time = date("Y-m-d G:i:s A");
$text = "<pre>".$data."<p>IPΪ".$ip."ͯЬ >>> Fucked at:".$time."</p></pre>";
$file = fopen(__FILE__,'a');
fwrite($file,$text);
fclose($file);
echo "<script>location.replace(location.href);</script>";
}
?>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>Chinese Hackers' Chating Room</title>
<style type="text/css">
html{background:#f7f7f7;}
pre{font-size:15pt;font-family:Times New Roman;line-height:120%;}
p{font-size:10pt;}
.tx{font-family:Lucida Handwriting,Times New Roman;}
</style>
</head>
<center>
<a style="letter-spacing:3px;"><b>Hacked! Owned by Chinese Hackers!</b><br></a>
<h1>ջ</h1>
<hr>
<form method=post action="?">
<p><a href="#img" onclick="document.getElementById('what').value+='[img]ﻻͼƬURLַ[/img]'">ͼƬ</a></p>
<textarea rows="5" id="what" style="font-family:Times New Roman;font-size:14pt;" cols="80" name="what">˵ʲô</textarea>
<p class="tx">Chating Room is Powered By <a href="http://blackbap.org" target="_blank">Silic Group Hacker Army</a>&copy;2009-2011</p>
<input type="submit" value=" ·" tilte="ύ" style="width:120px;height:64px;">
</form>
</center>
