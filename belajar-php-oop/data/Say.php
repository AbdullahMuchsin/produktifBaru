<?php

namespace Data;

trait SayGoodBye
{
    private function goodbye(?string $name): void
    {
        if (!$name) {
            echo "Good Bye" . PHP_EOL;
        } else {
            echo "Good Bye $name" . PHP_EOL;
        }
    }
}

trait SayHello
{
    private function hello(?string $name): void
    {
        if (!$name) {
            echo "Hello" . PHP_EOL;
        } else {
            echo "Hello $name" . PHP_EOL;
        }
    }

    function info(): void
    {
        echo "Hello, my name is " . $this->getName() . " in SayHello" . PHP_EOL;
    }
}

class ParentPerson
{
    use HasName;

    function info(): void
    {
        echo "Hello, my name is $this->name in ParentPerson" . PHP_EOL;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }
}

trait HasName
{
    protected string $name;

    abstract function setName(): void;
    abstract function getName(): string;
}

trait All
{
    use SayGoodBye, SayHello {
        // Mengatur visibility dari trait
        SayGoodBye::goodbye as public;
        SayHello::hello as public;
    }
}

class Person extends ParentPerson
{
    use All;

    function info(): void
    {
        echo "Hello, my name is " . $this->getName() . " in ClassPerson" . PHP_EOL;
    }
}
