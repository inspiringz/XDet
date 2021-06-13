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
CheckLevel($logininid,$loginin,$classid,"madmingroup");
$enews=ehtmlspecialchars($_GET['enews']);
$postword='增加';
$url="<a href=ListMAdminGroup.php".$ecms_hashur['whehref'].">管理会员管理组</a>&nbsp;>&nbsp;增加会员管理组";
if($enews=="EditMAdminGroup")
{
	$agid=(int)$_GET['agid'];
	$r=$empire->fetch1("select * from {$dbtbpre}enewsag where agid='$agid'");
	$url="<a href=ListMAdminGroup.php".$ecms_hashur['whehref'].">管理会员管理组</a>&nbsp;>&nbsp;修改会员管理组：<b>".$r['agname']."</b>";
	$postword='修改';
}
db_close();
$empire=null;
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>会员管理组</title>
<link href="../adminstyle/<?=$loginadminstyleid?>/adminstyle.css" rel="stylesheet" type="text/css">
</head>

<body>
<table width="100%" border="0" align="center" cellpadding="3" cellspacing="0">
  <tr> 
    <td height="25">位置： 
      <?=$url?>
    </td>
  </tr>
</table>
<form name="form1" method="post" action="ListMAdminGroup.php">
  <table width="100%" border="0" align="center" cellpadding="3" cellspacing="1" class="tableborder">
  <?=$ecms_hashur['form']?>
    <tr class="header"> 
      <td width="22%" height="25"><?=$postword?>会员管理组</td>
      <td width="78%" height="25"><input name="enews" type="hidden" id="enews" value="<?=$enews?>"> 
        <input name="agid" type="hidden" id="agid" value="<?=$agid?>"></td>
    </tr>
    <tr bgcolor="#FFFFFF"> 
      <td height="25">组名称</td>
      <td height="25"> <input name="agname" type="text" id="agname" value="<?=$r['agname']?>" size="38"></td>
    </tr>
    <tr bgcolor="#FFFFFF"> 
      <td height="25">管理级别</td>
      <td height="25"><select name="isadmin" id="isadmin">
        <option value="1"<?=$r['isadmin']==1?' selected':''?>>实习版主</option>
        <option value="5"<?=$r['isadmin']==5?' selected':''?>>版主</option>
        <option value="9"<?=$r['isadmin']==9?' selected':''?>>管理员</option>
      </select>
        <?php
		if($agid==1||$agid==2)
		{
		?>
		<font color="#FF0000">(内置管理组的级别不能修改)</font>
		<?php
		}
		?>
		</td>
    </tr>
    <tr bgcolor="#FFFFFF"> 
      <td height="25">&nbsp;</td>
      <td height="25"> <input type="submit" name="Submit" value="提交"> <input type="reset" name="Submit2" value="重置"></td>
    </tr>
  </table>
</form>
</body>
</html>
