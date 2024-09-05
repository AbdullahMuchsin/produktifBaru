<?php

require_once __DIR__ . "/data/Car.php";

use Data\{Avanza};

$avanza = new Avanza();
$avanza->name = "Avanza G";
$avanza->engine = "Hybrid";
$avanza->year = 2020;
$avanza->ori = true;
echo "is original " . (bool)$avanza->isOri() . PHP_EOL;
echo "is engine " . $avanza->getEngine() . PHP_EOL;
$avanza->year();
$avanza->runEngine();
$avanza->run();
