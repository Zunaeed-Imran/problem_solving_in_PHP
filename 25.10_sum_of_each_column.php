<?php
// question: sum of each column of a matrix.
// 2D array programming.

// example:
// a = [
//   [1, 2, 3]
//   [4, 5, 6]
//   [7, 8, 9]
// ]

// Sum of each column: 
// Column: 1+4+7=12
// Column: 2+5+8=15
// Column: 3+6+9=18

$arr = array(
  array(1, 2, 3),
  array(4, 5, 6),
  array(7, 8, 9)
);

$column1 = $arr[0][0] + $arr[1][0] + $arr[2][0];
$column2 = $arr[1][0] + $arr[1][1] + $arr[1][2];
$column3 = $arr[2][0] + $arr[1][0] + $arr[2][0];

echo " {$column1} \n {$column2} \n {$column3}";


?>