<?php
include('init.php');
read_db();
if(isset($_POST['id'],$_POST['content'])){
$id=$_POST['id'];
$database[$id]['comment']=$_POST['content'];
save_db();
}
?>