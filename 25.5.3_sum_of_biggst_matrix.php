<?php
// question: sum of maximum matrix row array, inner three array.
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

foreach($arr[0] as $item){
  $sum1+=$item;
}
foreach($arr[1] as $item){
  $sum2+=$item;
}
foreach($arr[2] as $item){
  $sum3+=$item;
}

if(($sum1 > $sum2 && $sum1 > $sum3)){
  echo "{$sum1} is big inner row of the array.";
}elseif(($sum2 > $sum1 && $sum2 > $sum3)){
  echo "{$sum2} is big inner row of the array.";
}elseif(($sum3 > $sum1 && $sum3 > $sum2)){
  echo "{$sum3} is sum of big inner row of the array";
}

?>