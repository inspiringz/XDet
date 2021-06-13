<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
//扣点
ViewOnlineKFen($showdown_r,$u,$u['userid'],$classid,$id,$pathid,$r);

$width=550;
$height=450;
$openwidth=$width+30;
$openheight=$height+60;
?>
<HTML>
<HEAD>
<TITLE><?=$r['title']?> --- 媒体播放器</TITLE>
<META HTTP-EQUIV="Expires" CONTENT="0">
<link rel="stylesheet" href="js/player.css">
<script language="javascript">
window.resizeTo(<?=$openwidth?>,<?=$openheight?>);
window.moveTo(100,100);
window.focus()
</script>
<SCRIPT language=javascript>
function click() {
if (event.button==2) {
alert('对不起，您想做什么？')
}
}
document.onmousedown=click
</SCRIPT>
<BODY id=thisbody  bgcolor="#000000" topMargin=0 leftMargin=0 rightMargin=0 bottomMargin=0 style="scroll:no; overflow: hidden;" ondragstart="self.event.returnValue=false" onselectstart="self.event.returnValue=false">
<table width="100%" border="0" cellpadding="3" cellspacing="1">
  <tr> 
    <td><div align="center"> 

<script src="<?=$public_r['newsurl']?>e/data/modadd/moreplayer/empirecmsplayer.js"></script>
<script>
EmpireCMSPlayVideo('jwplayer','<?=$trueurl?>','<?=$width?>','<?=$height?>',1,'<?=$public_r['newsurl']?>');
</script>

      </div></td>
  </tr>
</table>
</body>
</html>