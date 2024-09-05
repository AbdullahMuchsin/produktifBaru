<?php

// AND (&&)
echo "============= AND (&&)\n";
var_dump(true && true);
var_dump(false && true);
var_dump(true && false);
var_dump(false && false);

echo "============= AND (and)\n";
var_dump(true and true);
var_dump(false and true);
var_dump(true and false);
var_dump(false and false);

// OR (||)
echo "============= OR (||)\n";
var_dump(true || true);
var_dump(false || true);
var_dump(true || false);
var_dump(false || false);

echo "============= OR (or)\n";
var_dump(true or true);
var_dump(false or true);
var_dump(true or false);
var_dump(false or false);

// XOR (^)
echo "============= XOR (^)\n";
var_dump(true ^ true);
var_dump(false ^ true);
var_dump(true ^ false);
var_dump(false ^ false);

echo "============= XOR (xor)\n";
var_dump(true xor true);
var_dump(false xor true);
var_dump(true xor false);
var_dump(false xor false);

echo "============= NOT (!)\n";
var_dump(!true);
var_dump(!false);