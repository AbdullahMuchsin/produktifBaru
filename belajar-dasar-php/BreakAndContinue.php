<?php

$number = 1;

while ($number) {
    echo "Number ke-$number while loop break" . PHP_EOL;

    if ($number == 10) {
        break;
    }

    $number++;
}

echo PHP_EOL;

for ($i = 50; $i >= 1; $i--) {
    if ($i % 2 == 0) {
        continue;
    }

    echo "Number ke-$i for loop continue" . PHP_EOL;
}
