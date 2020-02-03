<?php
//src: classes/Employee.php
namespace classes;

class Employee
{
    public string $name;
    public int $age;
    public int $salary;
    public bool $adult;

    public function newEmp($name, $age, $salary)
    {
        $this->name = $name;
        $this->age = $age;
        $this->salary = $salary;
    }
    public function getName($name)
    {
        $this->name = $name;
    }
    public function getAge($age)
    {
        $this->age = $age;
        $this->checkAge($age);
    }
    public function getSalary($salary, $otherEmp = null)
    {
        if ($otherEmp === null) {
            return $this->salary = $salary;
        } elseif($salary === 'sum') {
            return $this->salary + $otherEmp->salary;
        }
    }
    public function checkAge($age) {
        $this->adult = ($age >= 18) ? true : false;
    }
}