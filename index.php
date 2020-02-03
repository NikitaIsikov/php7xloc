<?php

declare(strict_types=1);

require_once __DIR__ . '/vendor/autoload.php';

$usr2 = new classes\User_3();
$usr2->name = 'Kolya';
$usr2->setAge(21);
$usr2->subAge(15);
$usr2->addAge(6);
$usr2->subAge(7);