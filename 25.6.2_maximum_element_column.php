<?php
// question: The maximum element in a column. 
// 2d array programming.

// Example: 
// a = [
//   [1, 3, 7]
//   [4, 2, 5]
//   [9, 6, 8]
// ]

// max column 
//  [
//   7
//   5
//   9
//  ]

$arr = array(
  array(1, 3, 7),
  array(4, 2, 5),
  array(9, 6, 8)
);

$big1 = 0;
$big2 = 0;
$big3 = 0;

foreach($arr[0] as $ggg){
  if($ggg > $big1){
    $big1 = $ggg;
  }
}
foreach($arr[1] as $ggg){
  if($ggg > $big2){
    $big2 = $ggg;
  }
}
foreach($arr[2] as $ggg){
  if($ggg > $big3){
    $big3 = $ggg;
  }
}


echo $big1 . "\n";
echo $big2 . "\n";
echo $big3 . "\n";


?>