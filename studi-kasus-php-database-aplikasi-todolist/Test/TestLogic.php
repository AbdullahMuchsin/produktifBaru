<?php

class Data
{
    private $id;
    private $name;

    public function __construct($id, $name)
    {
        $this->id = $id;
        $this->name = $name;
    }
}

$tes = new Data(1, "fsdfs");

foreach ($tes as $name) {
    var_dump($name);
}
