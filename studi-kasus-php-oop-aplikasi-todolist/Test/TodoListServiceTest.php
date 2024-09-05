<?php

use Repository\TodolistRepositoryImpl;
use Service\TodoListServiceImpl;

require_once __DIR__ . "/../Helper/InputHelper.php";
require_once __DIR__ . "/../Entity/TodoList.php";
require_once __DIR__ . "/../Repository/TodoListRepository.php";
require_once __DIR__ . "/../Service/TodoListService.php";


function showTodoListService()
{
    $todolistRepository = new TodolistRepositoryImpl();
    $todolistRepository->todolist[1] = "Belajar PHP Dasar";
    $todolistRepository->todolist[2] = "Belajar PHP OOP";
    $todolistRepository->todolist[3] = "Belajar PHP Database";
    $todolistService = new TodoListServiceImpl($todolistRepository);

    $todolistService->showTodoList();
}

function addTodoListService()
{
    $todolistRepository = new TodolistRepositoryImpl();
    $todolistRepository->todolist[1] = "Belajar PHP Web";
    $todolistRepository->todolist[2] = "Belajar PHP 8";
    $todolistRepository->todolist[3] = "Belajar PHP Database";
    $todolistService = new TodoListServiceImpl($todolistRepository);

    $todolistService->showTodoList();
    $todolistService->addTodoList("Belajar PHP Dasar");
    $todolistService->showTodoList();
    $todolistService->addTodoList("Belajar PHP OOP");
    $todolistService->showTodoList();
}

function removeTodoListService()
{
    $todolistRepository = new TodolistRepositoryImpl();
    $todolistRepository->todolist[1] = "Belajar PHP Dasar";
    $todolistRepository->todolist[2] = "Belajar PHP OOP";
    $todolistRepository->todolist[3] = "Belajar PHP Database";
    $todolistService = new TodoListServiceImpl($todolistRepository);

    $todolistService->showTodoList();
    $todolistService->addTodoList("Belajar PHP 8");
    $todolistService->showTodoList();
    $todolistService->addTodoList("Belajar PHP Web");
    $todolistService->showTodoList();

    $todolistService->removeTodoList(4);
    $todolistService->showTodoList();
    $todolistService->removeTodoList(5);
    $todolistService->showTodoList();
    $todolistService->removeTodoList(1);
    $todolistService->showTodoList();
}

removeTodoListService();
