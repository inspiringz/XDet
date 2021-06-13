<?php
define('NoDb',1);
require('../inc/config.php');
if((isset($site_db) && is_array($site_db))) {
	echo('<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><meta name="robots" content="noindex,nofollow,nosnippet,noarchive">');
	function ifcachephpcode() {
		$array=@get_loaded_extensions();
		if($array==false) {$array=array();}
		$cached=false;
		foreach($array as $key=>$val) {
			$val=strtolower($val);
			if(stripos($val,'opcache')===false && stripos($val,'xcache')===false) {
			}else {
				Return ' (如果一直出现安装界面,请清空Opcache等组件的缓存)';
			}
		}
		Return '';
	}
	die('UCMS已安装 <a href="http://uuu.la/help/reinstall.html" target="_blank">如何重新安装</a>  <a href="../ucms">点此进入后台</a>'.ifcachephpcode());
}
if(isset($_GET['databasetest'])) {
	$site_db=array('database'=>$_POST['linkkind'],'host'=>$_POST['host'],'dbname'=>'','user'=>$_POST['user'],'password'=>$_POST['psd']);
	$dbtest = new db();
	$dbtest -> connect($site_db);
	if(is_object($dbtest)) {
		echo('连接成功');
	}
	exit();
}
$extension=@get_loaded_extensions();
if($extension==false) {
	$extension=array();
}
function ext_exist($extname,$returnkind=0) {
	global $extension;
	if(in_array($extname,$extension)) {
		if($returnkind) {
			Return true;
		}
		echo('支持');
	}else {
		if($returnkind) {
			Return false;
		}
		if($extname=='pdo_sqlite') {echo('无法使用sqlite数据库');Return ;}
		if($extname=='pdo_mysql') {echo('不支持,建议使用pdo方式连接mysql');Return ;}
		if($extname=='mysql') {echo('建议使用pdo方式连接mysql');Return ;}
		if($extname=='json') {echo('必须使用该组件');Return ;}
		echo('不支持');
	}
}
function dir_test($dir) {
	$dir='../'.$dir.'/rwtest/';
	if(is_dir($dir)) {
		
	}else {
		@mkdir($dir);
		if(!is_dir($dir)) {
			Return false;
		}
	}
	$filename=$dir.'test.txt';
	$fp = @fopen($filename,"w");
	if(!@fwrite($fp,"readwritetest")){
		@fclose($fp);
		rmdir($dir);
		Return false;
	}else {
		@fclose($fp);
		unlink($filename);
	}
	rmdir($dir);
	Return true;
}
function get_installdir() {
	$_SERVER['PHP_SELF']=str_replace('\\','/',$_SERVER['PHP_SELF']);
	$dir=str_replace('install/index.php','',$_SERVER['PHP_SELF']);
	Return $dir;
}
$info='';
$configfile='../inc/config.php';
isset($_GET['step']) ? $step=intval($_GET['step']) : $step=0;
if($step==0) {
	unset($_COOKIE["ucmsid"]);
	$_GET['step']=0;
	$disableinstall=0;
	if(@filesize('../inc/config.php')>1000) {
		$info.='貌似已经安装过了,如果一直出现安装页面,请更新OPcache等组件的缓存<br><a href="../ucms/">点此登录后台</a>';
	}
	if(!ext_exist('mysql',1) && !ext_exist('pdo_mysql',1) && !ext_exist('pdo_sqlite',1)) {
		if(count($extension)==0) {
			$info.='get_loaded_extensions函数被禁用,无法判断是否能安装<br>';
		}
		$info.='当前空间不支持系统所需的数据库连接方式,无法进行安装<br>';
		$disableinstall=1;
	}
	if(dir_test('cache')) {
		$cachedirtips='支持';
	}else {
		$info.='缓存目录cache不可写,无法进行安装<br>';
		$disableinstall=1;
		$cachedirtips='不可写';
	}
	//配置文件写权限
	$fp = @fopen($configfile,"a");
	if($fp) {
		if(!fwrite($fp,"\r\n")){
			$disableinstall=1;
			$info.='inc/config.php无写权限,无法安装<br>';
		}
		fclose($fp);
	}else {
		$disableinstall=1;
		$info.='inc/config.php无写权限,无法安装<br>';
	}
	
	if(dir_test('uploadfile')) {
		$uploadfiledirtips='支持';
	}else {
		$info.='上传目录uploadfile不可写,无法上传文件<br>';
		$uploadfiledirtips='不可写';
	}
	if(dir_test('inc')) {
		$incdirtips='支持';
	}else {
		$info.='inc目录不可写,无法使用sqlite数据库<br>';
		$incdirtips='不可写';
	}
}elseif($step==1) {
	if(isset($_GET['code'])) {//绑定qq登录
		setcookie("ucmsid", $_GET['code'], time()+3600,'/');
		echo('<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">');
		echo('<script type="text/javascript">alert("绑定成功,请继续安装");window.close();</script>');
		die();
	}
	$mysqldatabase=true;
	$sqlitedatabase=true;
	if(ext_exist('pdo_mysql',1)==true){
		$defaultmysql='mysqlpdo';
	}elseif(ext_exist('mysql',1)==true) {
		$defaultmysql='mysql';
	}else {
		$defaultmysql='';
		$mysqldatabase=false;
	}
	if(ext_exist('pdo_sqlite',1)==false) {
		$sqlitedatabase=false;
	}
	$sqlite_dbname=substr(md5(rand(9999999,99999999).time().rand(9999999,999999999).'pa*3'),0,16).'.db';
	$installdir=get_installdir();
	$installdir='\''.str_replace('\\','/',$installdir).'\'';
	$ifrewrite=false;
	if($installdir!="'/'") {
		$ifrewrite=false;
	}else {
		$rewritetesturi='//'.$_SERVER['HTTP_HOST'].'/rewrite_test'.rand(666,1024).'.html';
		$ifrewrite=true;
	}
}elseif($step==2) {
	function filespecialchars($str) {
		Return str_replace("'","\\'",$str);
	}
	$installinfo=array();
	foreach($_POST as $key=>$val) {
		$_POST[$key]=trim($val);
	}
	if($_POST['database']=='mysqlpdo' || $_POST['database']=='mysql') {
		$installinfo['sitedb']="array('database'=>'".$_POST['database']."','host'=>'".$_POST['mysql_host']."','dbname'=>'".$_POST['mysql_dbname']."','user'=>'".filespecialchars($_POST['mysql_user'])."','password'=>'".filespecialchars($_POST['mysql_password'])."')";
	}elseif($_POST['database']=='sqlitepdo') {
		if(substr($_POST['sqlite_dbfile'],strlen($_POST['sqlite_dbfile'])-3,3)!=='.db') {
			$_POST['sqlite_dbfile'].='.db';
		}
		$installinfo['sitedb']="array('database'=>'sqlitepdo','dbfile'=>IncDir.'".$_POST['sqlite_dbfile']."')";
	}
	else {die('error');}
	$_POST['tableex']=strtolower($_POST['tableex']);
	if(!preg_match("/^[a-z0-9_]+$/",$_POST['tableex'])){
		die('表名前缀格式不正确');
	}
	$installinfo['tableex']='\''.$_POST['tableex'].'\'';
	$installinfo['version']='\''.version.'\'';
	$installinfo['MysqlEngine']='\''.MysqlEngine.'\'';
	$installinfo['systemdomain']='\''.trim($_POST['systemdomain']).'\'';
	if($_POST['urlrewrite']==1) {
		$installinfo['urlrewrite']='1';
	}else {
		$installinfo['urlrewrite']='0';
	}
	$installinfo['sitehash']='\''.substr(md5(rand(1000000,9999999).time()),0,20).'\'';
	//获取安装目录
	$document_root=str_replace('/','\\',$_SERVER["DOCUMENT_ROOT"]);
	if(substr($document_root,strlen($document_root)-1,1)!='\\') {
		$document_root.=DIRECTORY_SEPARATOR;
	}
	$script_root=dirname(dirname(__FILE__));
	if(substr($script_root,strlen($script_root)-1,1)!='\\') {
		$script_root.=DIRECTORY_SEPARATOR;
	}
	$installinfo['systemdir']=get_installdir();
	$installinfo['systemdir']='\''.str_replace('\\','/',$installinfo['systemdir']).'\'';

	$configcontent=file_get_contents('../inc/config_default.php');
	if(!$configcontent) {
		echo('<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">');
		die('/inc/config_default.php文件不存在');
	}
	foreach($installinfo as $key=>$val) {
		$configcontent=str_replace('\'{'.$key.'}\'',$val,$configcontent);
	}
	//创建数据库
	if($_POST['database']=='mysqlpdo' || $_POST['database']=='mysql') {//mysql数据库
		$site_db=array('database'=>$_POST['database'],'host'=>$_POST['mysql_host'],'dbname'=>'','user'=>$_POST['mysql_user'],'password'=>$_POST['mysql_password']);
		$db = new db();
		$db -> connect($site_db);
		$db ->query('CREATE DATABASE IF NOT EXISTS `'.$_POST['mysql_dbname'].'` ');
		$alldb = $db -> all('SHOW DATABASES');
		$ifin=0;
		foreach($alldb as $val) {
			if($val['Database']==$_POST['mysql_dbname']) {
				$ifin=1;
				break;
			}
		}
		if($ifin==0) {
			echo('<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">');
			die('创建数据库失败,请确认您的mysql账号'.$_POST['mysql_dbname'].'是否有创建数据库权限,或者手动建立数据库');
		}
		$site_db=array('database'=>$_POST['database'],'host'=>$_POST['mysql_host'],'dbname'=>$_POST['mysql_dbname'],'user'=>$_POST['mysql_user'],'password'=>$_POST['mysql_password']);
		$sqlcontent=file_get_contents('mysql.sql');
	}elseif($_POST['database']=='sqlitepdo') {
		$site_db=array('database'=>'sqlitepdo','dbfile'=>IncDir.$_POST['sqlite_dbfile']);
		$fp = @fopen(IncDir.$_POST['sqlite_dbfile'],"wb");
		if(!@fwrite($fp,' ')){
			echo('<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">');
			die('创建SQLite数据库失败,请确认INC目录下拥有写权限');
			fclose($fp);
		}
		fclose($fp);
		unlink(IncDir.$_POST['sqlite_dbfile']);
		$sqlcontent=file_get_contents('sqlite.sql');
	}
	if(strlen($sqlcontent)<10) {
		echo('<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">');
		die('读取sql文件失败,请确认install/mysql.sql或install/sqlite.sql是否存在');
	}
	$db = new db();
	$db -> connect($site_db);
	$sqlcontent=str_replace('uuu_',$_POST['tableex'],$sqlcontent);
	$sqlcontent=str_replace('MyISAM',MysqlEngine,$sqlcontent);
	$allsql=explode(';',$sqlcontent);
	foreach($allsql as $thisql) {
		$thisql.=';';
		if(strlen($thisql)>5) {
			$return=$db ->query($thisql);
		}
	}
	//写入配置文件
	$fp = fopen($configfile,"w");
	if(!fwrite($fp,$configcontent)){
		fclose($fp);
		echo('<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">');
		die('配置文件写入失败,请赋予inc/config.php写权限');
	}
	fclose($fp);
	if(isset($_COOKIE["ucmsid"]) && !empty($_COOKIE["ucmsid"])) {
		$ucmsid=dbstr($_COOKIE["ucmsid"]);
		unset($_COOKIE["ucmsid"]);
	}else {
		$ucmsid='';
	}
	if(!preg_match("/^[a-zA-Z0-9_]+$/",$_POST['uuuadminname'])){
		die('用户名格式不正确');
	}
	$goodadmin=array(
	"username"=>$_POST['uuuadminname'],
	"psd"=>password_md5($_POST['uuuadminpassword']),
	"nickname"=>'管理员',
	"alevel"=>3,
	"kind"=>'0',
	"ucmsid"=>$ucmsid,
	"power"=>'{"b":{"1":1,"2":1},"alevel":3}'
	);
	$id = $db -> insert($_POST['tableex'].'admin',$goodadmin);
	if($id>0) {
		?>
		<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
		<html xmlns="http://www.w3.org/1999/xhtml">
		<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>安装成功</title>
		<style>
		a{color:blue}
		body{text-align:center;font-size:16px;padding-top:50px;}
		</style>
		</head>
		<body>
		UCMS安装成功,请牢记您的账号密码,默认后台路径为<?php echo(AdminDir);?>,<a href="../<?php echo(AdminDir);?>/login.php" target="_blank">点此进入后台</a>
		<br><br>帮助:
		<a href="http://uuu.la/help/admindir.html" target="_blank">如何修改后台路径</a> 
		<a href="http://uuu.la/help/adminhelp.html" target="_blank">后台使用说明</a> 
		<a href="http://uuu.la/help/adminkey.html" target="_blank">后台快捷键使用技巧</a>
		<a href="http://uuu.la/help/faster.html" target="_blank">UCMS性能优化</a>
		<a href="http://uuu.la/services/" target="_blank">UCMS授权购买</a>
		</body>
		</html>
		<?php
		die('');
	}else {
		echo('<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">');
		die('添加管理员失败,请确认数据库权限,删除数据库后重试');
	}
}else {
	echo("<meta http-equiv=refresh content='0; url=?step=0'>");
	die('');
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script src="../<?php echo(AdminDir);?>/img/jquery.min.js"></script>
<link rel="shortcut icon" href="../<?php echo(AdminDir);?>/img/ico.ico" >
<title>UCMS<?php echo(version);?>安装</title>
<script type="text/javascript">cmsversion='<?php echo(version);?>';</script>
<style>
body{ color:#4791d0; font-size:12px; font-family: "Microsoft YaHei",STHeiti,"Hiragino Sans GB","WenQuanYi Micro Hei","Heiti SC", NSimSun,SimSun,Arial, Helvetica, sans-serif; }
table{ border-collapse:collapse; }
td{ padding:5px 10px; }
input{ font-size: 12px; line-height: 20px; height: 22px; padding-left:5px; font-weight:bold; }
label{ line-height: 12px; }
label input{ height: 12px; }
i{ font-size:12px; font-style: normal; color:#ccc; margin-left:10px; }
.main{ width:666px; margin:0 auto; margin-top:80px; padding:0px; }
.title{ font-size:18px; font-weight:bold; padding:8px 0 8px 10px; background: #1c86d1; color:#fff; }
.title1{ font-size:14px; font-weight:bold; }
.info{ border-left:1px solid #eee; border-right:1px solid #eee; border-bottom:1px solid #eee; padding:20px; margin: 0 auto; }
.detail{ padding-left:20px; color:#000; font-size:12px; padding-bottom:10px; }
.detail li{ border-bottom:1px #eee dotted; margin-top:5px; padding-bottom:5px; width:500px; }
.detail li em{ float:right; margin-right:50px; font-style: normal; }
.tip{ margin-top:5px; border:1px solid #eee; padding:10px; width:400px; margin-left:30px; color:#ff0000; font-size:12px; line-height:20px; }
.nextstep{ display:block; margin:20px 30px 0 200px; height:25px; width:90px; font-size:14px; }
#databaseinfo{padding:10px;}
.mysqltd{display:none;}
.sqlitetd{display:none;}
a{color:#0000FF;}
.uuulogin p{}
.qqlogin{margin-top:3px;margin-right:5px;cursor:pointer;background:url(../ucms/img/bgico.png) no-repeat;background-position:-24px -32px;width:63px;height:24px;}
</style>
</head>
<body>
<div class="main">
<?php if($step==0) {?>
<div class="title">安装向导--环境检查</div>
<div class="info">
<form method=post action="?step=1">
	<div class="detail">
		<li>PHP版本 <em><?php echo(PHP_VERSION);?></em></li>
		<li>pdo_mysql 组件<em><?php ext_exist('pdo_mysql');?></em></li>
		<?php
		if(!ext_exist('pdo_mysql',1)) {
		?>
			<li>MYSQL组件<em><?php ext_exist('mysql');?></em></li>
		<?php
		}
		?>
		<li>pdo_sqlite 组件<em><?php ext_exist('pdo_sqlite');?></em></li>
		<li>JSON <em><?php ext_exist('json');?></em></li>
		<li>缓存目录(cache)读写权限 <em><?php echo($cachedirtips);?></em></li>
		<li>上传目录(uploadfile)读写权限 <em><?php echo($uploadfiledirtips);?></em></li>
		<li>Sqlite数据库目录(inc)读写权限 <em><?php echo($incdirtips);?></em></li>
		<?php
		if(strlen($info)>0) {
			echo('<div class="tip">'.$info.'</div>');
		}
		?>
		
		<input type="button" onclick="javascript:window.location.href='?step=1';" value="<?php if($disableinstall==1){echo('无法安装');}else{echo('下一步');}?>" class="nextstep" <?php if($disableinstall==1){echo(' disabled');}?>><br>
		<a href="http://uuu.la/help/download.html" target="_blank">查看最新版本UCMS</a>
	</div>
</form>
</div>
<?php }?>

<?php if($step==1) {?>
<div class="title">安装向导--配置</div>
<div class="info">
	<form method=post action="?step=2" onsubmit="return installcheck()">
	<div class="detail ">
	
	<div class="title1">数据库连接信息</div>
	<table width=600>
	<tr>
		<td align="left" width=120>数据库类型 : </td>
		<td>
		<label><input type="radio" name="database" id="mysqlradio" value="<?php echo($defaultmysql);?>" <?php if($mysqldatabase==false) {echo(' disabled');}else{echo(' checked');}?>>MySQL</label>&nbsp;&nbsp;&nbsp;&nbsp;
		<label><input type="radio" name="database" id="sqliteradio" value="sqlitepdo"<?php if($sqlitedatabase==false) {echo(' disabled');}if($sqlitedatabase==true && $mysqldatabase==false) {echo('checked');}?>>SQLite</label>
		<i><a href="http://uuu.la/help/database.html" target="_blank">数据库选择说明</a></i>
		</td>
	</tr>
	<tr class="mysqltd">
		<td align="left" width=120>MySQL主机地址 : </td>
		<td>
		<input type="text" name="mysql_host" id="mysql_host" size="40" value="127.0.0.1"><i>如:localhost:3306</i>
		</td>
	</tr>
	<tr class="mysqltd">
		<td align="left" width=120>数据库名称 : </td>
		<td>
		<input type="text" name="mysql_dbname" id="mysql_dbname" size=40>
		</td>
	</tr>
	<tr class="mysqltd">
		<td align="left" width=120>数据库用户名 : </td>
		<td>
		<input type="text" name="mysql_user" id="mysql_user" size=40>
		</td>
	</tr>
	<tr class="mysqltd">
		<td align="left" width=120>数据库用户密码 : </td>
		<td>
		<input type="password" name="mysql_password" id="mysql_password" size=40> 
		<i id="databasetest" style="display:none;cursor:pointer">连接测试</i>
		<script>
			if (typeof jQuery == 'undefined') { 
				alert('jQuery载入失败,请先将后台目录重命名为ucms');
			}
			$(function(){
				$('#mysql_password').change(function(){
					database_test();
				});
				$('#mysql_user').change(function(){
					database_test();
				});
				$('#databasetest').click(function(){
					database_test();
				});
			});
			function database_test(){
				host=$('#mysql_host').val();
				user=$('#mysql_user').val();
				psd=$('#mysql_password').val();
				linkkind='<?php echo($defaultmysql);?>';
				if (host.length>3 && user.length>0 && psd.length>0)
				{
					$('#databasetest').css('color','#ccc');
					$('#databasetest').text('连接测试中');
					$('#databasetest').show();
					$.post("?databasetest=1",
					{
						host:host,
						user:user,
						psd:psd,
						linkkind:linkkind
					},
					function(data,status){
						if (data=='连接成功')
						{
							$('#databasetest').css('color','#ccc');
						}else{
							$('#databasetest').css('color','#ff0000');
						}
						$('#databasetest').text(data);
						$('#databasetest').show();
					});
				}
			}
		</script>
		</td>
	</tr>
	<tr class="sqlitetd">
		<td align="left" width=120>SQLite数据库文件名 : </td>
		<td>
		<input type="text" name="sqlite_dbfile" id="sqlite_dbfile" size=40 value="<?php echo($sqlite_dbname);?>" readonly>
		</td>
	</tr>
	<tr>
		<td align="left" width=120>数据库表名前缀 : </td>
		<td>
		<input type="text" name="tableex" id="tableex" size=40 value="ucms_"><i>避免与其他程序重复</i>
		</td>
	</tr>
	<tr>
		<td align="left" width=120></td>
		<td></td>
	</tr>
	</table>
<div class="title1">网站配置</div>
<table width=550>
	<tr>
		<td align="left" width=120 valign=top>网站域名 : </td>
		<td valign=top>
		<?php
		$otherdomain='';
		if(substr(server_name(),0,4)=='www.') {
			$otherdomain=';'.substr(server_name(),4,strlen(server_name()));
		}else {
			if(substr_count(server_name(),".")==1) {
				$otherdomain=';www.'.server_name();
			}else {
				if(substr_count(server_name(),".")==2 && substr(server_name(),-6)=='com.cn') {
					$otherdomain=';www.'.server_name();
				}
			}
		}
		?>
		<input type="text" name="systemdomain" id="systemdomain" size=40 value=""><i>多个用;分隔</i><br><i>不限制域名访问则无需填写。绑定域名后只允许通过该域名访问。</i>
		</td>
	</tr>
	<tr>
		<td align="left" width=120>伪静态 : </td>
		<td>
		<label id="urlrewriteradiotips"><input type="radio" id="urlrewriteradio" name="urlrewrite" value="1"<?php if($installdir!="'/'") {echo(' disabled');}?>>启用<?php if($installdir!="'/'") {echo('(二级目录不能伪静态)');}?></label>
		<label><input type="radio" id="urlrewriteradiono" name="urlrewrite" value="0" checked>不启用</label>
		<i>
		<?php
			if(stripos(@$_SERVER['SERVER_SOFTWARE'],'ginx')>0) {
				echo('<a href="http://uuu.la/help/nginxrewrite.html" target="_blank">NGINX伪静态配置说明</a>');
				echo('<script type="text/javascript">alert("NGINX服务器请先配置伪静态规则,并启用伪静态,否则前台无法访问,具体配置请查看配置说明");</script>');
			}elseif(stripos(@$_SERVER['SERVER_SOFTWARE'],'pache')>0){
				echo('<a href="http://uuu.la/help/apacherewrite.html" target="_blank">APACHE伪静态配置说明</a>');
			}elseif(stripos(@$_SERVER['SERVER_SOFTWARE'],'IIS')>0){
				echo('<a href="http://uuu.la/help/iisrewrite.html" target="_blank">IIS伪静态配置说明</a>');
			}else {
				echo('<a href="http://uuu.la/help/rewrite.html" target="_blank">配置说明</a>');
			}
		?>
		
		</i>
		<?php if($installdir=="'/'") {
		?>
		<script>
		$(window).load(function (){
			setTimeout("setrewrite();",1000)
		});
		function setrewrite(){
			rewriteurl=document.getElementById("rewriterestiframe").contentWindow.location.href;
			if (rewriteurl.indexOf("install")>0)
			{
				$('#urlrewriteradiotips').append('(配置成功)');
				$('#urlrewriteradio').attr('checked','true');
				$("#urlrewriteradio").unbind("click");
			}else{
				$('#urlrewriteradio').click(function(){
					alert('系统检测到伪静态尚未配置成功.\r\n请在配置成功后开启. 否则会造成网站前台无法访问.\r\n安装后也可修改inc/config.php文件选择是否启用伪静态');
				});
			}
		}
		</script>
		<iframe id="rewriterestiframe" src="<?php echo($rewritetesturi);?>" style="display:none"></iframe>
		<?php
			}
		?>
		</td>
	</tr>
	</table>

<div class="title1">管理员帐户信息</div>
	
	<table width=550>
	<tr>
		<td align="left" width=120>用户名 : </td>
		<td>
		<input type="text" name="uuuadminname" id="uuuadminname" size=25 value="admin" style="float:left">
		<div id="uuulogin" style="float:left;margin-left:10px;margin-top:-2px;">
		<p class="ucms3login qqlogin" rel="qq"></p>
		</div>
		<i>绑定QQ登录</i>
		</td>
	</tr>
	<tr>
		<td align="left" width=120>密码 : </td>
		<td>
		<input type="password" name="uuuadminpassword" id="uuuadminpassword" size=40>
		</td>
	</tr>
	<tr>
		<td align="left" width=120>重复密码 : </td>
		<td>
		<input type="password" name="uuuadminpassword2" id="uuuadminpassword2" size=40>
		</td>
	</tr>
	</table>
	<script type="text/javascript">
			$('#systemdomain').change(function(){
				systemdomain_check();
			});
			<?php
			if($mysqldatabase==true) {
				echo("$('.mysqltd').show();");
			}elseif($sqlitedatabase==true) {
				echo("$('.sqlitetd').show();");
			}else {
				echo("alert('抱歉,您的空间不支持mysql或sqlite数据库,不能安装本程序');");
			}
			?>
			$('#mysqlradio').click(function(){
				if ($('#mysqlradio').prop('checked'))
				{
					$('.mysqltd').show();
					$('.sqlitetd').hide();
				}else{
					$('.mysqltd').hide();
				}
			});
			$('#sqliteradio').click(function(){
				if ($('#sqliteradio').prop('checked'))
				{
					$('.sqlitetd').show();
					$('.mysqltd').hide();
				}else{
					$('.sqlitetd').hide();
				}
			});
		function installcheck()
		{
			<?php if($mysqldatabase==true) {}elseif($sqlitedatabase==true) {}else {echo("alert('抱歉,您的空间不支持mysql或sqlite数据库,不能安装本程序');");}?>
			if ($('#mysqlradio').prop('checked'))
				{
					if ($('#mysql_host').val()=='')
					{
						alert('请填写MySQL主机地址');$('#mysql_host').focus();return false;
					}
					if ($('#mysql_dbname').val()=='')
					{
						alert('请填写数据库名称');$('#mysql_dbname').focus();return false;
					}
					if ($('#mysql_user').val()=='')
					{
						alert('请填写数据库用户名');$('#mysql_user').focus();return false;
					}
				}
				if (/^[a-zA-Z][0-9a-zA-Z_]{0,}$/.test($('#tableex').val())==false)
				{
					alert('表名前缀请使用英文字母为前缀');
					return false;
				}
				if (systemdomain_check()==false)
				{
					return false;
				}
				if ($('#uuuadminname').val()=='')
				{
					alert('请填写管理员用户名');$('#uuuadminname').focus();return false;
				}
				if (!isNaN($('#uuuadminname').val()))
				{
					alert('用户名不能为数字');$('#uuuadminname').focus();return false;
				}
				
				if ($('#uuuadminpassword').val()=='')
				{
					alert('请填写管理员密码');$('#uuuadminpassword').focus();return false;
				}
				if ($('#uuuadminpassword').val()!=$('#uuuadminpassword2').val())
				{
					alert('管理员密码与重复密码不一致');$('#uuuadminpassword').focus();return false;
				}
			return true;
		}
		function systemdomain_check(){
			var inputdomain=$('#systemdomain').val();
			if (inputdomain.indexOf('http://')>-1)
			{
				alert("域名填写有误,无需添加http://");
				return false;
			}
			if (inputdomain.indexOf('/')>-1)
			{
				alert("域名填写有误");
				return false;
			}
			if (inputdomain.indexOf(':')>-1)
			{
				alert("域名填写有误,无需填写端口");
				return false;
			}
			return true;
		}
	</script>
		<input type="submit" value="安装" class="nextstep">
			
	</div>
</div>
</form>
<script>
loaded=0;
uuu_token='';
logintarget=3;
</script>
<script src="//uuu.la/loginapi/"></script>
<script>
	if (loaded==0){document.write("<script src='//login.uuu.la/loginapi/'><\/script>");}
</script>
<?php }?>
</div>
</body>
</html>