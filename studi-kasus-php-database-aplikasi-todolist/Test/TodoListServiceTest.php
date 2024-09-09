<?php

use Config\Database;
use Repository\TodolistRepositoryImpl;
use Service\TodoListServiceImpl;

require_once __DIR__ . "/../Helper/InputHelper.php";
require_once __DIR__ . "/../Entity/TodoList.php";
require_once __DIR__ . "/../Repository/TodoListRepository.php";
require_once __DIR__ . "/../Service/TodoListService.php";
require_once __DIR__ . "/../Config/Database.php";


function showTodoListService()
{
    $todolistRepository = new TodolistRepositoryImpl(Database::getConnection());
    
    $todolistService = new TodoListServiceImpl($todolistRepository);

    $todolistService->showTodoList();
}

function addTodoListService()
{
    $todolistRepository = new TodolistRepositoryImpl(Database::getConnection());
    $todolistService = new TodoListServiceImpl($todolistRepository);

    $todolistService->showTodoList();
    $todolistService->addTodoList("Belajar PHP Dasar");
    $todolistService->showTodoList();
    $todolistService->addTodoList("Belajar PHP OOP");
    $todolistService->showTodoList();
}

function removeTodoListService()
{
    $todolistRepository = new TodolistRepositoryImpl(Database::getConnection());
    $todolistService = new TodoListServiceImpl($todolistRepository);

    $todolistService->removeTodoList(1);
    $todolistService->showTodoList();
}

removeTodoListService();
