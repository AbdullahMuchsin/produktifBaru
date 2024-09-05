<?php

$host = "localhost";
$port = 3306;
$database = "belajar_php_database";
$username = "root";
$password = "";

try {
    $connection = new PDO("mysql:host=$host:$port;dbname=$database", $username, $password);

    echo "BERHASIL TERKONEKSI DI DATABASE" . PHP_EOL;

    // Menutup koneksi
    $connection = null;
}catch(PDOException $exception) {
    echo "KONEKSI GAGAL ERROR : " . $exception->getMessage() . PHP_EOL;
}
