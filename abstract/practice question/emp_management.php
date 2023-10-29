<?php

// Employee Management: Create an abstract class Employee with properties for employee name and ID. Implement an abstract method calculateSalary(). Create two subclasses, HourlyEmployee and SalariedEmployee, which extend the Employee class and implement the calculateSalary() method based on their pay structures.

abstract class Employee{
    protected $name, $ID;

    public function __construct($name, $ID){// setter
        $this->name = $name;
        $this->ID = $ID;
    }

    abstract protected function calculateSalary();

    public function getName(){
        return $this->name;
    }

    public function getID(){
        return $this->ID;
    }

}

class HourlyEmployee extends Employee{
    protected $hourlyRate, $hourlyWorked;

    public function __construct($name, $ID, $hourlyRate, $hourlyWorked){  // setter
        parent::__construct($name, $ID);
        $this->hourlyRate = $hourlyRate;
        $this->hourlyWorked = $hourlyWorked;
    }
    

    public function calculateSalary(){  // gettter
        return $this->hourlyRate * $this->hourlyWorked;
    }
}

class SalariedEmployee extends Employee{
    protected $monthlySalary;

    public function __construct($name, $ID, $monthlySalary){  // setter
        parent::__construct($name, $ID);
        $this->monthlySalary = $monthlySalary;
    }

    public function calculateSalary(){ // getter
        return $this->monthlySalary;
    }
}

$hourly_emp = new HourlyEmployee("vishal", 1003, 103, 150);
$monthly_emp = new SalariedEmployee("ravi", 1005, 200000);

echo "Hourly employee name: {$hourly_emp->getName()} and employee ID is {$hourly_emp->getID()}. employee salary is {$hourly_emp->calculateSalary()}<br>";
echo "Salaried employee name: {$monthly_emp->getName()} and employee ID is {$monthly_emp->getID()}. employee salary is {$monthly_emp->calculateSalary()}";