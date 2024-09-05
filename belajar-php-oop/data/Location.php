<?php

namespace Data;

abstract class Location
{

    protected string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public abstract function getLocationName(): string;
}

class Province extends Location
{
    public function __construct(string $name)
    {
        parent::__construct($name);
    }

    public function getLocationName(): string
    {
        return $this->name;
    }
}
class City extends Location
{

    public function __construct(string $name)
    {
        parent::__construct($name);
    }

    public function getLocationName(): string
    {
        return $this->name;
    }
}
class Country extends Location
{

    public function __construct(string $name)
    {
        parent::__construct($name);
    }

    public function getLocationName(): string
    {
        return $this->name;
    }
}
