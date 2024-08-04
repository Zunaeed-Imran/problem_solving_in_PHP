<?php
// question: print a solid rhombus.
// pattern programming.


for ($i = 0; $i < 10; $i++) {
  echo "\n";

  for ($j = 10; $j > $i; $j--) {
    echo " ";
  }
  for ($j = 0; $j < 25; $j++) {
    echo "*";
  }
}

?>