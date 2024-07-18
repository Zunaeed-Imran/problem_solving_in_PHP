<?php
// question: the year is leap year or not.

// defination: The year (every four years) with 366 days instead of 365 days is known as a leap year.
// leap year list: 2000, 2004, 2008, 2012, 2016, 2020, 2024, 2028, 2032, 2036, 2040, 2044, and 2048.
// formula: The year is a multiple of 4 and not a multiple of 100 or The year is multiple of 400.



$year = 2012;

if($year% 4 == 0 && $year% 100 != 0 || $year% 400 == 0){
  echo "{$year} is leap year.";
}else{
  echo "{$year} is not leap year.";
}


?>