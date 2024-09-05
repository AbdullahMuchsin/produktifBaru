<?php

$dateTime = new DateTime();

var_dump($dateTime);
$dateTime->setTimezone(new DateTimeZone("Asia/Tokyo"));
var_dump($dateTime);

$dateTime->setDate(1991, 11, 11);
var_dump($dateTime);
$dateTime->setTime(12, 12, 12, 0);
var_dump($dateTime);

$dateTime->add(new DateInterval("P9Y"));
var_dump($dateTime);
$dateIntervalInvert = new DateInterval("P5M");
$dateIntervalInvert->invert = true;
$dateTime->add($dateIntervalInvert);
var_dump($dateTime);

$stringDateTime = $dateTime->format("Y-m-d H:i:s");
echo "Waktu : $stringDateTime" . PHP_EOL;

$date = DateTime::createFromFormat("Y-m-d H:i:s", "2020-03-12 12:10:20", new DateTimeZone("Asia/Tokyo"));

if ($date) {
    var_dump($date);
} else {
    echo "Format Tanggal Tidak Valid" . PHP_EOL;
}
