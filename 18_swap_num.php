<?php
// swap many number using 1 extra variable.

$a = 10;
$b = 20;
$c = 30;
$d = 40;
$e = 50;

$f = $a;
$a = $e;
$b = $d;
$c = $c;
$d = $b;
$d = $a - $c;
$e = $f;

echo "a is: {$a}" . "\n";
echo "b is: {$b}" . "\n";
echo "c is: {$c}" . "\n";
echo "d is: {$d}" . "\n";
echo "e is: {$e}" . "\n";
