<?php
// question: Sorting elements of an array by frequency. / not done yet.
// array programming.


// Example Solution:
// For the array [4, 5, 6, 5, 4, 3]:

// Count Frequencies:

// 4: 2 times
// 5: 2 times
// 6: 1 time
// 3: 1 time
// Sort by Frequency:

// Elements 4 and 5 both have the highest frequency, so they come first.
// Elements 6 and 3 have lower frequencies and come later.
// So, the sorted array by frequency could be [4, 4, 5, 5, 6, 3].

$arr = array(4, 5, 6, 5, 4, 3);

arsort($arr);

foreach($arr as $item){
  echo $item . " ";
}


?>