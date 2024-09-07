<?php
// question: The minimum element in a row, without using built-in min function.
// 2D array programming.

// Example: 
// a = [
//   [1, 3, 7]
//   [4, 2, 5]
//   [9, 6, 8]
// ]

// min row
// [1, 2, 7]

$arr = array(
  array(1, 3, 7),
  array(4, 2, 5),
  array(9, 6, 8)
);

$big = $arr[0];

foreach ($arr as $item) {
  //   echo "{$item} \n";
  foreach ($item as $list) {
    // echo "{$item} = {$list}  \n";
    if($list > $big){
      $big = $list;
    }
  }
}

echo $big;