<?php

declare(strict_types=1);

require_once __DIR__ . '/vendor/autoload.php';

$usr = new classes\User();
$usr->name = 'Kolya';
$usr->setAge(25);
$usr->setAge(30);
$usr->setAge(15);
$usr->setAge(19);



