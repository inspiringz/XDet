<?php

//变量名,变量值,工具条模式,编辑器目录,高度,宽度,全页
function ECMS_TempShowEditorVar($varname,$varvalue,$toolbar='full',$basepath='',$height='300',$width='100%',$fullpage=0){
	$toolbar=strtolower($toolbar);
	if($varvalue)
	{
		$varvalue=ehtmlspecialchars($varvalue);
	}
	if(empty($basepath))
	{
		$basepath='ecmseditor/tempeditor/';
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
function ECMS_TempShowEditorJS($basepath=''){
	if(empty($basepath))
	{
		$basepath='ecmseditor/tempeditor/';
	}
	$addcs=ECMS_TempReturnEditorCx();

	$loadjs='<input type=hidden id=doecmseditor_eaddcs value="'.$addcs.'"> <script type="text/javascript" src="'.$basepath.'ckeditor.js?&empirecms=1"></script>';

	return $loadjs;
}

//附加参数
function ECMS_TempReturnEditorCx(){
	global $filepass,$enews,$ecms_hashur;
	$filepass=(int)$filepass;
	$str="&filepass=$filepass".$ecms_hashur['ehref'];
	return $str;
}

//上传提示
function ECMS_TempPTEditorShowError($type,$error,$showstr,$add,$ecms=0){
?>
<script type='text/javascript'>
<?php
if($error)
{
	echo'alert("'.$error.'")';
}
if($showstr)
{
	echo"window.parent.EcmsTempEditorDoAction".$type."('".addslashes($showstr)."');";
}
?>
</script>
<?php
}

?>