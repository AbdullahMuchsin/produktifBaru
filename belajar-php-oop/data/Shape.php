<?php

namespace Data;

class Shape
{
    function getCorner(): int
    {
        return 0;
    }
}

class Rectangle extends Shape
{
    function getCorner(): int
    {
        return 4;
    }

    function getCornerParent(): int
    {
        return parent::getCorner();
    }
}
