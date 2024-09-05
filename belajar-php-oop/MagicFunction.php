<?php

require_once __DIR__ . "/data/Student.php";

use Data\Student;


$student = new Student();
$student->id = 1;
$student->name = "Muchsin";
$student->value = 100;
$student->setNumberphone("089235552");

$string = (string)$student;
echo $student . PHP_EOL;
var_dump($string);
var_dump($student);

$student("Abdullah", "Muchsin", true, 100);
