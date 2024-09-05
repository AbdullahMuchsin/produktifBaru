<?php

// Faktorial dengan while

function faktorialWhile($value)
{
    $result = 1;

    for ($i = 1; $i <= $value; $i++) {
        $result *= $i;
    }

    return $result;
}

var_dump(faktorialWhile(5));

// dengan recursive function

function faktorialRekursif(int $value): int
{
    if ($value == 1) {
        return 1;
    } else {
        return $value * faktorialRekursif($value - 1);
    }
}

var_dump(faktorialRekursif(6));

function loop($value)
{
    if ($value == 0) {
        echo "End Loop" . PHP_EOL;
    } else {
        echo "Loop ke-$value" . PHP_EOL;
        loop($value - 1);
    }
}

loop(3_000_000);
