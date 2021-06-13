<?php
define('EmpireCMSAdmin','1');
require('../../class/connect.php');
require('../../class/db_sql.php');
require('../../class/functions.php');
require("../../data/dbcache/class.php");
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
CheckLevel($logininid,$loginin,$classid,"class");
$ttype=(int)$_GET['ttype'];
$ttypetitle=$ttype==0?'推荐':'头条';
$enews=RepPostStr($_GET['enews'],1);
$url="<a href='ListGoodType.php?ttype=".$ttype.$ecms_hashur['ehref']."'>管理".$ttypetitle."级别</a>&nbsp;>&nbsp;增加".$ttypetitle."级别";
$postword="增加".$ttypetitle."级别";
$docopy=ehtmlspecialchars($_GET['docopy']);
//初使化数据
$tid=0;
$r[myorder]=0;
$r[levelid]=1;
$r[showall]=0;
$ecmsfirstpost=1;
//复制
if($docopy)
{
	$tid=(int)$_GET['tid'];
	$r=$empire->fetch1("select * from {$dbtbpre}enewsgoodtype where tid='$tid'");
	$url="<a href='ListGoodType.php?ttype=".$ttype.$ecms_hashur['ehref']."'>管理".$ttypetitle."级别</a>&nbsp;>&nbsp;复制".$ttypetitle."级别：".$r['tname'];
	$r['tname'].='(1)';
}
//修改
if($enews=="EditGoodType")
{
	$ecmsfirstpost=0;
	$tid=(int)$_GET['tid'];
	$r=$empire->fetch1("select * from {$dbtbpre}enewsgoodtype where tid='$tid'");
	$url="<a href='ListGoodType.php?ttype=".$ttype.$ecms_hashur['ehref']."'>管理".$ttypetitle."级别</a>&nbsp;>&nbsp;修改".$ttypetitle."级别：".$r['tname'];
	$postword="修改".$ttypetitle."级别";
}
if($ecmsfirstpost==1)
{
	$maxr=$empire->fetch1("select levelid from {$dbtbpre}enewsgoodtype where ttype='$ttype' order by levelid desc limit 1");
	$r['levelid']=$maxr['levelid']+1;
}
//用户组
$group='';
$groupsql=$empire->query("select groupid,groupname from {$dbtbpre}enewsgroup order by groupid");
while($groupr=$empire->fetch($groupsql))
{
	$select='';
	if(strstr($r[groupid],','.$groupr[groupid].','))
	{
		$select=' selected';
	}
	$group.="<option value='".$groupr[groupid]."'".$select.">".$groupr[groupname]."</option>";
}
//当前使用的模板组
$thegid=GetDoTempGid();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title><?=$ttypetitle?>级别</title>
<link href="../adminstyle/<?=$loginadminstyleid?>/adminstyle.css" rel="stylesheet" type="text/css">
<script>
function selectalls(doselect,formvar)
{  
	 var bool=doselect==1?true:false;
	 var selectform=document.getElementById(formvar);
	 for(var i=0;i<selectform.length;i++)
	 { 
		  selectform.all[i].selected=bool;
	 } 
}
</script>

</head>

<body>
<table width="100%" border="0" align="center" cellpadding="3" cellspacing="1">
  <tr>
    <td>位置： 
      <?=$url?>
    </td>
  </tr>
</table>
<br>
  
<table width="100%" border="0" align="center" cellpadding="3" cellspacing="1" class="tableborder">
  <form name="form1" method="post" action="ListGoodType.php">
  <?=$ecms_hashur['form']?>
    <tr class="header"> 
      <td height="25" colspan="2"> 
        <?=$postword?>
        <input type=hidden name=enews value="<?=$enews?>"> <input name="tid" type="hidden" id="tid" value="<?=$tid?>">
        <input name="ttype" type="hidden" id="ttype" value="<?=$ttype?>"></td>
    </tr>
    
    <tr>
      <td height="25" bgcolor="#FFFFFF"><?=$ttypetitle?>级别</td>
      <td bgcolor="#FFFFFF"><input name="levelid" type="text" id="levelid" value="<?=$r[levelid]?>" size="38">
        <font color="#666666">(填1~255之间数字)</font></td>
    </tr>
    <tr> 
      <td width="24%" height="25" bgcolor="#FFFFFF">级别名称</td>
      <td width="76%" bgcolor="#FFFFFF"> <input name="tname" type="text" id="tname" value="<?=$r[tname]?>" size="38"></td>
    </tr>
    <tr> 
      <td height="25" bgcolor="#FFFFFF">排序</td>
      <td bgcolor="#FFFFFF"><input name="myorder" type="text" id="myorder" value="<?=$r[myorder]?>" size="38"> 
        <font color="#666666"> (值越大显示越前面)</font></td>
    </tr>
    <tr>
      <td height="25" valign="top" bgcolor="#FFFFFF">可选择的用户组<br>
        <br>
          <font color="#666666">(不选为不限，<br>
          选择多个用CTRL/SHIFT)</font></td>
      <td bgcolor="#FFFFFF"><select name="groupid[]" size="8" multiple id="groupidselect" style="width:180">
        <?=$group?>
            </select>
[<a href="#empirecms" onclick="selectalls(0,'groupidselect')">全部取消</a>]</td>
    </tr>
    <tr>
      <td height="25" bgcolor="#FFFFFF">在管理所有信息页显示</td>
      <td bgcolor="#FFFFFF"><input type="radio" name="showall" value="0"<?=$r['showall']==0?' checked':''?>>
        是
          <input type="radio" name="showall" value="1"<?=$r['showall']==1?' checked':''?>>
        否</td>
    </tr>
    <tr>
      <td height="25" bgcolor="#FFFFFF">只在这些终极栏目显示</td>
      <td bgcolor="#FFFFFF"><input name="showcid" type="text" id="showcid" value="<?=substr($r['showcid'],1,-1)?>" size="38">
      <input type="button" name="Submit622232" value="管理栏目" onclick="window.open('../ListClass.php<?=$ecms_hashur['whehref']?>');">
      <font color="#666666">(多个栏目ID用半角逗号“,”隔开)</font></td>
    </tr>
    <tr>
      <td height="25" bgcolor="#FFFFFF">不在这些终极栏目显示</td>
      <td bgcolor="#FFFFFF"><input name="hiddencid" type="text" id="hiddencid" value="<?=substr($r['hiddencid'],1,-1)?>" size="38">
      <font color="#666666">(填写终极栏目ID，多个栏目ID用半角逗号“,”隔开)</font></td>
    </tr>
    <tr> 
      <td height="25" bgcolor="#FFFFFF"> <div align="center"></div></td>
      <td bgcolor="#FFFFFF"> <input type="submit" name="Submit" value="提交"> &nbsp;&nbsp; 
        <input type="reset" name="Submit2" value="重置"> </td>
    </tr>
  </form>
</table>
</body>
</html>
<?php
db_close();
$empire=null;
?>