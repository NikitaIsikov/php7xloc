<?php
//src: classes/Employee.php
namespace classes;

class Employee
{
    public string $name;
    public int $salary;

    public function doubleSalary()
    {
        $this->salary = $this->salary * 2;
        echo $this->name . "'s salary successfully doubled!<br>";
        echo "now " . $this->salary;
    }
}