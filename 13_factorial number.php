<?php
// question: factorial number.

//  the factorial of 4 is 4 × 3 × 2 × 1, which is equal to 24.

// factorial, in mathematics, the product of all positive integers less than or equal to a given positive integer and denoted by that integer and an exclamation point.

$num = 63;
$factor = 1;

for ($i = $num; $i >= 1; $i--) {
  $factor *= $i . "\n";
}
echo "the factorial number of {$num} is {$factor}";
