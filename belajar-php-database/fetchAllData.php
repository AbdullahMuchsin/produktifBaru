<?php

require_once __DIR__ . "/getConnection.php";

$connection = getConnection();

$sql = "SELECT * FROM admin";

$result = $connection->query($sql);

if ($row = $result->fetchAll(PDO::FETCH_ASSOC)) {
    var_dump($row);
} else {
    echo "KONEKSI GAGAL" . PHP_EOL;
}
