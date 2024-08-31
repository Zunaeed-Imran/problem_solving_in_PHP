<?php
// question: find yhe leap year using function.
// programming using function.

function leapYear($year){
  if($year %4 == 0 && $year %100 != 0 || $year %400 == 0){
    echo "{$year} is Leap Year";
  }else{
    echo "{$year} is not Leap year";
  }
}

leapYear(2012);


?>