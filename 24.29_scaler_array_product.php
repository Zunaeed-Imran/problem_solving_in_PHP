<?php
// question: scalar product of tow vector.
// array programming.

// Example: Scalar Product
// Vector A: [a1, a2, a3]
// Vector B: [b1, b2, b3]



$a = array(1, 3, 5);
$b = array(2, 4, 1);

//  we use array_combine to make scalar array.
$c = array_combine($a, $b);
$r = 0;

foreach ($c as $i => $j) {
  $r =  $i * $j;
  echo $r . " ";
}


?>