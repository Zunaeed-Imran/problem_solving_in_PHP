<?php
// question: print kapital letter K.
// pattern programming.


//  start nested loop.
for ($i = 0; $i < 15; $i++) {
  echo  "\n";

  // up left outter loop
  for ($j = 0; $j < 15; $j++) {
    echo "*";
  }

  for ($j = 15; $j > $i; $j--) {
    echo " ";
  }
  //   outter laft up loop
  for ($j = 0; $j < 15; $j++) {
    echo "*";
  }
}

// another nested for loop.

for ($i = 0; $i < 15; $i++) {
  echo "\n";

  // down left outter loop.
  for ($j = 0; $j < 15; $j++) {
    echo "*";
  }

  for ($j = 0; $j < $i; $j++) {
    echo " ";
  }
  //   outter left down loop.
  for ($j = 0; $j < 15; $j++) {
    echo "*";
  }
}

?>