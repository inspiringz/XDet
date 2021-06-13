<?php
/**
 * Created by PhpStorm.
 * User: abcdlzy
 * Date: 15/2/3
 * Time: 下午12:09
 */
include_once(dirname(__FILE__).'/config.php');

$_configFile="./config.php";

function getConfig_PerPageCount(){
    return get_config($GLOBALS['_configFile'],'perPageCount','int');
}

function setConfig_PerPageCount($value){
    update_config($GLOBALS['_configFile'],'perPageCount',$value,'int');
}

function getConfig_LoginPassword(){
    return get_config($GLOBALS['_configFile'],'loginPassWord');
}

function setConfig_LoginPassword($value){
    update_config($GLOBALS['_configFile'],'loginPassWord',$value);
}

function setConfig_CAPrivateKey($value){
    update_config($GLOBALS['_configFile'],'CAPrivKeyStr',$value);
}


function getConfig_CAPrivateKey(){
    return get_config($GLOBALS['_configFile'],'CAPrivKeyStr');
}

function getConfig_CAPublishPEM(){
    return getConfigCAPublishX509();
}

function getConfig_CAPublishX509(){
    return get_config($GLOBALS['_configFile'],'CAPubX509');
}

function setConfig_CAPublishPEM($value){
    setConfig_CAPublishX509($value);
}

function setConfig_CAPublishX509($value){
    update_config($GLOBALS['_configFile'],'CAPubX509',$value);
}

function getConfig_PublicX509FromCA(){
    return get_config($GLOBALS['_configFile'],'PubX509fromCA');
}

function setConfig_PublicX509FromCA($value){
    update_config($GLOBALS['_configFile'],'PubX509fromCA',$value);
}

function setConfig_IsCA($value){
    update_config($GLOBALS['_configFile'],'isCA',$value);
}

function getConfig_IsCA(){
    return get_config($GLOBALS['_configFile'],'isCA');
}

function getConfig_CAName(){
    return get_config($GLOBALS['_configFile'],'CAname');
}

function setConfig_CAName($value){
    update_config($GLOBALS['_configFile'],'CAname',$value);
}

function getConfig_RSALength(){
    return get_config($GLOBALS['_configFile'],'RSALength','int');
}

function setConfig_RSALength($value){
    update_config($GLOBALS['_configFile'],'RSALength',$value,'int');
}

function getConfig_CAIntertfaceURL(){
    return get_config($GLOBALS['_configFile'],'CAIntertfaceURL');
}

function setConfig_CAIntertfaceURL($value){
    update_config($GLOBALS['_configFile'],'CAIntertfaceURL',$value);
}

function getConfig_SelfIntertfaceURL(){
    return get_config($GLOBALS['_configFile'],'selfInterfaceURL');
}

function setConfig_SelfIntertfaceURL($value){
    update_config($GLOBALS['_configFile'],'selfInterfaceURL',$value);
}


function getConfig_SelfPrivateKey(){
    return get_config($GLOBALS['_configFile'],'privateKey');
}

function setConfig_SelfPrivateKey($value){
    update_config($GLOBALS['_configFile'],'privateKey',$value);
}

function getConfig_SelfPublicX509(){
    return get_config($GLOBALS['_configFile'],'publicX509');
}

function setConfig_SelfPublicX509($value){
    update_config($GLOBALS['_configFile'],'publicX509',$value);
}


function getConfig_DBRunAtStatus(){
    return get_config($GLOBALS['_configFile'],'dbRunAt','int');
}

function setConfig_DBRunAtStatus($value){
    update_config($GLOBALS['_configFile'],'dbRunAt',$value,'int');
}

function getConfig_FileSQL(){
    return get_config($GLOBALS['_configFile'],'FileSQL');
}
function setConfig_FileSQL($value){
    update_config($GLOBALS['_configFile'],'FileSQL',$value);
}


function setConfig_SelfGUID($value){
    update_config($GLOBALS['_configFile'],'selfGUID',$value);
}

function getConfig_SelfGUID(){
    return get_config($GLOBALS['_configFile'],'selfGUID');
}
function setConfig_CAGUID($value){
    update_config($GLOBALS['_configFile'],'CAGUID',$value);
}

function getConfig_CAGUID(){
    return get_config($GLOBALS['_configFile'],'CAGUID');
}

function setConfig_TempAESKey($value){
    update_config($GLOBALS['_configFile'],'tempAESKey',$value);
}

function getConfig_TempAESKey(){
    return get_config($GLOBALS['_configFile'],'tempAESKey');
}

function setConfig_TempAESiv($value){
    update_config($GLOBALS['_configFile'],'tempAESiv',$value);
}

function getConfig_TempAESiv(){
    return get_config($GLOBALS['_configFile'],'tempAESiv');
}

function getConfig_SQLiteFile(){
    return get_config($GLOBALS['_configFile'],'sqliteFile');
}

function setConfig_SQLiteFile($value){
    update_config($GLOBALS['_configFile'],'sqliteFile',$value);
}


function getConfig_MySQL_Host(){
    return get_config($GLOBALS['_configFile'],'mysql_host');
}

function setConfig_MySQL_Host($value){
    update_config($GLOBALS['_configFile'],'mysql_host',$value);
}


function getConfig_MySQL_UserName(){
    return get_config($GLOBALS['_configFile'],'mysql_username');
}

function setConfig_MySQL_UserName($value){
    update_config($GLOBALS['_configFile'],'mysql_username',$value);
}

function getConfig_MySQL_Password(){
    return get_config($GLOBALS['_configFile'],'mysql_password');
}

function setConfig_MySQL_Password($value){
    update_config($GLOBALS['_configFile'],'mysql_password',$value);
}

function getConfig_MySQL_DataBase(){
    return get_config($GLOBALS['_configFile'],'mysql_database');
}

function setConfig_MySQL_DataBase($value){
    update_config($GLOBALS['_configFile'],'mysql_database',$value);
}




function get_config($file, $ini, $type="string"){
    if(!file_exists($file)) return false;
    $str = file_get_contents($file);
    if ($type=="int"){
        $config = preg_match("/".preg_quote($ini)."=(.*);/", $str, $res);
        return $res[1];
    }
    else{
        $config = preg_match("/".preg_quote($ini)."=\"(.*)\";/", $str, $res);
        if($res[1]==null){
            $config = preg_match("/".preg_quote($ini)."='(.*)';/", $str, $res);
        }
        return $res[1];
    }
}

function update_config($file, $ini, $value,$type="string"){
    if(!file_exists($file)) return false;
    $str = file_get_contents($file);
    $str2="";
    $value=str_replace("\n","",$value);
    $value=str_replace("\r","",$value);
    if($type=="int"){
        $str2 = preg_replace("/".preg_quote($ini)."=(.*);/", $ini."=".$value.";",$str);
    }
    else{
        $str2 = preg_replace("/".preg_quote($ini)."=(.*);/",$ini."=\"".$value."\";",$str);
    }
    file_put_contents($file, $str2);
}

?>