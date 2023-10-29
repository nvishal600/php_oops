<?php
// Q:1 Vehicle Hierarchy: Create an abstract class called Vehicle with properties for the number of wheels and a method start(). Create two subclasses, Car and Motorcycle, that extend the Vehicle class and provide specific implementations for the start() method.

abstract class Vehicle{
    protected $number_of_wheels;

    public function __construct($number_of_wheels){
        $this->number_of_wheels = $number_of_wheels;
    }

    abstract protected function start();
}

class Car extends Vehicle{

    public function start(){
        echo "car has {$this->number_of_wheels} wheels <br>";
        echo "car started<br>";
    }
}

class Motorcycle extends Vehicle{

    public function start(){
        echo "motorcycle has {$this->number_of_wheels} wheels <br>";
        echo "Motorcycle started<br>";
    }
}

$car = new Car(4);
$car->start();

$motorcycle = new Motorcycle(2);
$motorcycle->start();

