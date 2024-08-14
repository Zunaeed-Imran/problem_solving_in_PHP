<?php
// question: Maximum scalar product of two vector.
// array programming.

// Example: Scalar Product
// Vector A: [a1, a2, a3]
// Vector B: [b1, b2, b3]
// Scalar Product = (a1×b1) + (a2×b2) + (a3×b3)

// Example: minimum scalar product
// Vector A: [1, 3, 5]
// Vector B: [2, 4, 1]
// Scalar Product=(1×2)+(3×4)+(5×1)=2+12+5=19

// To minimize this product, you would sort:
// Vector A: [1, 3, 5] (descending)
// Vector B: [4, 2, 1] (ascending)
// (1×4)+(3×2)+(5×1)=4+6+5=15

$arr1 = array(1, 3, 5);
$arr2 = array(2, 4, 1);
$multiple = 0;
$sum = 0;

sort($arr1);
rsort($arr2); 

// Merges the elements of one or more arrays together
$combine = array_combine($arr1, $arr2);

foreach ($combine as $item1 => $item2) {
  $multiple = $item1 * $item2;
  $sum+= $multiple;
}

echo $sum;

?>