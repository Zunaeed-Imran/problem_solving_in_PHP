<?php
// question: swap two number without using third variable.

$a = 5;
$b = 10;

$a = $a + $b;
$b = $a - $b;
$a = $a - $b;

echo "a value is : {$a}" . "\n";
echo "b value is : {$b}" . "\n";


?>