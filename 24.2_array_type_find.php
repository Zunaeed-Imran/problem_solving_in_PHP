<?php
// question: Finding the array type. / not done yet.
// array problem solving.

// Example:
// Consider the array: [1, 2, 3, 4, 5]

// Sorted: Yes, it is in ascending order.
// Monotonic: Yes, it is monotonic increasing.

// Array: [5, 3, 1, 1, 3, 5]

// Sorted: No, it is not sorted.
// Monotonic: No, it does not consistently increase or decrease.




$arr = array(5, 3, 1, 1, 3, 5);


function Sor($arr2){
  sort($arr2);
  foreach($arr2 as $item){
    echo "{$item} is sorted \n";
  }
}
Sor($arr);


if(Sor($arr2) == $arr){
  echo "{$arr} are Sorted";
}elseif(Sor($arr2) != $arr){
  echo "{$arr} is Not Srted";
}


?>