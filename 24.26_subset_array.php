<?php
// question: Array is a subset of another array or not.
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

// first we different the array, to see have the value in the other array or not.
$result = array_diff($arr1, $arr2);

if($result == true){
  echo "Not Subset of anotehr array.";
}else{
  echo "yes it is subset of another array.";
}


?>