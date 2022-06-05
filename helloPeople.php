<?php
require_once __DIR__ . '/vendor/autoload.php';

use Upproject\Data\People;

$people = new People("Endang");
echo $people->sayHello("Nahla") . PHP_EOL;
