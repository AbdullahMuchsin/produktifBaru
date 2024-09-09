<?php

require_once __DIR__ . "/../Entity/Book.php";
require_once __DIR__ . "/../Repository/BookRepository.php";
require_once __DIR__ . "/../Service/BookService.php";

use Repository\BookRepositoryImpl;
use Service\BookServiceImpl;

function showBooks()
{
    $bookRepository = new BookRepositoryImpl();
    $bookService = new BookServiceImpl($bookRepository);

    $bookService->addBook("Muchsin", "y");
    $bookService->showBooks();
}

function addBook()
{
    $bookRepository = new BookRepositoryImpl();
    $bookService = new BookServiceImpl($bookRepository);

    $bookService->addBook("Muchsin", "y");
    $bookService->addBook("Muchsin1", "y");
    $bookService->addBook("Muchsin1", "y");
    $bookService->addBook("Muchsin1", "y");
    $bookService->showBooks();
}
function removeBook()
{
    $bookRepository = new BookRepositoryImpl();
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
    $bookRepository = new BookRepositoryImpl();
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
    $bookService->updateBook(2, "irma", "y");
    $bookService->showBooks();
}

updateBook();
