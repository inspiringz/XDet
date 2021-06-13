<?php
    $foobar = $_GET['foobar'];
    $dyn_func = create_function('$foobar', "echo $foobar;");
    $dyn_func('');
?>