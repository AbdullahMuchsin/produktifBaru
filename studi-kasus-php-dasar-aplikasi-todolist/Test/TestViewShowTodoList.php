<?php

require_once __DIR__ . "/../View/ViewShowTodoList.php";
require_once "../BusinessLogic/AddTodoList.php";

addTodoList("Abdullah");
addTodoList("Muchsin");
addTodoList("Wafa");
ViewShowTodoList();