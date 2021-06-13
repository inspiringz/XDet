<?php
if(!defined('InEmpireCMS'))
{
	exit();
}

$phpmyself=urlencode(eReturnSelfPage(1));

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>上传多图</title>
	<link type="text/css" href="images/editorpage.css" rel=stylesheet>
	<script type="text/javascript" src="../js/jscolor/jscolor.js"></script>
	<script>
	function EcmsEditorReturnDoActionTM(str){
		window.parent.EHEcmsEditorDoTranMore(str);
		self.location.href=self.location.href;
	}

	//上传多附件时,编辑器
	function eTranMoreForEditor(htmlstr){
		window.parent.EHEcmsEditorDoTranMoreTool(str);
		self.location.href=self.location.href;
	}
	</script>

<script type="text/javascript">   
function addpic(){
	var i;
	var str="";
	for(i=1;i<=document.TranMImgForm.trannum.value;i++)
	{
		str=str+"<tr onmouseout=this.style.backgroundColor='#ffffff' onmouseover=this.style.backgroundColor='#C3EFFF'><td width='8%'><div align=center>"+i+"</div></td><td width='92%'> <div align=center><input name=file[] type=file style='width:100%;FONT-SIZE:12px;' onmouseover=this.focus()></div></td></tr>";
	}
	document.getElementById("morepic").innerHTML="<table width='100%' align=center border=0 cellspacing=1 cellpadding=3>"+str+"</table>";
}


function EcmsEditorChangeSet(cset){
	if(cset==2)
	{
		document.getElementById('etranmore_tab_1').style.display="none";
		document.getElementById('etranmore_tab_2').style.display="";
		document.getElementById('etranmore_tab_3').style.display="none";
		document.getElementById('etranmore_tab_4').style.display="none";

		document.getElementById('etranmore_tab_bg1').style.backgroundColor="#ffffff";
		document.getElementById('etranmore_tab_bg2').style.backgroundColor="#DBEAF5";
		document.getElementById('etranmore_tab_bg3').style.backgroundColor="#ffffff";
		document.getElementById('etranmore_tab_bg4').style.backgroundColor="#ffffff";
	}
	else if(cset==3)
	{
		document.getElementById('etranmore_tab_1').style.display="none";
		document.getElementById('etranmore_tab_2').style.display="none";
		document.getElementById('etranmore_tab_3').style.display="";
		document.getElementById('etranmore_tab_4').style.display="none";

		document.getElementById('etranmore_tab_bg1').style.backgroundColor="#ffffff";
		document.getElementById('etranmore_tab_bg2').style.backgroundColor="#ffffff";
		document.getElementById('etranmore_tab_bg3').style.backgroundColor="#DBEAF5";
		document.getElementById('etranmore_tab_bg4').style.backgroundColor="#ffffff";
	}
	else if(cset==4)
	{
		document.getElementById('etranmore_tab_1').style.display="none";
		document.getElementById('etranmore_tab_2').style.display="none";
		document.getElementById('etranmore_tab_3').style.display="none";
		document.getElementById('etranmore_tab_4').style.display="";

		document.getElementById('etranmore_tab_bg1').style.backgroundColor="#ffffff";
		document.getElementById('etranmore_tab_bg2').style.backgroundColor="#ffffff";
		document.getElementById('etranmore_tab_bg3').style.backgroundColor="#ffffff";
		document.getElementById('etranmore_tab_bg4').style.backgroundColor="#DBEAF5";
	}
	else
	{
		document.getElementById('etranmore_tab_1').style.display="";
		document.getElementById('etranmore_tab_2').style.display="none";
		document.getElementById('etranmore_tab_3').style.display="none";
		document.getElementById('etranmore_tab_4').style.display="none";

		document.getElementById('etranmore_tab_bg1').style.backgroundColor="#DBEAF5";
		document.getElementById('etranmore_tab_bg2').style.backgroundColor="#ffffff";
		document.getElementById('etranmore_tab_bg3').style.backgroundColor="#ffffff";
		document.getElementById('etranmore_tab_bg4').style.backgroundColor="#ffffff";
	}
}

</script>
</head>
<body>
<form action="../ecmseditor.php" method="post" enctype="multipart/form-data" target="eeditoruploadmore<?=$ecms_topager['InstanceId']?>" name="TranMImgForm" id="TranMImgForm">

<?php
if(TranmoreIsOpen('editor'))
{
?>
<table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#99C4E3">
    <tr>
      <td width="50%"><div align="center"><strong>直接上传</strong></div></td>
      <td height="25" bgcolor="#FFFFFF"><div align="center"><strong><a href="../tranmore/tranmore.php?showmod=<?=$ecms_topager['showmod']?>&type=<?=$ecms_topager['type']?>&classid=<?=$ecms_topager['classid']?>&filepass=<?=$ecms_topager['filepass']?>&infoid=<?=$ecms_topager['infoid']?>&modtype=<?=$ecms_topager['modtype']?>&sinfo=<?=$ecms_topager['sinfo']?>&ecmsdo=ecmstmeditor&tranfrom=1<?=$ecms_hashur['ehref']?>&efromurl=<?=$phpmyself?>">多选上传</a></strong></div></td>
    </tr>
  </table>
<?php
}
?>

<table style="width:100%;margin-left:0;margin-right:auto;" class="tableborder" border="0" cellpadding="3" cellspacing="1" bgcolor="#99C4E3">
<tr>
<td width="25%" id="etranmore_tab_bg1" onmouseover="EcmsEditorChangeSet(1);" style="text-align:center;background-color:#DBEAF5;"><strong>本地上传</strong></td>
<td width="25%" id="etranmore_tab_bg2" onmouseover="EcmsEditorChangeSet(2);" style="text-align:center;background-color:#FFFFFF;"><strong>远程保存</strong></td>
<td width="25%" id="etranmore_tab_bg3" onmouseover="EcmsEditorChangeSet(3);" style="text-align:center;background-color:#FFFFFF;"><strong>参数设置</strong></td>
<td width="25%" id="etranmore_tab_bg4" onmouseover="EcmsEditorChangeSet(4);" style="text-align:center;background-color:#FFFFFF;"><strong>表格设置</strong></td>
</tr>
</table>

<div id="etranmore_tab_1"> 
  <table width="100%" border="0" align="center" cellpadding="3" cellspacing="1" class="tableborder">
  <?=$ecms_hashur['form']?>
    <tr> 
      <td height="25">
		<table width="98%" border="0" align="center" cellspacing="1" cellpadding="3">
		<tr>
		<td width="60%">
			<div align="center">上传图片数目： 
			<input name="trannum" type="text" id="trannum" value="8" size="6">
			<input type="button" name="Submit" value="设定" onclick="addpic()">
			</div>
		</td>
		<td>
			<div align="right">
			</div>
		</td>
		</tr>
		</table>
	  </td>
    </tr>
    <tr> 
      <td bgcolor="#FFFFFF" id=morepic> <table width="100%" border="0" align="center" cellpadding="3" cellspacing="1">
          <tr onmouseout=this.style.backgroundColor='#ffffff' onmouseover=this.style.backgroundColor='#C3EFFF'> 
            <td width="8%"><div align="center">1</div></td>
            <td width="92%"> <div align="center"> 
                <input name="file[]" type="file" id="file[]" style='width:100%;FONT-SIZE:12px;' onmouseover=this.focus()>
              </div></td>
          </tr>
          <tr onmouseout=this.style.backgroundColor='#ffffff' onmouseover=this.style.backgroundColor='#C3EFFF'> 
            <td><div align="center">2</div></td>
            <td> <div align="center"> 
                <input name="file[]" type="file" id="file[]" style='width:100%;FONT-SIZE:12px;' onmouseover=this.focus()>
              </div></td>
          </tr>
          <tr onmouseout=this.style.backgroundColor='#ffffff' onmouseover=this.style.backgroundColor='#C3EFFF'> 
            <td><div align="center">3</div></td>
            <td> <div align="center"> 
                <input name="file[]" type="file" id="file[]" style='width:100%;FONT-SIZE:12px;' onmouseover=this.focus()>
              </div></td>
          </tr>
		  <tr onmouseout=this.style.backgroundColor='#ffffff' onmouseover=this.style.backgroundColor='#C3EFFF'> 
            <td><div align="center">4</div></td>
            <td> <div align="center"> 
                <input name="file[]" type="file" id="file[]" style='width:100%;FONT-SIZE:12px;' onmouseover=this.focus()>
              </div></td>
          </tr>
		  <tr onmouseout=this.style.backgroundColor='#ffffff' onmouseover=this.style.backgroundColor='#C3EFFF'> 
            <td><div align="center">5</div></td>
            <td> <div align="center"> 
                <input name="file[]" type="file" id="file[]" style='width:100%;FONT-SIZE:12px;' onmouseover=this.focus()>
              </div></td>
          </tr>
		  <tr onmouseout=this.style.backgroundColor='#ffffff' onmouseover=this.style.backgroundColor='#C3EFFF'> 
            <td><div align="center">6</div></td>
            <td> <div align="center"> 
                <input name="file[]" type="file" id="file[]" style='width:100%;FONT-SIZE:12px;' onmouseover=this.focus()>
              </div></td>
          </tr>
		  <tr onmouseout=this.style.backgroundColor='#ffffff' onmouseover=this.style.backgroundColor='#C3EFFF'> 
            <td><div align="center">7</div></td>
            <td> <div align="center"> 
                <input name="file[]" type="file" id="file[]" style='width:100%;FONT-SIZE:12px;' onmouseover=this.focus()>
              </div></td>
          </tr>
		  <tr onmouseout=this.style.backgroundColor='#ffffff' onmouseover=this.style.backgroundColor='#C3EFFF'> 
            <td><div align="center">8</div></td>
            <td> <div align="center"> 
                <input name="file[]" type="file" id="file[]" style='width:100%;FONT-SIZE:12px;' onmouseover=this.focus()>
              </div></td>
          </tr>
        </table></td>
    </tr>
  </table>
</div>
	
<div id="etranmore_tab_2" style="display: none"> 
  <table width="100%" border="0" align="center" cellpadding="3" cellspacing="1" class="tableborder">
    <tr> 
      <td height="25"> <div align="center">远程保存图片列表(一张图片为一行，比本地上传优先)</div></td>
    </tr>
    <tr> 
      <td><div align="center"> 
          <textarea name="saveurl" style="width: 100%" rows="12" id="saveurl"></textarea>
        </div></td>
    </tr>
  </table>
	</div>
	
<div id="etranmore_tab_3" style="display: none"> 
  <table width="100%" border="0" align="center" cellpadding="3" cellspacing="1" class="tableborder">
    <tr bgcolor="#FFFFFF"> 
      <td width="112" height="25">每行/页显示</td>
      <td width="351"> <input name="line" type="text" id="line" value="1" size="6">
        个图片</td>
    </tr>
    <tr bgcolor="#FFFFFF"> 
      <td height="25">对齐方式</td>
      <td> <input name="align" type="radio" value="left">
        居左 
        <input name="align" type="radio" value="center" checked>
        居中 
        <input name="align" type="radio" value="right">
        居右</td>
    </tr>
    <tr bgcolor="#FFFFFF"> 
      <td height="25">图片大小</td>
      <td> <input name="width" type="text" id="width2" size="6">
        × 
          <input name="height" type="text" id="height2" size="6">
        (宽×高)</td>
    </tr>
    <tr bgcolor="#FFFFFF"> 
      <td height="25">图片边框</td>
      <td> <input name="imgborder" type="text" id="imgborder" value="0" size="6"></td>
    </tr>
    <tr bgcolor="#FFFFFF"> 
      <td height="25">分割形式</td>
      <td> <select name="exptype" id="exptype">
          <option value="0">表格</option>
          <option value="1" selected>分页码</option>
        </select></td>
    </tr>
    <tr bgcolor="#FFFFFF"> 
      <td height="25">生成缩略图</td>
      <td><input name="getsmall" type="checkbox" id="getsmall2" value="1">
        同时生成缩略图. 缩图宽度: 
        <input name="swidth" type="text" id="width3" value="<?=$public_r['spicwidth']?>" size="6">
        * 高度: 
        <input name="sheight" type="text" id="sheight" value="<?=$public_r['spicheight']?>" size="6"></td>
    </tr>
    <tr bgcolor="#FFFFFF"> 
      <td height="25">水印</td>
      <td><input name="getmark" type="checkbox" id="getmark2" value="1"> <a href="../../SetEnews.php<?=$ecms_hashur['whehref']?>" target="_blank">加水印</a></td>
    </tr>
  </table>
</div>
	
<div id="etranmore_tab_4" style="display: none"> 
  <table width="100%" border="0" cellspacing="1" cellpadding="3" class=tableborder>
    <tr bgcolor="#FFFFFF"> 
      <td width="25%" height="25">对齐方式</td>
      <td width="75%"> <input name="tbalign" type="radio" value="left">
        居左 
        <input name="tbalign" type="radio" value="center" checked>
        居中 
        <input name="tbalign" type="radio" value="right">
        居右</td>
    </tr>
    <tr bgcolor="#FFFFFF"> 
      <td height="25">背景颜色</td>
      <td><input name="tbcolor" type="text" id="tbcolor" size="15" class="color"> 
      </td>
    </tr>
    <tr bgcolor="#FFFFFF"> 
      <td height="25">表格宽度</td>
      <td><input name="tbwidth" type="text" id="tbwidth" value="100" size="6"> 
        <select name="tbwidthdw" id="tbwidthdw">
          <option value="%" selected>百分比</option>
          <option value="">像素</option>
        </select></td>
    </tr>
    <tr bgcolor="#FFFFFF"> 
      <td height="25">单元格</td>
      <td>单元间距: 
        <input name="tbsp" type="text" id="tbsp" value="1" size="6">
        ，单元边距: 
        <input name="tbpa" type="text" id="tbpa" value="3" size="6"></td>
    </tr>
    <tr bgcolor="#FFFFFF"> 
      <td height="25">边框</td>
      <td>边框粗细: 
        <input name="tbborder" type="text" id="tbsp3" value="0" size="6">
        ，边框颜色: 
        <input name="tbbordercolor" type="text" id="tbbordercolor" size="15" class="color">  
      </td>
    </tr>
  </table>
	</div>
	<table width="100%" border="0" align="center" cellpadding="3" cellspacing="1">
    <tr>
      <td height="38"><div align="center">
          <input type="submit" name="Submit2" value=" 上 传 ">&nbsp;&nbsp;&nbsp;&nbsp;
          <input type="reset" name="Submit3" value="重置">
          <input type=hidden name=classid value="<?=$ecms_topager['classid']?>">
          <input type=hidden name=filepass value="<?=$ecms_topager['filepass']?>">
		  <input type=hidden name=infoid value="<?=$ecms_topager['infoid']?>">
		  <input type=hidden name=modtype value="<?=$ecms_topager['modtype']?>">
		  <input type=hidden name=sinfo value="<?=$ecms_topager['sinfo']?>">
          <input type=hidden name=enews value="SaveMoreImg">
          <input type=hidden name=type value="1">
          <input type=hidden name=doing value="<?=$ecms_topager['doing']?>">
		  <input type=hidden name=tranfrom value="1">
		  <input type=hidden name=InstanceName value="<?=$ecms_topager['InstanceName']?>">
		  <input type=hidden name=InstanceId value="<?=$ecms_topager['InstanceId']?>">
		  <input type=hidden name=doecmspage id=doecmspage value="<?=$doecmspage?>">
        </div></td>
    </tr>
  </table>
</form>

<iframe name="eeditoruploadmore<?=$ecms_topager['InstanceId']?>" id="eeditoruploadmore<?=$ecms_topager['InstanceId']?>" style="display:none" src="images/blank.html"></iframe>

</body>
</html>
