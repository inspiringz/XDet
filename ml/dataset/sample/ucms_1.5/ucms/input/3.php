<?php
if(!isset($GLOBALS['kindeditor'])) {
	echo('<script charset="utf-8" src="img/kindeditor.js"></script>');
	$GLOBALS['kindeditor']=1;
}
?>
<textarea<?php echo($style);?> id="<?php echo($inputname);?>" name="<?php echo($inputname);?>" cols="30" rows="6"><?php echo($inputvalue);?></textarea>
<script type="text/javascript">
	var <?php echo($inputname);?>;
	KindEditor.ready(function(K) {
	<?php echo($inputname);?> = K.create('#<?php echo($inputname);?>', {
	resizeType : 1,
	allowPreviewEmoticons : false,
	allowImageUpload : true,
	filterMode : false,
	uploadJson : 'upload.php',
	afterChange : function() {
		this.sync();
	},
	items : [
		'source','fontname', 'fontsize', '|', 'forecolor', 'hilitecolor', 'bold', 'italic', 'underline',
		'removeformat', '|', 'justifyleft', 'justifycenter', 'justifyright', 'insertorderedlist',
		'insertunorderedlist', '|', 'image', 'link']
		});
	});
</script>