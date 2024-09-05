<?php

require_once __DIR__ . "/../View/ShowBook.php";
require_once __DIR__ . "/../Model/Book.php";
require_once __DIR__ . "/../View/AddBook.php";
require_once __DIR__ . "/../View/RemoveBook.php";
require_once __DIR__ . "/../BusinessLogic/ShowBook.php";

var_dump(getAllBook());
addBookView();
var_dump(getAllBook());
addBookView();
var_dump(getAllBook());
removeBookView();
var_dump(getAllBook());
