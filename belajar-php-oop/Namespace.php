<?php

namespace {
    require_once __DIR__ . "/data/Conflict.php";
    require_once __DIR__ . "/data/Helper.php";


    $conflict1 = new Data\One\Conflict();
    $conflict2 = new Data\Two\Conflict();

    echo Helper\APPLICATION . PHP_EOL;

    Helper\helpMe();
}
