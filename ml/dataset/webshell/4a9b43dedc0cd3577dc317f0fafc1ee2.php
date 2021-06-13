<?php
date_default_timezone_set("PRC");
$data = addslashes(trim($_POST['what']));
$data = mb_substr(str_replace(array('说点什么吧～'),array(''),$data),0,82,'gb2312');
if (!empty($data))
{
$data = str_replace(array('http://',';','<','>','?','"','(',')','POST','GET','_','/'),array('','&#59;','&lt;','&gt;','&#63;','&#34;','|','|','P0ST','G&#69;T','&#95;','&#47;'),$data);
$ip = preg_replace('/((?:\d+\.){3})\d+/','\\1*',$_SERVER['REMOTE_ADDR']);
$time = date("Y-m-d G:i:s A");
$text = "<div>".$data."<p>IP为".$ip."的基友 >>> F4cked At:".$time."</p></div>";
$file = fopen(__FILE__,'a');
fwrite($file,$text);
fclose($file);
echo "<script>location.replace(location.href);</script>";
}
?><head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>F4ckTeam Chating Room</title>
<style type="text/css">
body{font-size:10pt}
html{background:#f7f7f7;}
pre{line-height:120%;}
p{font-size:10pt;font-family:Lucida Handwriting,Times New Roman;}
.tx{font-family:Lucida Handwriting,Times New Roman;}
.left{height:500;width:45%;float:left;text-align:center;margin:3%}
.right{text-align:left;height:500;width:45%;float:left;margin:1%;overflow:auto;border: 1px inset #CCCCCC;}
#head {
	font-family: "Courier New", Courier, monospace;
}
</style>
</head>
<center>
<h1>通关留言板</h1></center>
<hr width="95%">
<div class="left">
<strong>恭喜基友成功通关~</strong><br /><br />
<div style="text-align:left;margin:7px" id="announcement">
1、强烈欢迎各位基友来玩游戏~<br /><br />
2、游戏通关并留言后，将通关详细过程以doc形式邮件发送到fan#f4ck.net经验证真实后可获得法客论坛邀请码一枚~<br /><br />
3、法客论坛黑客游戏第二版由核心成员[花开、若相惜]开发~<br /><br />
</div>
<form method=post action="?">
<textarea rows="5" id="what" cols="80" name="what" style="border-style:solid;border-width:1" onfocus="if(value=='说点什么吧～') {value=''}" onblur="if(value=='') {value='说点什么吧～'}">说点什么吧～</textarea><br /><br />
<input type="submit" value="发表感言" tilte="提交" style="width:120px;height:35px;border:1px;solid:#666666;font-size:9pt;BACKGROUND-COLOR:#E8E8FF;color:#666666"></form>
<div class="tx">HackGame V2.0 - Code By 花开、若相惜@F4ckTeam</div>
</div>
<div class="right">
