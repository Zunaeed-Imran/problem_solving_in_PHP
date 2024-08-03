<?php
// question: print a hollow inverted full pyramid.
// pattern programming.


//  we take a for loop first
for ($i = 0; $i < 30; $i++) {
  echo "*";
}

// than we take a nested loop.
for ($i = 0; $i < 15; $i++) {
  echo "\n";

  for ($j = 0; $j < $i; $j++) {
    echo "*";
  }
  for ($j = 15; $j > $i; $j--) {
    echo " ";
  }
  for ($j = 15; $j > $i; $j--) {
    echo " ";
  }
  for ($j = 0; $j < $i; $j++) {
    echo "*";
  }
}

?>