<?php

require_once __DIR__ . "/vendor/autoload.php";

$customer = new \Upproject\Data\People("Engka");

echo $customer->sayHello() . PHP_EOL;
echo $customer->sayHello("Umar") . PHP_EOL;
