<?php
// question: find the yeap year.
// formula: if the numner devided to 4 and not devided to 100 or devide by 400.

$year = 2012;

if($year %4 === 0 && $year %100 != 0 || $year %400 === 0){
  echo "{$year} is Leap Year.";
}else{
  echo "{$year} is not leap year";
}


?>