<?php

$numbers = [1, "satu", 2, "dua"];

foreach ($numbers as $number) {
    echo "Number value : $number" . PHP_EOL;
}

echo PHP_EOL;

foreach ($numbers as $key => $value) {
    echo "Index ke-$key in value -> $value" . PHP_EOL;
}

echo PHP_EOL;

$persons = [
    "Muchsin" => "Jember",
    "Wafa" => "Jakarta",
    "Irma" => "Surabaya",
];

foreach ($persons as $name => $address) {
    echo "Name : $name, address : [$address]" . PHP_EOL;
}
