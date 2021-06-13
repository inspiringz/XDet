<?php
define('EmpireCMSAdmin','1');
require("../../class/connect.php");
require("../../class/db_sql.php");
require("../../class/functions.php");
require("../../member/class/user.php");
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
CheckLevel($logininid,$loginin,$classid,"madmingroup");
$agid=(int)$_GET['agid'];
if(!$agid)
{
	printerror("ErrorUrl","history.go(-1)");
}
$r=$empire->fetch1("select * from {$dbtbpre}enewsag where agid='$agid'");
if(!$r['agid'])
{
	printerror("ErrorUrl","history.go(-1)");
}
if($r['isadmin']==9)
{
	$isadminname='管理员';
}
elseif($r['isadmin']==5)
{
	$isadminname='版主';
}
elseif($r['isadmin']==1)
{
	$isadminname='实习版主';
}
else
{
	$isadminname='';
}
$url="<a href=ListMAdminGroup.php".$ecms_hashur['whehref'].">管理会员管理组</a>&nbsp;>&nbsp;管理组：".$r['agname']."&nbsp;>&nbsp;<a href='ListMAgUser.php?agid=$agid".$ecms_hashur['ehref']."'>[".$isadminname."]成员列表</a>";
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>会员管理组 - 成员列表</title>
<link href="../adminstyle/<?=$loginadminstyleid?>/adminstyle.css" rel="stylesheet" type="text/css">
</head>

<body>
<table width="100%" border="0" align="center" cellpadding="3" cellspacing="0">
  <tr> 
    <td width="50%">位置： 
      <?=$url?>
    </td>
    <td><div align="right" class="emenubutton"></div></td>
  </tr>
</table>
<br>
<form name="form1" method="post" action="ListMAdminGroup.php" onsubmit="return confirm('确认要增加管理员？');">
  <table width="800" border="0" align="center" cellpadding="3" cellspacing="1" class="tableborder">
  <?=$ecms_hashur['form']?>
    <tr class="header">
      <td height="25" colspan="3">增加会员管理员: 
        <input name=enews type=hidden id="enews" value=AddMAgUser>      <input name="agid" type="hidden" id="agid" value="<?=$agid?>"></td>
    </tr>
    <tr>
      <td width="223" height="25" bgcolor="#FFFFFF"><div align="center">用户ID</div></td>
      <td width="421" bgcolor="#FFFFFF"><div align="center">用户名</div></td>
      <td width="134" bgcolor="#FFFFFF"><div align="center">操作</div></td>
    </tr>
    <tr> 
      <td height="25" bgcolor="#FFFFFF"><div align="center">
        <input name="adduserid" type="text" id="adduserid">
      </div></td>
      <td height="25" bgcolor="#FFFFFF"><div align="center">
        <input name="addusername" type="text" id="addusername" size="36">
      </div></td>
      <td height="25" bgcolor="#FFFFFF"><div align="center">
        <input type="submit" name="Submit" value="增加">
      </div></td>
    </tr>
  </table>
</form>
<table width="800" border="0" align="center" cellpadding="3" cellspacing="1" class="tableborder">
  <tr class="header"> 
    <td width="223" height="25"> <div align="center">用户ID</div></td>
    <td width="421" height="25"> <div align="center">用户名</div></td>
    <td width="134" height="25"> <div align="center">操作</div></td>
  </tr>
  <?
  $amr=explode(',',$r['auids']);
  $mcount=count($amr)-1;
  for($mi=1;$mi<$mcount;$mi++)
  {
  	$auserid=(int)$amr[$mi];
	$member_r=$empire->fetch1("select ".eReturnSelectMemberF('username')." from ".eReturnMemberTable()." where ".egetmf('userid')."='$auserid'");
  ?>
  <tr bgcolor="#FFFFFF" onmouseout="this.style.backgroundColor='#ffffff'" onmouseover="this.style.backgroundColor='#C3EFFF'"> 
    <td height="25"> <div align="center"> 
        <?=$auserid?>
      </div></td>
    <td height="25"> <div align="center"> 
        <?=$member_r['username']?>
      </div></td>
    <td height="25"> <div align="center">[<a href="ListMAdminGroup.php?enews=DelMAgUser&agid=<?=$agid?>&adduserid=<?=$auserid?><?=$ecms_hashur['href']?>" onclick="return confirm('确认要删除此管理员？');">删除</a>]</div></td>
  </tr>
  <?
  }
  db_close();
  $empire=null;
  ?>
  <tr bgcolor="#FFFFFF"> 
    <td height="25" colspan="3"><font color="#666666">说明：增加版主后，然后再到各个栏目增加可管理的栏目。</font></td>
  </tr>
</table>
</body>
</html>
