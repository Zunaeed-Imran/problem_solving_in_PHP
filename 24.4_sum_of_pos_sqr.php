<?php
// question: Sum of positive square elements in an array.
// array programming.

// explain the question: First, identify the positive numbers: [1, 3, 5], 
//                        Then, square these numbers: [1^2, 3^2, 5^2] which equals [1, 9, 25], 
//                        than add those value.

$arr = array(1, -2, 4, -3);
$power = 0;
$sum = 0;

foreach($arr as $item){
  if($item > 0){
    // echo $item. "\n";
    $power = pow($item, 2);
    $sum+= $power;
  }
}

echo $sum;

?>