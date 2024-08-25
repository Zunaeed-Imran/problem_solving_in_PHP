<?php
// question: sum of matrix aspiral form.
// 2D array programming.

// example: 
// [1, 2, 3, 4]
// [5, 6, 7, 8]
// [9, 10, 11, 12]
// [13, 14, 15, 16]

// Start at the top-left:             1, 2, 3, 4
// Move down the last column:         8, 12, 16
// Move left across the bottom row:   15, 14, 13
// Move up the first column:          9, 5
// Move right again (inside layer):   6, 7 
// Move down:                         11
// Move left:                         10

// sum of spiral order for this matrix would be: 1,2,3,4,8,12,16,15,14,13,9,5,6,7,11,10 = 136


$arr = array(
  array(1, 2, 3, 4),
  array(5, 6, 7, 8),
  array(9, 10, 11, 12),
  array(13, 14, 15, 16)
);

$top_left = $arr[0][0] + $arr[0][1] + $arr[0][2] + $arr[0][3];
$last_column = $arr[1][3] + $arr[2][3] + $arr[3][3];
$across_bottom = $arr[3][2] + $arr[3][1] + $arr[3][0];
$move_up = $arr[2][0] + $arr[1][0];
$move_right = $arr[1][1] + $arr[1][2];
$move_down = $arr[2][2];
$move_left = $arr[2][1];

$sum_aspiral = $top_left + $last_column+ $across_bottom + $move_up + $move_right + $move_down + $move_left;

echo "sum of a spiral form is: {$sum_aspiral}";

?>