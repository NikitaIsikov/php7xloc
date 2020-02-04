<?php

namespace classes;

class Employee_11
{
    public string $name;
    public int $age;
    public int $salary;

    public function __construct(string $name, int $age, int $salary)
    {
        $this->name = $name;
        $this->age = $age;
        $this->salary = $salary;
    }
}