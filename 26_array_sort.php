<?php
// question: sorting a array without using any in_built function. (not done yet)
// array programming.

$arr = array(45, 29, 69, 12, 10, 5, 14);
$big = 0;

foreach ($arr as $item) {
  if($item > $big){
    $big = $item;
  }
  for ($i = 0; $i  <$item; $i++) { 
    echo $i . " ";
  }
}



?>
