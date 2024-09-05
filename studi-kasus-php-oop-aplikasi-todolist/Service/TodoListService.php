<?php

namespace Service {

    use Entity\TodoList;
    use Helper\InputHelper;
    use Repository\TodolistRepository;

    interface TodoListService
    {
        public function showTodoList(): void;
        public function addTodoList(string $todo): void;
        public function removeTodoList(int $number): void;
    }

    class TodoListServiceImpl implements TodoListService
    {

        private TodolistRepository $todolistRepository;

        public function __construct(TodolistRepository $todolistRepository)
        {
            $this->todolistRepository = $todolistRepository;
        }

        public function showTodoList(): void
        {
            echo "TODOLIST" . PHP_EOL;
            $todolist = $this->todolistRepository->findAll();
            foreach ($todolist as $number => $value) {
                echo "$number. $value" . PHP_EOL;
            }
        }

        public function addTodoList(string $todo): void
        {
            $todolist = new TodoList($todo);
            $this->todolistRepository->save($todolist);
            echo "SUKSES MENAMBAHKAN TODOLIST" . PHP_EOL;
        }

        public function removeTodoList(int $number): void
        {
            if ($this->todolistRepository->remove($number)) {
                echo "SUKSES MENGHAPUS TODO" . PHP_EOL;
            } else {
                echo "GAGAL MENGHAPUS TODO" . PHP_EOL;
            }
        }
    }
}
