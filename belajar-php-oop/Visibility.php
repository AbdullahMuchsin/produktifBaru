<?php

use Data\Fruit;
use Data\Product;

require_once __DIR__ . "/data/Product.php";

$product = new Product("Apple", 2_000);

echo $product->getName() . PHP_EOL;
echo $product->getPrice() . PHP_EOL;

$banana = new Fruit("Banana", 2_500);

$banana->info();
