<?php

namespace classes;

class User_2
{
    public string $name;
    public int $age;

    public function setAge($age)
    {
        if ($this->validate($age)) {
            $this->age = $age;
            echo "setAge func =" . $this->age . '<br>';
        }
    }
    public function addAge($add)
    {
        $age = $this->age + $add;
        if ($this->validate($age)) {
            $this->age = $age;
            echo "addAge func =" . $this->age . '<br>';
        }
    }
    public function subAge($sub)
    {
        $age = $this->age - $sub;
        if ($this->validate($age)) {
            $this->age = $age;
            echo "subAge func =" . $this->age . '<br>';
        }
    }
    public function validate($age)
    {
        return $isvalid = ($age >= 18 && $age < 100) ? true : false;
    }
}