<?php

namespace Config {

    use PDO;

    class Database
    {

        public static function getConnection(): PDO
        {
            $host = "localhost";
            $port = 3306;
            $database = "belajar_php_database";
            $username = "root";
            $password = "";

            $connection = new PDO("mysql:host=$host:$port;dbname=$database", $username, $password);

            $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);

            return $connection;
        }
    }
}
