<?php

namespace classes;

class Rectangle
{
    public int $height;
    public int $width;

    public function newRect($height, $width)
    {
        $this->height = $height;
        $this->width = $width;
    }
    public function getSquare() {
        return $this->height * $this->width;
    }
    public function getPerim() {
        return $this->height * 2 + $this->width * 2;
    }
}