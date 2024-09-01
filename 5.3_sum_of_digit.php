<?php
// question: sum of digits.   using function.
// practicing programming with function.

function SumDigit($num){
  $sum = 0;
  $spl = str_split($num);
  foreach ($spl as $item) {
   $sum+=$item;
  }
  echo $sum;
}

SumDigit(160);

?>