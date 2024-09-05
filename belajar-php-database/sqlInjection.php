<?php

require_once __DIR__ . "/getConnection.php";

$connection = getConnection();

$username = $connection->quote("admin' #csdfdfsdf");
$password = $connection->quote("admin_salah");

$query = "SELECT * FROM admin WHERE username = $username AND password = $password;";

$admin = $connection->query($query);

$isSuccess = false;
$findUsername = "";

var_dump($admin);
foreach ($admin as $a) {
    $isSuccess = true;
    $findUsername = $a["username"];
}

if ($isSuccess) {
    echo "Login berhasil dengan username : " . $findUsername . PHP_EOL;
} else {
    echo "Login gagal" . PHP_EOL;
}
