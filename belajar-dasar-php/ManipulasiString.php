<?php

// Join string with .
$name = "Abdullah Muchsin";

echo "Name : " . $name . PHP_EOL;
echo "Value : " . 125 . PHP_EOL;

// Konversi string to type data or opposite

$valueString = (string)1_00.000;
var_dump($valueString);

$valueInteger = (int)"135005";
var_dump($valueInteger);

$valueFloating = (float)"1.305";
var_dump($valueFloating);

$notValue = (float)"This error"; // when error will konversi to 0 value
var_dump($notValue);

// Access charactor to string
$name = "Muchsin";
echo $name[0] . PHP_EOL;
echo $name[1] . PHP_EOL;
echo $name[2] . PHP_EOL;
echo $name[3] . PHP_EOL;
echo $name[4] . PHP_EOL;
echo $name[5] . PHP_EOL;
echo $name[6] . PHP_EOL;
// echo $name[7] . PHP_EOL; // Error offset to index in length string

// Variables Pharsing
$first_name = "Abdullah";
$last_name = "Muchsin";

echo "My Name $first_name $last_name" . PHP_EOL;

// Curly Brace
$object = "Car";

echo "I have a {$object}s" . PHP_EOL;
