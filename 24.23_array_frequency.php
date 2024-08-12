<?php
// question: Frequency of each element of an array.
// array programming.

// Suppose the array is [1, 2, 2, 3, 3, 3, 4].

// The element 1 appears 1 time.
// The element 2 appears 2 times.
// The element 3 appears 3 times.
// The element 4 appears 1 time.


$arr = array(1, 2, 2, 3, 3, 3, 4);

$result = array_unique($arr);

foreach($result as $item){
  echo $item . " ";
}

?>