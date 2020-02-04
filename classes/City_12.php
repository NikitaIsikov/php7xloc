<?php

namespace classes;

class City_12
{
    public string $name;
    public int $found;
    public int $population;

    public function __construct($name, $found, $population) {
        $this->name = $name;
        $this->found = $found;
        $this->population = $population;
    }
}