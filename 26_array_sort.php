<?php
// question: sorting a array without using any in_built function.
// array programming.

$arr = array(45, 29, 69, 12, 10, 5, 14);
$sort1 = 0;
$sort2 = 0;
$sort3 = 0;


for ($i = 0; $i < count($arr); $i++) {
  if ($arr[$i] > $arr[0]) {
    $sort1 = $arr[$i];
    echo $sort1 . "\n";
  }elseif($arr[$i] > $arr[1]){
    $sort2 = $arr[$i];
    echo $sort2 . "\n";
  }elseif($arr[$i] > $arr[2]){
    $sort3 = $arr[$i];
    echo $sort3 . "\n";
  }
}
