<?php

require_once __DIR__ . "/data/Handphone.php";

use Data\{Redmi};

$redmi = new Redmi("Redmi 9", 1_750_000);
$redmi->getInfo();
$redmi->setName("Redmi 9T");
$redmi->setPrice(-9000);
$redmi->getInfo();
$redmi->setPrice(2_200_000);
$redmi->setName("        ");
echo "Name : " . $redmi->getName() . PHP_EOL;
echo "Price : " . $redmi->getPrice() . PHP_EOL;
echo "Ori : " . $redmi->isOriginal() . PHP_EOL;
