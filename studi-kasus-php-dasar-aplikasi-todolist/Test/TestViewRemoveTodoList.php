<?php

require_once "../BusinessLogic/AddTodoList.php";
require_once "../BusinessLogic/ShowTodoList.php";
require_once "../View/ViewRemoveTodoList.php";

addTodoList("Abdullah");
addTodoList("Muchsin");
addTodoList("Wafa");

showTodolist();

ViewRemoveTodoList();

showTodolist();