<?php

require_once __DIR__ . "/getConnection.php";

$connection = getConnection();

$username = "abdullah";
$password = "rahasia";

$sql = "INSERT INTO admin(id, username, password) VALUES('', :username, :password);";

$praperStatement = $connection->prepare($sql);
$praperStatement->bindParam("username", $username);
$praperStatement->bindParam("password", $password);

$praperStatement->execute();
echo "Sukses menambah data" . PHP_EOL;
