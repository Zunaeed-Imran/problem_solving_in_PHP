<?php
// question: print hollow inverted half pyramid.
// pattern programming.


// take this loop for make it hollow.
for($i = 0; $i < 22; $i++){
    echo "*";
}

// start nested for loop for inverted half pyramid.
for($i = 0; $i < 10; $i++){
  echo "\n";
  
//  take this loop for make it hollow.
  for($j = 2; $j > 0; $j--){
    echo "*";
  }

  for($j = 10; $j > $i; $j--){
    echo " ";
  }
  
//   outter loop for make it hollow.
for($j = 10; $j > $i; $j--){
    echo "*";
  }
  
  
}

?>