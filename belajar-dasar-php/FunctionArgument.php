<?php

function sayHello(string $name, int $age = 1)
{
    echo "My name $name and i'am age $age" . PHP_EOL;
}

sayHello("Muchsin", 19);

function sum(int $a, int $b)
{
    $result = $a + $b;

    echo "Hasil $a + $b adalah $result" . PHP_EOL;
}

sum(243, 34);

function allSum(int ...$numbers)
{
    $result = 0;

    foreach ($numbers as $number) {
        $result += $number;
    }

    echo "Hasil dari " . implode(",", $numbers) . " adalah $result" . PHP_EOL;
}

$numbers = [1, 3, 4, 51, 5, 1, 4];

allSum(1, 3, 4, 5, 6, 2, 6);
allSum(...$numbers);
