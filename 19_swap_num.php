<?php
// Question: swap many number without using extra variable.


//  the given value.
$a = 10;
$b = 20;
$c = 30;
$d = 40;
$e = 50;
$f = 60;
$g = 70;
$h = 80;
$i = 90;


// calculation swiping.
$a = $i;
$b = $h;
$c = $g;
$d = $f;
$e =  $e;
$f = $a - $e;
$g = $b - $e;
$h = $c - $e;
$i = $a - $b;


// the result.
echo "a is: {$a}" . "\n";
echo "b is: {$b}" . "\n";
echo "c is: {$c}" . "\n";
echo "d is: {$d}" . "\n";
echo "e is: {$e}" . "\n";
echo "f is: {$f}" . "\n";
echo "g is: {$g}" . "\n";
echo "h is: {$h}" . "\n";
echo "i is: {$i}" . "\n";


?>