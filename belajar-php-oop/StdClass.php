<?php

$array = [
    "firstName" => "Abdullah",
    "lastName" => "Muchsin"
];

$object = (object)$array;

var_dump($object);

echo $object->firstName . PHP_EOL;
echo $object->{"lastName"} . PHP_EOL;

$arrayLagi = (array)$object;
var_dump($arrayLagi);

require_once __DIR__ . "/data/Person.php";

$person = new Person("Muchsin", "Jember");
var_dump($person);


$arrayLagi2 = (array)$person;

foreach ($arrayLagi2 as $key => $value) {
    echo "$key : $value" . PHP_EOL;
}

$arrayLagi2["Personprivasi"];

var_dump($arrayLagi2);

$array1 = [
    "Anggur",
    "Baleci",
    "Cerry",
    "Durian"
];

$object2 = (object)$array1;

var_dump($object2);
echo $object2->{0} . PHP_EOL;
