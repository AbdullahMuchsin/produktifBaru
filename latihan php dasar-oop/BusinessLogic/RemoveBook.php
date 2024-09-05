<?php

require_once __DIR__ . "/../Model/Book.php";

function removeBook(int $number): bool
{

    global $books;
    $lengthBook = sizeof($books);

    if ($number > $lengthBook || $number < 1) {
        return false;
    }

    for ($i = $number; $i < $lengthBook; $i++) {
        $books[$i] = $books[$i + 1];
    }

    array_pop($books);
    return true;
}
