<?php
// question: hollow butterfly pattern printing.
// pattern programming.


for ($i = 0; $i < 15; $i++) {
  echo "\n";

  // take end of lien to make the pattern hollow.
  for ($j = 0; $j < 2; $j++) {
    echo "*";
  }

  // inner nested loop start from here.
  for ($j = 0; $j < $i; $j++) {
    echo " ";
  }
  for ($j = 15; $j > $i; $j--) {
    echo "*";
  }
  for ($j = 15; $j > $i; $j--) {
    echo "*";
  }
  for ($j = 0; $j < $i; $j++) {
    echo " ";
  }
  // take end of line to make it hollow.
  for ($j = 0; $j < 2; $j++) {
    echo "*";
  }
}

// another nested loop.
for ($i = 0; $i < 15; $i++) {
  echo "\n";

  for ($j = 0; $j < 2; $j++) {
    echo "*";
  }
  for ($j = 15; $j > $i; $j--) {
    echo " ";
  }
  for ($j = 0; $j < $i; $j++) {
    echo "*";
  }
  for ($j = 0; $j < $i; $j++) {
    echo "*";
  }
  for ($j = 15; $j > $i; $j--) {
    echo " ";
  }
  // take end of the line to make it hollow.
  for ($j = 0; $j < 2; $j++) {
    echo "*";
  }
}


?>