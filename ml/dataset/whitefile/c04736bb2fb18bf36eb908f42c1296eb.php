<?php
define('EmpireCMSAdmin','1');
require("../../class/connect.php");
require("../../class/db_sql.php");
require("../../class/functions.php");
require("../../member/class/user.php");
require "../".LoadLang("pub/fun.php");
require("../../data/dbcache/MemberLevel.php");
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

$addgethtmlpath="../";
$enews=$_POST['enews'];
if(empty($enews))
{$enews=$_GET['enews'];}
//导入处理会员函数
if($enews)
{
	hCheckEcmsRHash();
	include('../../member/class/member_adminfun.php');
	include('../../member/class/member_modfun.php');
}
//修改会员
if($enews=="EditMember")
{
	$add=$_POST['add'];
	admin_EditMember($add,$logininid,$loginin);
}
elseif($enews=="DelMember")//删除会员
{
	$userid=$_GET['userid'];
	admin_DelMember($userid,$logininid,$loginin);
}
elseif($enews=="DelMember_all")//批量删除会员
{
	$userid=$_POST['userid'];
	admin_DelMember_all($userid,$logininid,$loginin);
}
elseif($enews=="DoCheckMember_all")//审核会员
{
	admin_DoCheckMember_all($_POST,$logininid,$loginin);
}
elseif($enews=="DoMoveInGroupMember_all")//转移内部会员组
{
	admin_DoMoveInGroupMember_all($_POST,$logininid,$loginin);
}
elseif($enews=="MemberChangeTimeGroup")//批量更新到期会员组
{
	admin_MemberChangeTimeGroup($_GET,$logininid,$loginin);
}
else
{}

$search=$ecms_hashur['ehref'];
$line=25;
$page_line=12;
$page=(int)$_GET['page'];
$page=RepPIntvar($page);
$start=0;
$offset=$page*$line;
$url="<a href=ListMember.php".$ecms_hashur['whehref'].">管理会员</a>";
$add="";
//搜索
$sear=$_POST['sear'];
if(empty($sear))
{$sear=$_GET['sear'];}
$sear=RepPostStr($sear,1);
if($sear)
{
	$groupid=$_POST['groupid'];
	if(empty($groupid))
	{$groupid=$_GET['groupid'];}
	$ingid=$_POST['ingid'];
	if(empty($ingid))
	{$ingid=$_GET['ingid'];}
	$agid=$_POST['agid'];
	if(empty($agid))
	{$agid=$_GET['agid'];}
	$keyboard=$_POST['keyboard'];
	if(empty($keyboard))
	{$keyboard=$_GET['keyboard'];}
	$keyboard=RepPostVar2($keyboard);
	$show=(int)$_GET['show'];
	if($keyboard)
	{
		if($show==2)//邮箱
		{
			$add=" where ".egetmf('email')." like '%$keyboard%'";
		}
		elseif($show==3)//ID
		{
			$add=" where ".egetmf('userid')."='$keyboard'";
		}
		else
		{
			$add=" where ".egetmf('username')." like '%$keyboard%'";
		}
	}
	$groupid=(int)$groupid;
	if($groupid)
	{
		if(empty($add))
		{$add.=" where ".egetmf('groupid')."='$groupid'";}
		else
		{$add.=" and ".egetmf('groupid')."='$groupid'";}
	}
	$ingid=(int)$ingid;
	if($ingid)
	{
		if(empty($add))
		{$add.=" where ".egetmf('ingid')."='$ingid'";}
		else
		{$add.=" and ".egetmf('ingid')."='$ingid'";}
	}
	$agid=(int)$agid;
	if($agid)
	{
		if(empty($add))
		{$add.=" where ".egetmf('agid')."='$agid'";}
		else
		{$add.=" and ".egetmf('agid')."='$agid'";}
	}
	$search.="&sear=1&show=$show&groupid=".$groupid."&ingid=".$ingid."&agid=".$agid."&keyboard=".urlencode($keyboard);
}
//审核
$schecked=(int)$_GET['schecked'];
if($schecked)
{
	$and=$add?' and ':' where ';
	if($schecked==1)
	{
		$add.=$and.egetmf('checked')."=0";
	}
	else
	{
		$add.=$and.egetmf('checked')."=1";
	}
	$search.="&schecked=$schecked";
}
//实名
$sisern=(int)$_GET['sisern'];
if($sisern)
{
	$and=$add?' and ':' where ';
	if($sisern==1)
	{
		$add.=$and.egetmf('isern')."=0";
	}
	else
	{
		$add.=$and.egetmf('isern')."=1";
	}
	$search.="&sisern=$sisern";
}
$totalquery="select count(*) as total from ".eReturnMemberTable().$add;
$num=$empire->gettotal($totalquery);
$query="select ".eReturnSelectMemberF('*')." from ".eReturnMemberTable().$add;
$query.=" order by ".egetmf('userid')." desc limit $offset,$line";
$sql=$empire->query($query);
$returnpage=page2($num,$line,$page_line,$start,$page,$search);
//----------会员组
$group='';
$sql1=$empire->query("select * from {$dbtbpre}enewsmembergroup order by level");
while($l_r=$empire->fetch($sql1))
{
	if($groupid==$l_r[groupid])
	{$select=" selected";}
	else
	{$select="";}
	$group.="<option value=".$l_r[groupid].$select.">".$l_r[groupname]."</option>";
}
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
//----------管理组
$madmingroup='';
$agsql=$empire->query("select agid,agname from {$dbtbpre}enewsag order by isadmin");
while($ag_r=$empire->fetch($agsql))
{
	if($agid==$ag_r['agid'])
	{$select=" selected";}
	else
	{$select="";}
	$madmingroup.="<option value=".$ag_r['agid'].$select.">".$ag_r['agname']."</option>";
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>管理会员</title>
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
    <td width="50%">位置： 
      <?=$url?>
    </td>
    <td><div align="right" class="emenubutton">
        <input type="button" name="Submit5" value="注册会员" onclick="window.open('../../member/register/');">
		&nbsp;&nbsp;
		<input type="button" name="Submit5" value="前台会员列表" onclick="window.open('../../member/list/');">
		&nbsp;&nbsp;
		<input type="button" name="Submit5" value="批量更新到期会员组" onclick="if(confirm('确认要批量更新到期会员组?')){self.location.href='ListMember.php?enews=MemberChangeTimeGroup<?=$ecms_hashur['href']?>';}">
		&nbsp;
      </div></td>
  </tr>
</table>
  
<table width="100%" border="0" align="center" cellpadding="3" cellspacing="1">
  <form name="form2" method="GET" action="ListMember.php">
  <?=$ecms_hashur['eform']?>
  <input type=hidden name=sear value=1>
    <tr>
      <td><div align="center">关键字:
          <select name="show" id="show">
            <option value="1"<?=$show==1?' selected':''?>>用户名</option>
			<option value="3"<?=$show==3?' selected':''?>>用户ID</option>
            <option value="2"<?=$show==2?' selected':''?>>邮箱</option>
          </select>
          <input name="keyboard" type="text" id="keyboard" value="<?=$keyboard?>">
          <select name="groupid" id="groupid">
            <option value="0">不限会员组</option>
			<?=$group?>
          </select>
		  <select name="ingid" id="ingid">
            <option value="0">不限内部组</option>
			<?=$ingroup?>
          </select>
		  <select name="agid" id="agid">
            <option value="0">不限管理组</option>
			<?=$madmingroup?>
          </select>
          <select name="schecked" id="schecked">
            <option value="0"<?=$schecked==0?' selected':''?>>不限审核</option>
            <option value="1"<?=$schecked==1?' selected':''?>>未审核</option>
            <option value="2"<?=$schecked==2?' selected':''?>>已审核</option>
          </select>
		  <select name="sisern" id="sisern">
            <option value="0"<?=$sisern==0?' selected':''?>>不限实名</option>
            <option value="1"<?=$sisern==1?' selected':''?>>未实名</option>
            <option value="2"<?=$sisern==2?' selected':''?>>已实名</option>
          </select>
          <input type="submit" name="Submit" value="搜索">
          &nbsp;&nbsp; [<a href="ListMember.php?schecked=1<?=$ecms_hashur['ehref']?>">未审核</a>] [<a href="ListMember.php?schecked=2<?=$ecms_hashur['ehref']?>">已审核</a>] [<a href="ListMember.php?sisern=1<?=$ecms_hashur['ehref']?>">未实名</a>] [<a href="ListMember.php?sisern=2<?=$ecms_hashur['ehref']?>">已实名</a>] </div></td>
    </tr>
  </form>
</table>
  
<table width="100%" border="0" align="center" cellpadding="3" cellspacing="1" class="tableborder">
  <form name="memberform" method="post" action="ListMember.php" onsubmit="return confirm('确认要操作?');">
  <?=$ecms_hashur['form']?>
    <tr class="header">
      <td width="2%">&nbsp;</td> 
      <td width="4%" height="25"><div align="center">ID</div></td>
      <td width="17%" height="25"><div align="center">用户名</div></td>
      <td width="9%"><div align="center">会员组</div></td>
      <td width="10%"><div align="center">内部组</div></td>
      <td width="9%"><div align="center">管理组</div></td>
      <td width="4%"><div align="center">审核</div></td>
      <td width="4%"><div align="center">实名</div></td>
      <td width="14%"><div align="center">注册时间</div></td>
      <td width="11%"><div align="center">记录</div></td>
      <td width="16%" height="25"><div align="center">操作</div></td>
    </tr>
	<?
	while($r=$empire->fetch($sql))
	{
		if(empty($r['checked']))
		{
			$checked=" title='未审核' style='background:#99C4E3'";
			$namefont1="<font color='gray'>";
			$namefont2="</font>";
			$checkedstatus='<font color=red>否</font>';
		}
		else
		{
			$checked="";
			$namefont1="";
			$namefont2="";
			$checkedstatus='是';
		}
		$registertime=date("Y-m-d H:i:s",$r['registertime']);
		//管理组
		$magname='';
		$magadminname='';
		if($r['agid'])
		{
			$magname=$aglevel_r[$r['agid']]['agname'];
			if($magname)
			{
				if($aglevel_r[$r['agid']]['isadmin']==9)
				{
					$magadminname='管理员 ('.$aglevel_r[$r['agid']]['isadmin'].')';
				}
				elseif($aglevel_r[$r['agid']]['isadmin']==5)
				{
					$magadminname='版主 ('.$aglevel_r[$r['agid']]['isadmin'].')';
				}
				elseif($aglevel_r[$r['agid']]['isadmin']==1)
				{
					$magadminname='实习版主 ('.$aglevel_r[$r['agid']]['isadmin'].')';
				}
				else
				{
					$magadminname='('.$aglevel_r[$r['agid']]['isadmin'].')';
				}
			}
		}
		//内部组
		$migname='';
		if($r['ingid'])
		{
			$migname=$iglevel_r[$r['ingid']]['gname'];
		}
	  //编码转换
	  $m_username=$r['username'];
	  $email=$r['email'];
  ?>
    <tr bgcolor="ffffff" id=user<?=$r['userid']?>>
      <td><div align="center">
        <input name="userid[]" type="checkbox" id="userid[]" value="<?=$r['userid']?>"<?=$checked?> onclick="if(this.checked){user<?=$r['userid']?>.style.backgroundColor='#DBEAF5';}else{user<?=$r['userid']?>.style.backgroundColor='#ffffff';}">
      </div></td> 
      <td height="25"><div align="center"> 
          <?=$r['userid']?>
        </div></td>
      <td height="25"><div align="center"><a href="../../space/?userid=<?=$r['userid']?>" title="查看会员空间" target="_blank"><?=$namefont1?><?=$m_username?><?=$namefont2?></a></div></td>
      <td><div align="center"><a href="ListMember.php?sear=1&groupid=<?=$r['groupid']?><?=$ecms_hashur['ehref']?>"><?=$level_r[$r['groupid']][groupname]?></a></div></td>
      <td><div align="center"><a href="ListMember.php?sear=1&ingid=<?=$r['ingid']?><?=$ecms_hashur['ehref']?>"><?=$migname?></a></div></td>
      <td><div align="center"><a href="ListMember.php?sear=1&agid=<?=$r['agid']?><?=$ecms_hashur['ehref']?>" title="<?=$magadminname?>"><?=$magname?></a></div></td>
      <td><div align="center"><?=$checkedstatus?></div></td>
      <td><div align="center"><?=$r['isern']?'是':'<font color=red>否</font>'?></div></td>
      <td><div align="center"> 
          <?=$registertime?>
        </div></td>
      <td><div align="center">[<a href="#ecms" onclick="window.open('ListBuyBak.php?userid=<?=$r['userid']?>&username=<?=$m_username?><?=$ecms_hashur['ehref']?>','','width=650,height=600,scrollbars=yes,top=70,left=100');">购买</a>] 
          [<a href="#ecms" onclick="window.open('ListDownBak.php?userid=<?=$r['userid']?>&username=<?=$m_username?><?=$ecms_hashur['ehref']?>','','width=650,height=600,scrollbars=yes,top=70,left=100');">消费</a>]</div></td>
      <td height="25"><div align="center">[<a href="AddMember.php?enews=EditMember&userid=<?=$r['userid']?><?=$ecms_hashur['ehref']?>">修改</a>]
	   &nbsp;
          [<a href="ListMember.php?enews=DelMember&userid=<?=$r['userid']?><?=$ecms_hashur['href']?>" onclick="return confirm('确认要删除？');">删除</a>]   
        </div></td>
    </tr>
    <?
  }
  ?>
    <tr bgcolor="ffffff"> 
	<td height="25"><div align="center"><input type=checkbox name=chkall value=on onclick="CheckAll(this.form)" title="全选"></div></td>
      <td height="25" colspan="10"> <select name="toingid" id="toingid">
        <option value="0">取消内部组</option>
		<?=$chingroup?>
      </select>
        <input type="submit" name="Submit32" value="转移内部组" onclick="document.memberform.enews.value='DoMoveInGroupMember_all';">
        &nbsp;&nbsp;&nbsp; 
        <input type="submit" name="Submit3" value="审核" onclick="document.memberform.enews.value='DoCheckMember_all';document.memberform.docheck.value='1';"> &nbsp;&nbsp;&nbsp;
		<input type="submit" name="Submit3" value="取消审核" onclick="document.memberform.enews.value='DoCheckMember_all';document.memberform.docheck.value='0';"> &nbsp;&nbsp;&nbsp;
		  <input type="submit" name="Submit2" value="删除" onclick="document.memberform.enews.value='DelMember_all';">
        <input name="enews" type="hidden" id="enews" value="DelMember_all">
        &nbsp;
        <input name="docheck" type="hidden" id="docheck" value="1">
&nbsp;        </td>
    </tr>
    <tr bgcolor="ffffff">
      <td height="25" colspan="11"><?=$returnpage?></td>
    </tr>
    <tr bgcolor="ffffff">
      <td height="25" colspan="11"><font color="#666666">说明：多选框为蓝色或用户名灰色代表未审核会员. </font></td>
    </tr>
  </form>
</table>
</body>
</html>
<?
db_close();
$empire=null;
?>
