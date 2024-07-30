<?php
// basic example of explode function to clear about the explode function.

// explode function make string in to array.
// explode function work on string not number.
// explode function explode sting into array.

//  - The first argument to explode is the delimiter, which is "," in this case.
//  - The second argument is the string you want to split, which is $num2.



$num = "1, 2, 3, 4, 5";

$exp = explode(",", $num);

foreach ($exp as $key => $value) {
  echo $value . " ";
}

?>