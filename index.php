<?php

declare(strict_types=1);

require_once __DIR__ . '/vendor/autoload.php';

$std = new classes\Student_8();
$std->name = 'Danylo';
$std->course = 2;

echo "<p>Initial course =" . $std->course . "</p>";
$std->transferToNextCourse();
$std->setCourseAdmin('Alex');
$std->transferToNextCourse();
echo "<p>Current admin: " . $std->getCourseAdmin() . "</p>";
echo "<p>Current course =" . $std->course . "</p>";
