<?php
require("../class/connect.php");
require("../class/db_sql.php");
require("../data/dbcache/class.php");
$link=db_connect();
$empire=new mysqlquery();
define('WapPage','index');
$usewapstyle='';
$wapstyle=0;
$pr=array();
$GLOBALS['navclassid']=0;
require("wapfun.php");
$pagetitle=ehtmlspecialchars($public_r['sitename']);
$pagekey=ehtmlspecialchars($pr['sitekey']);
$pagedes=ehtmlspecialchars($pr['siteintro']);
//参数
$ecmsvar_mbr=array();
$ecmsvar_mbr['wapstyle']=$wapstyle;
$ecmsvar_mbr['urladdcs']=ewap_UrlAddCs();

require('template/'.$usewapstyle.'/index.temp.php');
db_close();
$empire=null;
?>