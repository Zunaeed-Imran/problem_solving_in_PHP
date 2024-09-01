<?php
// Question: sum of digits.  using for loop.

$number = 160;
$splNum = str_split($number);
$sum = 0;

for ($i = 0; $i < count($splNum); $i++) {
  // echo $splNum[$i] . " ";
  $sum += $splNum[$i];
}


echo $sum;
