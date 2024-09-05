<?php

$sayHello = function (string $name): void {
    echo "Hello, $name" . PHP_EOL;
};

$sayHello("Muchsin");

function sayGoodBye(string $name, $filter)
{
    $finalName = $filter($name);
    echo "Good Bye $finalName" . PHP_EOL;
}

sayGoodBye("Abdullah Muchsin", function (string $name): string {
    return strtoupper($name);
});

$filterFunction = function ($name) {
    return strtolower($name);
};

sayGoodBye("MUCHSIN", $filterFunction);

$firstName = "Abdullah";
$lastName = "Muchsin";

$sayHello = function () use ($firstName, $lastName): void {
    echo "Hello, $firstName $lastName" . PHP_EOL;
};

$sayHello();

$firstName = "Irma";
$lastName = "Aulia";

$sayHello(); // hasil nya sama tidak berubah
