<?php

class employee{
    public $name = "vishal";

    public function cal($num1, $num2){
        echo $num1 + $num2;
    }
}

class child extends employee{
    public $name = "vicky";

    public function cal($num1, $num2){
        echo $num1 * $num2;
    }
}

$obj1 = new employee;    
echo $obj1->cal(10, 20)."<br>";

$obj2 = new child;
echo $obj2->cal(10, 20);