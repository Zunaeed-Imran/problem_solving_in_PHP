<?php
// question: Sum of boundary elements of a matrix.
// 2D array programming.

// example: 
// [1, 2, 3, 4]
// [5, 6, 7, 8]
// [9, 10, 11, 12]
// [13, 14, 15, 16]

// Top row:           1, 2, 3, 4
// Bottom row:        13, 14, 15, 16
// Left column:       5, 9
// Right column:      8, 12
// boundry element are: 1,2,3,4,8,12,16,15,14,13,9,5.
// sum of boundry element: 1+2+3+4+8+12+16+15+14+13+9+5=102

$arr = array(
  array(1, 2, 3, 4),
  array(5, 6, 7, 8),
  array(9, 10, 11, 12),
  array(13, 14, 15, 16)
);

$top_row = $arr[0][0] + $arr[0][1] + $arr[0][2] + $arr[0][3];
$bottom_row = $arr[3][0] + $arr[3][1] + $arr[3][2] + $arr[3][3];
$left_row = $arr[1][0] + $arr[2][0];
$right_row = $arr[1][3] + $arr[2][3];

$sum_boundry = $top_row + $bottom_row + $left_row + $right_row;

echo "sum of the boundry elements of matrix is: {$sum_boundry}";


?>