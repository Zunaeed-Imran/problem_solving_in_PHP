<?php
// question: Matrix operations (Addition, subtraction and multiplication)
// array programming.


$operation = array(
  array("zunaeed", "imran", "rifat"),
  array("khalid", "imran", "ranas"),
  array("romana", "afrin", "lamia")
);

// for($i = 0; $i < $operation; $i++){

//   for($j = 0; $j < $operation; $j++){
//     echo "{$operation[$i]} \n";
//   }
// }

foreach ($operation as $key => $value) {
  // echo "{$key}  {$value}";
  for ($i=0; $i < 3; $i++) { 
    echo "{$value[$i]} \n";
  }
}

?>