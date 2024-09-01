<?php
// question: sum of array elements.     using function.
// array programming using fucntion.


function SumArr($num){
  $sum = 0;
  foreach($num as $item){
    $sum+= $item;
  }
  echo $sum;
}

SumArr([10, 20, 20]);


?>