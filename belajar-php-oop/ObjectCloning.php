<?php

require_once __DIR__ . "/data/Student.php";

use Data\{Student};

$student = new Student();
$student->id = 1;
$student->name = "Abdullah Muchsin";
$student->value = 100;
$student->setNumberphone("0895435253");

var_dump($student);

// Cloning dengan clone php
$student1 = clone $student;
var_dump($student1);

// Cloning dengan manual
// $student3 = new Student();
// $student3->id = $student->id;
// $student3->name = $student->name;
// $student3->value = $student->value;
