<?php
$server_host = 'localhost';
$db_username = '';
$db_password = '';
$db_name = 'information_schema';
$charset = "utf8";

ini_set('display_errors', '1');

define('IS_WIN', DIRECTORY_SEPARATOR == '\\');
define('SA_ROOT', str_replace('\\', '/', dirname(__FILE__)).'/');
$bak_path = "$SA_ROOT".$db_name.".sql";
echo "backup_path : $bak_path <br>";

$mysqli = new mysqli($server_host, $db_username, $db_password, $db_name);

if (!$mysqli->set_charset($charset)) {
    printf("Error loading character set $charset: %s\n", $mysqli->error);
}

if ($mysqli->connect_errorno) {
    die("Connection failed: " . $mysqli->connect_error);
} 
echo "Database connected successfully<br>";

if ($fp = @fopen($bak_path, 'w')) {
	if ($tables_result = $mysqli->query("SHOW TABLES")) {
		echo "All # of tables : $tables_result->num_rows<br>";
		echo "fp : $fp<br>";
		while($table = $tables_result->fetch_array(MYSQLI_NUM)) {
   				sql_dump($table[0], $fp);
		}
		$tables_result->close();
	} else {
		echo 'backup failed.';
	}
}
fclose($fp);
echo 'Database has backup successfully.';

function sqlAddSlashes($s = ''){
	$s = str_replace('\\', '\\\\', $s);
	$s = str_replace('\'', '\'\'', $s);
	return $s;
}
function get_fields_meta($result) {
	$fields = array();
	for ($i = 0; $i < $result->field_count; $i++) {
		$field = $result->fetch_field_direct($i);
		$fields[] = $field;
	}
	return $fields;
}
function sql_dump($table, $fp=0) {
		global $mysqli;
		global $charset;

		$crlf = (IS_WIN ? "\r\n" : "\n");
		$search = array("\x00", "\x0a", "\x0d", "\x1a"); //\x08\\x09, not required
		$replace = array('\0', '\n', '\r', '\Z');

		$tabledump = 'SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";'.$crlf.$crlf;
		$tabledump .= '/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;'.$crlf
			   . '/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;'.$crlf
			   . '/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;'.$crlf
			   . '/*!40101 SET NAMES ' . $charset . ' */;'.$crlf.$crlf;
		$tabledump .= "DROP TABLE IF EXISTS `$table`;".$crlf;
		$res = $mysqli->query("SHOW CREATE TABLE $table");
		$create = $res->fetch_array(MYSQLI_NUM);
		$tabledump .= $create[1].';'.$crlf.$crlf;
		if (strpos($tabledump, "(\r\n ")) {
			$tabledump = str_replace("\r\n", $crlf, $tabledump);
		} elseif (strpos($tabledump, "(\n ")) {
			$tabledump = str_replace("\n", $crlf, $tabledump);
		} elseif (strpos($tabledump, "(\r ")) {
			$tabledump = str_replace("\r", $crlf, $tabledump);
		}
		unset($create);

		if ($fp) {
			fwrite($fp,$tabledump);
		} else {
			echo $tabledump;
		}
		
		$tabledump = '';
		$rows = $mysqli->query("SELECT * FROM $table");
		$fields_meta = get_fields_meta($rows);

		while ($row = $rows->fetch_array(MYSQLI_NUM)) {
			for ($j = 0; $j < $rows->field_count; $j++) {
				if (!isset($row[$j]) || is_null($row[$j])) {
					$values[] = 'NULL';
				} elseif ($fields_meta[$j]->flags & MYSQLI_NUM_FLAG && 
					$fields_meta[$j]->type != MYSQLI_TYPE_TIMESTAMP &&
					!($fields_meta[$j]->flags & MYSQLI_BLOB_FLAG) ) {
					$values[] = $row[$j];
				} elseif ($fields_meta[$j]->flags & MYSQLI_BLOB_FLAG) {
					if (empty($row[$j]) && $row[$j] != '0') {
						$values[] = '\'\'';
					} else {
						$values[] = '0x'.bin2hex($row[$j]);
					}
				} else {
					$values[] = '\''.str_replace($search, $replace, sqlAddSlashes($row[$j])).'\'';
				}
			}
			$tabledump = 'INSERT INTO `'.$table.'` VALUES('.implode(', ', $values).');'.$crlf;
			unset($values);
			if ($fp) {
				fwrite($fp,$tabledump);
			} else {
				echo $tabledump;
			}
		}
		echo "handle $table table is done.<br><br>";
		$rows->free_result();
}

?>