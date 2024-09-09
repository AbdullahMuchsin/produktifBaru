<?php

namespace View {

    use Service\BookServiceImpl;

    class BookView
    {

        private BookServiceImpl $bookService;

        function __construct(BookServiceImpl $bookService)
        {
            $this->bookService = $bookService;
        }

        function ShowBookView(): void
        {
            while (true) {

                $this->showHeader();

                echo "Pilih Menu" . PHP_EOL;
                echo "1. Add Book" . PHP_EOL;
                echo "2. Update Book" . PHP_EOL;
                echo "3. Delete Book" . PHP_EOL;
                echo "x. Keluar" . PHP_EOL;

                $select = input("Number");

                if ($select == 1) {
                    $this->addBookView();
                } else if ($select == 2) {
                    $this->updateBookView();
                } else if ($select == 3) {
                    $this->removeBookView();
                } else if ($select == "x") {
                    break;
                }

                echo "Maaf perintah tidak dimengerti" . PHP_EOL;
            }

            echo "Terima kasih." . PHP_EOL;
        }

        function showHeader(): void
        {
            echo "===================== MY LIST BOOK =====================" . PHP_EOL;
            echo "NO | NAME -> ID                   | IS READ " . PHP_EOL;
            echo "========================================================" . PHP_EOL;

            $this->bookService->showBooks();
            echo "--------------------------------------------------------" . PHP_EOL;
        }

        function addBookView(): void
        {
            echo "=========== ADD BOOK" . PHP_EOL;
            echo "(x for back)--------" . PHP_EOL;
            $nameBook = input("Name Book");
            $isRead = input("Read Book (y/n)");

            if ($nameBook == "x" || $isRead == "x") {
                echo "Batal menambahkan data buku" . PHP_EOL;
            } else {
                $this->bookService->addBook($nameBook, $isRead);
            }
        }

        function removeBookView(): void
        {
            echo "=========== REMOVE BOOK" . PHP_EOL;
            $number = input("Number (x for back)");

            if ($number == "x") {
                echo "Batal menghapus data buku" . PHP_EOL;
            } else {
                $this->bookService->removeBook($number);
            }
        }

        function updateBookView(): void
        {
            $this->showHeader();
            echo "=========== UPDATE BOOK" . PHP_EOL;
            $number = input("(x for back) Pilih Nomor Buku");

            if ($number == "x") {
                return;
            }

            echo "=========== BUKU SEKARANG ==========" . PHP_EOL;
            $this->bookService->showBook($number);
            $newName = input("New Name (x Untuk lewati)");
            $isRead = input("New IsRead (x Untuk lewati)");

            $this->bookService->updateBook($number, $newName, $isRead);
            echo "BERHASIL UPDATE DATA NOMOR $number" . PHP_EOL;
        }
    }
}
