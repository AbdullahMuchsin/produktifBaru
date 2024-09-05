<?php

namespace Data;

interface Year
{
    function year(): void;
}

interface Car extends Year
{
    function run(): void;

    function isOri(): bool;
}

interface Engine
{
    function getEngine(): string;

    function runEngine(): void;
}

class Avanza implements Car, Engine
{

    var string $name;
    var string $engine;
    var int $year;
    var bool $ori;

    public function run(): void
    {
        echo "$this->name is running" . PHP_EOL;
    }

    public function isOri(): bool
    {
        return $this->ori;
    }

    public function year(): void
    {
        echo "$this->name made since $this->year" . PHP_EOL;
    }

    public function getEngine(): string
    {
        return $this->engine;
    }
    public function runEngine(): void
    {
        echo "The $this->name engine $this->engine has been activated" . PHP_EOL;
    }
}
