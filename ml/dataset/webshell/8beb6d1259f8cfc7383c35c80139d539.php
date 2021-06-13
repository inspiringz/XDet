<?php

session_start();

if ( !isset( $_SESSION['username'] ) ) {
        header( 'Location: login.html' );
}

?>

<html>
<head>
	<title>Rasputin PHP Info</title>

</head>
<body>

<center><a href="index.php">Home</a></center>

<?php

phpinfo()

?>

</body>
</html>
