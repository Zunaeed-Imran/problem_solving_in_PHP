<?php
// question: Reversing an array.
// array programming.

$arr = array(6, 5, 4, 3, 2, 1, 8, 9);

rsort($arr);

foreach ($arr as $item) {
  echo $item . "\n";
}

?>