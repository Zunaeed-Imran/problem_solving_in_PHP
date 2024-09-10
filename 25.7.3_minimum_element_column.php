<?php
// question: The minimum element in a column, without using in-built function (take more than three array in main array).
// 2d array programming.

// Example: 
// a = [
//   [1, 3, 7]
//   [4, 2, 5]
//   [9, 6, 8]
//   [10, 15, 16]
// ]

// min column 
//  [
//   1
//   2
//   6
//   10
//  ]

$arr = array(
  array(1, 3, 7),
  array(4, 2, 5),
  array(9, 6, 8),
  array(10, 15, 16)
);

$mini1 = $arr[0][0];
$mini2 = $arr[1][0];
$mini3 = $arr[2][0];
$mini4 = $arr[3][0];


foreach($arr[0] as $item){
  if($item < $mini1){
    $mini1 = $item;
  }
}
foreach($arr[1] as $item){
  if($item < $mini2){
    $mini2 = $item;
  }
}
foreach($arr[2] as $item){
  if($item < $mini3){
    $mini3 = $item;
  }
}
foreach($arr[3] as $item){
  if($item < $mini4){
    $mini4 = $item;
  }
}

echo $mini1 . "\n";
echo $mini2 . "\n";
echo $mini3 . "\n";
echo $mini4 . "\n";



?>