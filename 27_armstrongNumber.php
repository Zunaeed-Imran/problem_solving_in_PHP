<?php
// question: To check Armstrong Number or not.
// Math Number Programming.

// Example: 1 to the power 3
//  +5 to the power 3
//  +3 to the power 3
//  =1+125+27=153

$num = 153;

$spl = str_split($num);
$sum = 0;
$power = 0;
foreach ($spl as $item) {
  $power = pow($item, 3);
  $sum += $power;
}

if($sum == $num){
  echo "{$num} is Armstrong Number";
}else{
  echo "{$num} is Not Armstrong Number";
}
