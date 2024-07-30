<?php
//  Question: Counting frequencies of three array elements.

//  we don't use array_push in this example

$arr1 = array(1, 2, 3, 4);
$arr2 = array(3, 4, 5, 6);
$arr3 = array(5, 6, 7, 8);
$result = array();

for ($i = 0; $i < count($arr1); $i++) {

  for ($j = 0; $j < count($arr2); $j++) {
      
    for($k = 0; $k < count($arr3); $k++){
        
            if ($arr1[$i] == $arr2[$j] || $arr2[$j] == $arr3[$k]) {
                 array_push($result, $arr1[$i], $arr2[$j], $arr3[$k]);
     }
    }  
  }
}

foreach ($result as $item) {
  echo " {$item} are two times in the array " . "\n";
}

?>