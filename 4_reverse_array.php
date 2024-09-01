<?php
// question: reverse an array.

$arr = array(10, 20, 30, 40);
$rev = array_reverse($arr);

foreach ($rev as $item){
  echo "{$item} \n";
}


?>