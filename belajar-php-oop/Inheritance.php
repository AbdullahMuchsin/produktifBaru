<?php

require_once __DIR__ . "/data/Manager.php";

$manager = new Manager();
$manager->name = "Muchsin";

$manager->sayHello();

$vp = new VicePresident();
$vp->name = "Irma";

$vp->sayHello();