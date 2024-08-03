<?php
// question: print a hollow hlaf pyramid.
// pattern programming.


//  start the nested loop for half pyramid.
for ($i = 0; $i < 15; $i++) {
  echo "\n";

  //   take this loop for make it hollow.
  for ($j = 0; $j < 2; $j++) {
      echo "*";
    }

  for ($j = 0; $j < $i; $j++) {
      echo " ";
    }

  //   this loop is for outter to make it hollow.
  for ($j = 0; $j < $i; $j++) {
      echo "*";
  }
  //   this break is for the last line outter loop.
  echo "\n";
}

// this loop is for make this hollow
for ($i = 0; $i < 30; $i++) {
  echo "*";
}


?>