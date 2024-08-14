<?php
// question: Sum of all odd frequency elements in an array.
// array programming.


// Example 3:
// array=[10,10,10,20,30,30,30,20]

// Step 1: Determine the Frequency of Each Element:
// Frequency of 10: 3 times
// Frequency of 20: 2 times
// Frequency of 30: 3 times
// Step 2: Identify Elements with Odd Frequencies:
// 10 appears 3 times (odd frequency)
// 30 appears 3 times (odd frequency)
// Step 3: Sum the Elements with Odd Frequencies:

// Sum=10+30=40
// Final Answer:
// The sum of all elements with odd frequencies in the array [10, 10, 10, 20, 30, 30, 30, 20] is 40.

$arr = array(10, 10, 10, 20, 30, 30, 30, 20);
$sum = 0;

// we use array count value to check how many times one elements repeated.
$count = array_count_values($arr);

foreach($count as $item => $times){
  // echo $item . " = " . $times . ", ";
  if($times%2!= 0){
    $sum+= $item;
  }
}

echo "Sum of all Odd frequency elements in the array is: {$sum}";


?>