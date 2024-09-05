<?php

require_once __DIR__ . "/../Model/TodoList.php";
require_once __DIR__ . "/../BusinessLogic/ShowTodoList.php";
require_once __DIR__ . "/../View/ViewAddTodoList.php";
require_once __DIR__ . "/../View/ViewRemoveTodoList.php";
require_once __DIR__ . "/../Helper/Input.php";

function ViewShowTodoList(): void
{
    while (true) {
        showTodolist();

        echo "MENU" . PHP_EOL;
        echo "1. Tambah Todo" . PHP_EOL;
        echo "2. Hapus Todo" . PHP_EOL;
        echo "x. Keluar" . PHP_EOL;

        $option = input("Pilih");

        if ($option == 1) {
            ViewAddTodoList();
        } else if ($option == 2) {
            ViewRemoveTodoList();
        } else if ($option == "x") {
            break;
        } else {
            echo "Maaf perintah tidak dimengerti" . PHP_EOL;
        }
    }
    echo "Sampai jumpa lagi" . PHP_EOL;
}
