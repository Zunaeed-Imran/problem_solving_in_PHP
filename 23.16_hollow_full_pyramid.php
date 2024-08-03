<?php
// question: print: hollow full pyramid.
// pattern programming.


// start nested for loop.
for ($i = 0; $i < 20; $i++) {
  echo "\n";

  for ($j = 20; $j > $i; $j--) {
    echo "*";
  }
  for ($j = 0; $j < $i; $j++) {
    echo " ";
  }
  for ($j = 0; $j < $i; $j++) {
    echo " ";
  }
  for ($j = 20; $j > $i; $j--) {
    echo "*";
  }
}

// this outter loop is for make the hollow.
for ($i = 0; $i < 3; $i++) {
  echo "\n";

  for ($j = 0; $j < 40; $j++) {
    echo "*";
  }
}


?>