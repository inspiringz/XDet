<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
eCheckCloseMods('pay');//�ر�ģ��

if($payr['paymethod']==0)//˫�ӿ�
{
	$use_service='trade_create_by_buyer';
}
elseif($payr['paymethod']==2)//�����ӿ�
{
	$use_service='create_partner_trade_by_buyer';
}
else//��ʱ���ʽӿ�
{
	$use_service='create_direct_pay_by_user';
}

//------------------ ������ʼ ------------------

$agent="";

$service=$use_service;

//�̻���
$partner=$payr['payuser'];

//��Կ
$paykey=$payr['paykey'];

//����֧�����ʻ�
$seller_email=$payr['payemail'];

//�ַ������ʽ
$_input_charset="GBK";

//���ܷ�ʽ
$sign_type="MD5";

//���ص�ַ
$notify_url=$PayReturnUrlQz."e/payapi/alipay/payend.php";
$return_url=$PayReturnUrlQz."e/payapi/alipay/payend.php";

//֧����ʽ
$payment_type=1;

//Ĭ��֧����ʽ
$paymethod="";

//��������
$defaultbank="";

//��������
$logistics_type="EXPRESS";

//��������
$logistics_fee="0";

//����֧������
$logistics_payment="BUYER_PAY";

//------------------ �������� ------------------

if($payr['paymethod']==1)//��ʱ���ʲ���Ҫ����
{
	$logistics_type="";
	$logistics_fee="";
	$logistics_payment="";
}

//֧�����
$price=$money;
$quantity=1;

$out_trade_no=$ddno?$ddno:time();	//������
esetcookie("checkpaysession",$out_trade_no,0);	//���ö�����

//��Ʒ��Ϣ
$subject=$productname;	//��Ʒ����
$body=$productsay;	//��Ʒ����

//md5
$parameter=array(
	'agent'             => $agent,
	'service'           => $service,
	'partner'           => $partner,
	'seller_email'      => $seller_email,
    '_input_charset'    => $_input_charset,
    'notify_url'        => $notify_url,
    'return_url'        => $return_url,
    'subject'           => $subject,
	'body'				=> $body,
    'out_trade_no'      => $out_trade_no,
    'price'             => $price,
    'quantity'          => $quantity,
    'payment_type'      => $payment_type,
	'paymethod'			=> $paymethod,
	'defaultbank'		=> $defaultbank,
	'logistics_type'    => $logistics_type,
	'logistics_fee'     => $logistics_fee,
	'logistics_payment' => $logistics_payment
 );

ksort($parameter);
reset($parameter);

$param='';
$sign='';

foreach($parameter AS $key => $val)
{
	if(strlen($val)==0)
	{
		continue;
	}
	$param.="$key=".urlencode($val)."&";
	$sign.="$key=$val&";
}

$param=substr($param,0,-1);
$sign=md5(substr($sign,0,-1).$paykey);
$gotopayurl='https://mapi.alipay.com/gateway.do?'.$param.'&sign='.$sign.'&sign_type='.$sign_type;
?>
<html>
<title>֧����֧��</title>
<meta http-equiv="Cache-Control" content="no-cache"/>
<body>
<script>
self.location.href='<?=$gotopayurl?>';
</script>
<input type="button" style="font-size: 9pt" value="֧����֧��" name="v_action" onclick="self.location.href='<?=$gotopayurl?>';">
</body>
</html>