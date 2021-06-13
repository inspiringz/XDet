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

//设置页面缓存参数
function SetPageCache($add,$userid,$username){
	global $empire,$dbtbpre;
	CheckLevel($userid,$username,$classid,"public");//验证权限
	$add['ctimeopen']=(int)$add['ctimeopen'];
	$add['ctimeindex']=(int)$add['ctimeindex'];
	$add['ctimeclass']=(int)$add['ctimeclass'];
	$add['ctimelist']=(int)$add['ctimelist'];
	$add['ctimetext']=(int)$add['ctimetext'];
	$add['ctimett']=(int)$add['ctimett'];
	$add['ctimetags']=(int)$add['ctimetags'];
	$add['ctimeaddre']=(int)$add['ctimeaddre'];
	$add['ctimeqaddre']=(int)$add['ctimeqaddre'];
	$ctimelast=$add['ctimelast'];
	if($ctimelast)
	{
		$ctimelast=to_time($ctimelast);
	}
	$ctimelast=(int)$ctimelast;
	
	$sql=$empire->query("update {$dbtbpre}enewspublicadd set ctimeopen='$add[ctimeopen]',ctimeindex='$add[ctimeindex]',ctimeclass='$add[ctimeclass]',ctimelist='$add[ctimelist]',ctimetext='$add[ctimetext]',ctimett='$add[ctimett]',ctimetags='$add[ctimetags]',ctimegids='".eaddslashes($add[ctimegids])."',ctimernd='".eaddslashes($add[ctimernd])."',ctimecids='".eaddslashes($add[ctimecids])."',ctimelast='$ctimelast',ctimeaddre='$add[ctimeaddre]',ctimeqaddre='$add[ctimeqaddre]' limit 1");
	if($sql)
	{
		GetConfig();
		//操作日志
		insert_dolog("");
		printerror("SetPageCacheSuccess","SetPageCache.php".hReturnEcmsHashStrHref2(1));
	}
	else
	{printerror("DbError","history.go(-1)");}
}

//清空动态页面缓存
function ClearPageCache($add,$userid,$username){
	global $empire,$dbtbpre,$ecms_config,$public_r;
	$cpage=(int)$add['cpage'];
	if(!$cpage)
	{
		printerror("ErrorUrl","history.go(-1)");
	}
	$cachepager=ePagenoGetPageCache($cpage);
	if(!$cachepager['esyspath'])
	{
		printerror("ErrorUrl","history.go(-1)");
	}
	$basepath=$ecms_config['sets']['ecmscachepath'].$cachepager['esyspath'];
	$cpath=$cachepager['cpath']?'/'.$cachepager['cpath']:'';
	$docpath=$basepath.$cpath;
	$del=DelPath($docpath);
	if($cpath=='')
	{
		Ecms_eMkdir($docpath);
	}
	//操作日志
	insert_dolog("cpage=$cpage");
	printerror("ClearPageCacheSuccess",EcmsGetReturnUrl());
}


$enews=$_POST['enews'];
if(empty($enews))
{$enews=$_GET['enews'];}
if($enews)
{
	hCheckEcmsRHash();
	include("../../class/delpath.php");
}
if($enews=="SetPageCache")//设置页面缓存参数
{
	SetPageCache($_POST,$logininid,$loginin);
}
elseif($enews=="ClearPageCache")//清空页面缓存
{
	@set_time_limit(1000);
	ClearPageCache($_GET,$logininid,$loginin);
}
else
{}

$r=$empire->fetch1("select * from {$dbtbpre}enewspublicadd limit 1");
$ctimelast='';
if($r['ctimelast'])
{
	$ctimelast=date("Y-m-d H:i:s",$r['ctimelast']);
}
db_close();
$empire=null;
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>动态页缓存设置</title>
<link href="../adminstyle/<?=$loginadminstyleid?>/adminstyle.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="../ecmseditor/js/jstime/WdatePicker.js"></script>
</head>

<body>
<table width="100%" border="0" align="center" cellpadding="3" cellspacing="1">
  <tr>
    <td width="49%">位置：<a href="SetPageCache.php<?=$ecms_hashur['whehref']?>">动态页缓存设置</a>    </td>
    <td width="51%">
	<div align="right" class="emenubutton">
      <input type="button" name="Submit522" value="更新动态页面缓存" onclick="self.location.href='../ReHtml/ChangePageCache.php<?=$ecms_hashur['whehref']?>';">
    </div>
	</td>
  </tr>
</table>
<form name="setpublic" method="post" action="SetPageCache.php" onsubmit="return confirm('确认设置?');" autocomplete="off">
  <table width="100%" border="0" align="center" cellpadding="3" cellspacing="1" class="tableborder">
  <?=$ecms_hashur['form']?>
    <tr class="header"> 
      <td height="25" colspan="3">动态页缓存设置 
        <input name="enews" type="hidden" value="SetPageCache"></td>
    </tr>
    
	<tr bgcolor="#FFFFFF">
	  <td height="25">开启缓存</td>
	  <td><input type="radio" name="ctimeopen" value="1"<?=$r['ctimeopen']==1?' checked':''?>>开启
        <input type="radio" name="ctimeopen" value="0"<?=$r['ctimeopen']==0?' checked':''?>>关闭</td>
      <td>&nbsp;</td>
	</tr>
	<tr bgcolor="#FFFFFF">
      <td width="16%" height="25">首页缓存时间</td>
      <td width="42%"><input name="ctimeindex" type="text" id="ctimeindex" value="<?=$r[ctimeindex]?>" size="28">
        分钟<font color="#666666"> (如果会员不缓存，可设置为负数)</font></td>
      <td width="42%">[<a href="SetPageCache.php?enews=ClearPageCache&cpage=1<?=$ecms_hashur['href']?>" onclick="return confirm('确认清空 首页 缓存文件?')">清空首页缓存文件</a>]</td>
	</tr>
    <tr bgcolor="#FFFFFF">
      <td height="25">栏目封面页缓存时间</td>
      <td><input name="ctimeclass" type="text" id="ctimeclass" value="<?=$r[ctimeclass]?>" size="28">
      分钟<font color="#666666"> (如果会员不缓存，可设置为负数)</font></td>
      <td>[<a href="SetPageCache.php?enews=ClearPageCache&cpage=2<?=$ecms_hashur['href']?>" onclick="return confirm('确认清空 栏目封面页 缓存文件?')">清空栏目封面页缓存文件</a>]</td>
    </tr>
    <tr bgcolor="#FFFFFF">
      <td height="25">栏目列表页缓存时间</td>
      <td><input name="ctimelist" type="text" id="ctimelist" value="<?=$r[ctimelist]?>" size="28">
      分钟<font color="#666666"> (如果会员不缓存，可设置为负数)</font></td>
      <td>[<a href="SetPageCache.php?enews=ClearPageCache&cpage=3<?=$ecms_hashur['href']?>" onclick="return confirm('确认清空 栏目列表页 缓存文件?')">清空栏目列表页缓存文件</a>]</td>
    </tr>
    <tr bgcolor="#FFFFFF">
      <td height="25">栏目内容页缓存时间</td>
      <td><input name="ctimetext" type="text" id="ctimetext" value="<?=$r[ctimetext]?>" size="28">
      分钟<font color="#666666"> (如果会员不缓存，可设置为负数)</font></td>
      <td>[<a href="SetPageCache.php?enews=ClearPageCache&cpage=4<?=$ecms_hashur['href']?>" onclick="return confirm('确认清空 栏目内容页 缓存文件?')">清空栏目内容页缓存文件</a>]</td>
    </tr>
    <tr bgcolor="#FFFFFF">
      <td height="25">标题分类页缓存时间</td>
      <td><input name="ctimett" type="text" id="ctimett" value="<?=$r[ctimett]?>" size="28">
      分钟<font color="#666666"> (如果会员不缓存，可设置为负数)</font></td>
      <td>[<a href="SetPageCache.php?enews=ClearPageCache&cpage=5<?=$ecms_hashur['href']?>" onclick="return confirm('确认清空 标题分类页 缓存文件?')">清空标题分类页缓存文件</a>]</td>
    </tr>
    <tr bgcolor="#FFFFFF">
      <td height="25">TAGS页缓存时间</td>
      <td><input name="ctimetags" type="text" id="ctimetags" value="<?=$r[ctimetags]?>" size="28">
      分钟<font color="#666666"> (如果会员不缓存，可设置为负数)</font></td>
      <td>[<a href="SetPageCache.php?enews=ClearPageCache&cpage=6<?=$ecms_hashur['href']?>" onclick="return confirm('确认清空 TAGS页 缓存文件?')">清空TAGS页缓存文件</a>]</td>
    </tr>
    <tr bgcolor="#FFFFFF">
      <td height="25">不缓存的会员组ID</td>
      <td><input name="ctimegids" type="text" id="ctimegids" value="<?=$r[ctimegids]?>" size="28">
        <font color="#666666">(多个会员组ID用半角逗号“,”隔开)</font></td>
      <td>&nbsp;</td>
    </tr>
    <tr bgcolor="#FFFFFF">
      <td height="25">不缓存的栏目ID</td>
      <td><input name="ctimecids" type="text" id="ctimecids" value="<?=$r[ctimecids]?>" size="28">
        <font color="#666666">(多个栏目ID用半角逗号“,”隔开)</font></td>
      <td>&nbsp;</td>
    </tr>
    <tr bgcolor="#FFFFFF">
      <td height="25">文件名加密字符串</td>
      <td><input name="ctimernd" type="text" id="ctimernd" value="<?=$r[ctimernd]?>" size="28">
	  <input type="button" name="Submit32222" value="随机" onclick="document.setpublic.ctimernd.value='<?=make_password(42)?>';">
      <font color="#666666">(10~60个任意字符，最好多种字符组合)</font></td>
      <td>&nbsp;</td>
    </tr>
    <tr bgcolor="#FFFFFF">
      <td height="25">更新在本时间前的缓存</td>
      <td><input name="ctimelast" type="text" class="Wdate" id="ctimelast" onClick="WdatePicker({skin:'default',dateFmt:'yyyy-MM-dd HH:mm:ss'})" value="<?=$ctimelast?>" size="28">
        <font color="#666666">(此时间前的缓存将重新更新，空为不限制)</font></td>
      <td>&nbsp;</td>
    </tr>
    <tr bgcolor="#FFFFFF">
      <td height="25">后台增加/编辑信息时</td>
      <td>
              <select name="ctimeaddre" id="ctimeaddre">
                <option value="0"<?=$r['ctimeaddre']==0?' selected':''?>>不更新缓存</option>
                <option value="1"<?=$r['ctimeaddre']==1?' selected':''?>>更新当前栏目</option>
                <option value="2"<?=$r['ctimeaddre']==2?' selected':''?>>更新首页</option>
                <option value="3"<?=$r['ctimeaddre']==3?' selected':''?>>更新父栏目</option>
				<option value="4"<?=$r['ctimeaddre']==4?' selected':''?>>更新父栏目与首页</option>
                <option value="5"<?=$r['ctimeaddre']==5?' selected':''?>>更新当前栏目与父栏目</option>
                <option value="6"<?=$r['ctimeaddre']==6?' selected':''?>>更新当前栏目、父栏目与首页</option>
				<option value="7"<?=$r['ctimeaddre']==7?' selected':''?>>更新当前栏目、父栏目、首页与标题分类</option>
				<option value="8"<?=$r['ctimeaddre']==8?' selected':''?>>更新当前栏目、父栏目、首页、标题分类与TAGS页</option>
              </select>	  </td>
      <td>&nbsp;</td>
    </tr>
    <tr bgcolor="#FFFFFF">
      <td height="25">前台增加/编辑信息时</td>
      <td>
                <select name="ctimeqaddre" id="ctimeqaddre">
                  <option value="0"<?=$r['ctimeqaddre']==0?' selected':''?>>不更新缓存</option>
                  <option value="1"<?=$r['ctimeqaddre']==1?' selected':''?>>更新当前栏目</option>
                  <option value="2"<?=$r['ctimeqaddre']==2?' selected':''?>>更新首页</option>
                  <option value="3"<?=$r['ctimeqaddre']==3?' selected':''?>>更新父栏目</option>
				  <option value="4"<?=$r['ctimeqaddre']==4?' selected':''?>>更新父栏目与首页</option>
                  <option value="5"<?=$r['ctimeqaddre']==5?' selected':''?>>更新当前栏目与父栏目</option>
                  <option value="6"<?=$r['ctimeqaddre']==6?' selected':''?>>更新当前栏目、父栏目与首页</option>
				  <option value="7"<?=$r['ctimeqaddre']==7?' selected':''?>>更新当前栏目、父栏目、首页与标题分类</option>
				  <option value="8"<?=$r['ctimeqaddre']==8?' selected':''?>>更新当前栏目、父栏目、首页、标题分类与TAGS页</option>
                </select>	  </td>
      <td>&nbsp;</td>
    </tr>
    <tr bgcolor="#FFFFFF"> 
      <td height="25">&nbsp;</td>
      <td height="25"><input type="submit" name="Submit" value="提交"> <input type="reset" name="Submit2" value="重置"></td>
      <td>[<a href="SetPageCache.php?enews=ClearPageCache&cpage=10000<?=$ecms_hashur['href']?>" onclick="return confirm('确认清空全部缓存文件?')">清空全部缓存文件</a>]</td>
    </tr>
    <tr bgcolor="#FFFFFF">
      <td height="25" colspan="3"><font color="#666666">说明：增加或编辑信息自动会更新内容页缓存。如果要更新上一篇内容页缓存，可以栏目选项设置里选择“生成上一篇信息”。</font></td>
    </tr>
  </table>
</form>
</body>
</html>
