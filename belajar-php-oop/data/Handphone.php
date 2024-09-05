<?php

namespace Data;

abstract class Handphone
{
    private string $name;
    private int $price;
    private bool $original;

    public function __construct(string $name, int $price, $original = true)
    {
        $this->name = $name;
        $this->price = $price;
        $this->original = $original;
    }

    public function getName(): string
    {
        return $this->name;
    }
    public function setName(string $name): void
    {
        if (trim($name) != "") {
            $this->name = $name;
        }
    }
    public function getPrice(): int
    {
        return $this->price;
    }
    public function setPrice(int $price): void
    {
        if ($price > 0) {
            $this->price = $price;
        }
    }
    public function isOriginal(): bool
    {
        return $this->original;
    }
    public function setOriginal(bool $original): void
    {
        $this->original = $original;
    }

    public abstract function getInfo(): void;
}


class Redmi extends Handphone
{

    public function getInfo(): void
    {
        echo "Name : " . $this->getName() . PHP_EOL;
        echo "Price : " . $this->getPrice() . PHP_EOL;
        echo "Ori : " . $this->isOriginal() . PHP_EOL;
    }
}
