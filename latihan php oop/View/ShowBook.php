<?php

require_once __DIR__ . "/../Service/BookService.php";
require_once __DIR__ . "/AddBook.php";
require_once __DIR__ . "/RemoveBook.php";
require_once __DIR__ . "/UpdateBook.php";
require_once __DIR__ . "/../Helper/Input.php";

function ShowBookView(): void
{
    while (true) {

        showHeader();

        echo "Pilih Menu" . PHP_EOL;
        echo "1. Add Book" . PHP_EOL;
        echo "2. Update Book" . PHP_EOL;
        echo "3. Delete Book" . PHP_EOL;
        echo "x. Keluar" . PHP_EOL;

        $select = input("Number");

        if ($select == 1) {
            addBookView();
        } else if ($select == 3) {
            removeBookView();
        } else if ($select == "x") {
            break;
        }

        echo "Maaf perintah tidak dimengerti" . PHP_EOL;
    }

    echo "Terima kasih." . PHP_EOL;
}

function showHeader(): void
{
    echo "=========== MY LIST BOOK ===========" . PHP_EOL;
    echo "| NAME                    | IS READ " . PHP_EOL;
    echo "====================================" . PHP_EOL;

    showBooks();
    echo "------------------------------------" . PHP_EOL;
}
