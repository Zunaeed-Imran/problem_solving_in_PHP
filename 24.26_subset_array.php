<?php
// question: Array is a subset of another array or not / not done yet.
// array programming.


// Example: Consider the following arrays:

// Array A: [2, 4, 6]
// Array B: [1, 2, 3, 4, 5, 6, 7, 8]
// In this case, all elements of Array A (2, 4, and 6) are present in Array B. So, Array A is a subset of Array B.

// Now, let's consider another example:

// Array A: [2, 4, 9]
// Array B: [1, 2, 3, 4, 5, 6, 7, 8]
// Here, the element 9 in Array A is not present in Array B. So, Array A is not a subset of Array B.

$arr1 = array(2, 4, 6);
$arr2 = array(1, 2, 3, 4, 5, 6, 7, 8);

$result = array_diff_assoc($arr1, $arr2);

if($result == $arr1){
  echo "array is subset of another array";
}else{
  echo "array is not subset of another array";
}


foreach ($result as $item) {
  echo $item . " ";
}


?>