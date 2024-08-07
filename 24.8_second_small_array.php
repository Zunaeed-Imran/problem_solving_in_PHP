<?php
// question: Second smallest element in an array
// array programming.


$arr = array(20, 3, 4, 9, 6);
$secondSmall = 0;

sort($arr);

for ($i = 0; $i < count($arr); $i++) {
  $secondSmall = $arr[1] . "\n";
}

echo $secondSmall;

?>