<?php
// question: The maximum element in a column.
// 2D array programming.


// Example: 
// a = [
//   [1, 3, 7]
//   [4, 2, 5]
//   [9, 6, 8]
// ]

// max column 
//  [
//   7
//   5
//   8
//  ]

$arr = array(
  max(array(1, 3, 7)),
  max(array(4, 2, 5)),
  max(array(9, 6, 8))
);

foreach($arr as $max_col){
  echo $max_col . ", ";
}


?>