<?php

abstract class parentClass{
    public $name;

    abstract protected function calculation($a, $b);
}

class childClass extends parentClass{
    public function calculation($a, $b){
        echo $a+$b;
    }
}

$obj = new childClass;
$obj->calculation(10, 20);