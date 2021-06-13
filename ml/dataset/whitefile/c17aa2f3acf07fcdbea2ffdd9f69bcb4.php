<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>提示信息 - Powered by EmpireCMS</title>
<meta name="keywords" content="提示信息" />
<meta name="description" content="提示信息" />
<link href="skin/default/css/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<p><?php echo $error;?><br /><a href="<?php echo $returnurl;?>">返回</a></p>
</body>
</html>