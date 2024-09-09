<?php

namespace Repository {

    use Entity\Book;

    interface BookRepository
    {
        public function findAll(): array;
        public function find(int $number): array;
        public function save(Book $book): void;
        public function remove(int $number): bool;
        public function update(int $number, Book $book): bool;
    }

    class BookRepositoryImpl implements BookRepository
    {

        public array $books = array();

        public function findAll(): array
        {
            return $this->books;
        }

        public function find(int $number): array
        {
            return $this->books[$number];
        }

        public function save(Book $book): void
        {
            $number = sizeof($this->books) + 1;
            $this->books[$number] = [
                "name" => $book->getName(),
                "isRead" => $book->getRead()
            ];
        }

        public function remove(int $number): bool
        {
            $lengthBooks = sizeof($this->books);

            if (!array_key_exists($number, $this->books)) {
                return false;
            }

            for ($i = $number; $i < $lengthBooks; $i++) {
                $this->books[$i] = $this->books[$i + 1];
            }

            array_pop($this->books);
            return true;
        }

        public function update(int $number, Book $book): bool
        {
            if (!array_key_exists($number, $this->books)) {
                return false;
            } else {
                $this->books[$number] = [
                    "name" => $book->getName(),
                    "isRead" => $book->getRead()
                ];
                return true;
            }
        }
    }
}
