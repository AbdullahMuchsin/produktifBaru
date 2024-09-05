<?php

require_once __DIR__ . "/data/Say.php";

use Data\{Person};

$person = new Person();
$person->goodbye("Muchsin");
$person->hello("Irma");
$person->setName("Cika");
$person->info();
var_dump($person);
