<?php
$i = 2;
while($i<=97){
    $j = 2;
    $check = true;
    
    while($j <= sqrt($i)){
        
        if(($i%$j) == 0){
             $check = false;
             break;                                                         
        }
        $j += 1;
    }
    if ($check == true){
        echo $i.",";
    }    
    $i += 1;
}

