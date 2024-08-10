<?php
// question: Count distinct elements of an array / not done yet.
// array programming.

// explain question: Suppose you have an array: [1, 2, 2, 3, 4, 4, 4, 5]
// The elements in this array are: 1, 2, 2, 3, 4, 4, 4, 5
// The distinct (unique) elements are: 1, 2, 3, 4, 5
// The count of these distinct elements is 5.

$arr = array(1, 2, 2, 3, 4, 4, 4, 5);
$arr2 = array();

foreach($arr as $item){
  if(in_array($item, $arr)){
    // echo " match ";
    $arr2 = $arr[$item] - $item;
  }else{
    echo " not match ";
  }
}

foreach($arr2 as $ii){
  echo $ii . " ";
}

?>