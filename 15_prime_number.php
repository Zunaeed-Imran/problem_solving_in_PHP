<?php
// question: Prime number or not.

// DEFINATION: a number that can only be divided by itself and 1 without remainders.
//  A prime number is any integer, or whole number, greater than 1 that is only divisible by 1 and itself.
// Any whole number greater than 1 that is divisible only by 1 and itself, is defined as a prime number.
// prime number: 2, 3, 5, 7, 11, 13, 17, 19, 23, 29, 31, 37, 41, 43, 47, 53, 59, 61, 67, 71, 73, 79, 83, 89, 97

$num = 7;

if ($num > 1 && $num % $num == 0 && $num % 2 != 0) {
  echo "{$num} is prime number";
} else {
  echo "{$num} is not a prime number";
}
