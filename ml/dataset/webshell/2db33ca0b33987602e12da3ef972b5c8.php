<?php
include('File/X509.php');
include('Crypt/RSA.php');

// create private key for CA cert
$CAPrivKey = new Crypt_RSA();
extract($CAPrivKey->createKey());
$CAPrivKey->loadKey($privatekey);

$pubKey = new Crypt_RSA();
$pubKey->loadKey($publickey);
$pubKey->setPublicKey();

echo "the private key for the CA cert (can be discarded):\r\n\r\n";
echo $privatekey;
echo "\r\n\r\n";







// create a self-signed cert that'll serve as the CA
$subject = new File_X509();
$subject->setDNProp('id-at-organizationName', 'phpseclib demo CA');
$subject->setPublicKey($pubKey);

$issuer = new File_X509();
$issuer->setPrivateKey($CAPrivKey);
$issuer->setDN($CASubject = $subject->getDN());

$x509 = new File_X509();
$x509->makeCA();

$result = $x509->sign($issuer, $subject);
echo "the CA cert to be imported into the browser is as follows:\r\n\r\n";
echo $x509->saveX509($result);
echo "\r\n\r\n";








// create private key / x.509 cert for stunnel / website
$privKey = new Crypt_RSA();
extract($privKey->createKey());
$privKey->loadKey($privatekey);

$pubKey = new Crypt_RSA();
$pubKey->loadKey($publickey);
$pubKey->setPublicKey();

$subject = new File_X509();
$subject->setDNProp('id-at-organizationName', 'phpseclib demo cert');

$subject->setPublicKey($pubKey);

$issuer = new File_X509();
$issuer->setPrivateKey($CAPrivKey);
$issuer->setDN($CASubject);

$x509 = new File_X509();
$result = $x509->sign($issuer, $subject);
echo "the stunnel.pem contents are as follows:\r\n\r\n";
echo $privKey->getPrivateKey();
echo "\r\n";
echo $x509->saveX509($result);
echo "\r\n";
?>