<?php

session_start();

if ( !isset( $_SESSION['username'] ) ) {
        header( 'Location: login.html' );
}

//Get username and password for sudo
$user = $_POST['user'];
$password = $_POST['password'];

//Gets the command to be executed
$command = $_POST['command'];

//Executes the shell command
$output = shell_exec( 'echo '.$password.' | sudo -u '.$user.' -S '.$command.'' );

//Writes commands and the results to the command history file
$histFile = 'commands.txt';
$xstHist = file_get_contents( $histFile );
$shellUser = ''.$user.'@'.exec( hostname ).'';
$history = ''.$shellUser.'# '.$command.'
'.$output.'
'.$xstHist.'';
$file = fopen( $histFile, 'w' );
fwrite( $file, $history );
fclose( $file );

?>

<html>
<head>
	<title>Rasputin sudo Webshell</title>

</head>
<body>

        <iframe src="commands.txt" height="400px" width="700px"></iframe>

<!--
	<p><? echo $output ?></p>
-->

	<form action="sudoShell.php" method="post">
		<input type="text" style="width: 630px" name="command">
		<input type="submit" value="execute">
	<br>
		<span>User: </span><input type="text" style="width: 150px" name="user">
	<br>
		<span>Password: </span><input type="password" style="width: 125px" name="password">
	</form><!--
<br>
	<form action="clrHist.php" method="post">
		<input type="submit" value="Clear command history">
	</form>-->

<center><a href="editor.php">Editor</a> | <a href="shell.php">Shell</a> | <a href="index.php">Home</a></center>

</body>
</html>
