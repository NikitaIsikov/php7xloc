<?php

namespace classes;

class Employee_9
{
    private string $name;
    private int $age;
    private int $salary;
//setters
    public function setName(string $name)
    {
        $this->name = $name;
    }
    public function setAge(int $age)
    {
        if ($this->isAgeCorrect($age)) $this->age = $age;
    }
    public function setSalary(int $salary)
    {
        $this->salary = $salary;
    }
//getters
    public function getName()
    {
        return $this->name;
    }
    public function getAge()
    {
        return $this->age;
    }
    public function getSalary()
    {
        return $this->salary . '$';
    }
//private methods
    private function isAgeCorrect($age)
    {
        return $res = ($age >= 1 && $age <= 100) ? true : false;
    }
}