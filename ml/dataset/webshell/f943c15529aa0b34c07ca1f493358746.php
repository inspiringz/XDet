<?php
/**
 * Created by PhpStorm.
 * User: abcdlzy
 * Date: 15/2/4
 * Time: 下午4:25
 */
include_once(dirname(__FILE__).'/Crypt/AES.php');
include_once(dirname(__FILE__).'/Crypt/Random.php');
include_once(dirname(__FILE__).'/File/X509.php');
include_once(dirname(__FILE__).'/Math/BigInteger.php');
include_once(dirname(__FILE__).'/DBAdopt/_class/BLL/operator.php');
include_once(dirname(__FILE__).'/config.php');
include_once(dirname(__FILE__).'/configOperator.php');
header("Access-Control-Allow-Origin:*");
//生成GUID
function create_guid() {
    $charid = strtoupper(md5(uniqid(mt_rand(), true)));
    $hyphen = chr(45);// "-"
    $uuid = substr($charid, 0, 8).$hyphen
        .substr($charid, 8, 4).$hyphen
        .substr($charid,12, 4).$hyphen
        .substr($charid,16, 4).$hyphen
        .substr($charid,20,12);
    return $uuid;
}

function characet($data){
    if( !empty($data) ){
        $fileType = mb_detect_encoding($data , array('UTF-8','GBK','LATIN1','BIG5')) ;
        if( $fileType != 'UTF-8'){
            $data = mb_convert_encoding($data ,'utf-8' , $fileType);
        }
    }
    return $data;
}

function RSAEncrypt($text,$pem){
    $x509=new File_X509();
    $rsa=new Crypt_RSA();
    $x509->loadX509($pem);
    $rsa->loadKey($x509->getPublicKey());
    $rsa->setEncryptionMode(CRYPT_RSA_ENCRYPTION_PKCS1);
    return bin2hex($rsa->encrypt($text));
}

function RSADecrypt($ciphertext,$privateKey){
    $rsad=new Crypt_RSA();
    $rsad->loadKey($privateKey);
    $rsad->setEncryptionMode(CRYPT_RSA_ENCRYPTION_PKCS1);
    return $rsad->decrypt(hex2bin($ciphertext));
}

function AESEncrypt($text,$key,$IV){
    $aes = new Crypt_AES(CRYPT_MODE_ECB);
    $aes->setKey(characet($key));
    $aes->setIV(characet($IV));
    return bin2hex($aes->encrypt($text));
}

function AESDecrypt($ciphertext,$key,$IV){
    $aes = new Crypt_AES(CRYPT_MODE_ECB);
    $aes->setKey(characet($key));
    $aes->setIV(characet($IV));
    return $aes->decrypt(hex2bin($ciphertext));
}

//验证证书
function vaildateCert($CAX509,$CheckX509){
    $x509 = new File_X509();
    $x509->loadCA($CAX509);
    $cert = $x509->loadX509($CheckX509);
    return $x509->validateSignature();
}

//随机字符串
function create_RandomString($length=32){
    return bin2hex(crypt_random_string($length));
}

//逗号分割
function splitByComma($str){
    return preg_split("/,{1,1}/", $str);
}

//检测是否建立AES交换通道
function has_AESSwitchChannel($GUID){
    if(!empty(SQLAdopt::getOne(new tempPasswordModel($GUID,'','','')))){
        return true;
    }
    else{
        return false;
    }
}

//客户端＝》服务器 send data by AES
function request_decryptAESData($clientGUID,$data){
    //todo 使用前应先检查是否已经建立通道
    $AESKeyIV=SQLAdopt::getOne(new tempPasswordModel($clientGUID,'','in',''));
    if(!empty($AESKeyIV)){
        $AESKey=splitByComma($AESKeyIV->password)[0];
        $AESiv=splitByComma($AESKeyIV->password)[1];
        return AESDecrypt($data,$AESKey,$AESiv);
    }
    else
    {
        return false;
    }
}

//服务器＝》客户端 return data by AES
function response_encryptByAES($clientGUID,$data){
    $AESKeyIV=SQLAdopt::getOne(new tempPasswordModel($clientGUID,'','out',''));
    if(!empty($AESKeyIV)){
        $AESKey=splitByComma($AESKeyIV->password)[0];
        $AESiv=splitByComma($AESKeyIV->password)[1];
        return AESEncrypt($data,$AESKey,$AESiv);
    }
    else
    {
        return false;
    }
}

//保存AESkeyiv进tempPassword表
function save_AESKeyIV($GUID,$Key,$IV,$way){
    $tempPasswordStruct=new tempPasswordModel($GUID,$Key.",".$IV,$way,'');
    return SQLAdopt::insert($tempPasswordStruct);
}

//获取 tempPassword－》Password
function get_AESKeyIVstr($GUID,$way){
    $tryGet=SQLAdopt::getOne(new tempPasswordModel($GUID,'',$way,''));
    if(empty($tryGet)){
        return false;
    }
    else
    {
        return $tryGet->password;
    }
}

//获取数据库中的GUID的keyiv
function get_ArrayAESKeyIV($GUID,$way){
    $arr=get_AESKeyIVstr($GUID,$way);
    if(!empty($arr)&&(count(splitByComma($arr))==2)){
        return array(
            'key'=> splitByComma($arr)[0],
            'iv'=>splitByComma($arr)[1]
        );
    }
    else
    {
        return false;
    }

}

//请求一个新的AES交换密码组
function request_switchAESKeyIV($requestGUID,$requestKey,$requestIV){
    save_AESKeyIV($requestGUID,$requestKey,$requestIV,'in');
    $makeKey=create_RandomString();
    $makeIV=create_RandomString();
    save_AESKeyIV($requestGUID,$makeKey,$makeIV,'out');
    return array(
        'key'=>$makeKey,
        'iv'=>$makeIV
    );
}

function packetOutAESDataToCA($data){
    return getConfig_SelfGUID().','.AESEncryptOutData(@getConfig_CAGUID(),@$data);
}

//已建立完成通道时，使用AES发送数据return AESDecrypt($data,$reciveGUID->key,$reciveGUID->iv)
function packetOutAESData($selfGUID,$targetGUID,$data){
    return $selfGUID.','.AESEncryptOutData($targetGUID,$data);
}

//已建立完成通道时，使用AES接收数据
function unpacketInAESData($data){
    $arr=splitByComma($data);
    if(count($arr)==2){
        return AESDecryptInData($arr[0],$arr[1]);
    }
    else
    {
        return false;
    }
}

function AESEncryptOutData($targetGUID,$data){
    $arr=get_ArrayAESKeyIV($targetGUID,'out');
    return AESEncrypt($data,@$arr->key,@$arr->iv);
}

function AESDecryptInData($reciveGUID,$data){
    $arr=get_ArrayAESKeyIV($reciveGUID,'in');
    if(empty($arr))
    {
        return null;
    }
    else{
        return AESDecrypt($data,@$arr->key,@$arr->iv);
    }
}


//服务器＝》CA AES 请求客户端公钥 需要客户端GUID，自身GUID，已建立完成AES通道
function request_AutoPemFromCA($clientGUID){
    return request_PemFromCA(getConfig_CAIntertfaceURL(),getConfig_CAGUID(),getConfig_SelfGUID(),$clientGUID);
}

//服务器＝》CA AES 请求客户端公钥 需要客户端GUID，自身GUID，已建立完成AES通道
function request_PemFromCA($CAinterface,$CAGUID,$selfGUID,$clientGUID){
    return DataTransport::go($CAinterface,'action=requestGUIDPEM&data='.packetOutAESData($selfGUID,$CAGUID,$selfGUID,$clientGUID));

}

//CA＝》服务器 返回 客户端公钥
function response_PemOut($requesterGUID,$getGUID,$selfGUID=null){
    if(empty($selfGUID)){
        $selfGUID=getConfig_CAGUID();
    }
    $GetGUIDPem=SQLAdopt::getOne(new certModel($getGUID,'','',''));
    return packetOutAESData($selfGUID,$requesterGUID,$GetGUIDPem->x509);
}

function building_AESChannel($targetInterfaceGUID){
    $targetServerGUID=DataTransport::go($targetInterfaceGUID,'action=getServerGUID');
}


function get_GUIDPEM($GUID){
    $serachPEM=SQLAdopt::getOne(new tempPasswordModel($GUID,'','',''));
    //判断自己的数据库有没有，没有就去CA请求一个
    if(!empty($serachPEM)){

    }
}

//CA＝》服务器 返回 客户端公钥
function response_Pem($GUID){
    if(!$GLOBALS['isCA']){
        return 'This is not look like CA';
    }
    $tryGetPEM=SQLAdopt::getOne(new certModel($GUID,'','',''));
    if(empty($tryGetPEM)){
        return 'look like null';
    }
    return $tryGetPEM->x509;
}

//第一步
function getCertFromCA($CAinterface=null,$CAPem=null){
    if(empty(getConfig_TempAESiv()))
    {
        setConfig_TempAESiv(create_RandomString());
    }
    if(empty(getConfig_TempAESKey()))
    {
        setConfig_TempAESKey(create_RandomString());
    }
    if(empty($CAinterface)){
        $CAinterface=getConfig_CAIntertfaceURL();
    }
    if(empty($CAinterface)){
        return 'CAinterface is empty';
    }
    if(empty($CAPem)){
        $CAPem=getConfig_PublicX509FromCA();
    }
    if(empty($CAPem)){
        return 'PublicX509FromCA is empty';
    }
    $getstr=DataTransport::go($CAinterface,'action=doGetCertStep2&data='.RSAEncrypt(getConfig_TempAESKey().','.getConfig_TempAESiv().",".getConfig_SelfIntertfaceURL(),$CAPem));
    //getstr原型$returnStr=$userGUID.",".$newCert['privateKey'].",".$newCert['publicX509'];
    $decryptGetStr=AESDecrypt($getstr,getConfig_TempAESKey(),getConfig_TempAESiv());
    $arr=splitByComma($decryptGetStr);
    if(count($arr)==4){
        setConfig_SelfGUID($arr[0]);
        setConfig_SelfPrivateKey($arr[1]);
        setConfig_SelfPublicX509($arr[2]);
        setConfig_CAGUID($arr[3]);
        save_AESKeyIV(getConfig_CAGUID(),getConfig_TempAESKey(),getConfig_TempAESiv(),'in');
        save_AESKeyIV(getConfig_CAGUID(),getConfig_TempAESKey(),getConfig_TempAESiv(),'out');
        return true;
    }
    else{
        return 'error';
    }
}

function build_AESSwitchChannel($data,$selfPrivateKey){
    $decryptData=RSADecrypt($data,$selfPrivateKey);
    if(count(splitByComma($decryptData))===3){
        //解开获取数据
        $requestGUID=splitByComma($decryptData)[0];
        $requestKey=splitByComma($decryptData)[1];
        $requestIV=splitByComma($decryptData)[2];
        //获取目标pem
        $targetPEM=request_AutoPemFromCA($requestGUID);
        //获取新生成的key
        $newAESKeyIV=request_switchAESKeyIV($requestGUID,$requestKey,$requestIV);
        //RSA加密返回
        return RSAEncrypt($newAESKeyIV['key'].",".$newAESKeyIV['iv'],$targetPEM);
    }
    else
    {
        return false;
    }

}

function get_ActiveServerListFromCA(){
    $data=DataTransport::go(getConfig_CAIntertfaceURL(),'action=getActiveServerList&data='.packetOutAESDataToCA(getConfig_SelfGUID().",".getConfig_SelfIntertfaceURL()));

    set_ActiveServerByJson(DataTransport::$response);
    return $data;
}

function get_ActiveServerAllJson(){
    $all=SQLAdopt::getList(new activeServerModel('','',''));
    return json_encode($all);
}

function set_ActiveServerByJson($json){
    $all=json_decode($json);
    $rtn=array();
    if(is_array($all)){
        foreach($all as $row=>$rowValue){
            $model=new activeServerModel('', '', '');
            foreach($rowValue as $key=>$value){
                $model->$key=$value;
            }
            $rtn[]=$model;
        }
    }

    SQLAdopt::delete(new activeServerModel('','',''));

    foreach($rtn as $o){
        SQLAdopt::insert($o);
    }
}

//注入检测
function inject_check($sql_str) {
    $check= eregi('select|insert|update|delete|\'|\/\*|\*|\.\.\/|\.\/|union|into|load_file
|outfile', $sql_str);
    if($check)
    {
        echo "非法字符!";
        exit();
    }else
    {
        return $sql_str;
    }
}

//过滤脏数据
function daddslashes($string, $force = 0) {
    if(!get_magic_quotes_gpc() || $force) {
        if(is_array($string)) {
            foreach($string as $key => $val) {
                $string[$key] = daddslashes($val, $force);
            }
        } else if ($string instanceof baseModel){
            foreach($string as $key => $val) {
                $string->$key = daddslashes($val, $force);
            }
        } else {
            $string = addslashes($string);
        }
    }
    return $string;
}

if(!get_magic_quotes_gpc()) {
    $_FILES = daddslashes($_FILES);
}
//获取ip
function getip() {
    $unknown = 'unknown';
    if ( isset($_SERVER['HTTP_X_FORWARDED_FOR'])
        && $_SERVER['HTTP_X_FORWARDED_FOR']
        && strcasecmp($_SERVER['HTTP_X_FORWARDED_FOR'],
            $unknown) ) {
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    } elseif ( isset($_SERVER['REMOTE_ADDR'])
        && $_SERVER['REMOTE_ADDR'] &&
        strcasecmp($_SERVER['REMOTE_ADDR'], $unknown) ) {
        $ip = $_SERVER['REMOTE_ADDR'];
    }
    /*
    处理多层代理的情况
    或者使用正则方式：$ip = preg_match("/[d.]
    {7,15}/", $ip, $matches) ? $matches[0] : $unknown;
    */
    if (false !== strpos($ip, ','))
        $ip = reset(explode(',', $ip));
    return $ip;
}

//分页列表生成
function buildPageSeletor($whatPage,$total,$perPageCount,$nowPage,$targetHtmlArea){

    $maxPage=ceil($total/$perPageCount);

    echo '<a class="background-color" href="#list" onclick="javascript:jumpPage(\''.$whatPage.'\',1,\''.$targetHtmlArea.'\')" >首页</a>';

    if($maxPage<6){
        for($i=1;$i<$maxPage+1;$i++){
            if($i==$nowPage){
                echo '<a class="page-selector-paging-Selected-a" href="#list" onclick="javascript:jumpPage(\''.$whatPage.'\','.$i.',\''.$targetHtmlArea.'\')" >'.$i.'</a>';
            }
            else
            {
                echo '<a class="background-color" href="#list" onclick="javascript:jumpPage(\''.$whatPage.'\','.$i.',\''.$targetHtmlArea.'\')" >'.$i.'</a>';
            }
        }
    }
    else
    {
        if($nowPage>3){
            echo '<a class="background-color" href="#list" onclick="javascript:jumpPage(\''.$whatPage.'\','.($nowPage-3).',\''.$targetHtmlArea.'\')">...</a>';
        }
        $startPage=$nowPage<3?1:$nowPage-2;
        $endPage=$startPage+5>$maxPage?$maxPage+1:$startPage+5;
        for($i=$startPage;$i<$endPage;$i++){
            if($i==$nowPage){
                echo '<a class="page-selector-paging-Selected-a" href="#list" onclick="javascript:jumpPage(\''.$whatPage.'\','.$i.',\''.$targetHtmlArea.'\')" >'.$i.'</a>';
            }
            else
            {
                echo '<a class="background-color" href="#list" onclick="javascript:jumpPage(\''.$whatPage.'\','.$i.',\''.$targetHtmlArea.'\')" >'.$i.'</a>';
            }
        }
        if($nowPage<$maxPage-3){
            echo '<a class="background-color" href="#list" onclick="javascript:jumpPage(\''.$whatPage.'\','.($nowPage+2).',\''.$targetHtmlArea.'\')" >...</a>';
        }
    }
    echo '';
    echo '<a class="background-color" href="#list" onclick="javascript:jumpPage(\''.$whatPage.'\','.$maxPage.',\''.$targetHtmlArea.'\')" >末页</a>';


}

?>