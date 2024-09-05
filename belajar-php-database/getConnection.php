<?php

function getConnection(): PDO
{
    $host = "localhost";
    $port = 3306;
    $database = "belajar_php_database";
    $username = "root";
    $password = "";

    try {
        $connection = new PDO("mysql:host=$host:$port;dbname=$database", $username, $password);
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        return $connection;
    } catch (PDOException $e) {
        echo "GAGAL KONEKSI DATABASE ERROR : " . $e->getMessage() . PHP_EOL;
    }
}
