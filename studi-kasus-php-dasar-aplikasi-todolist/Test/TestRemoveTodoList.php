<?php

require_once "../Model/TodoList.php";
require_once "../BusinessLogic/AddTodoList.php";
require_once "../BusinessLogic/ShowTodoList.php";
require_once "../BusinessLogic/RemoveTodoList.php";

addTodoList("Abdullah");
addTodoList("Muchsin");
addTodoList("Irma");
addTodoList("Wafa");

showTodolist();

removeTodolist(2);

showTodolist();

$success = removeTodolist(5);
var_dump($success);
showTodolist();
$success = removeTodolist(3);
var_dump($success);
showTodolist();
