<?php

function getGanjil(int $max): Iterator
{
    $array = [];

    for ($i = 1; $i < $max; $i++) {
        if ($i % 2 == 1) {
            $array[] =  $i;
        }
    }

    return new ArrayIterator($array);
}

function getGenap(int $max): Traversable
{
    for ($i = 1; $i < $max; $i++) {
        if ($i % 2 == 0) {
            yield $i;
        }
    }
}

$ganjil = getGanjil(100);

foreach ($ganjil as $value) {
    echo "Ganjil : $value" . PHP_EOL;
}
$genap = getGenap(50);

foreach ($genap as $value) {
    echo "Genap : $value" . PHP_EOL;
}
