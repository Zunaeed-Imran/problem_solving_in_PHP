<?php
// question: Merge two sorted array.
// array programming.

// Example:
// Let’s say you have two sorted arrays:

// Array 1: [1, 3, 5]
// Array 2: [2, 4, 6]
// The goal is to merge them into one sorted array.
// The result is [1, 2, 3, 4, 5, 6]


$arr1 = array(1, 3, 5);
$arr2 = array(2, 4, 6);

// merge two aray.
$merg = array_merge_recursive($arr1, $arr2);

// sotring the merge array.
sort($merg);

foreach($merg as $item){
  echo "{$item} \n";
}


?>