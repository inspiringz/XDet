<?php
//提交反馈
function AddMemberFeedback($add){
	global $empire,$dbtbpre;
	//验证码
	$keyvname='checkspacefbkey';
	ecmsCheckShowKey($keyvname,$add['key'],1);
	//用户
	$userid=intval($add['userid']);
	$ur=$empire->fetch1("select ".egetmf('userid')." from ".eReturnMemberTable()." where ".egetmf('userid')."='$userid' limit 1");
	if(empty($ur['userid']))
	{
		printerror("NotUsername","",1);
	}
	//发表者
	$uid=(int)getcvar('mluserid');
	if($uid)
	{
		$uname=RepPostVar(getcvar('mlusername'));
	}
	else
	{
		$uid=0;
		$uname='';
	}
	//实名验证
	eCheckHaveTruenameCK('msps',0);

	$uname=dgdb_tosave($uname);
	$name=dgdb_tosave($add['name']);
	$company=dgdb_tosave($add['company']);
	$phone=dgdb_tosave($add['phone']);
	$fax=dgdb_tosave($add['fax']);
	$email=dgdb_tosave($add['email']);
	$address=dgdb_tosave($add['address']);
	$zip=dgdb_tosave($add['zip']);
	$title=dgdb_tosave($add['title']);
	$ftext=dgdb_tosave($add['ftext']);
	if(!trim($name)||!trim($title)||!trim($ftext))
	{
		printerror("EmptyMemberFeedback","history.go(-1)",1);
    }
	$addtime=date("Y-m-d H:i:s");
	$ip=egetip();
	$eipport=egetipport();
	$sql=$empire->query("insert into {$dbtbpre}enewsmemberfeedback(name,company,phone,fax,email,address,zip,title,ftext,userid,ip,uid,uname,addtime,eipport) values('$name','$company','$phone','$fax','$email','$address','$zip','$title','$ftext',$userid,'$ip',$uid,'$uname','$addtime','$eipport');");
	ecmsEmptyShowKey($keyvname);//清空验证码
	if($sql)
	{
		printerror("AddMemberFeedbackSuccess",EcmsGetReturnUrl(),1);
	}
	else
	{
		printerror("DbError","history.go(-1)",1);
	}
}

//删除反馈
function DelMemberFeedback($add){
	global $empire,$dbtbpre;
	$user_r=islogin();//是否登陆
	$fid=intval($add['fid']);
	if(!$fid)
	{
		printerror("NotDelMemberFeedbackid","history.go(-1)",1);
	}
	$sql=$empire->query("delete from {$dbtbpre}enewsmemberfeedback where fid='$fid' and userid='$user_r[userid]'");
	if($sql)
	{
		printerror("DelMemberFeedbackSuccess",EcmsGetReturnUrl(),1);
	}
	else
	{
		printerror("DbError","history.go(-1)",1);
	}
}

//批量删除反馈
function DelMemberFeedback_All($add){
	global $empire,$dbtbpre;
	$user_r=islogin();//是否登陆
	$fid=$add['fid'];
	$count=count($fid);
	if(empty($count))
	{
		printerror("NotDelMemberFeedbackid","history.go(-1)",1);
	}
	for($i=0;$i<$count;$i++)
	{
		$addsql.="fid='".intval($fid[$i])."' or ";
    }
	$addsql=substr($addsql,0,strlen($addsql)-4);
	$sql=$empire->query("delete from {$dbtbpre}enewsmemberfeedback where (".$addsql.") and userid='$user_r[userid]'");
	if($sql)
	{
		printerror("DelMemberFeedbackSuccess",EcmsGetReturnUrl(),1);
	}
	else
	{
		printerror("DbError","history.go(-1)",1);
	}
}
?>