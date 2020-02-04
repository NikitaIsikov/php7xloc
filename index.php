<?php

declare(strict_types=1);

require_once __DIR__ . '/vendor/autoload.php';

$emp_11_a = new classes\Employee_11('Vasya', 25, 1000);
$emp_11_b = new classes\Employee_11('Petya', 30, 2000);

echo $emp_11_a->salary + $emp_11_b->salary . '<br>';

