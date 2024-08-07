<?php
// question: Palindrome number list in an array.
// array programming.

$arr = array(123, 222, 525, 696, 855, 969);

foreach($arr as $item){
  $item;
  $spl = str_split($item);
  $rev = array_reverse($spl);
  $joint = implode($rev);

  if($item == $joint){
    echo $item . "\n";
  }

}

?>