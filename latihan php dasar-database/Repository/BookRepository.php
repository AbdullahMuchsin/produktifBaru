<?php

namespace Repository {

    use Entity\Book;
    use PDO;

    interface BookRepository
    {
        public function findAll(): array;
        public function find(int $number): ?array;
        public function save(Book $book): void;
        public function remove(int $number): bool;
        public function update(int $number, Book $book): bool;
    }

    class BookRepositoryImpl implements BookRepository
    {

        public array $books = array();
        private PDO $connection;

        public function __construct(PDO $connection)
        {
            $this->connection = $connection;
        }

        public function findAll(): array
        {
            $sql = "SELECT * FROM book";

            $statement = $this->connection->prepare($sql);
            $statement->execute();

            $result = [];

            foreach ($statement->fetchAll(PDO::FETCH_ASSOC) as $row) {
                $book = new Book();
                $book->setId($row["id"]);
                $book->setName($row["name"]);
                $book->setRead($row["isRead"]);

                $result[] = $book;
            }

            return $result;
        }

        public function find(int $number): ?array
        {
            $sql = "SELECT * FROM book WHERE id = :id";

            $statement = $this->connection->prepare($sql);
            $statement->bindParam("id", $number);

            $statement->execute();

            if ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
                return $row;
            } else {
                return null;
            }
        }

        public function save(Book $book): void
        {
            $sql = "INSERT INTO book(name, isRead) VALUES(:name, :isRead)";

            $name = $book->getName();
            $isRead = $book->getRead();
            $statement = $this->connection->prepare($sql);

            $statement->bindParam("name", $name);
            $statement->bindParam("isRead", $isRead);

            $statement->execute();
        }

        public function remove(int $number): bool
        {

            $sql = "SELECT * FROM book WHERE id = :id";

            $statement = $this->connection->prepare($sql);
            $statement->bindParam("id", $number);

            $statement->execute();

            if ($statement->fetch()) {
                $sql = "DELETE FROM book WHERE id = :id";
                $statement = $this->connection->prepare($sql);
                $statement->bindParam("id", $number);

                $statement->execute();
                return true;
            } else {
                return false;
            }
        }

        public function update(int $number, Book $book): bool
        {
            $sql = "SELECT * FROM book WHERE id = :id";

            $statement = $this->connection->prepare($sql);
            $statement->bindParam("id", $number);

            $statement->execute();

            if ($statement->fetch()) {

                $name = $book->getName();
                $isRead = $book->getRead();

                $sql = "UPDATE book SET name = :name, isRead = :isRead WHERE id = :id";
                $statement = $this->connection->prepare($sql);
                $statement->bindParam("id", $number);
                $statement->bindParam("name", $name);
                $statement->bindParam("isRead", $isRead);

                $statement->execute();
                return true;
            } else {
                return false;
            }
        }
    }
}
