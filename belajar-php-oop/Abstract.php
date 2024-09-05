<?php

require_once __DIR__ . "/data/Location.php";

use Data\{Province, City, Country};

$country = new Country("Indonesia");
echo "Negara : " . $country->getLocationName() . PHP_EOL;

$province = new Province("Jawa Timur");
echo "Provinsi : " . $province->getLocationName() . PHP_EOL;

$city = new City("Jember");
echo "Kota : " . $city->getLocationName() . PHP_EOL;
