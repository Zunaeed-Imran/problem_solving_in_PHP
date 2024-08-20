<?php
// question: Matrix operations Multiplication.
// 2D array programming.


// Example:
// Matrix A:
// [1, 2]
// [3, 4]

// Matrix B:
// [5, 6]
// [7, 8]

// c =(1×5)+(2×7)=5+14=19
// c =(1×6)+(2×8)=6+16=22
// c =(3×5)+(4×7)=15+28=43
// c =(3×6)+(4×8)=18+32=50
// c = 
// [19, 22]
// [43, 50]


$arr1 = array(
  array(1, 2),
  array(3, 4)
);

$arr2 = array(
  array(5, 6),
  array(7, 8)
);

$multi1 = $arr1[0][0] * $arr2[0][0] + $arr1[0][1] * $arr2[1][0];
$multi2 = $arr1[0][0] * $arr2[0][1] + $arr1[0][1] * $arr2[1][1];
$multi3 = $arr1[1][0] * $arr2[0][0] + $arr1[1][1] * $arr2[1][0];
$multi4 = $arr1[1][0] * $arr2[0][1] + $arr1[1][1] * $arr2[1][1];


echo " {$multi1}, {$multi2} \n {$multi3}, {$multi4}";

?>