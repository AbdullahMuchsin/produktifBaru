<?php

require_once __DIR__ . "/data/Animal.php";

use Data\{Dog, Cat};

$cat = new Cat();
$cat->name = "Anabul";
$cat->run();

$dog = new Dog();
$dog->name = "Doggy";
$dog->run();
