<?php

require_once __DIR__ . "/getConnection.php";

try {
    $connection = getConnection();

    $query = <<<SQL
        INSERT INTO users(id, name, email) 
        VALUES ("1", "Abdullah", "abdullah@gmail.com");
    SQL;

    $queryAdmin = <<<SQL
        INSERT INTO admin(id, username, password)
        VALUES (1, "admin", "admin");
    SQL;

    $connection->exec($queryAdmin);

    $connection = null;
} catch (PDOException $e) {
    echo "DATABASE ERROR : " . $e->getMessage() . PHP_EOL;
}
