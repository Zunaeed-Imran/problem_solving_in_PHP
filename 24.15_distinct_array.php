<?php
// question: Count distinct elements of an array.
// array programming.

// explain question: Suppose you have an array: [1, 2, 2, 3, 4, 4, 4, 5]
// The elements in this array are: 1, 2, 2, 3, 4, 4, 4, 5
// The distinct (unique) elements are: 1, 2, 3, 4, 5
// The count of these distinct elements is 5.

$arr = array(1, 2, 2, 3, 4, 4, 4, 5, 9, 5, 8);
$sum = 0;
$rrr = 0;

// we take array unique to Removes duplicate values from an array
$arr2 = array_unique($arr);

// we use strlen to see the length of digit.
foreach ($arr2 as $item) {
  $rrr = strlen($item);

  // we use explode function to make it array.
  $exp = explode(",", $rrr);

  // use this loop to count the length of digits.
  for ($i = 0; $i < count($exp); $i++) {
    $sum += $exp[$i];
  }
}

echo $sum;


?>