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
$sum1 = 0;
$sum2 = 0;
$sum3 = 0;


foreach ($arr[0] as $item) {
   $sum1+=$item;
  }
foreach ($arr[1] as $item) {
   $sum2+=$item;
  }
foreach ($arr[2] as $item) {
   $sum3+=$item;
  }



if (($sum1 > $sum2) && ($sum1 > $sum3)) {
  echo $sum1;
} else if (($sum2 > $sum1) && ($sum2 > $sum3)) {
  echo $sum2;
} else if (($sum3 > $sum2) && ($sum3 > $sum1)) {
  echo $sum3;
}


?>