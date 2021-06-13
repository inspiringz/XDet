<?php
/**
 * Created by PhpStorm.
 * User: abcdlzy
 * Date: 15/2/3
 * Time: 上午11:00
 */

//根证书管理
include_once(dirname(__FILE__).'/File/X509.php');
include_once(dirname(__FILE__).'/Crypt/RSA.php');

include_once(dirname(__FILE__).'/config.php');
include_once(dirname(__FILE__) . '/configOperator.php');




function CreateNewCA(){
    if(!$GLOBALS['isCA']){
        return false;
    }
    // CA私钥
    $CAPrivKey = new Crypt_RSA();
    $keyArray=$CAPrivKey->createKey($GLOBALS['RSALength']);
    $CAPrivKey->loadKey($keyArray['privatekey']);

    $pubKey = new Crypt_RSA();
    $pubKey->loadKey($keyArray['publickey']);
    $pubKey->setPublicKey();


    // CA 公钥 x509
    $subject = new File_X509();
    $subject->setDNProp('id-at-organizationName', $GLOBALS['CAname'].' CA');
    $subject->setPublicKey($pubKey);

    $issuer = new File_X509();
    $issuer->setPrivateKey($CAPrivKey);
    $issuer->setDN($CASubject = $subject->getDN());

    $x509 = new File_X509();
    $x509->makeCA();

    $result = $x509->sign($issuer, $subject);

    setConfig_CAPublishX509($x509->saveX509($result));
    setConfig_CAPrivateKey($keyArray['privatekey']);
    return true;

}


function signNewCert(){
    if(!$GLOBALS['isCA']){
        return false;
    }
    else {
        $CAPrivKey = new Crypt_RSA();
        $CAPrivKey->loadKey($GLOBALS['CAPrivKeyStr']);


        $CAx509 = new File_X509();
        $CAx509->loadX509($GLOBALS['CAPubX509']);


        //认证证书
        $privKey = new Crypt_RSA();
        $keyArray = $CAPrivKey->createKey($GLOBALS['RSALength']);
        $privKey->loadKey($keyArray['privatekey']);

        $pubKey = new Crypt_RSA();
        $pubKey->loadKey($keyArray['publickey']);
        $pubKey->setPublicKey();

        $subject = new File_X509();
        $subject->setDNProp('id-at-organizationName', $GLOBALS['CAname'] . ' cert');

        $subject->setPublicKey($pubKey);

        $issuer = new File_X509();
        $issuer->setPrivateKey($CAPrivKey);
        $issuer->setDN($CAx509->getDN());

        $x509 = new File_X509();
        $result = $x509->sign($issuer, $subject);

        return array(
            'privateKey' => $privKey->getPrivateKey(),
            'publicX509' => $x509->saveX509($result)
        );

    }
}

?>