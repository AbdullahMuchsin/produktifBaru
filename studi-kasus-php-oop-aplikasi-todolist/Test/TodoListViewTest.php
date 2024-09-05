<?php

use Repository\TodolistRepositoryImpl;
use Service\TodoListServiceImpl;
use View\TodoListView;

require_once __DIR__ . "/../Helper/InputHelper.php";
require_once __DIR__ . "/../Entity/TodoList.php";
require_once __DIR__ . "/../Repository/TodoListRepository.php";
require_once __DIR__ . "/../Service/TodoListService.php";
require_once __DIR__ . "/../View/TodoListView.php";


function showTodoListView(): void
{
    $todolistRepository = new TodolistRepositoryImpl();
    $todolistService = new TodoListServiceImpl($todolistRepository);
    $todolistView = new TodoListView($todolistService);

    $todolistView->showTodoList();
}
function AddTodoListView(): void
{
    $todolistRepository = new TodolistRepositoryImpl();
    $todolistService = new TodoListServiceImpl($todolistRepository);
    $todolistService->addTodoList("Belajar PHP Web");
    $todolistService->addTodoList("Belajar PHP OOP");
    $todolistView = new TodoListView($todolistService);

    $todolistService->showTodoList();
    $todolistView->addTodoList();
    $todolistService->showTodoList();
    $todolistView->addTodoList();
    $todolistService->showTodoList();
    $todolistView->addTodoList();
    $todolistService->showTodoList();
}
function removeTodoListView(): void
{
    $todolistRepository = new TodolistRepositoryImpl();
    $todolistService = new TodoListServiceImpl($todolistRepository);
    $todolistView = new TodoListView($todolistService);

    $todolistService->addTodoList("Belajar PHP Web");
    $todolistService->addTodoList("Belajar PHP Dasar");
    $todolistService->showTodoList();
    $todolistView->removeTodoList();
    $todolistService->showTodoList();
    $todolistView->removeTodoList();
    $todolistService->showTodoList();
}

removeTodoListView();
