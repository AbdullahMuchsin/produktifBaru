<?php

require_once __DIR__ . "/getConnection.php";

$connection = getConnection();

$username = "admin";
$password = "admin";

$sql = "SELECT * FROM admin WHERE username = ? AND password = ?";

$praperStatement = $connection->prepare($sql);
$praperStatement->bindParam(1, $username);
$praperStatement->bindParam(2, $password);

$praperStatement->execute();

$success = false;
$findData = "";

$praperStatement = $praperStatement->fetchAll(PDO::FETCH_ASSOC);

for ($i = 0; $i < count($praperStatement); $i++) {
    $success = true;
    $findData = $praperStatement[$i]["username"];
}

if ($success) {
    echo "Login sukses : $findData" . PHP_EOL;
} else {
    echo "Login gagal" . PHP_EOL;
}
