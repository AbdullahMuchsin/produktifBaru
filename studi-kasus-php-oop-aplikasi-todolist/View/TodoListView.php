<?php

namespace View {

    use Helper\InputHelper;
    use Service\TodoListService;

    class TodoListView
    {
        private TodoListService $todolistService;

        public function __construct(TodoListService $todolistService)
        {
            $this->todolistService = $todolistService;
        }

        public function showTodoList(): void
        {
            while (true) {
                $this->todolistService->showTodoList();

                echo "MENU" . PHP_EOL;
                echo "1. Tambah Todo" . PHP_EOL;
                echo "2. Hapus Todo" . PHP_EOL;
                echo "x. Keluar" . PHP_EOL;

                $option = InputHelper::input("Pilih");

                if ($option == 1) {
                    $this->addTodoList();
                } else if ($option == 2) {
                    $this->removeTodoList();
                } else if ($option == "x") {
                    break;
                } else {
                    echo "Maaf perintah tidak dimengerti" . PHP_EOL;
                }
            }
            echo "Sampai jumpa lagi" . PHP_EOL;
        }
        public function addTodoList(): void
        {
            echo "MENAMBAH TODO" . PHP_EOL;

            $todo = InputHelper::input("Todo (x untuk batal)");

            if ($todo == "x") {
                echo "Batal menambahkan todo" . PHP_EOL;
            } else {
                $this->todolistService->addTodoList($todo);
            }
        }
        public function removeTodoList(): void
        {
            echo "MENGAPUS TODO" . PHP_EOL;

            $number = InputHelper::input("Nomor (x untuk kembali)");

            if ($number == 'x') {
                echo "Batal menghapus todo" . PHP_EOL;
            } else {
                $this->todolistService->removeTodoList($number);
            }
        }
    }
}
