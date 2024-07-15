<?php
// Question: Program to Check if a Given String is Palindrome.

// defination: A palindrome number is a number that remains the same when its digits are reversed.

$num = 55;

$split = str_split($num);
$rev = array_reverse($split);
$palNum = implode($rev);

// echo $palNum;

if($palNum == $num){
  echo "{$num} is Palindrome Number";
}else{
  echo "{$num} is Not a palindrome Number";
}

?>