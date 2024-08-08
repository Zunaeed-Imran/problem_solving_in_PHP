<?php
// question: Longest palindrome in an array./ not done the task.
// array programming.

$arr = array(121, 232, 525, 636, 526);


foreach($arr as $item){
  $item; 
  $spl = str_split($item);
  $rev = array_reverse($spl);
  $joint = implode($rev);

  if($joint == $item){
    // echo $item . "\n";
    $array = str_split($item);
    
    rsort($array);
    // // another loop
    // foreach ($array as $i) {
    //   echo $i . "\n";
    // }

    echo $array[0];

  }
}


?>