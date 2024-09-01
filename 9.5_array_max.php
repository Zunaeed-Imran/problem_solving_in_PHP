<?php
// question: show maximum elements in an array, another way (use sort function.)
// array programming, also use function.

function MaxArr($arr){
  rsort($arr);
  echo $arr[0];
}

MaxArr([10, 20, 369, 896, 256, 55]);

?>