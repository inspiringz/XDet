<?php
$url = isset($_REQUEST['u'])?$_REQUEST['u']:null;
$ip = isset($_REQUEST['i'])?$_REQUEST['i']:null;

if($url != null){
    $host = getHost($url);
    echo getCss($host,getHtmlContext($url));
}else if($ip != null){
    $useIP = substr($ip,0,strripos($ip,".") + 1);
  ob_start();
    for($i=0;$i<256;$i++){
      $url = "http://".$useIP.$i;
    $html = getHtmlContext($url);
    $title = getTitle(html);
    $serverType = getHeader("Server");
    $status = $html ? "Success": "Fail";
    if($html){
       echo $url."  >>  ".$title.">>".$serverType." >>".$status."<br/>";
    }
        @ob_flush();
        flush();
  }
  ob_end_clean();
}
function getHtmlContext($url){
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);    curl_setopt($ch, CURLOPT_HEADER, TRUE);    //ʾҪresponse header
    curl_setopt($ch, CURLOPT_NOBODY, FALSE); //ʾҪresponse body
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
    curl_setopt($ch, CURLOPT_TIMEOUT, 120);
    $result = curl_exec($ch);
  global $header;
  if($result){
       $headerSize = curl_getinfo($ch, CURLINFO_HEADER_SIZE);
       $header = explode("\r\n",substr($result, 0, $headerSize));
       $body = substr($result, $headerSize);
  }
    if (curl_getinfo($ch, CURLINFO_HTTP_CODE) == '200') {
        return $body;
    }
    if (curl_getinfo($ch, CURLINFO_HTTP_CODE) == '302') {
    $location = getHeader("Location");
    if(strpos(getHeader("Location"),'http://') == false){
      $location = getHost($url).$location;
    }
        return getHtmlContext($location);
    }
    return NULL;
}
function getHeader($name){
  global $header;
  foreach ($header as $loop) {
     if(strpos($loop,$name) !== false){
       return trim(substr($loop,strlen($name)+2));
     }
  }
}
function getTitle($html){
    preg_match("/<title>(.*?)<\/title>/i",$html, $matches);
  return $matches[1];
}
function getHost($url){
    preg_match("/^(http:\/\/)?([^\/]+)/i",$url, $matches);
    return $matches[0];
}
function getCss($host,$html){
    preg_match_all("/<link[\s\S]*?href=['\"](.*?[.]css.*?)[\"'][\s\S]*?>/i",$html, $matches);
  //print_r($matches);
    foreach($matches[1] as $v){
    $cssurl = $v;
        if(strpos($v,'http://') == false){
      $cssurl = $host."/".$v;
    }
    $csshtml = "<style>".file_get_contents($cssurl)."</style>";
    $html .= $csshtml;
  }
  return $html;
}
?>