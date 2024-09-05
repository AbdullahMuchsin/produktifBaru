<?php

require_once __DIR__ . "/data/Person.php";

$muchsin = new Person("Muchsin", null);

$muchsin->name = "Muchsin";

$muchsin->sayHello(null);

$irma = new Person("Irma", null);

$irma->name = "Irma";

$irma->sayHello("Muchsin");
