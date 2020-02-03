<?php

declare(strict_types=1);

require_once __DIR__ . '/vendor/autoload.php';

$emp1 = new classes\Employee();
$emp2 = new classes\Employee();
$emp1->newEmp('Ivan', 25, 1000);
$emp2->newEmp('Vasya', 26, 2000);

echo "<p>1.4: " . "$emp1->salary + $emp2->salary";
echo " 1.5: " . "$emp1->age + $emp2->age" . "</p>";
