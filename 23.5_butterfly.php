<?php
// Question: make half butterfly pattern print.
//  pattern programming.

for($i = 0; $i < 15; $i++){
  echo "* " . "\n";

  for($j = 15; $j > $i; $j--){
    echo "*";
  }
}

// another nested for loop.

for($i = 0; $i < 15; $i++){
  echo "* " . "\n";

  for($j = 0; $j < $i; $j++){
    echo "*";
  }
}



?>