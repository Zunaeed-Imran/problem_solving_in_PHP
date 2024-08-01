<?php
// question: inverted full pyramid print.
// pattern programming.

//  we use three for loop as nested loop.

for($i = 0; $i < 20; $i++){
  echo "\n";

  for($j = 0; $j < $i; $j++){
    echo " ";
  }
  for($j = 20; $j > $i; $j--){
    echo "*";
  }
  for($j = 20; $j > $i; $j--){
    echo "*";
  }
}

?>