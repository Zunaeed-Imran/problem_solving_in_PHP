<?php
// question: Show the distinct element in an array.
// array programming.

// example explanation: Suppose you have an array: [1, 2, 2, 3, 4, 4, 4, 5]
// The elements in this array are: 1, 2, 2, 3, 4, 4, 4, 5
// The distinct (unique) elements are: 1, 2, 3, 4, 5

$arr = array(1, 2, 2, 3, 4, 4, 4, 5);
$resullt = array_unique($arr);

foreach ($resullt as $item){
  echo $item . " ";
}


?>