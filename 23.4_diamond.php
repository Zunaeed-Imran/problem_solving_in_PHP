<?php
// question: make a solid half diamond.
// pattern programming.

// we use two nested loop for this pattern, to make half diamond.
for($i = 0; $i < 15; $i++){
  echo "*" . "\n";

  for($j = 0; $j < $i; $j++){
    echo "*";
  }
}

// we need another nested for loop.
for($i = 0; $i < 15; $i++){
  echo "*" . "\n";

  for($k = 15; $k > $i; $k--){
    echo "*";
  }
}


?>