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
CheckLevel($logininid,$loginin,$classid,"member");

include("../../member/class/user.php");
include "../".LoadLang("pub/fun.php");
include("../../data/dbcache/MemberLevel.php");
$page=(int)$_GET['page'];
$page=RepPIntvar($page);
$start=0;
$line=15;//每页显示条数
$page_line=12;//每页显示链接数

//搜索
$search='';
$search.=$ecms_hashur['ehref'];
//自定义每页数量
$showline=(int)$_GET['showline'];
if($showline)
{
	if($showline<10||$showline>100)
	{
		$line=15;
	}
	else
	{
		$line=$showline;
		$search.='&showline='.$showline;
	}
}
$offset=$page*$line;//总偏移量

$and='';
if($_GET['sear'])
{
	$keyboard=RepPostVar2($_GET['keyboard']);
	if($keyboard)
	{
		$show=RepPostStr($_GET['show'],1);
		if($show==1)//用户ID
		{
			$and.=" where userid='$keyboard'";	
		}
		elseif($show==2)//注册IP
		{
			$and.=" where regip like '%$keyboard%'";
		}
		elseif($show==3)//最后登录IP
		{
			$and.=" where lastip like '%$keyboard%'";
		}
		elseif($show==4)//空间名称
		{
			$and.=" where spacename like '%$keyboard%'";
		}
		elseif($show==5)//空间公告
		{
			$and.=" where spacegg like '%$keyboard%'";
		}
		elseif($show==6)//手机
		{
			$and.=" where phone like '%$keyboard%'";
		}
		elseif($show==7)//姓名
		{
			$and.=" where truename like '%$keyboard%'";
		}
		elseif($show==8)//公司名
		{
			$and.=" where company like '%$keyboard%'";
		}
		elseif($show==9)//联系地址
		{
			$and.=" where address like '%$keyboard%'";
		}
		$search.="&sear=1&keyboard=".urlencode($keyboard)."&show=$show";
	}
}
$query="select * from {$dbtbpre}enewsmemberadd".$and;
$totalquery="select count(*) as total from {$dbtbpre}enewsmemberadd".$and;
$num=$empire->gettotal($totalquery);//取得总条数
$query=$query." order by userid desc limit $offset,$line";
$sql=$empire->query($query);
$returnpage=page2($num,$line,$page_line,$start,$page,$search);
$url="<a href=ListMemberMore.php".$ecms_hashur['whehref'].">管理会员(详细)</a>";

//----------内部组
$ingroup='';
$chingroup='';
$inmsql=$empire->query("select * from {$dbtbpre}enewsingroup order by myorder");
while($inm_r=$empire->fetch($inmsql))
{
	if($ingid==$inm_r['gid'])
	{$select=" selected";}
	else
	{$select="";}
	$ingroup.="<option value=".$inm_r['gid'].$select.">".$inm_r['gname']."</option>";
	$chingroup.="<option value=".$inm_r['gid'].">".$inm_r['gname']."</option>";
}

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>管理会员(详细)</title>
<link href="../adminstyle/<?=$loginadminstyleid?>/adminstyle.css" rel="stylesheet" type="text/css">
<script>
function CheckAll(form)
  {
  for (var i=0;i<form.elements.length;i++)
    {
    var e = form.elements[i];
    if (e.name != 'chkall')
       e.checked = form.chkall.checked;
    }
  }
</script>
</head>

<body>
<table width="100%" border="0" align="center" cellpadding="3" cellspacing="1">
  <tr> 
    <td width="50%">位置: 
      <?=$url?>
    </td>
    <td><div align="right"> </div></td>
  </tr>
</table>
<table width="100%" border="0" align="center" cellpadding="3" cellspacing="1">
<form name="searchm" method="get" action="ListMemberMore.php">
<?=$ecms_hashur['eform']?>
  <tr>
    <td><div align="center">搜索：
          <input name="keyboard" type="text" id="keyboard" value="<?=$keyboard?>">
          <select name="show" id="show">
            <option value="1"<?=$show==1?' selected':''?>>用户ID</option>
			<option value="2"<?=$show==2?' selected':''?>>注册IP</option>
			<option value="3"<?=$show==3?' selected':''?>>最后登录IP</option>
			<option value="4"<?=$show==4?' selected':''?>>空间名称</option>
			<option value="5"<?=$show==5?' selected':''?>>空间公告</option>
			<option value="6"<?=$show==6?' selected':''?>>手机</option>
			<option value="7"<?=$show==7?' selected':''?>>姓名</option>
			<option value="8"<?=$show==8?' selected':''?>>公司名</option>
			<option value="9"<?=$show==9?' selected':''?>>联系地址</option>
          </select>
          每页显示
          <input name="showline" type="text" id="showline" value="<?=$line?>" size="5">
          <input type="submit" name="Submit" value="搜索">
          <input name="sear" type="hidden" id="sear" value="1">
        </div></td>
  </tr>
</form>
</table>
<form name="memberform" method=post action=ListMember.php onsubmit="return confirm('确认要执行操作?');">
<?=$ecms_hashur['form']?>
<?
while($r=$empire->fetch($sql))
{
	$ur=$empire->fetch1("select ".eReturnSelectMemberF('username,email,groupid,userfen,money,userdate,zgroupid,checked,registertime,ingid,agid,isern')." from ".eReturnMemberTable()." where ".egetmf('userid')."='$r[userid]'");
	$username=$ur['username'];
	if(empty($ur['checked']))
	{
		$checked=" title='未审核' style='background:#99C4E3'";
		$namefont1="<font color='gray'>";
		$namefont2="</font>";
		$checkedtitle=' (<font color=red>未审核</font>)';
	}
	else
	{
		$checked="";
		$namefont1="";
		$namefont2="";
		$checkedtitle=' (已审核)';
	}
	if(empty($ur['isern']))
	{
		$isernstatus=' <没有实名>';
		$isernstatus2=' (<font color=red>没有实名</font>)';
	}
	else
	{
		$isernstatus=' <已实名>';
		$isernstatus2=' (已实名)';
	}
	//管理组
	$magname='';
	$magadminname='';
	if($ur['agid'])
	{
		$magname=$aglevel_r[$ur['agid']]['agname'];
		if($magname)
		{
			if($aglevel_r[$ur['agid']]['isadmin']==9)
			{
				$magadminname='管理员 ('.$aglevel_r[$ur['agid']]['isadmin'].')';
			}
			elseif($aglevel_r[$ur['agid']]['isadmin']==5)
			{
				$magadminname='版主 ('.$aglevel_r[$ur['agid']]['isadmin'].')';
			}
			elseif($aglevel_r[$ur['agid']]['isadmin']==1)
			{
				$magadminname='实习版主 ('.$aglevel_r[$ur['agid']]['isadmin'].')';
			}
			else
			{
				$magadminname='('.$aglevel_r[$ur['agid']]['isadmin'].')';
			}
		}
	}
	//内部组
	$migname='';
	if($ur['ingid'])
	{
		$migname=$iglevel_r[$ur['ingid']]['gname'];
	}
?>
  <table width="100%" border="0" align="center" cellpadding="3" cellspacing="1" class=tableborder>
    <tr>
      <td width="3%" bgcolor="#FFFFFF" id=user<?=$r['userid']?>><div align="center">
        <input name="userid[]" type="checkbox" id="userid[]" value="<?=$r['userid']?>"<?=$checked?> onclick="if(this.checked){user<?=$r['userid']?>.style.backgroundColor='#4FB4DE';}else{user<?=$r['userid']?>.style.backgroundColor='#ffffff';}">
      </div></td> 
      <td width="97%" height="27"><table width="100%" border="0" cellspacing="1" cellpadding="3">
        <tr>
          <td width="14%">ID：<?=$r['userid']?></td>
          <td width="20%">用户名：<a href="../../space/?userid=<?=$r['userid']?>" title="查看会员空间" target="_blank"><?=$namefont1?><?=$username?><?=$namefont2?></a></td>
          <td width="14%">内部组：<?=$migname?></td>
          <td width="20%">注册时间：<?=eReturnMemberRegtime($ur['registertime'],"Y-m-d H:i:s")?></td>
          <td width="20%">注册IP：<?=$r['regip']?>:<?=$r['regipport']?></td>
          <td width="12%" rowspan="2"><div align="center">[<a href="AddMember.php?enews=EditMember&userid=<?=$r['userid']?><?=$ecms_hashur['ehref']?>" target="_blank">修改</a>]
            &nbsp;
            [<a href="ListMember.php?enews=DelMember&userid=<?=$r['userid']?><?=$ecms_hashur['href']?>" onclick="return confirm('确认要删除？');">删除</a>]
            </div>
          </div></td>
        </tr>
        <tr>
          <td>管理组：<?=$magname?></td>
          <td>会员组：<?=$level_r[$ur['groupid']][groupname]?></td>
          <td>登录次数：<?=$r['loginnum']?></td>
          <td>最后登录：<?=date("Y-m-d H:i:s",$r['lasttime'])?></td>
          <td>最后IP：<?=$r['lastip']?>:<?=$r['lastipport']?></td>
          </tr>
      </table></td>  
    </tr>
  
  <tr bgcolor="#FFFFFF">
    <td height="23" bgcolor="#FFFFFF">&nbsp;      </td>
    <td height="23" bgcolor="#FFFFFF"><table width="100%" border="0" cellspacing="1" cellpadding="3">
      <tr>
        <td width="50%" height="23">注册资料<?=$checkedtitle?><?=$isernstatus2?></td>
        <td width="50%">空间名称和公告</td>
      </tr>
      <tr>
        <td><textarea name="textarea" cols="60" style="WIDTH:100%" rows="8">用户名：<?=$username."\r\n"?>
邮箱地址：<?=$ur['email']."\r\n"?>
公司名称：<?=stripSlashes($r['company'])."\r\n"?>
真实姓名：<?=stripSlashes($r['truename'])."\r\n"?>
联系电话：<?=stripSlashes($r['mycall'])."\r\n"?>
传真号码：<?=stripSlashes($r['fax'])."\r\n"?>
手机号码：<?=stripSlashes($r['phone'])."\r\n"?>
QQ号码：<?=stripSlashes($r['oicq'])."\r\n"?>
MSN：<?=stripSlashes($r['msn'])."\r\n"?>
会员头像：<?=$r['userpic']."\r\n"?>
网站地址：<?=stripSlashes($r['homepage'])."\r\n"?>
联系地址：<?=stripSlashes($r['address'])."\r\n"?>
邮编：<?=stripSlashes($r['zip'])."\r\n"?>
简介：<?="\r\n"?>
<?=stripSlashes($r['saytext'])?>
</textarea></td>
        <td><textarea name="textarea2" cols="60" style="WIDTH:100%" rows="8">空间名称：<?=stripSlashes($r['spacename'])."\r\n"?>
空间公告：<?="\r\n"?>
<?=stripSlashes($r['spacegg'])?>
</textarea></td>
      </tr>
    </table></td>
    </tr>
</table>
<br>
<?
}
?>
  <table width="100%" border="0" align="center" cellpadding="3" cellspacing="1" class=tableborder>
    <tr>
      <td width="3%" bgcolor="#FFFFFF"><div align="center"><input type=checkbox name=chkall value=on onclick="CheckAll(this.form)" title="全选"></div></td> 
      <td height="30" bgcolor="#FFFFFF">
        <select name="toingid" id="toingid">
        <option value="0">取消内部组</option>
		<?=$chingroup?>
      </select>
        <input type="submit" name="Submit32" value="转移内部组" onclick="document.memberform.enews.value='DoMoveInGroupMember_all';">
        &nbsp;&nbsp;&nbsp; 
        <input type="submit" name="Submit3" value="审核" onclick="document.memberform.enews.value='DoCheckMember_all';document.memberform.docheck.value='1';"> &nbsp;&nbsp;&nbsp;
		<input type="submit" name="Submit3" value="取消审核" onclick="document.memberform.enews.value='DoCheckMember_all';document.memberform.docheck.value='0';"> &nbsp;&nbsp;&nbsp;
		  <input type="submit" name="Submit2" value="删除" onclick="document.memberform.enews.value='DelMember_all';">
        &nbsp;
        <input name="enews" type="hidden" id="enews" value="DelMember_all">
		<input name="docheck" type="hidden" id="docheck" value="1">      </td>
  </tr>
    <tr>
      <td bgcolor="#FFFFFF">&nbsp;</td>
      <td height="30" bgcolor="#FFFFFF">分页: 
        <?=$returnpage?></td>
    </tr>
</table>
  <table width="100%" border="0" cellspacing="1" cellpadding="3">
    <tr>
      <td height="30"><font color="#666666">说明：多选框为蓝色或用户名灰色代表未审核会员. </font></td>
    </tr>
  </table>
</form>
</body>
</html>
<?
db_close();
$empire=null;
?>
