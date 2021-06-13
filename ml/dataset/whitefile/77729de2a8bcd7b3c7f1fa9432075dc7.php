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
CheckLevel($logininid,$loginin,$classid,"template");


//修改模板ID
function EditTempid($add,$userid,$username){
	global $empire,$dbtbpre;
	$gid=(int)$add['gid'];
	$tempid=(int)$add['tempid'];
	$newtempid=(int)$add['newtempid'];
	$redo=(int)$add['redo'];
	$tempno=(int)$add['tempno'];
	$temptb=eTnoGetTempTbname($tempno);
	if(!$gid||!$tempid||!$newtempid||!$temptb)
	{
		printerror("EmptyEditTempid","history.go(-1)");
    }
	//验证权限
	CheckLevel($userid,$username,$classid,"template");
	$temptbname=GetDoTemptb($temptb,$gid);
	if($tempno==7)
	{
		$tempidf='varid';
		$tempnamef='myvar';
	}
	else
	{
		$tempidf='tempid';
		$tempnamef='tempname';
	}
	$r=$empire->fetch1("select ".$tempnamef.",".$tempidf." from ".$temptbname." where ".$tempidf."='$tempid'");
	if(!$r[$tempidf])
	{
		printerror("EmptyEditTempid","history.go(-1)");
    }
	$newr=$empire->fetch1("select ".$tempnamef.",".$tempidf." from ".$temptbname." where ".$tempidf."='$newtempid'");
	//ID已存在
	$lastid=0;
	if($newr[$tempidf])
	{
		$lastr=$empire->fetch1("select ".$tempnamef.",".$tempidf." from ".$temptbname." order by ".$tempidf." desc limit 1");
		$lastid=$lastr[$tempidf]+1;
		$empire->query("update ".$temptbname." set ".$tempidf."='$lastid' where ".$tempidf."='$newtempid'");
	}
	$sql=$empire->query("update ".$temptbname." set ".$tempidf."='$newtempid' where ".$tempidf."='$tempid'");
	//对换
	if($newr[$tempidf]&&$redo==1&&$lastid)
	{
		$empire->query("update ".$temptbname." set ".$tempidf."='$tempid' where ".$tempidf."='$lastid'");
	}
	if($sql)
	{
		//操作日志
		insert_dolog("tb=$temptb&tempid=$tempid&tempname=".$r[$tempnamef]."&gid=$gid&newtempid=$newtempid&redo=$redo");
		printerror("EditTempidSuccess",EcmsGetReturnUrl());
	}
	else
	{
		printerror("DbError","history.go(-1)");
	}
}

//操作
$enews=$_POST['enews'];
if(empty($enews))
{$enews=$_GET['enews'];}
if($enews)
{
	hCheckEcmsRHash();
}
//修改模板ID
if($enews=="EditTempid")
{
	EditTempid($_POST,$logininid,$loginin);
}

$gid=(int)$_GET['gid'];
$tempid=(int)$_GET['tempid'];
$tempno=(int)$_GET['tempno'];
$tgtemps='';
$tgsql=$empire->query("select gid,gname,isdefault from {$dbtbpre}enewstempgroup order by gid");
while($tgr=$empire->fetch($tgsql))
{
	$selected='';
	if($tgr['gid']==$gid)
	{
		$selected=' selected';
	}
	$tgtemps.="<option value='".$tgr['gid']."'".$selected.">".$tgr['gname']."</option>";
}

db_close();
$empire=null;
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>修改模板ID</title>
<link href="../adminstyle/<?=$loginadminstyleid?>/adminstyle.css" rel="stylesheet" type="text/css">
<SCRIPT lanuage="JScript">
<!--
function tempturnit(ss)
{
 if (ss.style.display=="") 
  ss.style.display="none";
 else
  ss.style.display=""; 
}
-->
</SCRIPT>
<script>
function ReTempBak(){
	self.location.reload();
}

function eCheckForm(obj){
	var ok;
	if(obj.gid.value==0)
	{
		alert('请选择模板组');
		obj.gid.focus();
		return false;
	}
	if(obj.tempno.value==0)
	{
		alert('请选择模板');
		obj.tempno.focus();
		return false;
	}
	if(obj.tempid.value==0)
	{
		alert('请填写原模板ID');
		obj.tempid.focus();
		return false;
	}
	if(obj.newtempid.value==0)
	{
		alert('请填写新模板ID');
		obj.newtempid.focus();
		return false;
	}
	ok=confirm("确认要修改?");
	if(ok)
	{
		return true;
	}
	else
	{
		return false;
	}
}
</script>
</head>

<body>
<table width="98%" border="0" align="center" cellpadding="3" cellspacing="1">
  <tr>
    <td height="25">位置：修改模板ID</td>
  </tr>
</table>
<br>
  <table width="98%" border="0" align="center" cellpadding="3" cellspacing="1" class="tableborder">
  <form name="form1" id="form1" method="post" action="EditTempid.php" onsubmit="return eCheckForm(document.form1);">
  <?=$ecms_hashur['form']?>
    <tr class="header"> 
      <td height="25" colspan="2">修改模板ID 
        <input name="enews" type="hidden" id="enews" value="EditTempid">  
         </td>
    </tr>
    <tr bgcolor="#FFFFFF"> 
      <td width="19%" height="25">模板组</td>
      <td width="81%" height="25"><select name="gid" id="gid">
        <option value="0">----------- 选择模板组 -----------</option>
		<?=$tgtemps?>
      </select>
      </td>
    </tr>
    <tr bgcolor="#FFFFFF">
      <td height="25">模板表</td>
      <td height="25">
	  <select name="tempno">
  <option value="0">------------ 选择模板 ------------</option>
  <option value="1"<?=$tempno==1?' selected':''?>>标签模板(enewsbqtemp)</option>
  <option value="2"<?=$tempno==2?' selected':''?>>JS模板(enewsjstemp)</option>
  <option value="3"<?=$tempno==3?' selected':''?>>列表模板(enewslisttemp)</option>
  <option value="4"<?=$tempno==4?' selected':''?>>内容模板(enewsnewstemp)</option>
  <option value="6"<?=$tempno==6?' selected':''?>>搜索模板(enewssearchtemp)</option>
  <option value="7"<?=$tempno==7?' selected':''?>>公共模板变量(enewstempvar)</option>
  <option value="8"<?=$tempno==8?' selected':''?>>投票模板(enewsvotetemp)</option>
  <option value="9"<?=$tempno==9?' selected':''?>>封面模板(enewsclasstemp)</option>
  <option value="10"<?=$tempno==10?' selected':''?>>评论模板(enewspltemp)</option>
  <option value="11"<?=$tempno==11?' selected':''?>>打印模板(enewsprinttemp)</option>
  <option value="12"<?=$tempno==12?' selected':''?>>自定义页面模板(enewspagetemp)</option>
</select>
	  </td>
    </tr>
    <tr bgcolor="#FFFFFF">
      <td height="25">原模板ID</td>
      <td height="25"><input name="tempid" type="text" id="tempid" value="<?=$tempid?>" size="38"></td>
    </tr>
    <tr bgcolor="#FFFFFF">
      <td height="25">新模板ID</td>
      <td height="25"><input name="newtempid" type="text" id="newtempid" value="<?=$newtempid?>" size="38"></td>
    </tr>
    <tr bgcolor="#FFFFFF">
      <td height="25">新模板ID存在处理</td>
      <td height="25"><input name="redo" type="radio" value="0" checked>
      将模板ID转为最新ID
          <input type="radio" name="redo" value="1">模板ID相互替换</td>
    </tr>
    
    <tr bgcolor="#FFFFFF"> 
      <td height="25">&nbsp;</td>
      <td height="25"><input type="submit" name="Submit" value="提交"> <input type="reset" name="Submit2" value="重置">
      </td>
    </tr>
	</form>
  </table>
</body>
</html>
