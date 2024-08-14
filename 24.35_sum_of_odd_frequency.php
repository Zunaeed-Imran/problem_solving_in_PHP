<?php
// question: Sum of all odd frequency in an array.
// array programming.


// Example
// array=[10,10,10,20,30,30,30,20]

// Step 1: Determine the Frequency of Each Element:
// Frequency of 10: 3 times
// Frequency of 20: 2 times
// Frequency of 30: 3 times
// so result: Odd frequency 3 + 3 = 6.

$arr = array(10, 10, 10, 20, 30, 30, 30, 20);
$sum = 0;

// array count value input single array, and output associative array.
$count = array_count_values($arr);

foreach($count as $item => $times){
  if($times%2!=0){
    $sum+= $times;
    // echo $sum . " ";
  }
}
echo "Sum of all odd frequency in array is: {$sum}";


?>