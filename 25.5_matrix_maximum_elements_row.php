<?php
// question: The maximum element in a row.
// 2D array programming.

// Example: 
// a = [
//   [1, 3, 7]
//   [4, 2, 5]
//   [9, 6, 8]
// ]

// max row
// [9, 6, 8]


$arr = max(array(
  array(1, 3, 7),
  array(4, 2, 5),
  array(9, 6, 8)
));

foreach($arr as $max_row){
  echo $max_row . ", ";
}


?>