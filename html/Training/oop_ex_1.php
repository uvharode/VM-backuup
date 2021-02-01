<?php
ini_set('display_errors', 1);
class Cal
{
    public $a;
    public $b;

    function add()
    {
        return $this->a + $this->b;
    }
    function sub()
    {
        return $this->a - $this->b;
    }
}

$obj = new Cal;
$obj->a = 10;
$obj->b = 5;

echo $result = $obj->add();


?>