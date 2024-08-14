<?php
// question: Sum of all even frequency in an array.
// array programming.

// Example
// array=[10,10,10,20,30,50,30,30,20,50]

// Step 1: Determine the Frequency of Each Element:
// Frequency of 10: 3 times
// Frequency of 20: 2 times
// Frequency of 30: 3 times
// Frequency of 50: 2 times
// so result: even frequency 2 + 2 = 4.

$arr = array(10, 10, 10, 20, 30, 50, 30, 30, 20, 50);
$sum = 0;

$count = array_count_values($arr);

foreach($count as $item => $times){
  if($times%2== 0){
    $sum+= $times;
  }
}

echo "sum of all frequency is: {$sum}";

?>