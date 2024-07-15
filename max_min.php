<?php
//  Question: Maximum and Minimum element of array

$arr = array(10, 20, 60);
$max = 0;
$min = 0;

for($i = 0; $i <= $arr; $i++){
  
  if($arr[$i] < $max){
    echo "max number is {$max}";
  }elseif($arr[$i] > $min){
    echo "min number is {$min}";
  }
}


?>