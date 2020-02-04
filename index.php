<?php

declare(strict_types=1);

require_once __DIR__ . '/vendor/autoload.php';

$props[] = ['Kramatorsk', 1827, 140000];
$props[] = ['Kiev', 482, 3000000];
$props[] = ['Lvov', 1240, 730000];

foreach ($props as $key => $val) {
    $city[$key] = new classes\City_12($val[0], $val[1], $val[2]);
}

echo $city[0]->population . '<br>';
echo $city[2]->name;
