<?php

require_once __DIR__ . "/getConnection.php";

$connection = getConnection();

$username = "admin";
$password = "admdin";

$sql = "SELECT * FROM admin";

$result = $connection->prepare($sql);
$result->bindParam("username", $username);
$result->bindParam("password", $password);

$result->execute();

if ($row = $result->fetch(PDO::FETCH_ASSOC)) {
    var_dump($row);
} else {
    echo "KONEKSI GAGAL" . PHP_EOL;
}
