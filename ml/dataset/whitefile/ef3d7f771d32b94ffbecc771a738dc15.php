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
<p><b>标题:</b><?=stripSlashes($r['title'])?><br/>
<b>作者:</b><?=$r['writer']?><br/>
<b>日期:</b><?=date("Y-m-d H:i:s",$r['newstime'])?><br/>
<b>内容:</b></p>
<p><?=stripSlashes($r['newstext'])?></p>
<p><br/><a href="<?=$listurl?>">返回列表</a> <a href="index.php?style=<?=$wapstyle?>">网站首页</a></p>
</body>
</html>