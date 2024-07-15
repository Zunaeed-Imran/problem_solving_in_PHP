<?php
// Question: Sum of array elements.

$arr = array(10, 6, 5, 90, 40);
$sum = 0;

foreach($arr as $x){
  $sum+= $x;
}

echo $sum;

?>