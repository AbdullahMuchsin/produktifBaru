<?php

goto a;
b:
echo "Hello dari line 4" . PHP_EOL;

a:
echo "Hello dari line 7" . PHP_EOL . PHP_EOL;
// Studi kasus dengan operator goto

$counter = 1;

while (true) {
    echo "While loop ke-$counter" . PHP_EOL;

    if ($counter == 10) {
        goto endLoop;
    }

    $counter++;
}

endLoop:
echo "Looping berakhir" . PHP_EOL;
