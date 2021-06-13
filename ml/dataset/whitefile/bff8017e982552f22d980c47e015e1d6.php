<?php

//变量名,变量值,工具条模式,编辑器目录,高度,宽度,全页
function ECMS_ShowEditorVar($varname,$varvalue,$toolbar='full',$basepath='',$height='300',$width='100%',$fullpage=0){
	$toolbar=strtolower($toolbar);
	if($varvalue)
	{
		$varvalue=ehtmlspecialchars($varvalue);
	}
	if(empty($basepath))
	{
		$basepath='../data/ecmseditor/infoeditor/';
	}
	if(empty($height))
	{
		$height='300';
	}
	if(empty($width))
	{
		$width='100%';
	}
	$editorvars='';
	if($fullpage==1)
	{
		$editorvars.="fullPage:true, ";
	}
	if($toolbar=='basic')
	{
		$editorvars.="toolbar:'basic', ";
	}
	$editorvars.="width:'".$width."', height:'".$height."'";

	$echoeditor="<textarea cols='90' rows='10' id='".$varname."' name='".$varname."'>".$varvalue."</textarea>
<script type='text/javascript'>CKEDITOR.replace('".$varname."',
{
     ".$editorvars."
});</script>";

	return $echoeditor;
}

//返回加载JS文件
function ECMS_ShowEditorJS($basepath=''){
	if(empty($basepath))
	{
		$basepath='../data/ecmseditor/infoeditor/';
	}
	$addcs=ECMS_ReturnEditorCx();

	$loadjs='<input type=hidden id=doecmseditor_eaddcs value="'.$addcs.'"> <script type="text/javascript" src="'.$basepath.'ckeditor.js?&empirecms=1"></script>';

	return $loadjs;
}

//附加参数
function ECMS_ReturnEditorCx(){
	global $classid,$id,$filepass;
	$classid=(int)$classid;
	$filepass=(int)$filepass;
	$id=(int)$id;
	$str="&classid=$classid&filepass=$filepass&infoid=$id";
	return $str;
}

//上传提示
function ECMS_PTEditorShowError($type,$error,$showstr,$add,$ecms=0){
?>
<script type='text/javascript'>
<?php
if($error)
{
	echo'alert("'.$error.'");';
}
if($showstr&&$showstr!='####')
{
	echo"window.parent.EcmsEditorReturnDoAction".$type."('".addslashes($showstr)."');";
}
?>
</script>
<?php
}

//返回type
function ECMS_EditorReturnType($page){
	if(empty($page))
	{
		$page=$_POST['doecmspage']?$_POST['doecmspage']:$_GET['doecmspage'];
	}
	if($page=='TranFile')
	{
		$r['ftype']=0;
		$r['jsfun']='EHEcmsEditorDoTranFile';
	}
	elseif($page=='TranFlash')
	{
		$r['ftype']=2;
		$r['jsfun']='EHEcmsEditorDoTranFlash';
	}
	elseif($page=='TranMedia')
	{
		$r['ftype']=3;
		$r['jsfun']='EHEcmsEditorDoTranMedia';
	}
	elseif($page=='TranMore')
	{
		$r['ftype']='TM';
		$r['jsfun']='EHEcmsEditorDoTranMore';
	}
	elseif($page=='TranImg2')
	{
		$r['ftype']=1;
		$r['jsfun']='EHEcmsEditorDoTranImgTwo';
	}
	else	//TranImg
	{
		$r['ftype']=1;
		$r['jsfun']='EHEcmsEditorDoTranImg';
	}
	return $r;
}

//选择提示
function ECMS_EditorChFileFun($page){
	$r=ECMS_EditorReturnType($page);
	return $r['jsfun'];
}

?>