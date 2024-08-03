<?php
// question: print a hollow Diamond pattern.
// pattern programming.


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

//  anotehr neste loop. 
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