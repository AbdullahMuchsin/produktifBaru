<?php

$nilai = "E";

switch ($nilai) {
    case "A":
        echo "Selamat anda lulus dengan baik" . PHP_EOL;
        break;
    case "B":
    case "C":
        echo "Selamat anda lulus" . PHP_EOL;
        break;
    case "D":
        echo "Selamat anda lulus dengan syarat" . PHP_EOL;
        break;
    default:
        echo "Maaf mungkin anda salah jurusan" . PHP_EOL;
}

switch ($nilai):
    case "A":
        echo "Selamat anda lulus dengan baik" . PHP_EOL;
        break;
    case "B":
    case "C":
        echo "Selamat anda lulus" . PHP_EOL;
        break;
    case "D":
        echo "Selamat anda lulus dengan syarat" . PHP_EOL;
        break;
    default:
        echo "Maaf mungkin anda salah jurusan" . PHP_EOL;
endswitch;
