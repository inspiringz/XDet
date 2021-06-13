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
CheckLevel($logininid,$loginin,$classid,"viewgroup");
$enews=ehtmlspecialchars($_GET['enews']);
$postword='增加';
$vgid=0;
$r=array();
$url="<a href='ListViewGroup.php".$ecms_hashur['whehref']."'>管理会员访问组</a>&nbsp;->&nbsp;增加会员访问组";
if($enews=="EditViewGroup")
{
	$vgid=(int)$_GET['vgid'];
	$postword='修改';
	$r=$empire->fetch1("select * from {$dbtbpre}enewsvg where vgid='$vgid'");
	$url="<a href='ListViewGroup.php".$ecms_hashur['whehref']."'>管理会员访问组</a>&nbsp;->&nbsp;修改会员访问组：<b>".$r[gname]."</b>";
}
//会员组
$i=0;
$membergroup='';
$mgsql=$empire->query("select groupid,groupname from {$dbtbpre}enewsmembergroup order by level");
while($level_r=$empire->fetch($mgsql))
{
	$i++;
	$br='';
	if($i%6==0)
	{
		$br='<br>';
	}
	if(strstr($r['gids'],','.$level_r['groupid'].','))
	{$checked=" checked";}
	else
	{$checked="";}
	$membergroup.="<input type='checkbox' name='membergroup[]' value='$level_r[groupid]'".$checked.">".$level_r[groupname]."&nbsp;".$br;
}
//内部组
$i=0;
$ingroup='';
$minsql=$empire->query("select gid,gname from {$dbtbpre}enewsingroup order by myorder");
while($min_r=$empire->fetch($minsql))
{
	$i++;
	$br='';
	if($i%6==0)
	{
		$br='<br>';
	}
	if(strstr($r['ingids'],','.$min_r['gid'].','))
	{$checked=" checked";}
	else
	{$checked="";}
	$ingroup.="<input type='checkbox' name='ingroup[]' value='$min_r[gid]'".$checked.">".$min_r[gname]."&nbsp;".$br;
}
//管理组
$i=0;
$madmingroup='';
$agsql=$empire->query("select agid,agname from {$dbtbpre}enewsag order by isadmin");
while($ag_r=$empire->fetch($agsql))
{
	$i++;
	$br='';
	if($i%6==0)
	{
		$br='<br>';
	}
	if(strstr($r['agids'],','.$ag_r['agid'].','))
	{$checked=" checked";}
	else
	{$checked="";}
	$madmingroup.="<input type='checkbox' name='madmingroup[]' value='$ag_r[agid]'".$checked.">".$ag_r[agname]."&nbsp;".$br;
}
db_close();
$empire=null;
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>会员访问组</title>
<link href="../adminstyle/<?=$loginadminstyleid?>/adminstyle.css" rel="stylesheet" type="text/css">
</head>

<body>
<table width="100%" border="0" align="center" cellpadding="3" cellspacing="0">
  <tr>
    <td height="25">位置：<?=$url?></td>
  </tr>
</table>
<form name="form1" method="post" action="ListViewGroup.php">
  <table width="100%" border="0" align="center" cellpadding="3" cellspacing="1" class="tableborder">
  <?=$ecms_hashur['form']?>
    <tr class="header"> 
      <td width="20%" height="25"><?=$postword?>会员访问组</td>
      <td width="80%" height="25"><input name="enews" type="hidden" id="enews" value="<?=$enews?>"> 
        <input name="vgid" type="hidden" id="vgid" value="<?=$vgid?>"></td>
    </tr>
    <tr bgcolor="#FFFFFF"> 
      <td height="25">组名称</td>
      <td height="25"> <input name="gname" type="text" id="gname" value="<?=$r[gname]?>" size="30">      </td>
    </tr>
    <tr bgcolor="#FFFFFF"> 
      <td height="25">允许会员组</td>
      <td height="25"><?=$membergroup?></td>
    </tr>
    <tr bgcolor="#FFFFFF">
      <td height="25">允许会员内部组</td>
      <td height="25"><?=$ingroup?></td>
    </tr>
    <tr bgcolor="#FFFFFF">
      <td height="25">允许会员管理组</td>
      <td height="25"><?=$madmingroup?></td>
    </tr>
    <tr bgcolor="#FFFFFF"> 
      <td height="25">&nbsp;</td>
      <td height="25"> <input type="submit" name="Submit" value="提交"> <input type="reset" name="Submit2" value="重置"></td>
    </tr>
  </table>
</form>
</body>
</html>
