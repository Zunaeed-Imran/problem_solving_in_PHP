<?php
// question: Shorted palindrome in an array.
// array programming.


// PHP_INT_MAX: This constant represents the maximum integer value in PHP. It is used to ensure that any palindrome found will replace this initial value.

$arr = array(232, 969, 565, 362, 598, 458, 555);
$small = PHP_INT_MAX;


foreach ($arr as $item){
  $split = str_split($item);
  $reverse = array_reverse($split);
  $joint = implode($reverse);

  if($item == $joint){
    // echo $item;

    if($small > $item){
      $small = $item;
    }
  }
  
}

if($small == PHP_INT_MAX){
  echo 'Notok';
}else{
  echo $small;
}

?>