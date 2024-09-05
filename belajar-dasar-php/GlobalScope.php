<?php

// Hanya bisa di akses di scope global

$name = "Abdullah Muchsin";
$name1 = "Irma Aulia";

echo $name . PHP_EOL;

function sayHello()
{
    global $name;
    echo "Name : $name" . PHP_EOL;
    echo "My Name 2 : {$GLOBALS['name1']}" . PHP_EOL;
}

sayHello();

