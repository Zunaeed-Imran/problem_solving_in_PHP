<?php
//  Question: Counting frequencies of array elements.

//  means determining how many times each unique element appears in an array.
//  $array = [1, 2, 2, 3, 3, 3, 4, 4, 4, 4];
//  1 appears 1 time
//  2 appears 2 times

// we are gonna use nested loop.

$arr1 = array(1, 2, 3, 4);
$arr2 = array(3, 4, 5, 6);
$arr3 = array("all Matches");

for ($i = 0; $i < count($arr1); $i++) {

  for ($j = 0; $j < count($arr2); $j++) {

    if ($arr1[$i] == $arr2[$j]) {
      array_push($arr3, $arr1[$i], $arr2[$j]);
      //   echo " i:{$arr1[$i]} " . " " . " j:{$arr2[$j]} ";
    }
  }
}

foreach ($arr3 as $item) {
  echo " {$item} are two times in the array " . "\n";
}


?>