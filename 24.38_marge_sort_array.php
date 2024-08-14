<?php
// question: Merge two sorted arrays
// array programming.

// Example:
// Let’s say you have two sorted arrays:

// Array 1: [1, 3, 5]
// Array 2: [2, 4, 6]
// The goal is to merge them into one sorted array.
// The result is [1, 2, 3, 4, 5, 6]

$arr1 = array(1, 3, 5);
$arr2 = array(2, 4, 6);

$combine = array_combine($arr1, $arr2);

// print_r($combine);

foreach ($combine as $key => $value) {
  echo "{$key} {$value} \n";
}

?>