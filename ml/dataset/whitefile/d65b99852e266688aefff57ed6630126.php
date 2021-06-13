<?php
define('EmpireCMSAdmin','1');
require('../../../class/connect.php');
require('../../../class/db_sql.php');
require('../../../class/functions.php');
$link=db_connect();
$empire=new mysqlquery();
$editor=2;
//验证用户
$lur=is_login();
$logininid=$lur['userid'];
$loginin=$lur['username'];
$loginrnd=$lur['rnd'];
$loginlevel=$lur['groupid'];
$loginadminstyleid=$lur['adminstyleid'];
//ehash
$ecms_hashur=hReturnEcmsHashStrAll();

//接收参数
function EcmsEditor_PageGetVar($add){
	$r['showmod']=(int)$add['showmod'];
	$r['type']=(int)$add['type'];
	$r['classid']=(int)$add['classid'];
	$r['filepass']=(int)$add['filepass'];
	$r['infoid']=(int)$add['infoid'];
	$r['modtype']=(int)$add['modtype'];
	$r['sinfo']=(int)$add['sinfo'];
	$r['doing']=ehtmlspecialchars($add['doing']);
	$r['fileno']=ehtmlspecialchars($add['fileno']);
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
elseif($doecmspage=='TranMore')//上传多图
{
	$pagefile='TranMore.php';
}
else
{
	exit();
}
@include($pagefile);
?>