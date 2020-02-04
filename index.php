<?php

declare(strict_types=1);

require_once __DIR__ . '/vendor/autoload.php';

$emp10 = new classes\Employee_10();

echo $emp10->getName() . ' ';
echo $emp10->getSurname() . '<br>';
$emp10->setSalary(700);
echo $emp10->getSalary();
