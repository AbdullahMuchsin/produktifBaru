<?php

require_once __DIR__ . "/../Model/Book.php";
require_once __DIR__ . "/../BusinessLogic/AddBook.php";
require_once __DIR__ . "/../BusinessLogic/ShowBook.php";
require_once __DIR__ . "/../BusinessLogic/UpdateBook.php";

addBook("Belajar PHP", "y");
addBook("Belajar Java", "n");
var_dump(getAllBook());
updateBook(1, "Belajar PHP WEB", "n");
var_dump(getAllBook());