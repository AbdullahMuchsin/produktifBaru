<?php

class Zero
{

    private array $properties = [];
    public string $firstName;

    public function __get($name): string
    {
        return $this->properties[$name];
    }

    public function __set($name, $value): void
    {
        $this->properties[$name] = $value;
    }

    public function __isset($name): bool
    {
        return isset($this->properties[$name]);
    }

    public function __unset($name): void
    {
        unset($this->properties[$name]);
    }

    public function __call($name, $arguments): void
    {
        $implode = implode(",", $arguments);

        echo "Data function $name __call arguments $implode" . PHP_EOL;
    }

    public static function __callStatic($name, $arguments): void
    {
        $implode = implode(",", $arguments);

        echo "Data function static $name __call arguments $implode" . PHP_EOL;
    }
}

$zero = new Zero();
$zero->firstName = "Abdullah";
$zero->lastName = "Muchsin";

echo "First Name : $zero->firstName" . PHP_EOL;
echo "Last Name : $zero->lastName" . PHP_EOL;

var_dump(isset($zero->lastName));
var_dump($zero);
unset($zero->lastName);
var_dump($zero);
var_dump(isset($zero->lastName));

$zero->random(2, 4, 5, 25, "Muchsin");
Zero::sayHello("Hai", "Hello", "Hmmmm");
