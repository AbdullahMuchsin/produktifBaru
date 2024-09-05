<?php

require_once __DIR__ . "/../View/ShowBook.php";
require_once __DIR__ . "/../Model/Book.php";
require_once __DIR__ . "/../BusinessLogic/AddBook.php";
require_once __DIR__ . "/../BusinessLogic/ShowBook.php";

addBook("Belajar PHP", "n");
addBook("Belajar Java", "y");
ShowBookView();