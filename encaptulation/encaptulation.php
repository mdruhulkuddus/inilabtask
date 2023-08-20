<?php

class Employee{
    private $name;
    private $position;
    private $salary;

    public function __construct($name, $position, $salary){
        $this->name = $name;
        $this->position = $position;
        $this->setSalary($salary);
    }
    public function getName(){
        return $this->name;
    }
    public function getPosition(){
        return $this->position;
    }
    public function getSalary(){
        return $this->salary;
    }

    public function setSalary($salary){
        if ($salary > 0) {
            $this->salary = $salary;
        } else {
            echo "Invalid salary value.\n";
        }
    }

}

$employee = new Employee("Ruhul", "intern", "-20000");
echo $employee->getName().", ".$employee->getPosition().", ".$employee->getSalary()."\n";

$employee = new Employee("Enam", "Junior", "20000");
echo $employee->getName().", ".$employee->getPosition().", ".$employee->getSalary();



