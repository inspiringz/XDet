<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?><table width=100% align=center cellpadding=3 cellspacing=1 class=tableborder>
  <tr>
    <td width=16% height=25 bgcolor=ffffff>商品名称(*)</td>
    <td bgcolor=ffffff><table width="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#DBEAF5">
<tr> 
  <td height="25" bgcolor="#FFFFFF">
	<?=$tts?"<select name='ttid'><option value='0'>标题分类</option>$tts</select>":""?>
	<input type=text name=title value="<?=ehtmlspecialchars(stripSlashes($r[title]))?>" size="60"> 
	<input type="button" name="button" value="图文" onclick="document.add.title.value=document.add.title.value+'(图文)';"> 
  </td>
</tr>
<tr> 
  <td height="25" bgcolor="#FFFFFF">属性: 
	<input name="titlefont[b]" type="checkbox" value="b"<?=$titlefontb?>>粗体
	<input name="titlefont[i]" type="checkbox" value="i"<?=$titlefonti?>>斜体
	<input name="titlefont[s]" type="checkbox" value="s"<?=$titlefonts?>>删除线
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;颜色: <input name="titlecolor" type="text" value="<?=stripSlashes($r[titlecolor])?>" size="10" class="color">
  </td>
</tr>
</table>
</td>
  </tr>
  <tr><td width='16%' height=25 bgcolor='ffffff'>特殊属性</td><td bgcolor='ffffff'>
<table width="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#DBEAF5">
  <tr>
    <td height="25" bgcolor="#FFFFFF">信息属性: 
      <input name="checked" type="checkbox" value="1"<?=$r[checked]?' checked':''?>>
      审核 &nbsp;&nbsp; 推荐 
      <select name="isgood" id="isgood">
        <option value="0">不推荐</option>
	<?=$ftnr['igname']?>
      </select>
      &nbsp;&nbsp; 头条 
      <select name="firsttitle" id="firsttitle">
        <option value="0">非头条</option>
	<?=$ftnr['ftname']?>
      </select></td>
  </tr>
  <tr> 
    <td height="25" bgcolor="#FFFFFF">关键字&nbsp;&nbsp;&nbsp;: 
      <input name="keyboard" type="text" size="52" value="<?=stripSlashes($r[keyboard])?>">
      <font color="#666666">(多个请用&quot;,&quot;隔开)</font></td>
  </tr>
  <tr> 
    <td height="25" bgcolor="#FFFFFF">外部链接: 
      <input name="titleurl" type="text" value="<?=stripSlashes($r[titleurl])?>" size="52">
      <font color="#666666">(填写后信息连接地址将为此链接)</font></td>
  </tr>
</table>
</td></tr>
  <tr>
    <td width=16% height=25 bgcolor=ffffff>发布时间</td>
    <td bgcolor=ffffff><input name="newstime" type="text" value="<?=$r[newstime]?>" size="28" class="Wdate" onClick="WdatePicker({skin:'default',dateFmt:'yyyy-MM-dd HH:mm:ss'})"><input type=button name=button value="设为当前时间" onclick="document.add.newstime.value='<?=$todaytime?>'">
</td>
  </tr>
  <tr>
    <td width=16% height=25 bgcolor=ffffff>商品编号</td>
    <td bgcolor=ffffff><input name="productno" type="text" id="productno" value="<?=$ecmsfirstpost==1?"":ehtmlspecialchars(stripSlashes($r[productno]))?>" size="60">
</td>
  </tr>
  <tr>
    <td width=16% height=25 bgcolor=ffffff>品牌</td>
    <td bgcolor=ffffff><input name="pbrand" type="text" id="pbrand" value="<?=$ecmsfirstpost==1?"":ehtmlspecialchars(stripSlashes($r[pbrand]))?>" size="60">
</td>
  </tr>
  <tr>
    <td width=16% height=25 bgcolor=ffffff>简单描述</td>
    <td bgcolor=ffffff><textarea name="intro" cols="80" rows="10" id="intro"><?=$ecmsfirstpost==1?"":ehtmlspecialchars(stripSlashes($r[intro]))?></textarea>
</td>
  </tr>
  <tr>
    <td width=16% height=25 bgcolor=ffffff>计量单位</td>
    <td bgcolor=ffffff><input name="unit" type="text" id="unit" value="<?=$ecmsfirstpost==1?"":ehtmlspecialchars(stripSlashes($r[unit]))?>" size="60">
</td>
  </tr>
  <tr>
    <td width=16% height=25 bgcolor=ffffff>单位重量</td>
    <td bgcolor=ffffff><input name="weight" type="text" id="weight" value="<?=$ecmsfirstpost==1?"":ehtmlspecialchars(stripSlashes($r[weight]))?>" size="60">
</td>
  </tr>
  <tr>
    <td width=16% height=25 bgcolor=ffffff>市场价格</td>
    <td bgcolor=ffffff><input name="tprice" type="text" id="tprice" value="<?=$ecmsfirstpost==1?"":ehtmlspecialchars(stripSlashes($r[tprice]))?>" size="60">
元</td>
  </tr>
  <tr>
    <td width=16% height=25 bgcolor=ffffff>购买价格</td>
    <td bgcolor=ffffff><input name="price" type="text" id="price" value="<?=$ecmsfirstpost==1?"":ehtmlspecialchars(stripSlashes($r[price]))?>" size="60">
元</td>
  </tr>
  <tr>
    <td width=16% height=25 bgcolor=ffffff>积分购买</td>
    <td bgcolor=ffffff><input name="buyfen" type="text" id="buyfen" value="<?=$ecmsfirstpost==1?"":ehtmlspecialchars(stripSlashes($r[buyfen]))?>" size="60">
点</td>
  </tr>
  <tr>
    <td width=16% height=25 bgcolor=ffffff>库存</td>
    <td bgcolor=ffffff><input name="pmaxnum" type="text" id="pmaxnum" value="<?=$ecmsfirstpost==1?"100":ehtmlspecialchars(stripSlashes($r[pmaxnum]))?>" size="60">
</td>
  </tr>
  <tr>
    <td width=16% height=25 bgcolor=ffffff>商品缩略片</td>
    <td bgcolor=ffffff><input name="titlepic" type="text" id="titlepic" value="<?=$ecmsfirstpost==1?"":ehtmlspecialchars(stripSlashes($r[titlepic]))?>" size="60">
<a onclick="window.open('ecmseditor/FileMain.php?type=1&classid=<?=$classid?>&infoid=<?=$id?>&filepass=<?=$filepass?>&sinfo=1&doing=1&field=titlepic<?=$ecms_hashur[ehref]?>','','width=700,height=550,scrollbars=yes');" title="选择已上传的图片"><img src="../data/images/changeimg.gif" border="0" align="absbottom"></a> 
</td>
  </tr>
  <tr>
    <td width=16% height=25 bgcolor=ffffff>商品大图</td>
    <td bgcolor=ffffff><input name="productpic" type="text" id="productpic" value="<?=$ecmsfirstpost==1?"":ehtmlspecialchars(stripSlashes($r[productpic]))?>" size="60">
<a onclick="window.open('ecmseditor/FileMain.php?type=1&classid=<?=$classid?>&infoid=<?=$id?>&filepass=<?=$filepass?>&sinfo=1&doing=1&field=productpic<?=$ecms_hashur[ehref]?>','','width=700,height=550,scrollbars=yes');" title="选择已上传的图片"><img src="../data/images/changeimg.gif" border="0" align="absbottom"></a> 
</td>
  </tr>
  <tr>
    <td height=25 colspan=2 bgcolor=ffffff><div align=left>商品介绍(*)</div></td>
  </tr>
</table>
<div style="background-color:#D0D0D0"><?=ECMS_ShowEditorVar("newstext",$ecmsfirstpost==1?"":stripSlashes($r[newstext]),"Default","","300","100%")?>
<table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#DBEAF5">
          <tr> 
            <td bgcolor="#FFFFFF"> <input name="dokey" type="checkbox" value="1"<?=$r[dokey]==1?' checked':''?>>
              关键字替换&nbsp;&nbsp; <input name="copyimg" type="checkbox" id="copyimg" value="1">
      远程保存图片(
      <input name="mark" type="checkbox" id="mark" value="1">
      <a href="SetEnews.php<?=$ecms_hashur[whehref]?>" target="_blank">加水印</a>)&nbsp;&nbsp; 
      <input name="copyflash" type="checkbox" id="copyflash" value="1">
      远程保存FLASH(地址前缀： 
      <input name="qz_url" type="text" id="qz_url" size="">
              )</td>
          </tr>
          <tr>
            
    <td bgcolor="#FFFFFF"><input name="repimgnexturl" type="checkbox" id="repimgnexturl" value="1"> 图片链接转为下一页&nbsp;&nbsp; <input name="autopage" type="checkbox" id="autopage" value="1"> 自动分页
      ,每 
      <input name="autosize" type="text" id="autosize" value="5000" size="5">
      个字节为一页&nbsp;&nbsp; 取第 
      <input name="getfirsttitlepic" type="text" id="getfirsttitlepic" value="" size="1">
      张上传图为标题图片( 
      <input name="getfirsttitlespic" type="checkbox" id="getfirsttitlespic" value="1">
      缩略图: 宽 
      <input name="getfirsttitlespicw" type="text" id="getfirsttitlespicw" size="3" value="<?=$public_r[spicwidth]?>">
      *高
      <input name="getfirsttitlespich" type="text" id="getfirsttitlespich" size="3" value="<?=$public_r[spicheight]?>">
      )</td>
          </tr>
        </table>
</div>