<?php
// question: Matrix operation subtraction.
// 2D array programming.


// Example:
// Matrix A:
// [1, 2, 3]
// [4, 5, 6]

// Matrix B:
// [7, 8, 9]
// [10, 11, 12]

// Result (A - B):
// [-6, -6, -6]
// [-6, -6, -6]



$matrix_A = array(
  array(1, 2, 3),
  array(4, 5, 6)
);

$matrix_B = array(
  array(7, 8, 9),
  array(10, 11, 12)
);

$sub1 = $matrix_A[0][0] - $matrix_B[0][0];
$sub2 = $matrix_A[0][1] - $matrix_B[0][1];
$sub3 = $matrix_A[0][2] - $matrix_B[0][2];
$sub4 = $matrix_A[1][0] - $matrix_B[1][0];
$sub5 = $matrix_A[1][1] - $matrix_B[1][1];
$sub6 = $matrix_A[1][2] - $matrix_B[1][2];

echo " {$sub1} {$sub2} {$sub3} \n {$sub4} {$sub5} {$sub6}";

?>