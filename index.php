<?php

declare(strict_types=1);

require_once __DIR__ . '/vendor/autoload.php';

$emp9 = new classes\Employee_9();
$emp9->setName('Eugene');
$emp9->setAge(42);
$emp9->setSalary(1400);

echo "<p>Name is: " . $emp9->getName() . "</p>";
echo "<p>Age is: " . $emp9->getAge() . "</p>";
echo "<p>Salary is: " . $emp9->getSalary() . "</p>";