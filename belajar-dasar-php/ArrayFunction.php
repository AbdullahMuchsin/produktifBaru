<?php

$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

$mapNumbers = array_map(fn($number) => $number * 5, $numbers);
var_dump($mapNumbers);

rsort($numbers);
var_dump($numbers);

shuffle($numbers);
var_dump($numbers);

sort($numbers);
var_dump($numbers);

var_dump(array_keys($numbers));
var_dump(array_values($numbers));

$persons = [
    "person1" => "Abdullah Muchsin",
    "Person2" => "Ali Wafa",
    "Person3" => "Irma Aulia"
];

$getKeyArray = array_keys($persons);
var_dump($getKeyArray);

$getValueArray = array_values($persons);
var_dump($getValueArray);
