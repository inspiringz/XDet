<?php
    $foobar = 'system';
    ob_start($foobar);
    echo "dir c:";
    ob_end_flush();
?>