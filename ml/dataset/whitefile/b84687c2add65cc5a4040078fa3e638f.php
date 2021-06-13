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
	$dblink=@mysqli_connect($dblocalhost,$dbusername,$dbpassword);
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
			@mysqli_query($dblink,'SET '.$q);
		}
	}
	@mysqli_select_db($dblink,$dbname);
	return $dblink;
}

//关闭数据库
function do_dbclose($dblink){
	if($dblink)
	{
		@mysqli_close($dblink);
	}
}

//设置编码
function do_DoSetDbChar($dbchar,$dblink){
	@mysqli_query($dblink,'set character_set_connection='.$dbchar.',character_set_results='.$dbchar.',character_set_client=binary;');
}

//取得mysql版本
function do_eGetDBVer($selectdb=0){
	global $empire,$link;
	if($selectdb&&$empire)
	{
		$getdbver=$empire->egetdbver();
	}
	else
	{
		if($link)
		{
			$getdbver=@mysqli_get_server_info($link);
		}
		else
		{
			$getdbver='';
		}
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
	$dblink=@mysqli_connect($dblocalhost,$dbusername,$dbpassword);
	return $dblink;
}

function do_dbquery_common($query,$dblink,$ecms=0){
	global $ecms_config;
	if($ecms==0)
	{
		$sql=mysqli_query($dblink,$query);
	}
	else
	{
		$sql=mysqli_query($dblink,$query) or die($ecms_config['db']['showerror']==1?str_replace($GLOBALS['dbtbpre'],'***_',mysqli_error($dblink).'<br>'.$query):'DbError');
	}
	return $sql;
}

function do_dbfetch_common($sql){
	$r=mysqli_fetch_array($sql);
	return $r;
}

function do_dblastid_common($dblink){
	$id=mysqli_insert_id($dblink);
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
		$usedb=@mysqli_select_db($dblink,$dbname);
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
		$this->sql=mysqli_query(return_dblink($query),$query) or die($ecms_config['db']['showerror']==1?str_replace($GLOBALS['dbtbpre'],'***_',mysqli_error(return_dblink($query)).'<br>'.$query):'DbError');
		return $this->sql;
	}
	//执行mysql_query()语句2
	function query1($query){
		$this->sql=mysqli_query(return_dblink($query),$query);
		return $this->sql;
	}
	//执行mysql_query()语句(选择数据库USE)
	function usequery($query){
		global $ecms_config;
		$this->sql=mysqli_query($GLOBALS['link'],$query) or die($ecms_config['db']['showerror']==1?str_replace($GLOBALS['dbtbpre'],'***_',mysqli_error($GLOBALS['link']).'<br>'.$query):'DbError');
		if($GLOBALS['linkrd'])
		{
			mysqli_query($GLOBALS['linkrd'],$query);
		}
		return $this->sql;
	}
	//执行mysql_query()语句(操作数据库)
	function updatesql($query){
		global $ecms_config;
		$this->sql=mysqli_query(return_dblink($query),$query) or die($ecms_config['db']['showerror']==1?str_replace($GLOBALS['dbtbpre'],'***_',mysqli_error(return_dblink($query)).'<br>'.$query):'DbError');
		return $this->sql;
	}
	//执行mysql_fetch_array()
	function fetch($sql)//此方法的参数是$sql就是sql语句执行结果
	{
		$this->r=mysqli_fetch_array($sql);
		return $this->r;
	}
	//执行fetchone(mysql_fetch_array())
	//此方法与fetch()的区别是:1、此方法的参数是$query就是sql语句 
	//2、此方法用于while(),for()数据库指针不会自动下移，而fetch()可以自动下移。
	function fetch1($query)
	{
		$this->sql=$this->query($query);
		$this->r=mysqli_fetch_array($this->sql);
		return $this->r;
	}
	//执行mysql_num_rows()
	function num($query)//此类的参数是$query就是sql语句
	{
		$this->sql=$this->query($query);
		$this->num=mysqli_num_rows($this->sql);
		return $this->num;
	}
	//执行numone(mysql_num_rows())
	//此方法与num()的区别是：1、此方法的参数是$sql就是sql语句的执行结果。
	function num1($sql)
	{
		$this->num=mysqli_num_rows($sql);
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
		mysqli_free_result($sql);
	}
	//执行seek(mysql_data_seek())
	//此方法的参数是$sql就是sql语句的执行结果,$pit为执行指针的偏移数
	function seek($sql,$pit)
	{
		mysqli_data_seek($sql,$pit);
	}
	//执行id(mysql_insert_id())
	function lastid()//取得最后一次执行mysql数据库id号
	{
		$this->id=mysqli_insert_id($GLOBALS['link']);
		if($this->id<0)
		{
			$this->id=$this->gettotal('SELECT last_insert_id() as total');
		}
		return $this->id;
	}
	//返回影响数量(mysql_affected_rows())
	function affectnum()//取得操作数据表后受影响的记录数
	{
		return mysqli_affected_rows($GLOBALS['link']);
	}
	//执行escape_string()函数
	function EDbEscapeStr($str){
		$str=mysqli_real_escape_string($GLOBALS['link'],$str);
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