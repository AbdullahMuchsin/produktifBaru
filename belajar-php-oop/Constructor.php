<?php

require_once __DIR__ . "/data/Person.php";

$muchsin = new Person("Muchsin", "Jember");

$muchsin->sayHello("Irma");
$muchsin->info();

$irma = new Person("Irma", "Kediri");
$irma->sayHello("Muchsin");