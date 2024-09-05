<?php

$nilai = random_int(50, 100);
$absen = random_int(50, 100);

if ($absen >= 90 && $nilai >= 90) {
    echo "Nilai A" . PHP_EOL;
} else if ($absen >= 80 && $nilai >= 80) {
    echo "Nilai B" . PHP_EOL;
} else if ($absen >= 70 && $nilai >= 70) {
    echo "Nilai C" . PHP_EOL;
} else if ($absen >= 60 && $nilai >= 60) {
    echo "Nilai D" . PHP_EOL;
} else {
    echo "Nilai E" . PHP_EOL;
}

$nilai = random_int(50, 100);
$absen = random_int(50, 100);

if ($absen >= 90 && $nilai >= 90) :
    echo "Nilai A" . PHP_EOL;
elseif ($absen >= 80 && $nilai >= 80) :
    echo "Nilai B" . PHP_EOL;
elseif ($absen >= 70 && $nilai >= 70) :
    echo "Nilai C" . PHP_EOL;
elseif ($absen >= 60 && $nilai >= 60) :
    echo "Nilai D" . PHP_EOL;
else :
    echo "Nilai E" . PHP_EOL;
endif;
