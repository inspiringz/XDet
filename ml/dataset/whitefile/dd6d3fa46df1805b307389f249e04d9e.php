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
		<title>上传视频</title>
		<link type="text/css" href="images/editorpage.css" rel=stylesheet>
		<script>
		function EcmsEditorReturnDoAction3(str){
			window.parent.EHEcmsEditorDoTranMedia(str);
			self.location.href=self.location.href;
		}
		</script>

		<script type="text/javascript">
		function DoCheckTranFile(obj){
			var ctypes,actypes,cfiletype,ctypest,sfile,sfocus,ctypesth;
			ctypes="<?=$ecms_config['sets']['mediaplayertype']?>";
			ctypest="<?=$ecms_config['sets']['realplayertype']?>";
			ctypesth="<?=$ecms_config['sets']['tranflashtype']?>";
			if(obj.file.value=='')
			{
				alert('请选择要上传的视频');
				obj.file.focus();
				return false;
			}
			sfile=obj.file.value;
			sfocus=0;
			cfiletype=','+ToGetFiletype(sfile)+',';
			if(ctypes.indexOf(cfiletype)==-1&&ctypest.indexOf(cfiletype)==-1&&cfiletype!=',.flv,'&&ctypesth.indexOf(cfiletype)==-1)
			{
				alert('文件扩展名错误');
				obj.file.focus();
				return false;
			}
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
//返回播放器代码
function echoViewFileCode(toplay,width,height,autostart,furl){
	var fname=document.TranFlashFormT.no.value;
	if(toplay==1)//media
	{
		imgstr="<object align=middle classid=\"CLSID:22d6f312-b0f6-11d0-94ab-0080c74c7e95\" class=\"OBJECT\" id=\"MediaPlayer\" width=\""+width+"\" height=\""+height+"\"><PARAM NAME=\"AUTOSTART\" VALUE=\""+autostart+"\"><param name=\"ShowStatusBar\" value=\"-1\"><param name=\"Filename\" value=\""+furl+"\"><embed type=\"application/x-oleobject codebase=http://activex.microsoft.com/activex/controls/mplayer/en/nsmp2inf.cab#Version=5,1,52,701\" flename=\"mp\" src=\""+furl+"\" width=\""+width+"\" height=\""+height+"\"></embed></object>";
	}
	else if(toplay==3)//flv
	{
		imgstr="<object classid=\"clsid:D27CDB6E-AE6D-11cf-96B8-444553540000\" codebase=\"http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,29,0\" width=\""+width+"\" height=\""+height+"\"><param name=\"movie\" value=\"<?=$public_r[newsurl]?>e/data/images/flvplayer.swf?vcastr_file="+furl+"&vcastr_title="+fname+"&BarColor=0xFF6600&BarPosition=1&IsAutoPlay="+autostart+"\"><param name=\"quality\" value=\"high\"><param name=\"allowFullScreen\" value=\"true\" /><embed src=\"<?=$public_r[newsurl]?>e/data/images/flvplayer.swf?vcastr_file="+furl+"&vcastr_title="+fname+"&BarColor=0xFF6600&BarPosition=1&IsAutoPlay="+autostart+"\" allowFullScreen=\"true\"  quality=\"high\" pluginspage=\"http://www.macromedia.com/go/getflashplayer\" type=\"application/x-shockwave-flash\" width=\""+width+"\" height=\""+height+"\"></embed></object>";
	}
	else//reaplayer
	{
		imgstr="<object classid=\"clsid:CFCDAA03-8BE4-11cf-B84B-0020AFBBCCFA\" HEIGHT=\""+height+"\" ID=\"Player\" WIDTH=\""+width+"\" VIEWASTEXT><param NAME=\"_ExtentX\" VALUE=\"12726\"><param NAME=\"_ExtentY\" VALUE=\"8520\"><param NAME=\"AUTOSTART\" VALUE=\""+autostart+"\"><param NAME=\"SHUFFLE\" VALUE=\"0\"><param NAME=\"PREFETCH\" VALUE=\"0\"><param NAME=\"NOLABELS\" VALUE=0><param NAME=CONTROLS VALUE=ImageWindow><param NAME=CONSOLE VALUE=_master><param NAME=LOOP VALUE=0><param NAME=NUMLOOP VALUE=0><param NAME=CENTER VALUE=0><param NAME=MAINTAINASPECT VALUE=\""+furl+"\"><param NAME=BACKGROUNDCOLOR VALUE=\"#000000\"></object><br><object CLASSID=\"clsid:CFCDAA03-8BE4-11cf-B84B-0020AFBBCCFA\" HEIGHT=32 ID=\"Player\" WIDTH=\""+width+"\" VIEWASTEXT><param NAME=_ExtentX VALUE=18256><param NAME=_ExtentY VALUE=794><param NAME=AUTOSTART VALUE=\""+autostart+"\"><param NAME=SHUFFLE VALUE=0><param NAME=PREFETCH VALUE=0><param NAME=NOLABELS VALUE=0><param NAME=CONTROLS VALUE=controlpanel><param NAME=CONSOLE VALUE=_master><param NAME=LOOP VALUE=0><param NAME=NUMLOOP VALUE=0><param NAME=CENTER VALUE=0><param NAME=MAINTAINASPECT VALUE=0><param NAME=BACKGROUNDCOLOR VALUE=\"#000000\"><param NAME=SRC VALUE=\""+furl+"\"></object>";
	}
	return imgstr;
}
//返回
function echoViewFile(obj,ecms){
	var height=obj.height.value;
	var width=obj.width.value;
	var toplay=obj.toplay.value;
	var playmod=obj.playmod.value;
	var picsay=obj.picsay.value;
	var imgstr="";
	var autostart;
	var mediatypes="<?=$ecms_config['sets']['mediaplayertype']?>";
	var realtypes="<?=$ecms_config['sets']['realplayertype']?>";
	var furl,filetype;
	if(obj.inserturl.value=='')
	{
		return '';
	}
	if(height==""||height==0||width==""||width==0)
	{
		alert("请输入高度与宽度");
		return false;
	}
	furl=obj.inserturl.value;
	autostart="true";
	if(playmod==1)
	{
		autostart="false";
	}
	if(toplay==0)
	{
		filetype=ToGetFiletype(furl);
		if(filetype=='.flv')
		{
			toplay=3;
		}
		else if(mediatypes.indexOf(','+filetype+',')==-1)
		{
			toplay=2;
		}
		else
		{
			toplay=1;
		}
	}
	imgstr=echoViewFileCode(toplay,width,height,autostart,furl);
	if(picsay!="")
	{
		imgstr+="<br><span style='line-height=18pt'>"+picsay+"</span>";
	}
	imgstr='<center>'+imgstr+'</center>';
	if(ecms==0)
	{
		ePreview.innerHTML=imgstr;
		return '';
	}
}
		</script>
	</head>
	<body scroll="no" style="OVERFLOW: hidden" topmargin="0">
		 
  <table width="100%" border="0" align="center" cellpadding="3" cellspacing="1" id="tranpictb">
    <form id="TranMediaFormT" name="TranMediaFormT" method="post" target="eeditoruploadmedia<?=$ecms_topager['InstanceId']?>" enctype="multipart/form-data" action="../../../DoInfo/ecms.php" onsubmit="return DoCheckTranFile(TranMediaFormT);">
      <input type=hidden name=classid value="<?=$ecms_topager['classid']?>">
      <input type=hidden name=filepass value="<?=$ecms_topager['filepass']?>">
	  <input type=hidden name=infoid value="<?=$ecms_topager['infoid']?>">
      <input type=hidden name=enews value="MEditorTranFile">
      <input type=hidden name=type value="3">
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
        <td height="30"> <input type="submit" name="Submit2" value="上传">        </td>
      </tr>
    </form>
  </table>
  <iframe name="eeditoruploadmedia<?=$ecms_topager['InstanceId']?>" id="eeditoruploadmedia<?=$ecms_topager['InstanceId']?>" style="display:none" src="images/blank.html"></iframe>
  
	</body>
</html>
