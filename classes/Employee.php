<?php
//src: classes/Employee.php
namespace classes;

class Employee
{
    public string $name;
    public int $age;
    public int $salary;

    public function newEmp($name, $age, $salary) {
        $this->name = $name;
        $this->age = $age;
        $this->salary = $salary;
    }
}