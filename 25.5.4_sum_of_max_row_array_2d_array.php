<?php
// question: sum of max row array 2d array inner five array.
// 2d array programming.

// Example: 
// a = [
//   [1, 3, 7]
//   [4, 2, 5]
//   [9, 6, 8]
//   [15, 18, 16]
//   [10, 12, 14]
// ]

// max row
// [15, 18, 16] = 49

$arr = array(
  array(1, 3, 7),
  array(4, 2, 5),
  array(9, 6, 8),
  array(15, 18, 16),
  array(10, 12, 14)
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

if(($sum1 > $sum2 && $sum1 > $sum3 && $sum1 > $sum4 && $sum1 > $sum5)){
  echo "{$sum1} is the biggest row of the sum";
}elseif(($sum2 > $sum1 && $sum2 > $sum3 && $sum2 > $sum4 && $sum2 > $sum5)){
  echo "{$sum2} is the bigest row of the sum";
}elseif(($sum3 > $sum1 && $sum3 > $sum2 && $sum3 > $sum4 && $sum3 > $sum5)){
  echo "{$sum3} is the biggest row of the sum";
}elseif(($sum4 > $sum1 && $sum4 > $sum2 && $sum4 > $sum3 && $sum4 > $sum5)){
  echo "{$sum4} is the biggest row of the sum";
}elseif(($sum5 > $sum1 && $sum5 > $sum2 && $sum5 > $sum3 && $sum5 > $sum4)){
  echo "{$sum5} is the biggest row of the sum";
}

?>