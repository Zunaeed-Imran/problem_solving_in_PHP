<?php
// question: Non-repeating elements of an array.
// array programming.


// Example
// Suppose you have an array: [4, 5, 6, 4, 7, 8, 5]

// The element 4 appears twice.
// The element 5 also appears twice.
// The elements 6, 7, and 8 each appear only once.
// In this case, the non-repeating elements are 6, 7, and 8 
// because these are the elements that do not repeat in the array.

$arr = array(4, 5, 6, 4, 7, 8, 5);

// count the array value how many time's each element repeated. 
// this function return associative array.
$count = array_count_values($arr);


echo "Non-repeating elements are \n";

foreach($count as $item => $times){

  if($times <= 1){
    echo "{$item} = {$times} times \n";
  }
}


?>