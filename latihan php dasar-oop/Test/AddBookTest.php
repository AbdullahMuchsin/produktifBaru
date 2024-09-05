<?php

require_once __DIR__ . "/../Model/Book.php";
require_once __DIR__ . "/../BusinessLogic/AddBook.php";
require_once __DIR__ . "/../BusinessLogic/ShowBook.php";

addBook("Test", "y");
var_dump(getAllBook());
