<?php
// question: Determine the Frequency of Each Element:
// array programming.

// Example explanation.
// array=[10,10,10,20,30,30,30,20]

// Step 1: Determine the Frequency of Each Element:
// Frequency of 10: 3 times
// Frequency of 20: 2 times
// Frequency of 30: 3 times

$arr = array(10, 10, 10, 20, 30, 30, 30, 20);
$sum = 0;

// array count value input single array, output associative array.
$count = array_count_values($arr);

foreach($count as $item => $times){
  echo "{$item} = {$times} times \n";
}



?>