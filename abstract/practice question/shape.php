<?php
// Q: Shape Hierarchy: Create an abstract class called Shape with an abstract method calculateArea(). Then, create two concrete classes, Circle and Rectangle, that extend the Shape class and implement the calculateArea() method to calculate the area of a circle and a rectangle, respectively.

// this myself approach

    // abstract class Shape{
    //     protected $variable_one, $variable_two;
    //     abstract public function calculateArea($variable_one, $variable_two); // only define abstraction function within abstract class and implemment in derived/child class
    // }

    // class Circle extends Shape{
    //     public function calculateArea($variable_one, $variable_two = 3.14){
    //         return (pi() * $variable_one * $variable_one);
    //     }
    // }

    // class Rectangle extends Shape{
    //     public function calculateArea($variable_one, $variable_two){
    //         return $variable_one * $variable_two;
    //     }
    // }

    // $circle = new Circle;
    // echo $circle->calculateArea(5)."<br>";

    // $rectangle = new Rectangle;
    // echo $rectangle->calculateArea(5, 6 );


// following the code suggest me chatgpt

abstract class Shape{
    abstract protected function calculateArea();  // only declare method
}

//cal of circle formula is pi * r2
class Circle extends Shape{ 
    private $radius;

    public function __construct($radius){ // setter operation
        $this->radius = $radius;
    }
    
    public function calculateArea(){
        return pi() * $this->radius *$this->radius;
    }
}

$circle = new Circle(5);
echo number_format($circle->calculateArea(), 2)."<br>";

class Rectangle extends Shape{
    private $width, $height;

    public function __construct($width, $height){ // variable set ka value set (setter)
        $this->width = $width;
        $this->height = $height;
    }

    public function calculateArea(){
        return $this->width * $this->height;
    }
}

$rectangle = new Rectangle(6, 6);
echo $rectangle->calculateArea();