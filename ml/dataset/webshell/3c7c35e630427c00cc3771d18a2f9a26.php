<?php

	$path = dirname(__FILE__) . '/upload/';

	$rand = rand(0,30);

	move_uploaded_file($_FILES["file"]["tmp_name"],$path . $rand . $_FILES["file"]["name"]);

	echo "File Path:" . $path . $rand . $_FILES["file"]["name"] . "<br/>";

	echo "OK";

?>