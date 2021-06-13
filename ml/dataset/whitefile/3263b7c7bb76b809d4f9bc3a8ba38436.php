<?php
define('InEmpireCMSDbSql',TRUE);

//------------------------- 数据库 -------------------------

//链接数据库
function do_dbconnect($dbhost,$dbport,$dbusername,$dbpassword,$dbname){
	global $ecms_config;
	$dblocalhost=$dbhost;
	//端口
	if($dbport)
	{
		$dblocalhost.=':'.$dbport;
	}
	$dblink=@mysql_connect($dblocalhost,$dbusername,$dbpassword);
	if(!$dblink)
	{
		echo"Cann't connect to DB!";
		exit();
	}
	//编码
	if($ecms_config['db']['dbver']>='4.1')
	{
		$q='';
		if($ecms_config['db']['setchar'])
		{
			$q='character_set_connection='.$ecms_config['db']['setchar'].',character_set_results='.$ecms_config['db']['setchar'].',character_set_client=binary';
		}
		if($ecms_config['db']['dbver']>='5.0')
		{
			$q.=(empty($q)?'':',').'sql_mode=\'\'';
		}
		if($q)
		{
			@mysql_query('SET '.$q,$dblink);
		}
	}
	@mysql_select_db($dbname,$dblink);
	return $dblink;
}

//关闭数据库
function do_dbclose($dblink){
	if($dblink)
	{
		@mysql_close($dblink);
	}
}

//设置编码
function do_DoSetDbChar($dbchar,$dblink){
	@mysql_query('set character_set_connection='.$dbchar.',character_set_results='.$dbchar.',character_set_client=binary;',$dblink);
}

//取得mysql版本
function do_eGetDBVer($selectdb=0){
	global $empire;
	if($selectdb&&$empire)
	{
		$getdbver=$empire->egetdbver();
	}
	else
	{
		$getdbver=@mysql_get_server_info();
	}
	return $getdbver;
}

//普通操作
function do_dbconnect_common($dbhost,$dbport,$dbusername,$dbpassword,$dbname=''){
	global $ecms_config;
	$dblocalhost=$dbhost;
	//端口
	if($dbport)
	{
		$dblocalhost.=':'.$dbport;
	}
	$dblink=@mysql_connect($dblocalhost,$dbusername,$dbpassword);
	return $dblink;
}

function do_dbquery_common($query,$dblink,$ecms=0){
	global $ecms_config;
	if($ecms==0)
	{
		$sql=mysql_query($query,$dblink);
	}
	else
	{
		$sql=mysql_query($query,$dblink) or die($ecms_config['db']['showerror']==1?str_replace($GLOBALS['dbtbpre'],'***_',mysql_error().'<br>'.$query):'DbError');
	}
	return $sql;
}

function do_dbfetch_common($sql){
	$r=mysql_fetch_array($sql);
	return $r;
}

function do_dblastid_common($dblink){
	$id=mysql_insert_id($dblink);
	if($id<0)
	{
		$sql=do_dbquery_common('SELECT last_insert_id() as total',$dblink);
		$r=do_dbfetch_common($sql);
		$id=$r['total'];
	}
	return $id;
}

//选择数据库
function do_eUseDb($dbname,$dblink,$query=0){
	if($query)
	{
		$usedb=do_dbquery_common('use `'.$dbname.'`',$dblink);
	}
	else
	{
		$usedb=@mysql_select_db($dbname,$dblink);
	}
	return $usedb;
}



//------------------------- 数据库操作 -------------------------

class mysqlquery
{
	var $dblink;
	var $sql;//sql语句执行结果
	var $query;//sql语句
	var $num;//返回记录数
	var $r;//返回数组
	var $id;//返回数据库id号
	//执行mysql_query()语句
	function query($query){
		global $ecms_config;
		$this->sql=mysql_query($query,return_dblink($query)) or die($ecms_config['db']['showerror']==1?str_replace($GLOBALS['dbtbpre'],'***_',mysql_error().'<br>'.$query):'DbError');
		return $this->sql;
	}
	//执行mysql_query()语句2
	function query1($query){
		$this->sql=mysql_query($query,return_dblink($query));
		return $this->sql;
	}
	//执行mysql_query()语句(选择数据库USE)
	function usequery($query){
		global $ecms_config;
		$this->sql=mysql_query($query,$GLOBALS['link']) or die($ecms_config['db']['showerror']==1?str_replace($GLOBALS['dbtbpre'],'***_',mysql_error().'<br>'.$query):'DbError');
		if($GLOBALS['linkrd'])
		{
			mysql_query($query,$GLOBALS['linkrd']);
		}
		return $this->sql;
	}
	//执行mysql_query()语句(操作数据库)
	function updatesql($query){
		global $ecms_config;
		$this->sql=mysql_query($query,return_dblink($query)) or die($ecms_config['db']['showerror']==1?str_replace($GLOBALS['dbtbpre'],'***_',mysql_error().'<br>'.$query):'DbError');
		return $this->sql;
	}
	//执行mysql_fetch_array()
	function fetch($sql)//此方法的参数是$sql就是sql语句执行结果
	{
		$this->r=mysql_fetch_array($sql);
		return $this->r;
	}
	//执行fetchone(mysql_fetch_array())
	//此方法与fetch()的区别是:1、此方法的参数是$query就是sql语句 
	//2、此方法用于while(),for()数据库指针不会自动下移，而fetch()可以自动下移。
	function fetch1($query)
	{
		$this->sql=$this->query($query);
		$this->r=mysql_fetch_array($this->sql);
		return $this->r;
	}
	//执行mysql_num_rows()
	function num($query)//此类的参数是$query就是sql语句
	{
		$this->sql=$this->query($query);
		$this->num=mysql_num_rows($this->sql);
		return $this->num;
	}
	//执行numone(mysql_num_rows())
	//此方法与num()的区别是：1、此方法的参数是$sql就是sql语句的执行结果。
	function num1($sql)
	{
		$this->num=mysql_num_rows($sql);
		return $this->num;
	}
	//执行numone(mysql_num_rows())
	//统计记录数
	function gettotal($query)
	{
		$this->r=$this->fetch1($query);
		return $this->r['total'];
	}
	//执行free(mysql_result_free())
	//此方法的参数是$sql就是sql语句的执行结果。只有在用到mysql_fetch_array的情况下用
	function free($sql)
	{
		mysql_free_result($sql);
	}
	//执行seek(mysql_data_seek())
	//此方法的参数是$sql就是sql语句的执行结果,$pit为执行指针的偏移数
	function seek($sql,$pit)
	{
		mysql_data_seek($sql,$pit);
	}
	//执行id(mysql_insert_id())
	function lastid()//取得最后一次执行mysql数据库id号
	{
		$this->id=mysql_insert_id($GLOBALS['link']);
		if($this->id<0)
		{
			$this->id=$this->gettotal('SELECT last_insert_id() as total');
		}
		return $this->id;
	}
	//返回影响数量(mysql_affected_rows())
	function affectnum()//取得操作数据表后受影响的记录数
	{
		return mysql_affected_rows($GLOBALS['link']);
	}
	//执行escape_string()函数
	function EDbEscapeStr($str){
		$str=mysql_real_escape_string($str);
		return $str;
	}
	//取得数据库版本
	function egetdbver()
	{
		$this->r=$this->fetch1('select version() as version');
		return $this->r['version'];
	}
}
?>