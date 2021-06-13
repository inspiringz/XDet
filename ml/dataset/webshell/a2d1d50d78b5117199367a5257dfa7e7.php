<?php

session_start();

if ( !isset( $_SESSION['username'] ) ) {
        header( 'Location: login.html' );
}

$filepath = $_POST['filepath'];

if ( isset( $filepath ) == true ) {
	$filecontent = file_get_contents( $filepath );
}

$savedfile = $_POST['savedfile'];

if ( isset( $savedfile ) == true ) {
	$file = fopen( $filepath, 'w' );
	fwrite( $file, $savedfile );
	fclose( $file );
}

?>

<html>
<head>
	<title>Rasputin File Editor</title>

</head>
<body>

	<form action="editor.php" method="post">
		<span>File path: </span><input type="text" size="100px" name="filepath">
		<input type="submit" value="Edit file">
	</form>

	<form action="editor.php" method="post">
		<input type="submit" value="Save file">
		<input type="text" name="filepath" size="99px" value="<? echo $filepath ?>">
	<br>
		<textarea name="savedfile" height="600px" width="700px" rows="35" cols="100"><? echo $filecontent ?></textarea>
	</form>

<center><a href="shell.php">Shell</a> | <a href="sudoShell.php">sudo Shell</a> | <a href="index.php">Home</a></center>

</body>
</html>
