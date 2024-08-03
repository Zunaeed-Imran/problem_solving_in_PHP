<?php
// question: print a Butterfly pattern.
//  pattern programming.


//  we have to use two times empty in every nested loop. 
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

// another nested loop.
for ($i = 0; $i < 15; $i++) {
  echo "\n";

  for ($j = 15; $j > $i; $j--) {
    echo "*";
  }
  for ($j = 0; $j < $i; $j++) {
    echo " ";
  }
  for ($j = 0; $j < $i; $j++) {
    echo " ";
  }
  for ($j = 15; $j > $i; $j--) {
    echo "*";
  }
}






?>