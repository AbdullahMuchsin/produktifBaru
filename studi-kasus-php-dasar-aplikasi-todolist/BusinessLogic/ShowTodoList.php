<?php

/*
* Menampilkan todolist
*/
function showTodolist(): void
{
    global $todolist;

    echo "APLIKASI TODOLIST" . PHP_EOL;

    foreach ($todolist as $number => $value) {
        echo "$number. $value" . PHP_EOL;
    }
}
