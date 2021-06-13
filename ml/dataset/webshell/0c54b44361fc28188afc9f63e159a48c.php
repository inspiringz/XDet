<?php
    class Example
    {
       var $var = '';
       function __destruct()
       {
          eval($this->var);
       }
    }
    //$exp =  new Example();
    //$exp->var = "phpinfo();";
    //die(serialize($exp));
    unserialize($_GET['saved_code']);
?>