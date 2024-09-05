<?php

namespace Repository {

    use Entity\TodoList;

    interface TodolistRepository
    {
        public function findAll(): array;
        public function save(TodoList $todolist): void;
        public function remove(int $number): bool;
    }

    class TodolistRepositoryImpl implements TodolistRepository
    {

        public array $todolist = array();

        public function findAll(): array
        {
            return $this->todolist;
        }

        public function save(TodoList $todolist): void
        {
            $number = sizeof($this->todolist) + 1;

            $this->todolist[$number] = $todolist->getTodolist();
        }

        public function remove(int $number): bool
        {
            if ($number > sizeof($this->todolist)) {
                return false;
            }

            for ($i = $number; $i < sizeof($this->todolist); $i++) {
                $this->todolist[$i] = $this->todolist[$i + 1];
            }

            unset($this->todolist[sizeof($this->todolist)]);

            return true;
        }
    }
}
