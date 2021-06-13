<?php
$functionname=$strarray[0];
if(!function_exists($functionname)) {
	echo($functionname.' 函数不存在,');
	htmlinput_error($inputarray['from'],$inputarray['id']);
}
$functionname('output',$inputname,$inputvalue);
?>