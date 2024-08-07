<?php
// question: Sum of negative square elements in an array.
// array programming.

// explain the question: First, identify the negative numbers: [-1, -3, -5], 
//                        Then, square these numbers: [1^2, 3^2, 5^2] which equals [1, 9, 25], 
//                        than add those value.

$arr = array(-2, 3, 4, -6, 9);
$power = 0;
$sum = 0;

foreach($arr as $item){
  if($item < 0){
    $power = pow($item, 2);
    $sum+= $power;
  }
}

echo $sum;

?>