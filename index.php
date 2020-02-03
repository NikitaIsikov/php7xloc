<?php

declare(strict_types=1);

require_once __DIR__ . '/vendor/autoload.php';

$emp1 = new classes\Employee();
$emp1->name = 'Bob';
$emp1->salary = 1200;

$emp1->doubleSalary();
