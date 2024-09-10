<?php
// question: 
// 2d array programming.

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
  array(1, 2, 3),
  array(4, 5, 6),
  array(7, 8, 9)
);

$sum1 = 0;
$sum2 = 0;
$sum3 = 0;

foreach ($arr[0] as $item) {
  $sum1 += $item;
}
foreach ($arr[1] as $item) {
  $sum2 += $item;
}
foreach ($arr[2] as $item) {
  $sum3 += $item;
}

echo $sum1 . " ";
echo $sum2 . " ";
echo $sum3 . " ";



?>