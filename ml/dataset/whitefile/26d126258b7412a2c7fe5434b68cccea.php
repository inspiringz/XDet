<?php
if(count($strarray)!=2) {htmlinput_error($inputarray['from'],$inputarray['id']);}
$cid=$strarray[0];
$mname=$strarray[1];
$channel=adminchannelcache($cid);
if($channel) {
	$thisarticletable=$channel['csetting']['articletable'];
	$thisorder=$channel['csetting']['temppage_order'];
	$query = $GLOBALS['db'] -> query("SELECT id,$mname FROM $thisarticletable where cid='$cid' $thisorder limit 1000;");
	$strarray = $GLOBALS['db'] -> fetchall($query);
	foreach ($strarray as $value) 
	{    
		if($value['id']==$inputvalue) {
			echo('<label><input type="radio" style="CURSOR: pointer;" name="'.$inputname.'" value="'.$value['id'].'"  checked>'.$value[$mname].'</label>&nbsp;');
		}else {
			echo('<label><input type="radio" style="CURSOR: pointer;" name="'.$inputname.'" value="'.$value['id'].'" >'.$value[$mname].'</label>&nbsp;');
		}
	}
}else {htmlinput_error($inputarray['from'],$inputarray['id']);}
?>