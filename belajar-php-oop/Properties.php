<?php

require_once __DIR__ . "/data/Person.php";

$person1 = new Person("Muchsin", "Jember");

var_dump($person1);

echo "Name : $person1->name" . PHP_EOL;
echo "Address : $person1->address" . PHP_EOL;
echo "Country : $person1->country" . PHP_EOL;

$person2 = new Person("Abdullah", null);

$person2->country = "Jepang";

var_dump($person2);

echo "Name : $person2->name" . PHP_EOL;
echo "Address : $person2->address" . PHP_EOL;
echo "Country : $person2->country" . PHP_EOL;
