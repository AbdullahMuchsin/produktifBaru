<?php

$value = [
    "number" => 234,
];

$part = $value["number"] ?? "Kosong";

var_dump($part);

$part = $value["names"] ?? "Kosong"; // ?? sama kayak isset sifat nya meskipun variable belum di buat tetap engga error beda hal nya dengan is_null  variable harus di buat dulu baru di cek null atau tidak

var_dump($part);
