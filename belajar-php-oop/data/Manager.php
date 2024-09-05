<?php

class Manager
{
    var string $name;
    var string $title;

    public function __construct(string $name = "", string $title = "Manager")
    {
        $this->name = $name;
        $this->title = $title;
    }

    function sayHello(string $name): void
    {
        echo "Hello $name, my name is $this->name as Manager" . PHP_EOL;
    }
}

class VicePresident extends Manager
{

    public function __construct(string $name = "")
    {
        parent::__construct($name, "VP");
    }

    function sayHello(string $name): void
    {
        echo "Hello $name, my name is $this->name as Vice President" . PHP_EOL;
    }

    public function getInfo(): void
    {
        echo "Name : $this->name" . PHP_EOL;
        echo "Title : $this->title" . PHP_EOL;
    }
}
