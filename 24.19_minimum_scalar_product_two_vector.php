<?php
// question: Minimum scalar product of two vectors.
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
// Vector A: [1, 3, 5] (ascending)
// Vector B: [4, 2, 1] (descending)
// (1×4)+(3×2)+(5×1)=4+6+5=15

$arr1 = array(1, 3, 5);
$arr2 = array(2, 4, 1);
$multiple = 0;
$sum = 0;

// sorting array, ascending & descending  to make the final value minimum.
sort($arr1);
rsort($arr2);

// we use array_combine to make scalar array, keys and another for its values in combine array.
$combine = array_combine($arr1, $arr2);

foreach($combine as $item1 => $item2){
  $multiple = $item1 * $item2;
  // echo $multiple . " ";
  $sum+= $multiple;
}

echo $sum;


?>