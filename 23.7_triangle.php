<?php
// question: print a scalene triangle. or বিষমভুজ ত্রিভুজ
// pattern programming.


for($i = 0; $i < 20; $i++){
  echo "\n";

  for($j = 0; $j < $i; $j++){
    echo " ";
  }
  for($j = 20; $j > $i; $j--){
    echo " *";
  }
  for($j = 20; $j > $i; $j--){
    echo " *";
  }

}

?>