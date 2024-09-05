<?php

// Hanya ambil satu data yang sama
$matches = [];
$resultPregMatch = (int)preg_match("/abdullah|Yanto|bAik/i", "Abdullah Muchsin Adalah Anak Yang Baik", $matches);

var_dump($resultPregMatch);
var_dump($matches);

// Ambil semua data yang sama
$matches = [];
$resultPregMatchAll = (int)preg_match_all("/abdullah|Yanto|bAik/i", "Abdullah Muchsin Adalah Anak Yang Baik", $matches);

var_dump($resultPregMatchAll);
var_dump($matches);

// Mengubah data yang terfilter
$resultPregReplace = preg_replace("/anjing|bangsat/i", "*****", "Dasar anjing bangsat banget dah");

var_dump($resultPregReplace);

// Memecah data yang terfilter
$resultPregSplit = preg_split("/[\s,-]/", "Abdullah Muchsin,Adalah anak-yang baik hati. dan tidak-sombong");

var_dump($resultPregSplit);
