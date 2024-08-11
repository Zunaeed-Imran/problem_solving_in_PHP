<?php
// question: Show the distinct elements in an array.
// array programming.


// explain question: Suppose you have an array: [1, 2, 2, 3, 4, 4, 4, 5]
// The elements in this array are: 1, 2, 2, 3, 4, 4, 4, 5
// The distinct (unique) elements are: 1, 2, 3, 4, 5

$arr = array(1, 2, 2, 3, 4, 4, 4, 5);

// we take array unique to only take the unique value.
$arr2 = array_unique($arr);

foreach ($arr2 as $item) {
  echo $item . " ";
}



?>