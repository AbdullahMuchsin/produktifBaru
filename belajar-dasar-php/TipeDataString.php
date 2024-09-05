<?php

echo 'Nama : ';
echo 'Abdullah Muchsin';
echo "\n";

echo "Name : ";
echo "Abdullah\t Muchsin\n";

echo <<<MUCHSIN
Ini adalah Heredoc dimana bisa membuat baris
sesuai dengan bentuk itu sendiri 
di dalam heredoc kita bisa menambahkan kutip
\n // sama seperti kutip 2 \n
MUCHSIN;

echo <<<'MUCHSIN'
Ini adalah Nowdoc sama hal nya dengan Heredoc bedanya
ini tidak bisa melakukan pharsing variable
di dalam nowdoc kita bisa menambahkan kutip juga
\n // sama seperti kutip 1
MUCHSIN;
