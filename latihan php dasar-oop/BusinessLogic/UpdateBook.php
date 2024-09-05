<?php

require_once __DIR__ . "/../Model/Book.php";

function updateBook(int $number, string $name, string $isRead)
{
    global $books;

    $book = $books[$number];

    if ($isRead == "x") {
        $isRead = $book["isRead"];
    } else if ($isRead == "y") {
        $isRead = "Done";
    } else {
        $isRead = "Not Yet";
    }

    if ($name == "x") {
        $name = $book["name"];
    }

    if (sizeof($books) >= $number) {
        $books[$number] = [
            "name" => $name,
            "isRead" => $isRead
        ];
    }
}
