<?php

require_once __DIR__ . "/data/Conflict.php";
require_once __DIR__ . "/data/Helper.php";

use Data\One\{Conflict as conflict1, Dummy as dump, Example as sample};
use Data\Two\{Conflict as conflict2};
use function Helper\{HelpMe};
use const Helper\{APPLICATION};

$conflict1 = new conflict1();
$conflict2 = new conflict2();
$dummy = new dump();
$example = new sample();

echo APPLICATION . PHP_EOL;
HelpMe();
