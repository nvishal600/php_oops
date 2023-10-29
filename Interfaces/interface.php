<?php

interface parent1{

    public function add($a, $b);
}

interface parent2{
  
    public function sub($a, $b);
}

class childClass implements parent1, parent2{

    public function add($a, $b){
        echo $a + $b;
    }

    public function sub($a, $b){
        echo $a - $b;
    }
}

$child_class = new childClass;
$child_class->add(10, 20);
echo "<br>";
$child_class->sub(100, 50);