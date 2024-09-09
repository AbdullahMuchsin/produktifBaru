<?php

require_once __DIR__ . "/../Service/BookService.php"; 
require_once __DIR__ . "/../Helper/Input.php";

function removeBookView():void
{
    echo "=========== REMOVE BOOK" . PHP_EOL;
    $number = input("Number (x for back)");

    if ($number == "x") {
        echo "Batal menghapus data buku" . PHP_EOL;
    } else {
        removeBook($number);
    }
}
