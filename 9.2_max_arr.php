<?php
// question: show max element in an array without using max function.
// array programming.

$arr = array(36, 66, 895, 25, 6);
$big = 0;

foreach($arr as $item){

  if($item > $big){
    $big = $item;
  }
}

echo "the max array value is {$big}";

?>