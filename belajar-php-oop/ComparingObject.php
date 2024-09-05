<?php

require_once __DIR__ . "/data/Student.php";

use Data\Student;

$student = new Student();
$student->id = 1;
$student->name = "Abdullah Muchsin";
$student->value = 100;
$student->setNumberphone("0895435253");

$studentCopy = $student;

$student1 = new Student();
$student1->id = 1;
$student1->name = "Abdullah Muchsin";
$student1->value = 100;
$student1->setNumberphone("0895435253");

$student2 = new Student();
$student2->id = 2;
$student2->name = "Irma Aulia";
$student2->value = 100;
$student2->setNumberphone("0895435253");

// Cek semua nilai propery sama (==)
var_dump($student == $student1);
var_dump($student == $student2);
// cek object yang sama apa bukan (===)
var_dump($student === $student);
var_dump($student === $student1);
var_dump($student === $studentCopy);
