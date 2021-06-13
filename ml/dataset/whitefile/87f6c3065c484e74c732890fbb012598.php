<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?=$pagetitle?> - Powered by EmpireCMS</title>
<meta name="keywords" content="<?=$pagekey?>" />
<meta name="description" content="<?=$pagedes?>" />
<link href="skin/default/css/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<p><b>列表:</b><?=$pagetitle?></p>
<p>
<?php
while($r=$empire->fetch($sql))
{
	$titleurl="show.php?classid=".$r[classid]."&amp;id=".$r[id]."&amp;style=".$wapstyle."&amp;bclassid=".$bclassid."&amp;cid=".$classid."&amp;cpage=".$page;
	$r['title']=stripSlashes($r['title']);
	//截取字数
	if($pr['wapsubtitle'])
	{
		$r[title]=sub($r[title],0,$pr['wapsubtitle'],false);
	}
	//时间格式
	$r[newstime]=date($pr['wapshowdate'],$r[newstime]);
?>
<a href="<?=$titleurl?>"><?=$r['title']?></a> <small>(<?=$r[newstime]?>)</small><br />
<?php
}
?>
</p>
<?php
if($returnpage)
{
?>
<p><?=$returnpage?><br /></p>
<?php
}
?>
<p><a href="index.php?style=<?=$wapstyle?>&amp;bclassid=<?=$bclassid?>">返回</a> <a href="index.php?style=<?=$wapstyle?>">网站首页</a></p>
</body>
</html>