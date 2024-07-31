<?php
// topic: Loop through the exact same time as the given number, using nested loop.



$arr = array(10, 20, 50);
$sum = 0;

for($i = 0; $i < count($arr); $i++){
  $sum+= $arr[$i];
  for($j = 0; $j < $arr[$i]; $j++){
    echo $arr[$i] . " ";
  }
}


?>