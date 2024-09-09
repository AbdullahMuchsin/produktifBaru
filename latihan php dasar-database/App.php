<?php

use Config\Database;
use Repository\BookRepositoryImpl;
use Service\BookServiceImpl;
use View\BookView;

require_once __DIR__ . "/Entity/Book.php";
require_once __DIR__ . "/Repository/BookRepository.php";
require_once __DIR__ . "/Service/BookService.php";
require_once __DIR__ . "/View/BookView.php";
require_once __DIR__ . "/Helper/Input.php";
require_once __DIR__ . "/Config/Database.php";

$bookRepository = new BookRepositoryImpl(Database::getConnection());
$BookService = new BookServiceImpl($bookRepository);
$bookView = new BookView($BookService);

$bookView->ShowBookView();
