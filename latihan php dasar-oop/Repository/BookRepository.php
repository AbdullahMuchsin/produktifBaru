<?php

namespace Repository {

    interface BookRepository
    {
        public function showBook(): array;
        public function addBook(string $name, string $read): void;
        public function removeBook(int $number): bool;
    }

    class BookRepositoryImpl implements BookRepository
    {

        private array $books = array();

        public function showBook(): array
        {
            return $this->books;
        }

        public function addBook(string $name, string $read): void {}

        public function removeBook(int $number): bool
        {
            return false;
        }
    }
}
