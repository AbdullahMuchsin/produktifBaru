<?php

$a = 10;
$b = "10";
$c = 3;
$d = 10;

//  ===, !=, !==, <>, >, <, >=, <=

// == Cek apakah nilai sama dan dengan mengabaikan tipe data
var_dump($a == $b);
// == Cek apakah nilai sama dan juga tipe data
var_dump($a === $b);

echo "\n";

// != Cek apakah nilai tidak sama dan dengan mengabaikan tipe data
var_dump($a != $d);
// <> Fungsi nya sama seperti !=
var_dump($a <> $d);
// !== Cek apakah nilai tidak sama dan juga tipe data
var_dump($a !== $b);
echo "\n";

// > Lebih besar dari
var_dump($a > $c);
// >= Lebih besar dari sama dengan
var_dump($a >= $c);
echo "\n";

// < kurang dari
var_dump($a < $c);
// <= Kurang dari sama dengan
var_dump($a <= $c);
echo "\n";