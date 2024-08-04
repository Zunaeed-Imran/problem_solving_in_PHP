<?php
// question: print hollow half diamond.
// pattern programming.



// start the nested loop.
for ($i = 0; $i < 15; $i++) {
  echo "\n";

  // top outter left side loop.
  for ($j = 0; $j < 15; $j++) {
    echo "#";
  }

  // top innher loop.
  for ($j = 0; $j < $i; $j++) {
    echo " ";
  }
  // outter up left side loop.
  for ($j = 0; $j < 15; $j++) {
    echo "#";
  }
}


// we need another nested for loop.
for ($i = 0; $i < 15; $i++) {
  echo "\n";

  // down outter left side loop.
  for ($j = 0; $j < 15; $j++) {
    echo "#";
  }

  // inner donw loop.
  for ($j = 15; $j > $i; $j--) {
    echo " ";
  }
  // outter down left side loop.
  for ($j = 0; $j < 15; $j++) {
    echo "#";
  }
}


?>