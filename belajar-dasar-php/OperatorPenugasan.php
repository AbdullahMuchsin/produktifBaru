<?php

// Variable data
$result = 0;

// Data
$value = 243;

$a = 10;
$b = 3;

// Price item in market
$orangeJuice = 5_000;
$eggChicken = 3_000;
$bananaMilk = 7_500;

// Basis artimatika by penugasan
var_dump($a += $b);
var_dump($a -= $b);
var_dump($a /= $b);
var_dump($a *= $b);
var_dump($a %= $b);

$a = 4;

var_dump($a **= $b);

// total data with opration penugasan in variable result
$result += $orangeJuice;
$result += $eggChicken;
$result += $bananaMilk;

var_dump($result);
