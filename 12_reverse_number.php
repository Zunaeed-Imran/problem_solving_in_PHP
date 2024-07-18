<?php
// question: reverse a numebr in PHP.

$num = 1234;

$spl = str_split($num);
$rev = array_reverse($spl);
$join = implode($rev);

echo $join;

?>