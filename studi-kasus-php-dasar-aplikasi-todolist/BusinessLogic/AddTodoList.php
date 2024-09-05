<?php

/*
* Menambahkan Todolist
*/
function addTodoList(string $value): void
{
    global $todolist;

    $number = sizeof($todolist) + 1;

    $todolist[$number] = $value;
}
