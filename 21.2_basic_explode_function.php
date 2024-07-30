<?php
// topic: example of explode function third parameter.

// explode function third parameter is optional.



$content = "we will learn explode function third parameter";

print_r(explode(" ", $content));
print_r(explode(" ", $content, 3));
print_r(explode(" ", $content, -1));

?>