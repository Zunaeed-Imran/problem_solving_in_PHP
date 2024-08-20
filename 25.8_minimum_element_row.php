<?php
// question: The minimum element in a row.
// 2D array programming.

// Example: 
// a = [
//   [1, 3, 7]
//   [4, 2, 5]
//   [9, 6, 8]
// ]

// min row
// [1, 2, 7]

$arr =  min(
  array(
    array(1, 3, 7),
    array(4, 2, 5),
    array(9, 6, 8)
  ));


  foreach($arr as $min_row){
    echo $min_row . ", ";
  }


?>