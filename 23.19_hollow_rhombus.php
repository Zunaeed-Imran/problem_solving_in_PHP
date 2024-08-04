<?php
// question: print hollow rhombus.
// pattern programming.


// top outter loop 
for ($i = 0; $i < 38; $i++) {
  echo "*";
}

// start the nested loop for hollow rhombus
for ($i = 0; $i < 10; $i++) {
  echo "\n";

  // left outter loop
  for ($j = 10; $j > $i; $j--) {
    echo "*";
  }
  //   hollow inner loop.
  for ($j = 0; $j < 25; $j++) {
    echo " ";
  }
  //   right outter loop
  for ($j = 0; $j < 3; $j++) {
    echo "*";
  }
}
// lower outter loop start.
for ($i = 0; $i < 2; $i++) {
  echo "\n";

  for ($j = 0; $j < 29; $j++) {
    echo "*";
  }
}

?>