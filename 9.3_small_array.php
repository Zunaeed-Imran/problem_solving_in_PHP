<?php
// question: show minimum element in an array without using min() function.
// array programming.

$arr = array(10, 60, 52, 9, 25, 3);
$small = $arr[0];

foreach($arr as $item){

  if($item < $small){
    $small = $item;
  }
}

echo $small;

?>