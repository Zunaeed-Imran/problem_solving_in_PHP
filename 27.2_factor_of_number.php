<?php
// question: Factors of a Number list.
// Math Number Programming.

// Example: For the number 12, its factors are the numbers that divide 12 evenly.
// This means (no remainder)
// 1 × 12 = 12 
// 2 × 6 = 12
// 3 × 4 = 12
//  These are 1,2,3,4,6,12


$num = 12;

for($i = 1; $i <= $num; $i++){
  if($num%$i == 0){
    echo $i . " ";
  }
}



?>