<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>上传附件</title>
		<link type="text/css" href="images/editorpage.css" rel=stylesheet>
		<script>
		function EcmsEditorReturnDoAction0(str){
			window.parent.EHEcmsEditorDoTranFile(str);
			self.location.href=self.location.href;
		}
		</script>

		<script type="text/javascript">
		function DoCheckTranFile(obj){
			var ctypes,actypes,cfiletype,sfile,sfocus;
			if(obj.file.value=='')
			{
				alert('请选择要上传的文件');
				obj.file.focus();
				return false;
			}
			sfile=obj.file.value;
			sfocus=0;

			return true;
		}
		function ToGetFiletype(sfile){
			var filetype,s;
			s=sfile.lastIndexOf(".");
			filetype=sfile.substring(s+1).toLowerCase();
			return '.'+filetype;
		}
		//返回编号
		function ExpStr(str,exp){
			var pos,len,ext;
			pos=str.lastIndexOf(exp)+1;
			len=str.length;
			ext=str.substring(pos,len);
			return ext;
		}
		function GetFname(str){
			var filename,exp;
			if(str.indexOf("\\")>=0)
			{
				exp="\\";
			}
			else
			{
				exp="/";
			}
			filename=ExpStr(str,exp);
			return filename;
		}
		function ReturnFileNo(obj){
			var filename,str,exp;
			if(obj.no.value!='')
			{
				return '';
			}
			str=obj.file.value;
			filename=GetFname(str);
			obj.no.value=filename;
		}
		//预览
		function echoViewFile(obj,doshow){
			var imgstr,filetype,fn,filename,furl,sizestr;
			if(obj.inserturl.value=='')
			{
				return '';
			}
			furl=obj.inserturl.value;
			filetype=ToGetFiletype(furl);
			filename=GetFname(furl);
			if(obj.fname.value=='')
			{
				fn=filename;
			}
			else
			{
				fn=obj.fname.value;
			}
			sizestr='';
			if(obj.filesize.value!='')
			{
				sizestr="&nbsp;("+obj.filesize.value+")";
			}
			imgstr="<div style='padding:6px'><fieldset><legend>"+fn+"</legend><table cellpadding=0 cellspacing=0 border=0><tr><td><img src='<?=$public_r[newsurl]?>e/data/images/downfile.jpg' alt='文件类型: "+filetype+"' border=0 style='vertical-align:baseline'></td><td> <a href='"+furl+"' title='"+fn+"' target='_blank'>"+filename+"</a>"+sizestr+"</td></tr></table></fieldset></div>";
			if(doshow==0)
			{
				document.getElementById("ViewFile").innerHTML=imgstr;
				return '';
			}
		}
		</script>
	</head>
	<body scroll="no" style="OVERFLOW: hidden" topmargin="0">
		
  <table width="100%" border="0" align="center" cellpadding="3" cellspacing="1" id="tranpictb">
    <form id="TranFileFormT" name="TranFileFormT" method="post" target="eeditoruploadfile<?=$ecms_topager['InstanceId']?>" enctype="multipart/form-data" action="../../../DoInfo/ecms.php" onsubmit="return DoCheckTranFile(TranFileFormT);">
      <input type=hidden name=classid value="<?=$ecms_topager['classid']?>">
      <input type=hidden name=filepass value="<?=$ecms_topager['filepass']?>">
      <input type=hidden name=infoid value="<?=$ecms_topager['infoid']?>">
      <input type=hidden name=enews value="MEditorTranFile">
      <input type=hidden name=type value="0">
      <input type=hidden name=doing value="0">
      <input type=hidden name=tranfrom value="1">
      <input type=hidden name=InstanceName value="<?=$ecms_topager['InstanceName']?>">
	  <input type=hidden name=InstanceId value="<?=$ecms_topager['InstanceId']?>">
	  <input type=hidden name=doecmspage id=doecmspage value="<?=$doecmspage?>">
      
      <tr> 
        <td><strong>本地上传</strong><br> 
          <input type="file" name="file" id="file" style="width: 100%">        </td>
      </tr>
      
      <tr> 
        <td height="30"> <input type="submit" name="Submit2" value="上 传">        </td>
      </tr>
    </form>
  </table>
  <iframe name="eeditoruploadfile<?=$ecms_topager['InstanceId']?>" id="eeditoruploadfile<?=$ecms_topager['InstanceId']?>" style="display:none" src="images/blank.html"></iframe>

	</body>
</html>
