<?php

require_once __DIR__ . "/data/Conflict.php";
require_once __DIR__ . "/data/Helper.php";

use Data\One\Conflict as conflict1;
use Data\Two\Conflict as conflict2;
use const Helper\APPLICATION as APP;
use function Helper\helpMe as help;

$conflic1 = new conflict1();
$conflic2 = new conflict2();

echo APP . PHP_EOL;
help();
