<?php

require_once __DIR__ . "/../Model/TodoList.php";
require_once __DIR__ . "/../BusinessLogic/RemoveTodoList.php";
require_once __DIR__ . "/../Helper/Input.php";

function ViewRemoveTodoList(): void
{
    echo "MENGAPUS TODO" . PHP_EOL;

    $number = input("Nomor (x untuk kembali)");

    if ($number == 'x') {
        echo "Batal menghapus todo" . PHP_EOL;
    } else {
        if (removeTodolist($number)) {
            echo "Berhasil menghapus todo nomor $number" . PHP_EOL;
        } else {
            echo "Gagal menghapus todo nomor $number" . PHP_EOL;
        }
    }
}
