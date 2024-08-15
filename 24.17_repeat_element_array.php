<?php
// question: Repeating elements in an array.
// array programming.

// Example
// Suppose you have an array: [3, 7, 2, 3, 8, 2, 9]

// The element 3 appears twice.
// The element 2 also appears twice.
// The elements 7, 8, and 9 each appear only once.
// In this case, the repeating elements are [3, 2].

$arr = array(3, 7, 2, 3, 8, 2, 9);


$result = array_count_values($arr);

// we give condation witch value more than repeated two times.
foreach($result as $item => $times){
  if($times > 1){
    echo " {$item} = {$times} times \n";
  }

}


?>