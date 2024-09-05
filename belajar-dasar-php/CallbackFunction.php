<?php

$sayHello = function (string $firstName, string $lastName, $filter): void {
    $finalName = call_user_func($filter, $firstName) . " " . call_user_func($filter, $lastName);

    echo "Hello, $finalName" . PHP_EOL;
};

$sayHello("Abdullah", "Muchsin", "strtoupper");
$sayHello("Abdullah", "Muchsin", "strlen");
$sayHello("Abdullah", "Muchsin", function ($name) {
    return strtolower($name);
});
$sayHello("Irma", "Aulia", fn($name) => strtoupper($name));
