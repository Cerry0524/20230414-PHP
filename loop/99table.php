<?php
for ($i=1; $i <=9; $i++) { 
    echo "   ".$i."   ";
}
echo "<br>";
for ($i=1; $i <= 9 ; $i++) { 
   
for ($j=1; $j <= 9 ; $j++) {
    echo $i." ";
    $result=$i * $j; 
    echo $i."*".$j."=".$result." ";
    
}
echo "<br>";
}
?>