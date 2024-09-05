<?php

function sayHello()
{
    echo "Hello, Abdullah Muchsin" . PHP_EOL;
}

$buat = true;

if ($buat) {
    function cek()
    {
        echo "Wow function tersembunyi telah ditemukan" . PHP_EOL;
    }
}

sayHello();
cek();
