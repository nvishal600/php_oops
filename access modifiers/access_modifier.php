<?php
class student{
    private $name;

    public function __construct($name){
        $this->name = $name;
    }



    public function show_student_details(){
        echo "Student Name: ".$this->name."<br>";
    }
}

class student_get_details extends student{
    public function get_student_details(){
        echo "Student Name: ".$this->name."<br>";
    }
}

// one scenario
$obj = new student_get_details("vishal");
$obj->name = "shani ";  // create new properties jisak access modifier public hai
print_r($obj);

//second scenario
// $obj = new student("ravi c");
// $obj->name = "jaki";
// print_r($obj);
// $obj->show_student_details();

// $obj->name = "ajay gupta";
// $obj->get_student_details();
