<?php

namespace classes;

class User
{
    public string $name;
    public int $age;

    public function setAge($newAge)
    {
        if ($newAge >= 18) {
            $this->age = $newAge;
            echo $this->age . '<br>';
        }
    }
}