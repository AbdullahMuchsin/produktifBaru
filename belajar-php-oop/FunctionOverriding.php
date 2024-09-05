<?php

require_once __DIR__ . "/data/Manager.php";

$manager = new Manager();
$manager->name = "Muchsin";

$manager->sayHello("Joko");

$vp = new VicePresident();
$vp->name = "Irma";

$vp->sayHello("Eka");
$vp->getInfo();
