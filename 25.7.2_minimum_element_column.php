<?php
// question: The minimum element in a column, without using in-built function. 
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

$arr =  array(
  array(1, 3, 7),
  array(4, 2, 5),
  array(9, 6, 8)
);



$small1 = $arr[0][0];
$small2 = $arr[1][0];
$small3 = $arr[2][0];


foreach ($arr[0] as $item) {
  if($item < $small1){
    $small1 = $item;
  }
}
foreach($arr[1] as $item){
  if($item < $small2){
    $small2 = $item;
  }
}
foreach($arr[2] as $item){
  if($item < $small3)
  $small3 = $item;
}


echo $small1 . "\n";
echo $small2 . "\n";
echo $small3 . "\n";


?>