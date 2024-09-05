<?php

function sum(int $a, int $b): int
{
    $result = $a + $b;
    return $result;
}

$hasil = sum(23, 45);

var_dump($hasil);

$value = 79;

function finalValue($value): string
{
    if ($value >= 90) {
        return "A";
    } else if ($value >= 80) {
        return "B";
    } else if ($value >= 70) {
        return "C";
    } else if ($value >= 60) {
        return "D";
    } else {
        return "E";
    }

    echo "END TO FUNCTION" . PHP_EOL;
}

var_dump(finalValue($value));
