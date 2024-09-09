<?php

require_once __DIR__ . "/../BusinessLogic/AddBook.php";
require_once __DIR__ . "/../BusinessLogic/ShowBook.php";
require_once __DIR__ . "/../BusinessLogic/UpdateBook.php";
require_once __DIR__ . "/../View/ShowBook.php";
require_once __DIR__ . "/../Helper/Input.php";

function updateBookView(): void
{
    global $books;

    showHeader();
    echo "=========== UPDATE BOOK" . PHP_EOL;
    $number = input("(x for back) Pilih Nomor Buku");

    if ($number == "x") {
        return;
    }

    $oldBook = $books[$number];
    echo "=========== BUKU SEKARANG ==========" . PHP_EOL;
    echo "Name Book : {$oldBook['name']}" . PHP_EOL;
    echo "Is Read   : {$oldBook['isRead']}" . PHP_EOL;
    $newName = input("New Name (x Untuk lewati)");
    $isRead = input("New IsRead (x Untuk lewati)");

    updateBook($number, $newName, $isRead);
    echo "BERHASIL UPDATE DATA NOMOR $number" . PHP_EOL;
}
