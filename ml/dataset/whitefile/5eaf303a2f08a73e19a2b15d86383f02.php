<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?=$pagetitle?> - Powered by EmpireCMS</title>
<meta name="keywords" content="<?=$pagekey?>" />
<meta name="description" content="<?=$pagedes?>" />
<link href="skin/default/css/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<p><b>信息标题:</b> <?=stripSlashes($r['title'])?><br/>
<b>发布时间:</b> <?=date("Y-m-d H:i:s",$r['newstime'])?><br/>
<b>所 在 地  &nbsp;:</b> <?=$r['myarea']?><br/>
<b>信息内容:</b></p>
<p><?=stripSlashes($r['smalltext'])?><br/></p>
<p><b>联系方式</b><br/>
发 布 者  &nbsp;: <?=$r['username']?><br/>
联系邮箱: <?=$r['email']?><br/>
联系方式: <?=$r['mycontact']?><br/>
联系地址: <?=$r['address']?><br/>
</p>
<p><br/><a href="<?=$listurl?>">返回列表</a> <a href="index.php?style=<?=$wapstyle?>">网站首页</a></p>
</body>
</html>