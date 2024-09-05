<?php

require_once __DIR__ . "/getConnection.php";

try {
    $connection = getConnection();

    $sql = <<<SQL
        SELECT id, name, email FROM users
    SQL;

    $users = $connection->query($sql);

    // var_dump($users);

    // foreach ($users as $user) {
    //     $id = $user["id"];
    //     $name = $user["name"];
    //     $email = $user["email"];

    //     echo "ID : " . $id . PHP_EOL;
    //     echo "NAME : " . $name . PHP_EOL;
    //     echo "EMAIL : " . $email . PHP_EOL;
    // }

    $users = $users->fetchAll(PDO::FETCH_ASSOC);

    for($i = 0; $i < count($users); $i++) {
        echo "ID : " . $users[$i]["id"] . PHP_EOL;
        echo "NAME : " . $users[$i]["name"] . PHP_EOL;
        echo "EMAIL : " . $users[$i]["email"] . PHP_EOL;
    }

} catch (PDOException $e) {
    echo "DATABASE ERROR : " . $e . PHP_EOL;
}
