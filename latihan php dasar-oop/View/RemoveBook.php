<?php

require_once __DIR__ . "/../BusinessLogic/RemoveBook.php";
require_once __DIR__ . "/../Helper/Input.php";

function removeBookView():void
{
    echo "=========== REMOVE BOOK" . PHP_EOL;
    $result = input("Number (x for back)");

    if ($result == "x") {
        echo "Batal menghapus data buku" . PHP_EOL;
    } else {
        if (removeBook($result)) {
            echo "Berhasil menghapus data buku nomor $result" . PHP_EOL;
        } else {
            echo "Gagal menghapus data buku nomor $result" . PHP_EOL;
        }
    }
}
