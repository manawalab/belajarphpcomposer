<?php
include_once __DIR__ . '/vendor/autoload.php';

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

$log = new Logger("Upproject");

$log->pushHandler(new StreamHandler("application.log", Logger::INFO));

$log->info("Hello Engka");
$log->info("Belajar Composer");
