<?php
error_reporting ( 0 );

print ("Author: mOon Blog:www.moonhack.org Bbs:www.90sec.org Data:2012.8.27\r\n") ;
print ("ѯ쳣IP ϵ  moonlxmoon@gamil.com\r\n") ;
$a = file ( 'url.txt' );
foreach ( $a as $_key => $_value ) {
	
	$_value = trim ( $_value );
	
	$_value2 = qz ( $_value );
	
	pr ( $_value );
	if ($is_true) {
		w ( $_value, $_value2, pr ( $_value ), url_1 ( $_value ), url_2 ( $_value ), kdate ( $_value ) );
	
	}
}

function url_1($_value) {
	$url = "http://www.baidu.com/s?wd=site%3A$_value";
	$url = file_get_contents ( $url );
	$patth = '/class="site_tip"><strong>(.*?)<\/strong>/';
	if (preg_match ( $patth, $url, $data )) {
		
		if (preg_match ( '/[\d|,]+/', $data [1], $a )) {
			return $a [0];
		}
	
	}

}

function url_2($_value) {
	
	$url = "http://www.baidu.com/s?wd=domain%3A$_value";
	$url = file_get_contents ( $url );
	$patth = '/style="margin-left:120px" >(.+?)<\/span>/';
	if (preg_match ( $patth, $url, $data )) {
		if (preg_match ( '/[\d|,]+/', $data [1], $a )) {
			return $a [0];
		}
	
	}

}

function w($url, $_value2, $pr, $url_1, $url_2, $kdate) {
	print (" $url Ȩ $_value2 PR $pr ¼ $url_1   $url_2    $kdate\r\n") ;
	fwrite ( fopen ( "ok.txt", "a" ), "$url վ֮ ѯȨΪ $_value2 PRΪ$pr ¼Ϊ $url_1 Ϊ $url_2   $kdate \r\n\r\n" );

}
$is_true = false;
function qz($_value2) {
	$url = "http://seo.chinaz.com/?host=$_value2";
	
	$data = file_get_contents ( $url );
	$p = '/\/template\/default\/images\/baiduapp\/(\d).gif/';
	if (! preg_match ( $p, $data, $c )) {
		print "$_value2 ޷,ѯʧ\r\n";
		global $is_true;
		$is_true = FALSE;
	} else {
		global $is_true;
		$is_true = true;
		return $c [1];
	}
}

function pr($_value2) {
	$p = '/\/template\/default\/images\/ranks\/Rank_(\d).gif/';
	$url = "http://seo.chinaz.com/?host=$_value2";
	$data = file_get_contents ( $url );
	if (preg_match ( $p, $data, $c )) {
		return $c [1];
	}

}

/*function ai($_value2) {
	$url = "http://www.aizhan.com/baidu/$_value2/position/";
	$p = '/\/images\/brs\/(\d).gif/';
	$data = file_get_contents ( $url );
	if (preg_match ( $p, $data, $c )) {
		return $c [1];
	}

}*/

function kdate($_value) {
	$url = "http://www.baidu.com/s?wd=site%3A$_value";
	$url = file_get_contents ( $url );
	
	$patth = "/<span class=\"g\">\s+$_value\/\s+(\d+-\d+-\d+)\s+</";
	if (preg_match ( $patth, $url, $data )) {
		return $data [1];
	}

}

?>