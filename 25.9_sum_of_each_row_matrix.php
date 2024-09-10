<?php
// question: Sum of each row of a matrix.
// 2D array programming.

// example: 
// a = [
//   [1, 2, 3]
//   [4, 5, 6]
//   [7, 8, 9]
// ]

// Sum of each row:
//Row1: 1+2+3=6
//Row2: 4+5+6=15
//Row3: 7+8+9=24

$arr = array(
  array_sum(array(1, 2, 3)),
  array_sum(array(4, 5, 6)),
  array_sum(array(7, 8, 9))
);


foreach($arr as $row => $item){
  echo "Sum of Row: {$item} \n";
}


?>