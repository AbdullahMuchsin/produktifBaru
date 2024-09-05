<?php

trait A
{

    function showA(): void
    {
        echo "A" . PHP_EOL;
    }

    function showB(): void
    {
        echo "B" . PHP_EOL;
    }
}

trait B
{
    function showA(): void
    {
        echo "a" . PHP_EOL;
    }
    function showB(): void
    {
        echo "b" . PHP_EOL;
    }
}

class Sample
{
    use A, B {
        A::showA insteadof B;
        B::showB insteadof A;
    }
}

$sample = new Sample();

$sample->showA();
$sample->showB();
