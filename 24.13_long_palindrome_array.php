<?php
// question: Longest palindrome in an array.
// array programming.

$arr = array(121, 232, 525, 636, 526);
$big = 0;

foreach($arr as $item){
  $item; 
  $spl = str_split($item);
  $rev = array_reverse($spl);
  $joint = implode($rev);


  if($joint == $item){

    if($item > $big){
      $big = $item;
    }

  }
}

echo "the max is {$big}";

?>