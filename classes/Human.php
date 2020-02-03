<?php

namespace classes;

class Human
{
    public string $name;

    public function sayHowdy() {
        echo $this->name . " says howdy!" . "<br>";
    }
}