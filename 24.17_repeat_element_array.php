<?php
// question: Repeating elements in an array / not done yet.
// array programming.

// Example
// Suppose you have an array: [3, 7, 2, 3, 8, 2, 9]

// The element 3 appears twice.
// The element 2 also appears twice.
// The elements 7, 8, and 9 each appear only once.
// In this case, the repeating elements are [3, 2].

$arr = array(3, 7, 2, 3, 8, 2, 9);

$arr2 = array_unique($arr);

$result = array_intersect($arr, $arr2);

$result2 = array_unique($result);

foreach($result2 as $item){
  echo $item . " ";
}


?>