<?php
define('EmpireCMSAdmin','1');
require("../../class/connect.php");
require("../../class/db_sql.php");
require("../../class/functions.php");
require("../../member/class/user.php");
require "../".LoadLang("pub/fun.php");
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

//更新访问组状态
function ToUpViewGroupMList($vgid){
	global $empire,$dbtbpre;
	$vgid=(int)$vgid;
	$membernum=$empire->gettotal("select count(*) as total from {$dbtbpre}enewsvglist where vgid='$vgid'");
	$mlist=$membernum?1:0;
	$sql=$empire->query("update {$dbtbpre}enewsvg set mlist='$mlist' where vgid='$vgid'");
}

//增加会员白名单
function AddViewGroupMList($add,$userid,$username){
	global $empire,$dbtbpre;
	$vgid=(int)$add['vgid'];
	$usertype=(int)$add['usertype'];
	$adduserid=RepPostVar($add['adduserid']);
	if(!$vgid||!$usertype||!$adduserid)
	{
		printerror("EmptyViewGroupMList","history.go(-1)");
	}
	$addtime=time();
	$outtime=$add['outtime'];
	if($outtime)
	{
		$outtime=to_time($outtime);
	}
	$outtime=(int)$outtime;
	//会员
	$havem=0;
	$r=explode(',',$adduserid);
	$count=count($r);
	for($i=0;$i<$count;$i++)
	{
		$thisuid=trim($r[$i]);
		if(empty($thisuid))
		{
			continue;
		}
		//类型
		if($usertype==2)
		{
			$thisuid=RepPostVar($thisuid);
			$mr=$empire->fetch1("select ".eReturnSelectMemberF('userid')." from ".eReturnMemberTable()." where ".egetmf('username')."='$thisuid' limit 1");
		}
		else
		{
			$thisuid=(int)$thisuid;
			$mr=$empire->fetch1("select ".eReturnSelectMemberF('userid')." from ".eReturnMemberTable()." where ".egetmf('userid')."='$thisuid' limit 1");
		}
		if(!$mr['userid'])
		{
			continue;
		}
		//是否存在
		$vgnum=$empire->gettotal("select count(*) as total from {$dbtbpre}enewsvglist where vgid='$vgid' and userid='$mr[userid]' limit 1");
		if(!$vgnum)
		{
			$empire->query("insert into {$dbtbpre}enewsvglist(vgid,addtime,userid,outtime) values('$vgid','$addtime','$mr[userid]','$outtime');");
			$havem=1;
		}
	}
	ToUpViewGroupMList($vgid);
	//操作日志
	insert_dolog("vgid=".$vgid."&usertype=".$usertype."<br>adduserid=".$adduserid);
	printerror("AddViewGroupMListSuccess","ListVgMember.php?vgid=$vgid".hReturnEcmsHashStrHref2(0));
}

//修改会员白名单
function EditViewGroupMList($add,$userid,$username){
	global $empire,$dbtbpre;
	$vgid=(int)$add['vgid'];
	$adduserid=(int)$add['adduserid'];
	if(!$vgid||!$adduserid)
	{
		printerror("EmptyViewGroupMList","history.go(-1)");
	}
	$outtime=$add['outtime'];
	if($outtime)
	{
		$outtime=to_time($outtime);
	}
	$outtime=(int)$outtime;
	$sql=$empire->query("update {$dbtbpre}enewsvglist set outtime='$outtime' where vgid='$vgid' and userid='$adduserid' limit 1");
	if($sql)
	{
		//操作日志
		insert_dolog("vgid=".$vgid."<br>userid=".$adduserid);
		printerror("EditViewGroupMListSuccess",EcmsGetReturnUrl());
	}
	else
	{printerror("DbError","history.go(-1)");}
}

//删除会员白名单
function DelViewGroupMList($add,$userid,$username){
	global $empire,$dbtbpre;
	$vgid=(int)$add['vgid'];
	$adduserid=(int)$add['adduserid'];
	if(!$vgid||!$adduserid)
	{
		printerror("EmptyViewGroupMList","history.go(-1)");
	}
	$sql=$empire->query("delete from {$dbtbpre}enewsvglist where vgid='$vgid' and userid='$adduserid'");
	ToUpViewGroupMList($vgid);
	if($sql)
	{
		//操作日志
		insert_dolog("vgid=".$vgid."<br>userid=".$adduserid);
		printerror("DelViewGroupMListSuccess",EcmsGetReturnUrl());
	}
	else
	{printerror("DbError","history.go(-1)");}
}

$enews=$_POST['enews'];
if(empty($enews))
{$enews=$_GET['enews'];}
if($enews)
{
	hCheckEcmsRHash();
}
if($enews=="AddViewGroupMList")
{
	AddViewGroupMList($_POST,$logininid,$loginin);
}
elseif($enews=="EditViewGroupMList")
{
	EditViewGroupMList($_POST,$logininid,$loginin);
}
elseif($enews=="DelViewGroupMList")
{
	DelViewGroupMList($_GET,$logininid,$loginin);
}
else
{}

$vgid=(int)$_GET['vgid'];
if(!$vgid)
{
	printerror("ErrorUrl","history.go(-1)");
}
$vgr=$empire->fetch1("select * from {$dbtbpre}enewsvg where vgid='$vgid'");
if(!$vgr['vgid'])
{
	printerror("ErrorUrl","history.go(-1)");
}
$page=(int)$_GET['page'];
$page=RepPIntvar($page);
$start=0;
$line=30;//每页显示条数
$page_line=12;//每页显示链接数
$offset=$page*$line;//总偏移量
$search='&vgid='.$vgid;
$search.=$ecms_hashur['ehref'];
$totalquery="select count(*) as total from {$dbtbpre}enewsvglist";
$num=$empire->gettotal($totalquery);
$query="select * from {$dbtbpre}enewsvglist order by addtime desc limit $offset,$line";
$sql=$empire->query($query);
$returnpage=page2($num,$line,$page_line,$start,$page,$search);
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>管理会员白名单</title>
<link href="../adminstyle/<?=$loginadminstyleid?>/adminstyle.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="../ecmseditor/js/jstime/WdatePicker.js"></script>
</head>

<body>
<table width="100%" border="0" align="center" cellpadding="3" cellspacing="1">
  <tr>
    <td>位置：<a href="ListViewGroup.php<?=$ecms_hashur['whehref']?>">管理会员访问组</a>&nbsp;>&nbsp;<a href="ListVgMember.php?vgid=<?=$vgr['vgid']?><?=$ecms_hashur['ehref']?>"><?=$vgr['gname']?></a>&nbsp;>&nbsp;会员白名单</td>
  </tr>
</table>
<form name="form1" method="post" action="ListVgMember.php">
  <table width="800" border="0" cellpadding="3" cellspacing="1" class="tableborder">
  <?=$ecms_hashur['form']?>
    <tr class="header">
      <td height="25" colspan="4">增加会员白名单: 
        <input name=enews type=hidden id="enews" value=AddViewGroupMList>
		<input type=hidden name=vgid value="<?=$vgid?>">        </td>
    </tr>
    <tr>
      <td width="96" height="25" bgcolor="#FFFFFF"><div align="center"><strong>增加类型</strong></div></td>
      <td width="391" bgcolor="#FFFFFF"><strong>会员ID或用户名</strong><font color="#666666">(多个用半角逗号隔开)</font></td>
      <td width="207" bgcolor="#FFFFFF"><strong>过期时间 </strong><font color="#666666">(留空为不限)</font></td>
      <td width="77" bgcolor="#FFFFFF"><div align="center"><strong>操作</strong></div></td>
    </tr>
    <tr>
      <td height="25" bgcolor="#FFFFFF"><div align="center">
        <select name="usertype" id="usertype">
          <option value="1">会员ID</option>
          <option value="2">用户名</option>
        </select>
      </div></td>
      <td bgcolor="#FFFFFF"><input name="adduserid" type="text" id="adduserid" size="55"></td>
      <td bgcolor="#FFFFFF"><input name="outtime" type="text" class="Wdate" id="outtime" onClick="WdatePicker({skin:'default',dateFmt:'yyyy-MM-dd HH:mm:ss'})" size="28"></td>
      <td bgcolor="#FFFFFF"><div align="center">
        <input type="submit" name="Submit" value="增加">
      </div></td>
    </tr>
  </table>
</form>
<table width="800" border="0" cellpadding="3" cellspacing="1" class="tableborder">
  <tr class="header"> 
    <td width="8%" height="25"><div align="center">会员ID</div></td>
    <td width="29%"><div align="center">用户名</div></td>
    <td width="18%"><div align="center">增加时间</div></td>
    <td width="25%"><div align="center">过期时间</div></td>
    <td width="20%" height="25"><div align="center">操作</div></td>
  </tr>
  <?
  while($r=$empire->fetch($sql))
  {
  	$mr=$empire->fetch1("select ".eReturnSelectMemberF('username')." from ".eReturnMemberTable()." where ".egetmf('userid')."='$r[userid]'");
  ?>
  <form name=form2 method=post action=ListVgMember.php>
	  <?=$ecms_hashur['form']?>
    <input type=hidden name=enews value=EditViewGroupMList>
	<input type=hidden name=vgid value="<?=$r['vgid']?>">
    <input type=hidden name=adduserid value="<?=$r['userid']?>">
    <tr bgcolor="#FFFFFF" onmouseout="this.style.backgroundColor='#ffffff'" onmouseover="this.style.backgroundColor='#C3EFFF'"> 
      <td height="25"><div align="center"><?=$r['userid']?></div></td>
      <td height="25"><div align="center"><a href="AddMember.php?enews=EditMember&userid=<?=$r['userid']?><?=$ecms_hashur['ehref']?>" target=_blank><?=$mr['username']?></a></div></td>
      <td><div align="center"><?=date("Y-m-d H:i:s",$r['addtime'])?></div></td>
      <td height="25"><div align="center">
        <input name="outtime" type="text" class="Wdate" id="outtime" onClick="WdatePicker({skin:'default',dateFmt:'yyyy-MM-dd HH:mm:ss'})" value="<?=$r['outtime']?date("Y-m-d H:i:s",$r['outtime']):''?>" size="28">
      </div></td>
      <td height="25"><div align="center"> 
          <input type="submit" name="Submit3" value="修改">
          &nbsp; 
          <input type="button" name="Submit4" value="删除" onclick="if(confirm('确认要删除此会员白名单?')){self.location.href='ListVgMember.php?enews=DelViewGroupMList&vgid=<?=$r['vgid']?>&adduserid=<?=$r['userid']?><?=$ecms_hashur['href']?>';}">
        </div></td>
    </tr>
  </form>
  <?
  }
  db_close();
  $empire=null;
  ?>
  <tr bgcolor="#FFFFFF"> 
      <td height="25" colspan="5">
	  <?=$returnpage?>	  </td>
    </tr>
</table>
</body>
</html>
