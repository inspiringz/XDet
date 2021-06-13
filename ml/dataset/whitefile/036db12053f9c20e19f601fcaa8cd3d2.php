<?php
require('../../../class/connect.php');
$editor=3;

//接收参数
function EcmsEditor_PageGetVar($add){
	$r['showmod']=(int)$add['showmod'];
	$r['type']=(int)$add['type'];
	$r['classid']=(int)$add['classid'];
	$r['filepass']=(int)$add['filepass'];
	$r['infoid']=(int)$add['infoid'];
	$r['InstanceName']=ehtmlspecialchars($add['InstanceName']);
	$r['InstanceId']=intval(str_replace('cke_','',$add['InstanceId']));
	return $r;
}

$ecms_topager=array();
$doecmspage=ehtmlspecialchars($_GET['doecmspage']);
$ecms_topager=EcmsEditor_PageGetVar($_GET);

$pagefile='';
if($doecmspage=='TranImg')//上传图片
{
	$pagefile='TranImg.php';
}
elseif($doecmspage=='TranFile')//上传附件
{
	$pagefile='TranFile.php';
}
elseif($doecmspage=='TranFlash')//上传FLASH
{
	$pagefile='TranFlash.php';
}
elseif($doecmspage=='TranMedia')//上传视频
{
	$pagefile='TranMedia.php';
}
else
{
	exit();
}
@include($pagefile);
?>