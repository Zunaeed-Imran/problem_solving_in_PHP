<?php
// question: The minimum element in a column.
// 2D array programming.


// Example: 
// a = [
//   [1, 3, 7]
//   [4, 2, 5]
//   [9, 6, 8]
// ]

// min column 
//  [
//   1
//   2
//   6
//  ]

$arr = array(
  min(array(1, 3, 7)),
  min(array(4, 2, 5)),
  min(array(9, 6, 8))
);

foreach($arr as $min_column){
  echo $min_column . "\n";
}


?>