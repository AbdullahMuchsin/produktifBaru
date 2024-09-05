<?php

echo "Decimal : ";
var_dump(1234);

echo "Octal : ";
var_dump(0123);

echo "Hexadecimal : ";
var_dump(0x123123);

echo "Binary : ";
var_dump(0b111111);

echo "Underscore in number : ";
var_dump(1_000_000);

echo "Floating point : ";
echo var_dump(12.45);

echo "Floating point dengan E notation : ";
var_dump(12.23e3);

echo "Floating point dengan E notation minus : ";
var_dump(12.34e-3);

echo "Underscore in floating point";
var_dump(123.45_423);

echo "Integer overflow : ";
var_dump(9_223_372_036_854_775_807); // Max size integer in 64 bit
var_dump(9_223_372_036_854_775_808); // Overflow size replace to float from integer to float
