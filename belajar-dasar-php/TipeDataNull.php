<?php

$name = "Abdullah Muchsin";
$nama = null;

$umur = null;

echo "Nama : ";
echo $nama;
echo "\n";

echo "Umur : ";
echo $umur;
echo "\n";

$nama1 = "Abdullah Muchsin";

echo "Nama : ";
echo is_null($nama);
echo "\nNama1 : ";
echo is_null($nama1);
echo "\n";

echo "==============\n";

unset($nama);

var_dump(is_null($nama));
var_dump(is_null($nama1));

echo "==============\n";

var_dump(isset($nama));
var_dump(isset($nama1));
