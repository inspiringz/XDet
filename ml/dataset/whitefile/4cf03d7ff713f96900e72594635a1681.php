<?php
define('EmpireCMSAdmin','1');
require("../../class/connect.php");
require("../../class/db_sql.php");
require("../../class/functions.php");
$link=db_connect();
$empire=new mysqlquery();
$editor=1;
//验证用户
$lur=is_login();
$logininid=$lur['userid'];
$loginin=$lur['username'];
$loginrnd=$lur['rnd'];
$loginlevel=$lur['groupid'];
$loginadminstyleid=$lur['adminstyleid'];
//ehash
$ecms_hashur=hReturnEcmsHashStrAll();
//验证权限
CheckLevel($logininid,$loginin,$classid,"public");

//设置DIGG参数
function eSetDigg($add,$userid,$username){
	global $empire,$dbtbpre;
	CheckLevel($userid,$username,$classid,"public");//验证权限
	$add['digglevel']=(int)$add['digglevel'];
	$diggcmids=eReturnSetGroups($add['cmid']);
	$diggcmids=hRepPostStr($diggcmids,1);
	
	$sql=$empire->query("update {$dbtbpre}enewspublicadd set digglevel='$add[digglevel]',diggcmids='$diggcmids' limit 1");
	if($sql)
	{
		GetConfig();
		//操作日志
		insert_dolog("");
		printerror("SetDiggSuccess","SetDigg.php".hReturnEcmsHashStrHref2(1));
	}
	else
	{printerror("DbError","history.go(-1)");}
}

//清空DIGG记录
function eClearDiggRecord($add,$userid,$username){
	global $empire,$dbtbpre,$ecms_config,$public_r;
	//DIGG记录表
	$empire->query("TRUNCATE `{$dbtbpre}enewsdiggips`;");
	//操作日志
	insert_dolog("");
	printerror("ClearDiggRecordSuccess",EcmsGetReturnUrl());
}


$enews=$_POST['enews'];
if(empty($enews))
{$enews=$_GET['enews'];}
if($enews)
{
	hCheckEcmsRHash();
}
if($enews=="SetDigg")//设置参数
{
	eSetDigg($_POST,$logininid,$loginin);
}
elseif($enews=="ClearDiggRecord")//清空记录
{
	@set_time_limit(1000);
	eClearDiggRecord($_GET,$logininid,$loginin);
}
else
{}

$r=$empire->fetch1("select * from {$dbtbpre}enewspublicadd limit 1");

//系统模型
$mids='';
$i=0;
$modsql=$empire->query("select mid,mname from {$dbtbpre}enewsmod order by myorder,mid");
while($modr=$empire->fetch($modsql))
{
	$i++;
	if($i%4==0)
	{
		$br="<br>";
	}
	else
	{
		$br="";
	}
	$select='';
	if(strstr($r['diggcmids'],','.$modr['mid'].','))
	{
		$select=' checked';
	}
	$mids.="<input type=checkbox name=cmid[] value='$modr[mid]'".$select.">$modr[mname]&nbsp;&nbsp;".$br;
}


db_close();
$empire=null;
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>DIGG顶参数设置</title>
<link href="../adminstyle/<?=$loginadminstyleid?>/adminstyle.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="../ecmseditor/js/jstime/WdatePicker.js"></script>
</head>

<body>
<table width="100%" border="0" align="center" cellpadding="3" cellspacing="1">
  <tr>
    <td><p>位置：<a href="SetDigg.php<?=$ecms_hashur['whehref']?>">DIGG顶参数设置</a></p>
    </td>
  </tr>
</table>
<form name="setpublic" method="post" action="SetDigg.php" onsubmit="return confirm('确认设置?');">
  <table width="100%" border="0" align="center" cellpadding="3" cellspacing="1" class="tableborder">
  <?=$ecms_hashur['form']?>
    <tr class="header"> 
      <td height="25" colspan="2">DIGG顶参数设置 
        <input name="enews" type="hidden" value="SetDigg"></td>
    </tr>
	<tr bgcolor="#FFFFFF">
      <td width="18%" height="25">重复顶限制</td>
      <td width="82%"><select name="digglevel" id="digglevel">
        <option value="0"<?=$r['digglevel']==0?' selected':''?>>不限制 (可一直重复顶)</option>
        <option value="1"<?=$r['digglevel']==1?' selected':''?>>COOKIE验证 (同一浏览器COOKIE进行只能顶一次)</option>
        <option value="2"<?=$r['digglevel']==2?' selected':''?>>IP验证 (同一IP只能顶一次)</option>
        <option value="3"<?=$r['digglevel']==3?' selected':''?>>会员验证 (每个会员只能顶一次)</option>
      </select>
        &nbsp;(<strong><a href="SetDigg.php?enews=ClearDiggRecord<?=$ecms_hashur['href']?>" onclick="return confirm('确认要清空验证记录？');"><u>点击这里</u></a></strong>清空验证记录，可以让重新顶)</td>
    </tr>
    <tr bgcolor="#FFFFFF">
      <td height="25">关闭顶的系统模型</td>
      <td><?=$mids?></td>
    </tr>
    <tr bgcolor="#FFFFFF"> 
      <td height="25">&nbsp;</td>
      <td height="25"><input type="submit" name="Submit" value="提交"> <input type="reset" name="Submit2" value="重置"></td>
    </tr>
    <tr bgcolor="#FFFFFF">
      <td height="25" colspan="2"><font color="#666666">说明：<br>
      要让系统模型支持顶功能，需要往模型表增加字段名为“diggtop”、类型为INT的字段；<br>
      要让系统模型支持踩功能，需要往模型表增加字段名为“diggdown”、类型为INT的字段。</font>      </td>
    </tr>
  </table>
</form>
</body>
</html>
