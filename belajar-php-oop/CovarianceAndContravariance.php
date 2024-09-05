<?php

use Data\{CatShelter, DogShelter, AnimalFood, Food};

require_once __DIR__ . "/data/AnimalShelter.php";
require_once __DIR__ . "/data/Food.php";

$catShelter = new CatShelter();
$cat = $catShelter->adopt("Lilo");
$cat->eat(new AnimalFood());

$dogShelter = new DogShelter();
$dog = $dogShelter->adopt("Doggy");
$dog->eat(new Food());
