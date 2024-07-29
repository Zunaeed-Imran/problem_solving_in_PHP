<?php
//  Question: Counting frequencies of array elements.

// we don't use array_push in this example

$arr1 = array(1, 2, 3, 4);
$arr2 = array(3, 4, 5, 6);
$arr3 = array();

for ($i = 0; $i < count($arr1); $i++) {

  for ($j = 0; $j < count($arr2); $j++) {

    if ($arr1[$i] == $arr2[$j]) {
      // array_push($arr3, $arr1[$i]);
      $arr3[] = $arr1["$i"];
    }
  }
}

foreach ($arr3 as $item) {
  echo $item . " ";
}
