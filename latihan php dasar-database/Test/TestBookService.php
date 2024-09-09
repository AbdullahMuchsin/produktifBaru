<?php

require_once __DIR__ . "/../Entity/Book.php";
require_once __DIR__ . "/../Repository/BookRepository.php";
require_once __DIR__ . "/../Service/BookService.php";
require_once __DIR__ . "/../Config/Database.php";

use Config\Database;
use Repository\BookRepositoryImpl;
use Service\BookServiceImpl;

function showBook()
{
    $bookRepository = new BookRepositoryImpl(Database::getConnection());
    $bookService = new BookServiceImpl($bookRepository);

    $bookService->showBook(1);
}

function showBooks()
{
    $bookRepository = new BookRepositoryImpl(Database::getConnection());
    $bookService = new BookServiceImpl($bookRepository);

    $bookService->addBook("Muchsin", "y");
    $bookService->showBooks();
}

function addBook()
{
    $bookRepository = new BookRepositoryImpl(Database::getConnection());
    $bookService = new BookServiceImpl($bookRepository);

    $bookService->addBook("Muchsin", "y");
    $bookService->addBook("Muchsin1", "y");
    $bookService->addBook("Muchsin1", "y");
    $bookService->addBook("Muchsin1", "y");
}
function removeBook()
{
    $bookRepository = new BookRepositoryImpl(Database::getConnection());
    $bookService = new BookServiceImpl($bookRepository);

    $bookService->addBook("Muchsin", "y");
    $bookService->addBook("Muchsin1", "y");
    $bookService->addBook("Muchsin1", "y");
    $bookService->addBook("Muchsin1", "y");
    $bookService->showBooks();

    $bookService->removeBook(2);
    $bookService->removeBook(22);
    $bookService->removeBook(2);
    $bookService->showBooks();
}

function updateBook()
{
    $bookRepository = new BookRepositoryImpl(Database::getConnection());
    $bookService = new BookServiceImpl($bookRepository);

    $bookService->updateBook(1, "irma", "y");
    $bookService->showBooks();
}

updateBook();
