<?php
// Question: sum of digits.  using foreach.

$number = 160;
$splNum = str_split($number);
$sum = 0;

foreach($splNum as $item){
    $sum+= $item;
}


echo $sum;
?>

