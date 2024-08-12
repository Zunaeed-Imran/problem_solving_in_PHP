<?php
// question: Number of even and odd elements in an array.
// array programming.

// Example:
// Suppose the array is [1, 2, 3, 4, 5, 6, 7, 8, 9, 10].

// The even numbers in this array are 2, 4, 6, 8, 10, so the count of even numbers is 5.
// The odd numbers in this array are 1, 3, 5, 7, 9, so the count of odd numbers is also 5.

$arr = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);

foreach($arr as $item){
  if($item%2 == 0){
    echo "{$item} are Odd Number \n";
  }elseif($item%2 != 0){
    echo "{$item} are Even Number \n";
  }
}

?>