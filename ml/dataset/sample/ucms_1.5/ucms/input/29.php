<?php
$inputvalues=json_decode($inputvalue,1);
$allchannel=channel_select(0,0,0,0);
if(empty($style)) {
	$style='style="height:200px;width:190px;"';
}
?>
<select name="<?php echo($inputname);?>[]" multiple="multiple" <?php echo($style);?>  >
<option value="0">请选择栏目</option>
<?php

foreach($allchannel as $val) {
	if($val['ifshowadmin']) {
		if(is_array($inputvalues) && in_array($val['cid'],$inputvalues)) {
			echo('<option value="'.$val['cid'].'" selected>'.$val['ext'].$val['cname'].'</option>');
		}else {
			echo('<option value="'.$val['cid'].'">'.$val['ext'].$val['cname'].'</option>');
		}
	}
}
?>
</select>