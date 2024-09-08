<?php
// QUESTION: The maximum element in a row, without using in-built function.
// 2d array programming.

// Example: 
// a = [
//   [1, 3, 7]
//   [4, 2, 5]
//   [9, 6, 8]
// ]

// max row
// [9, 6, 8]

$arr = array(
  array(1, 3, 7),
  array(4, 2, 5),
  array(9, 6, 8)
);
$sum = 0;


foreach ($arr as $item) {
  foreach ($item as $list){
   $sum+=$list;
  }
}

foreach ($sum as $result) {
  echo $result . " ";
}

?>