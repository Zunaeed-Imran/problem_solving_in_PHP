<?php
// question: Matrix operations (Addition)
// 2D array programming.

// Example:
// Matrix A:
// [1, 2, 3]
// [4, 5, 6]

// Matrix B:
// [7, 8, 9]
// [10, 11, 12]

// Result (A + B):
// [8, 10, 12]
// [14, 16, 18]



$matrix_A = array(
  array(1, 2, 3),
  array(4, 5, 6)
);

$matrix_B = array(
  array(7, 8, 9),
  array(10, 11, 12)
);

$sum1 = $matrix_A[0][0] + $matrix_B[0][0];
$sum2 = $matrix_A[0][1] + $matrix_B[0][1];
$sum3 = $matrix_A[0][2] + $matrix_B[0][2];
$sum4 = $matrix_A[1][0] + $matrix_B[1][0];
$sum5 = $matrix_A[1][1] + $matrix_B[1][1];
$sum6 = $matrix_A[1][2] + $matrix_B[1][2];

echo " {$sum1} {$sum2} {$sum3} \n {$sum4} {$sum5} {$sum6}";

?>