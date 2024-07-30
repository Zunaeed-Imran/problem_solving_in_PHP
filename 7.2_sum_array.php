<?php
// Question: Sum of array elements.

// we use for-loop in this example.

$arr = array(10, 6, 5, 90, 41);
$sum = 0;

for ($i = 0; $i < count($arr); $i++) {
  $sum += $arr[$i];
}

echo $sum;
