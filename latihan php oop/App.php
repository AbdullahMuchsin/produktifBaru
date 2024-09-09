<?php

use Repository\BookRepositoryImpl;
use Service\BookServiceImpl;
use View\BookView;

require_once __DIR__ . "/Entity/Book.php";
require_once __DIR__ . "/Repository/BookRepository.php";
require_once __DIR__ . "/Service/BookService.php";
require_once __DIR__ . "/View/BookView.php";
require_once __DIR__ . "/Helper/Input.php";

$bookRepository = new BookRepositoryImpl();
$BookService = new BookServiceImpl($bookRepository);
$bookView = new BookView($BookService);

$bookView->ShowBookView();
