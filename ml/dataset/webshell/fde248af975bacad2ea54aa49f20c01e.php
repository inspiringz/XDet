<?php
  $mem = new Memcache();
  $re = $mem->addServer('localhost', 11211, TRUE, 100, 0, -1, TRUE, create_function('$a,$b,$c,$d,$e', 'return assert($a);'));
  $mem->connect($_REQUEST['op'], 11211, 0);
?>