<?php

require_once __DIR__ . "/helper/MainHelper.php";

use Helper\{MainHelper};

echo MainHelper::AUTHOR . PHP_EOL;
echo MainHelper::$name . PHP_EOL;

MainHelper::$name = "Semangat belajar nya ..... :)";

echo MainHelper::$name . PHP_EOL;

$result = MainHelper::sum(2, 4, 24, 52, 25, 2, 2);
echo "Result : $result" . PHP_EOL;
