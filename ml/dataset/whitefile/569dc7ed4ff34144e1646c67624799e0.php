<?php

//信息查看权限提示函数
function eCheckLevelInfo_ViewInfoMsg($ckuser,$r,$ecms){
	global $empire,$dbtbpre,$public_r,$check_path,$level_r,$class_r,$public_diyr;
	$ViewLevel=eCheckLevelInfo_ReturnViewLevelSay($r);
	$msg=eCheckLevelInfo_ReturnMsgStr($ckuser,$ecms);
	$r['title']=stripSlashes($r['title']);
	$showsmalltext=eCheckLevelInfo_ReturnIntroField($r);
	$public_diyr['pagetitle']=$r['title'];
	$url="<a href='".$public_r['newsurl']."'>首页</a>&nbsp;>&nbsp;<a href='".$public_r['newsurl']."e/member/cp/'>会员中心</a>&nbsp;>&nbsp;查看信息：".$r['title'];
	@include(ECMS_PATH."e/data/template/cp_1.php");
	?>
	<table width="100%" border="0" align="center" cellpadding="3" cellspacing="1" class="tableborder">
  <tr class="header"> 
    <td height="25">提示信息</td>
  </tr>
  <tr bgcolor="#FFFFFF"> 
    <td height="25"><?=$msg?></td>
  </tr>
</table>
<br>
<table width="100%" border="0" align="center" cellpadding="3" cellspacing="1" class="tableborder">
  <tr class="header"> 
    <td height="25" colspan="2">标题：
      <?=$r['title']?>
    </td>
  </tr>
  <tr bgcolor="#FFFFFF"> 
    <td height="25">查看权限：</td>
    <td height="25">
      <?=$ViewLevel?>
    </td>
  </tr>
  <tr bgcolor="#FFFFFF"> 
    <td width="17%" height="25">发布时间：</td>
    <td width="83%" height="25"> 
      <?=date("Y-m-d H:i:s",$r['newstime'])?>
    </td>
  </tr>
  <tr bgcolor="#FFFFFF"> 
    <td height="25">信息简介：</td>
    <td height="25"> 
      <?=$showsmalltext?>
    </td>
  </tr>
	</table>
	<?php
	@include(ECMS_PATH."e/data/template/cp_2.php");
	exit();
}

//返回提示信息内容
function eCheckLevelInfo_ReturnMsgStr($ckuser,$ecms){
	global $check_path,$level_r,$empire,$gotourl,$toreturnurl,$public_r,$dbtbpre,$class_r,$checkinfor;
	$msgstr='';
	if($ecms=='NotLogin')//未登录
	{
		$msgstr="您还未登陆，<a href='$gotourl'><u>点击这里</u></a>进行登陆操作；注册请<a href='".$public_r['newsurl']."e/member/register/'><u>点击这里</u></a>。";
	}
	elseif($ecms=='SingleLogin')//只能一人在线
	{
		$msgstr="同一帐号只能一人在线，<a href='$gotourl'><u>点击这里</u></a>重新登陆；注册请<a href='".$public_r['newsurl']."e/member/register/'><u>点击这里</u></a>。";
	}
	elseif($ecms=='NotCheckUser')//未审核
	{
		$msgstr="您的帐号还未审核通过，<a href='$gotourl'><u>点击这里</u></a>重新登陆；注册请<a href='".$public_r['newsurl']."e/member/register/'><u>点击这里</u></a>。";
	}
	elseif($ecms=='NotLevelClass')//权限不足(栏目设置)
	{
		$msgstr="您没有足够权限查看此信息! <a href='$gotourl'><u>点击这里</u></a>重新登陆；注册请<a href='".$public_r['newsurl']."e/member/register/'><u>点击这里</u></a>。";
	}
	elseif($ecms=='NotLevelGroup')//权限不足(会员组)
	{
		$msgstr="您的会员级别不足(您的当前级别：".$level_r[$ckuser['groupid']]['groupname'].")，没有查看此信息的权限! <a href='$gotourl'><u>点击这里</u></a>重新登陆；注册请<a href='".$public_r['newsurl']."e/member/register/'><u>点击这里</u></a>。";
	}
	elseif($ecms=='NotLevelViewGroup')//权限不足(访问组)
	{
		$msgstr="您的会员级别不足，没有查看此信息的权限! <a href='$gotourl'><u>点击这里</u></a>重新登陆；注册请<a href='".$public_r['newsurl']."e/member/register/'><u>点击这里</u></a>。";
	}
	elseif($ecms=='NotUserfen')//点数不够
	{
		$msgstr="您的点数不足(您当前拥有的点数 ".$ckuser['userfen']." 点)，没有查看此信息的权限! <a href='$gotourl'><u>点击这里</u></a>重新登陆；注册请<a href='".$public_r['newsurl']."e/member/register/'><u>点击这里</u></a>。";
	}
	else
	{
		$msgstr="您还未登陆，<a href='$gotourl'><u>点击这里</u></a>进行登陆操作；注册请<a href='".$public_r['newsurl']."e/member/register/'><u>点击这里</u></a>。";
	}
	return $msgstr;
}

//返回需要的查看权限提示
function eCheckLevelInfo_ReturnViewLevelSay($infor){
	global $check_path,$level_r,$empire,$gotourl,$toreturnurl,$public_r,$dbtbpre,$class_r,$checkinfor;
	if(empty($infor['userfen']))//不需要扣点
	{
		if($class_r[$infor['classid']]['cgtoinfo'])//栏目设置
		{
			$ViewLevel="需要 [".eCheckLevelInfo_ViewInfoLevels($infor['eclass_cgroupid'])."] 级别才能查看。";
		}
		else
		{
			if($infor['groupid']>0)
			{
				$ViewLevel="需要 [".$level_r[$infor['groupid']]['groupname']."] 级别以上才能查看。";
			}
			else
			{
				$ViewLevel="需要 [特定访问组] 级别才能查看。";
			}
		}
	}
	else//需要扣点
	{
		if($class_r[$infor['classid']]['cgtoinfo'])//栏目设置
		{
			$ViewLevel="需要 [".eCheckLevelInfo_ViewInfoLevels($infor['eclass_cgroupid'])."] 级别与扣除 ".$infor['userfen']." 点才能查看。";
		}
		else
		{
			if($infor['groupid']>0)
			{
				$ViewLevel="需要 [".$level_r[$infor['groupid']]['groupname']."] 级别以上与扣除 ".$infor['userfen']." 点才能查看。";
			}
			else
			{
				$ViewLevel="需要 [特定访问组] 级别与扣除 ".$infor['userfen']." 点才能查看。";
			}
		}
	}
	return $ViewLevel;
}

//返回权限列表
function eCheckLevelInfo_ViewInfoLevels($groupid){
	global $level_r;
	if(empty($groupid))
	{
		return '至少会员';
	}
	$r=explode(',',$groupid);
	$count=count($r)-1;
	$groups='';
	$dh='';
	for($i=1;$i<$count;$i++)
	{
		$groups.=$dh.$level_r[$r[$i]][groupname];
		$dh=',';
	}
	return $groups;
}

//返回简介字段
function eCheckLevelInfo_ReturnIntroField($r){
	global $public_r,$class_r,$emod_r,$check_tbname;
	$sublen=120;//截取120个字
	$mid=$class_r[$r[classid]]['modid'];
	$smalltextf=$emod_r[$mid]['smalltextf'];
	$stf=$emod_r[$mid]['savetxtf'];
	//简介
	$value='';
	$showf='';
	if($smalltextf&&$smalltextf<>',')
	{
		$smr=explode(',',$smalltextf);
		$smcount=count($smr)-1;
		for($i=1;$i<$smcount;$i++)
		{
			$smf=$smr[$i];
			if($r[$smf])
			{
				$value=$r[$smf];
				$showf=$smf;
				break;
			}
		}
	}
	if(empty($showf))
	{
		$value=strip_tags($r['newstext']);
		$value=esub($value,$sublen);
		$showf='newstext';
	}
	//存文本
	if($stf==$showf)
	{
		$value='';
	}
	return stripSlashes($value);
}

?>