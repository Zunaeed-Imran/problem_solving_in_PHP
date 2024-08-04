<?php
// question: print hollow half butterfly.
// pattern programming.


// top outter loop
for($i = 0; $i < 48; $i++){
    echo "9";
}
echo "\n";
for($i = 0; $i < 48; $i++){
    echo "9";
}
echo "\n";
for($i = 0; $i < 48; $i++){
    echo "9";
}


//  start nested loop.
for($i = 0; $i < 15; $i++){
  echo  "\n";

// up left outter loop
for($j = 0; $j < 3; $j++){
    echo "9";
}

  for($j = 15; $j > $i; $j--){
    echo "* ";
  }
//   outter laft up loop
for($j = 0; $j <15; $j++){
    echo "9";
}
}

// another nested for loop.

for($i = 0; $i < 15; $i++){
  echo "\n";

// down left outter loop.
for($j = 0; $j < 3; $j++){
    echo "9";
}


  for($j = 0; $j < $i; $j++){
    echo "* ";
  }
//   outter left down loop.
  for($j = 0; $j < 15; $j++){
      echo "9";
  }
}

//  down outter loop
for($i = 0; $i < 3; $i++){
  echo "\n";
  
  for($j = 0; $j < 48; $j++){
      echo "9";
  }
}


?>