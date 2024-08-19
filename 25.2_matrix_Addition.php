<?php
// question: Matrix operations (Addition)
// array programming.


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

$sum1 = 0;
$sum2 = 0;

for ($i = 0; $i < $matrix_A[0]; $i++) { 
  
  for ($j = 0; $j < $matrix_A[1]; $j++) { 
    echo "{$i} \n";
  }
}



?>