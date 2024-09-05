<?php

require_once __DIR__ . "/data/Programmer.php";

use Data\{Programmer, BackendProgrammer, FrontendProgrammer, Company};
use function Data\sayHello;

$company = new Company();

$company->programmer = new Programmer("Muchsin");
var_dump($company->programmer);
$company->programmer = new BackendProgrammer("Muchsin");
var_dump($company->programmer);
$company->programmer = new FrontendProgrammer("Muchsin");
var_dump($company->programmer);

sayHello(new Programmer("Muchsin"));
sayHello(new BackendProgrammer("Irma"));
sayHello(new FrontendProgrammer("Abdullah"));
