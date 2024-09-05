<?php

namespace Data;

class Student
{
    public string $id;
    public string $name;
    public int $value;
    private string $numberphone;

    public function setNumberphone(string $number): void
    {
        if (trim($number) != "") {
            $this->numberphone = $number;
        }
    }

    public function __clone()
    {
        unset($this->numberphone);
    }

    public function __toString(): string
    {
        return "Id : $this->id, Name : $this->name, Value : $this->value";
    }

    public function __debugInfo(): array
    {
        return [
            "id" => $this->id,
            "name" => $this->name,
            "value" => $this->value,
            "numberphone" => $this->numberphone,
            "author" => "Abdullah Muchsin"
        ];
    }
    public function __invoke(...$arguments): void
    {
        $join = implode("-", $arguments);
        echo "Data object function arguments : $join" . PHP_EOL;
    }
}
