<?php

require_once __DIR__ . "/../Model/Book.php";

function getAllBook(): array
{
    global $books;

    return $books;
}

function getBookByNumber(int $number): array
{
    global $books;

    return $books[$number];
}
