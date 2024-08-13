<?php
// question: sum of scalar product of two vector.
// array programming.

// Example: Scalar Product
// Vector A: [a1, a2, a3]
// Vector B: [b1, b2, b3]
// Scalar Product = (a1×b1) + (a2×b2) + (a3×b3)


$a = array(1, 3, 5);
$b = array(2, 4, 1);

//  we use array_combine to make scalar array.
$c = array_combine($a, $b);
$r = 0;
$sum = 0;

foreach ($c as $i => $j) {
  $r =  $i * $j;
  $sum += $r;
}

echo $sum;


?>