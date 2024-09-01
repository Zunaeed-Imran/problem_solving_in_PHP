<?php
// question: show minimum elements in an array. another way(using sort function). also using function.
// array programming also use function.

function MinArray($arr){
  sort($arr);
  echo $arr[0];
}

MinArray([10, 20, 636, 558, 965, 265, 555, 50]);

?>