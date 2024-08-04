<?php
// question: print a hollow rectangle
// pattern programming.



// top outter loop
for($i  = 0; $i < 26; $i++){
    echo "*";
}

for($i = 0; $i < 10; $i++){
    echo "\n";
    
    for($j = 0; $j < 3; $j++){
        echo "*";
    }
    
//  inner hollow.
    for($j = 0; $j < 20; $j++){
        echo " ";
    }
    
    // right outter loop. 
    for($j = 0; $j < 3; $j++){
        echo "*";
    }
}

// lower outter loop
for($i = 0; $i < 2; $i++){
    echo "\n";
    
    for($j = 0; $j < 26; $j++){
        echo "*";
    }
}


?>