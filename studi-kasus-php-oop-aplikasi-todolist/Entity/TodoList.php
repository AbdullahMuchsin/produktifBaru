<?php

namespace Entity {
    class TodoList
    {
        private string $todolist;

        public function __construct(string $todolist = "")
        {
            $this->todolist = $todolist;
        }

        public function getTodolist(): string
        {
            return $this->todolist;
        }

        public function setTodolist(string $todo): void
        {
            $this->todolist = $todo;
        }
    }
}
