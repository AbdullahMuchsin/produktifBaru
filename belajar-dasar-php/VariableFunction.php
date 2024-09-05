<?php

function foo(): void
{
    echo "FOO" . PHP_EOL;
}

function bar(): void
{
    echo "BAR" . PHP_EOL;
}

$createNameFunction = "foo";
$createNameFunction();

$createNameFunction = "bar";
$createNameFunction();

function sayHello(string $name, $filter): void
{
    $result = $filter($name);

    echo "Hello, $result" . PHP_EOL;
}

function kurungName($name) : string
{
    return "[{$name}]";
}

sayHello("Abdullah Muchsin", "kurungName");
sayHello("Abdullah Muchsin", "strtoupper");
sayHello("Abdullah Muchsin", "strtolower");
