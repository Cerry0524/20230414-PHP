<?php
// 直角三角形
$i = 0;
$j = 0;
while ($i <= 4){
    echo "*";
    while ($j <= 4) {
        echo "*";
        while ($j <= $i) {
            echo "<br>";     
            $j += 1;
        }
        $i += 1;
    }
}
  
