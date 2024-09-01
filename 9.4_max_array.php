<?php
// question: show maximum elements in an array without using in-built function.  but using fucntion.
// array programming using function but not using 

function MaxArray($arr){
  $big = 0;
  foreach($arr as $item){
    if($item > $big){
      $big = $item;
    }
  }
  echo $big;
}

MaxArray([10, 20, 30, 40, 523, 362, 22]);

?>