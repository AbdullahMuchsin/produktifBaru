<?php

namespace Helper;

class MainHelper
{
    static public string $name = "MainHelper";
    const AUTHOR = "Abdullah Muchsin";

    static public function sum(int ...$numbers): int
    {
        $result = 0;
        foreach ($numbers as $number) {
            $result += $number;
        }
        return $result;
    }
}
