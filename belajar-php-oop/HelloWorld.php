<?php

namespace Data;

interface HelloWorld
{
    function sayHello(): void;
}

$muchsin = new class("Irma") implements HelloWorld {

    public string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    function sayHello(): void
    {
        echo "Hello, my name is $this->name" . PHP_EOL;
    }
};

$muchsin->sayHello();
