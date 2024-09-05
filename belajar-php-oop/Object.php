<?php

require_once __DIR__ . "/data/Person.php";

$person1 = new Person("Muchsin", "Jember");
$person2 = new Person("Irma", null);
$person3 = new Person("Wafa", null);

var_dump($person1);
var_dump($person2);
var_dump($person3);
