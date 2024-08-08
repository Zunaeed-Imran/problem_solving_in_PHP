<?php
//  Question: Counting frequencies of array elements./ we use array_intersect function.

//  means determining how many times each unique element appears in an array.
//  $array = [1, 2, 2, 3, 3, 3, 4, 4, 4, 4];
//  1 appears 1 time
//  2 appears 2 times

// we need `array_intersect` to compare array.

// here we use array intersection, but better we should use nested loop.

$arr1 = array(1, 2, 3, 4);
$arr2 = array(3, 4, 5, 6);

$result = array_intersect($arr1, $arr2);

foreach ($result as $item) {
  echo "\n" . $item . " are two times in the array. ";
}


?>