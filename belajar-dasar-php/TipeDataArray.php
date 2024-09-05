<?php

$numbers = array(9, 2, 4, 5);
var_dump($numbers);

$names = ["Abdullah", "Muchsin"];
var_dump($names);

// Opertion in PHP Array

// Show data array by index
var_dump($names[1]);

// Change value in array
$numbers[1] = 2.5;
var_dump($numbers);

// Delete value in array by index
unset($numbers[2]);

var_dump($numbers);

// Add value in array
$numbers[] = 23;
var_dump($numbers);

// Count array
var_dump(count($numbers));


// Create Map in PHP

$about = array(
    "name" => "Abdullah Muchsin",
    "age" => 19,
    "address" => [
        "city" => "Jember",
        "country" => "Indonesia"
    ]
);

$about1 = [
    "name" => "Irma Aulia",
    "age" => 20,
    "address" => [
        "city" => "Jember",
        "country" => "Indonesia"
    ]
];

var_dump($about);
var_dump($about1);

var_dump($about["name"]);
var_dump($about["address"]["city"]);

$about["hoby"] = [
    "hoby1" => "Reading",
    "hoby2" => "Watching",
];
$about[] = "My About Me";

var_dump($about);
