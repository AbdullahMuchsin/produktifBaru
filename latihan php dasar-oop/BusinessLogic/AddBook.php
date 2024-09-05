<?php

require_once __DIR__ . "/../Model/Book.php";

function addBook(string $book, string $isRead): void
{
    global $books;
    $number = sizeof($books) + 1;

    if ($isRead == "y") {
        $isRead = "Done";
    } else {
        $isRead = "Not Yet";
    }

    $books[$number] = [
        "name" => $book,
        "isRead" => $isRead
    ];
}
