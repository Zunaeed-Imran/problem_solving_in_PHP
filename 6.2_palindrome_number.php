<?php
// question: Program to check if the given string is palindrome?.  using function.
// practicing programming using function.

function Palindrome($num){
  $split = str_split($num);
  $str_rev = array_reverse($split);
  $join = implode($str_rev);

  if($num == $join){
    echo "{$num} is Palindrome";
  }else{
    echo "{$num} is not Palindrome";
  }
}

Palindrome(161);

?>