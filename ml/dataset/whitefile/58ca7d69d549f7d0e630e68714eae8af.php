<?php
require("../../class/connect.php");
require("../../class/q_functions.php");
require("../../class/db_sql.php");
require("../class/user.php");
require('../class/friendfun.php');
require "../".LoadLang("pub/fun.php");
$link=db_connect();
$empire=new mysqlquery();
$editor=1;
eCheckCloseMods('member');//关闭模块
$user=islogin();
$line=25;
$page_line=10;
$start=0;
$page=(int)$_GET['page'];
$page=RepPIntvar($page);
$cid=(int)$_GET['cid'];
$a="";
if($cid)
{
	$a=" and cid='$cid'";
	$search="&cid=$cid";
}
$offset=$page*$line;
$totalquery="select count(*) as total from {$dbtbpre}enewshy where userid='$user[userid]'".$a;
$num=$empire->gettotal($totalquery);
$query="select fid,fname,fsay from {$dbtbpre}enewshy where userid='$user[userid]'".$a;
$query.=" order by fid desc limit $offset,$line";
$sql=$empire->query($query);
$returnpage=page1($num,$line,$page_line,$start,$page,$search);
//返回分类
$select=ReturnFriendclass($user[userid],$cid);
//导入模板
require(ECMS_PATH.'e/template/member/friend.php');
db_close();
$empire=null;
?>