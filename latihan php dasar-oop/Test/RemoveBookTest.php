<?php

require_once __DIR__ . "/../Model/Book.php";
require_once __DIR__ . "/../BusinessLogic/AddBook.php";
require_once __DIR__ . "/../BusinessLogic/ShowBook.php";
require_once __DIR__ . "/../BusinessLogic/RemoveBook.php";

addBook("Belajar PHP");
addBook("Belajar Java");
var_dump(getAllBook());
removeBook(4);
var_dump(getAllBook());
