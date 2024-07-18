<?php
// Question: swap many number using 1 extra variable.

// given value.
$a = 10;
$b = 20;
$c = 30;
$d = 40;
$e = 50;

// calculation swiping.
$f = $a;
$a = $e;
$b = $d;
$c = $c;
$d = $b;
$d = $a - $c;
$e = $f;


// the result.
echo "a is: {$a}" . "\n";
echo "b is: {$b}" . "\n";
echo "c is: {$c}" . "\n";
echo "d is: {$d}" . "\n";
echo "e is: {$e}" . "\n";
