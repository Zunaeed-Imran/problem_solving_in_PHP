<?php
// question: Arrays are disjoint or not.
// array programming.

// Example: Suppose you have the following two arrays:
// array1 = [1, 2, 3, 4, 5]
// array2 = [6, 7, 8, 9, 10]
// These arrays are disjoint because they have no elements in common. The output would be true.

// Array 1: [1, 2, 3, 4]
// Array 2: [3, 5, 6, 7]
// In this case, both arrays share the element 3, so they are not disjoint.

$arr1 = array(1, 2, 3, 4, 5);
$arr2 = array(6, 7, 8, 4, 10);

$disjoint = array_combine($arr1, $arr2);

foreach ($disjoint as $key => $value) {
  // echo "{$key} = {$value} \n";
  if($key != $value){
    echo "This array are disjoint \n";
  }else{
    echo "This array are Not disjoint \n";
  }
}

?>