<?php

namespace Repository {

    use Entity\TodoList;
    use PDO;

    interface TodolistRepository
    {
        public function findAll(): array;
        public function save(TodoList $todolist): void;
        public function remove(int $number): bool;
    }

    class TodolistRepositoryImpl implements TodolistRepository
    {

        private PDO $connection;

        public function __construct(PDO $connection)
        {
            $this->connection = $connection;
        }

        public function findAll(): array
        {
            $sql = "SELECT id, todo FROM todolist";

            $statement = $this->connection->prepare($sql);
            $statement->execute();

            $result = [];

            foreach ($statement->fetchAll() as $row) {

                $todolist = new TodoList();
                $todolist->setId($row["id"]);
                $todolist->setTodolist($row["todo"]);

                $result[] = $todolist;
            }

            return $result;
        }

        public function save(TodoList $todolist): void
        {
            $sql = "INSERT INTO todolist(todo) VALUES(:todo)";

            $todo = $todolist->getTodolist();
            $statement = $this->connection->prepare($sql);
            $statement->bindParam("todo", $todo);
            $statement->execute();
        }

        public function remove(int $number): bool
        {

            $sql = "SELECT * FROM todolist WHERE id = :id";

            $statement = $this->connection->prepare($sql);
            $statement->bindParam("id", $number);
            $statement->execute();

            if ($statement->fetch()) {
                $sql = "DELETE FROM todolist WHERE id = :id";

                $statement = $this->connection->prepare($sql);
                $statement->bindParam("id", $number);
                $statement->execute();
                return true;
            } else {
                return false;
            }
        }
    }
}
