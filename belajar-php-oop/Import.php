<?php

require_once __DIR__ . "/data/Conflict.php";
require_once __DIR__ . "/data/Helper.php";

use Data\One\Conflict as Conflict;
use const Helper\APPLICATION;
use function Helper\helpMe;

$conflict1 = new Conflict();
$conflict2 = new Data\Two\Conflict();

echo APPLICATION . PHP_EOL;

helpMe();
