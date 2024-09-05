<?php

$name = "Muchsin";

$anotherName = &$name;

echo $name . PHP_EOL;

$anotherName = "Abdullah";
echo $name . PHP_EOL;

function setNumber(int &$number)
{
    $number += 4;
}

$courner = 1;

setNumber($courner);

echo $courner . PHP_EOL;

function &getValue(): int
{
    static $value = 1;
    return $value;
}

$a = &getValue();
$a = 150;

$b = &getValue();

var_dump($b);
