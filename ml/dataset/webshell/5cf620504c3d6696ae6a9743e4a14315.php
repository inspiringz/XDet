
<form id="form1" name="form1" method="get" action="">
  <label>
  <div align="center">ļ·
    <input name="dir" type="text" value="c:/" />
    <input type="submit" name="Submit" value="ύ" />
  </div>
  </label>
</form><label>

<div align="center">code Author:<span class="STYLE1"><font color='red'> ̽СQQ:87074139</font></span></div>

<?php
header("content-Type: text/html; charset=gb2312");
function listDir($dir){
   if(is_dir($dir)){
     if ($dh = opendir($dir)) {
        while (($file= readdir($dh)) !== false){
		
       if((is_dir($dir."/".$file)) && $file!="." && $file!="..")
       {
	    if(is_writable($dir."/".$file)&&is_readable($dir."/".$file))
		{
		echo "<b><font color='red'>ļ</font></b>".$dir.$file."<font color='red'> д</font><font color='Blue'> ɶ</font>"."<br><hr>";
		}else{
		if(is_writable($dir."/".$file))
		{
              echo "<b><font color='red'>ļ</font></b>".$dir.$file."<font color='red'> д</font>"."<br><hr>";
		}else
		{
	      echo "<b><font color='red'>ļ</font></b>".$dir.$file."<font color='red'> ɶ</font><font color='Blue'> д</font>"."<br><hr>";
		}
		}
		
		listDir($dir."/".$file."/");
       }
     
       }
        }
closedir($dh);

     }
 
   }

//ͷ
if(isset($_GET['dir']))
{
listDir($_GET['dir']);
}
?>
