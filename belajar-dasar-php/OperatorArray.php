<?php

// + Menggabungkan array

$a = [
    "name" => "Abdullah",
    "city" => "Jember"
];
$b = ["satu", "dua"];

$result = $a + $b;
var_dump($result);

// == Cek array sama tidak
$a = [
    "name" => "Abdullah",
    "city" => "Jember"
];
$b = [
    "city" => "Jember",
    "name" => "Abdullah",
];
var_dump($a == $b);

// === urutan key harus sama dan isi juga
var_dump($a === $b);
echo "\n";

// != Cek array tidak sama
$a = [
    "name" => "Abdullah",
    "city" => "Jember"
];
$b = [
    "city" => "Jember",
    "name" => "Abdullah",
];
var_dump($a != $b);
var_dump($a <> $b); // <> sama fungsi nya dengan !=

// 1== urutan key harus sama
var_dump($a !== $b);
