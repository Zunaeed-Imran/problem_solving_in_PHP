<?php
// question: Merge two arrays.
// array programming.

// Example:
// Let’s say you have two arrays:

// Array 1: [1, 3, 5]
// Array 2: [2, 4, 6]
// The goal is to merge them into one array.
// The result is [1, 3, 5, 2, 4, 6]

$arr1 = array(1, 3, 5);
$arr2 = array(2, 4, 6);

$merge = array_merge($arr1, $arr2);


foreach ($merge as $key) {
  echo "{$key} \n";
}

?>