<?php

namespace Service {

    use Entity\Book;
    use Repository\BookRepositoryImpl;

    interface BookService
    {
        public function showBooks(): void;
        public function addBook(string $name, string $isRead): void;
        public function removeBook(int $number): void;
        public function updateBook(int $number, string $name, string $isRead): void;
    }

    class BookServiceImpl implements BookService
    {

        private BookRepositoryImpl $bookRepository;

        public function __construct(BookRepositoryImpl $bookRepository)
        {
            $this->bookRepository = $bookRepository;
        }

        public function showBook(int $number): void
        {
            $book = $this->bookRepository->find($number);

            if ($book) {
                echo "Name Book : {$book['name']}" . PHP_EOL;
                echo "Is Read   : {$book['isRead']}" . PHP_EOL;
            } else {
                echo "DATA BUKU TIDAK DITEMUKAN" . PHP_EOL;
            }
        }

        public function showBooks(): void
        {
            $books = $this->bookRepository->findAll();

            foreach ($books as $number => $book) {
                $number += $number + 1;
                echo " {$number} | {$book->getName()} -> {$book->getId()}          | {$book->getRead()} " . PHP_EOL;
            }
        }

        public function addBook(string $name, string $isRead): void
        {

            if ($isRead == "y") {
                $isRead = "Sudah";
            } else {
                $isRead = "Belum";
            }

            $book = new Book($name, $isRead);
            $this->bookRepository->save($book);
            echo "BERHASIL MENAMBAHKAN DATA BOOK" . PHP_EOL;
        }

        public function removeBook(int $number): void
        {
            if ($this->bookRepository->remove($number)) {
                echo "BERHASIL MENGHAPUS DATA BOOK" . PHP_EOL;
            } else {
                echo "GAGAL MENGHAPUS DATA BOOK" . PHP_EOL;
            }
        }

        public function updateBook(int $number, string $name, string $isRead): void
        {

            $book = $this->bookRepository->find($number);

            if ($book) {
                if ($name == "x" || $name == "X") {
                    $name = $book["name"];
                } else if ($isRead == "x" || $isRead == "X") {
                    $isRead = $book["isRead"];
                }

                if ($isRead == "y") {
                    $isRead = "Sudah";
                } else {
                    $isRead = "Belum";
                }
                $book = new Book($name, $isRead);
                if ($this->bookRepository->update($number, $book)) {
                    echo "BERHASIL UPDATE DATA BOOK" . PHP_EOL;
                } else {
                    echo "GAGAL UPDATE DATA BOOK" . PHP_EOL;
                }
            } else {
                echo "DATA BUKU TIDAK DITEMUKAN" . PHP_EOL;
            }
        }
    }
}
