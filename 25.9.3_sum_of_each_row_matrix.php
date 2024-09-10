<?php
// question: Sum of each row of a matrix, more than three array, without using in-bult function.
// 2d array programming.

// example: 
// a = [
//   [1, 2, 3]
//   [4, 5, 6]
//   [7, 8, 9]
//   [10, 11, 12]
//   [13, 14, 15]
// ]

// Sum of each row:
//Row1: 1+2+3=6
//Row2: 4+5+6=15
//Row3: 7+8+9=24
//Row4: 10+11+12=33
//Row5: 13+14+15=42

$arr = array(
  array(1, 2, 3),
  array(4, 5, 6),
  array(7, 8, 9),
  array(10, 11, 12),
  array(13, 14, 15)
);

$sum1 = 0;
$sum2 = 0;
$sum3 = 0;
$sum4 = 0;
$sum5 = 0;

foreach($arr[0] as $item){
  $sum1+= $item;
}
foreach($arr[1] as $item){
  $sum2+= $item;
}
foreach($arr[2] as $item){
  $sum3+= $item;
}
foreach($arr[3] as $item){
  $sum4+= $item;
}
foreach($arr[4] as $item){
  $sum5+= $item;
}

echo $sum1 . " ";
echo $sum2 . " ";
echo $sum3 . " ";
echo $sum4 . " ";
echo $sum5 . " ";


?>