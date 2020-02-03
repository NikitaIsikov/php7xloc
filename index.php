<?php

declare(strict_types=1);

require_once __DIR__ . '/vendor/autoload.php';

$rect = new classes\Rectangle();
$rect->newRect(3, 5);

echo "Square_func =" . $rect->getSquare() . "<br>";
echo "Perim_func =" . $rect->getPerim() . "<br>";
