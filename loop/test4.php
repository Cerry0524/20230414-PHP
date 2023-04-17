<?php
$sum=0;
for ($i=1; $i <= 100 ; $i++) { 
    if ($i >= 35 && $i <= 55) {
        if (($i%2) != 0) {
            echo $i.","; 
            $sum += $i;           
        }        
    }
}
echo "<br>";
echo "最後加總結果是".$sum;