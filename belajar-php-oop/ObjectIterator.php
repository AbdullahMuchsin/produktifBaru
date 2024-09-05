<?php

class Data implements IteratorAggregate
{
    var string $pertama = "Pertama";
    public string $kedua = "Kedua";
    private string $ketiga = "Ketiga";
    protected string $keempat = "Keempat";

    function getIterator(): Traversable
    {
        yield "pertama" => $this->pertama;
        yield "kedua" => $this->kedua;
        yield "ketiga" => $this->ketiga;
        yield "keempat" => $this->keempat;
    }
}

$data = new Data();

foreach ($data as $property => $value) {
    echo "$property : $value" . PHP_EOL;
}
