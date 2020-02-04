<?php

namespace classes;

class Employee_10
{
    public string $name = 'Ivan';
    public string $surname = 'Nechyporuk';
    public int $salary;

    public function setSalary($salary)
    {
        $this->salary = $salary;
    }
    public function getSalary()
    {
        return $this->salary;
    }
    public function getName()
    {
        return $this->name;
    }
    public function getSurname()
    {
        return $this->surname;
    }
}