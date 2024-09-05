<?php

namespace Data;

require_once __DIR__ . "/Food.php";

abstract class Animal
{
    var string $name;

    public abstract function run(): void;
    public abstract function eat(AnimalFood $food): void;
}

class Cat extends Animal
{
    public function run(): void
    {
        echo "Cat $this->name is running" . PHP_EOL;
    }
    public function eat(AnimalFood $food): void
    {
        echo "Cat $this->name is eating" . PHP_EOL;
    }
}

class Dog extends Animal
{
    public function run(): void
    {
        echo "Dog $this->name is running" . PHP_EOL;
    }

    public function eat(Food $food): void
    {
        echo "Dog $this->name is eating" . PHP_EOL;
    }
}
