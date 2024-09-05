<?php

namespace Data;

class Product
{
    protected string $name;
    protected int $price;

    public function __construct(string $name, int $price)
    {
        $this->name = $name;
        $this->price = $price;
    }

    public function getName(): string
    {
        return $this->name;
    }
    public function getPrice(): int
    {
        return $this->price;
    }
}

class Fruit extends Product
{

    public function __construct(string $name, int $price)
    {
        Parent::__construct($name, $price);
    }

    public function info()
    {
        echo "Name : $this->name" . PHP_EOL;
        echo "Price : $this->price" . PHP_EOL;
    }
}
