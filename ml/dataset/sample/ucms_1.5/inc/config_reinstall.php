<?php
//需要重新安装程序,请将此文件复制为config.php,访问首页进行安装
if(stripos($_SERVER['REQUEST_URI'],'install')===false) {
	echo("<meta http-equiv=refresh content='0; url=install/index.php'>");
	exit;
}
date_default_timezone_set('Asia/Shanghai'); 
define('SystemRoot',dirname(dirname(__FILE__)).DIRECTORY_SEPARATOR);
define('IncDir',SystemRoot.'inc'.DIRECTORY_SEPARATOR);
define('CacheDir',SystemRoot.'cache'.DIRECTORY_SEPARATOR);
define('MysqlEngine','MyISAM');//mysql默认引擎MyISAM,或InnoDB,请在安装前修改
define('version','1.5');//版本
define('AdminDir','ucms');//后台目录
define('DbError',1);
$site_db='{sitedb}';
require(IncDir.'func.php');
if (!defined('NoDb') && !isset($GLOBALS['db'])) {$GLOBALS['db'] = new db();$GLOBALS['db'] -> connect($site_db);}
_stripslashes();