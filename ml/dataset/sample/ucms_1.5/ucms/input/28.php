<?php
$allchannel=channel_select(0,0,0,0);
?>
<select name="<?php echo($inputname);?>"  <?php echo($style);?>>
<option value="0">请选择栏目</option>
<?php
foreach($allchannel as $val) {
	if($val['ifshowadmin']) {
		if($inputvalue==$val['cid']) {
			echo('<option value="'.$val['cid'].'" selected>'.$val['ext'].$val['cname'].'</option>');
		}else {
			echo('<option value="'.$val['cid'].'">'.$val['ext'].$val['cname'].'</option>');
		}
	}
}
?>
</select>