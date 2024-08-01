<?php
// Question: Solid Diamaon Print.
// pattern programming.

for($i = 0; $i < 20; $i++){
  echo "\n";

  for($j = 20; $j > $i; $j--){
    echo " ";
  }
  for($j = 0; $j < $i; $j++){
    echo "*";
  }
  for($j = 0; $j < $i; $j++){
    echo "*";
  }
}

// another nested loop
for($i = 0; $i < 20; $i++){
  echo "\n";

  for($j = 0; $j < $i; $j++){
    echo " ";
  }
  for($j = 20; $j > $i; $j--){
    echo "*";
  }
  for($j = 20; $j > $i; $j--){
    echo "*";
  }
}

?>