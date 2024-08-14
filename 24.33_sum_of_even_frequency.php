<?php
// question: Sum of all even frequency elements in an array.
// array programming.

// Example:
// array=[10,10,10,20,30,30,30,20,60,60]

// Step 1: Determine the Frequency of Each Element:
// Frequency of 10: 3 times
// Frequency of 20: 2 times
// Frequency of 30: 3 times
// Step 2: Identify Elements with Even Frequencies:
// 20 appears 2 times (even frequency)
// Step 3: Sum the Elements with Even Frequencies:

// Sum=20+60=20
// Final Answer:
// The sum of all elements with even frequencies in the array [10, 10, 10, 20, 30, 30, 30, 20] is 40.

$arr = array(10, 10, 10, 20, 30, 30, 30, 20, 60, 60);
$sum = 0;

// we take array count to see how many times one elements repeated in a array.
$count = array_count_values($arr);

foreach ($count as $item => $times) {
  if($times%2== 0){
    $sum+= $item;
  }
}

echo "Sum of all even frequency elements in array is: {$sum}";

?>