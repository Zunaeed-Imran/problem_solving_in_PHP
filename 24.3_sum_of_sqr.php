<?php
// question: Sum of square elements in an array.
// array programming.

// explain the question:  square these array: [1^2, 3^2, 5^2] which equals [1, 9, 25], 
//                        than add those value.

$arr = array(1, 3, 6, 2, 2);
$power = 0;
$sum = 0;

foreach($arr as $item){
  $power = pow($item, 2);
  $sum+= $power;
  // echo $power . "\n";
}
echo $sum;

?>