<?php

$number = 1;

while ($number <= 10) {
    echo "Number ke-$number dari while loop" . PHP_EOL;
    $number++;
}

while ($number >= 1) :
    echo "Number ke-$number dari while loop" . PHP_EOL;
    $number--;
endwhile;
