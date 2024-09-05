<?php

require_once __DIR__ . "/../BusinessLogic/AddBook.php";
require_once __DIR__ . "/../Helper/Input.php";

function addBookView():void
{
    echo "=========== ADD BOOK" . PHP_EOL;
    echo "(x for back)--------" . PHP_EOL;
    $nameBook = input("Name Book");
    $isRead = input("Read Book (y/n)");

    if ($nameBook == "x" || $isRead == "x") {
        echo "Batal menambahkan data buku" . PHP_EOL;
    } else {
        addBook($nameBook, $isRead);
    }
}
