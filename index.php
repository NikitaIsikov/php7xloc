<?php

declare(strict_types=1);

require_once __DIR__ . '/vendor/autoload.php';
//task1
$emp1 = new classes\Employee();
$emp2 = new classes\Employee();
$emp1->newEmp('Ivan', 25, 1000);
$emp2->newEmp('Vasya', 26, 2000);

echo '1.4: ' . ($emp1->salary + $emp2->salary) . '<br>';
echo '1.5: ' . ($emp1->age + $emp2->age) . '<br><br>';
//task2
$emp3 = new classes\Employee();
$emp4 = new classes\Employee();
$emp3->getName('Vlad');
$emp3->getAge(17);
$emp3->getSalary(700);
$emp4->getName('Denis');
$emp4->getAge(23);
$emp4->getSalary(1500);

echo '2.5: ' . $emp3->name . "'s age bool is '" . $emp3->adult . "'<br>";
echo $emp4->name . "'s age bool is '" . $emp4->adult . "'<br>";
echo '2.6: Salary sum =' . $emp3->getSalary('sum', $emp4) . '<br>';

