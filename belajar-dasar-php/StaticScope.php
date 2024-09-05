<?php

function addCourner()
{
    static $courner = 1;  // Variable yang scope nya hanya di dalam function

    echo "Courner = $courner" . PHP_EOL;

    $courner *= 2;
}


addCourner();
addCourner();
addCourner();