<?php
echo "<table border='1px solid black'>";
for ($i=0; $i <=9; $i++) { 
    echo "<th width='80px'>".$i."</th>";
}
echo "<br>";
for ($i=1; $i <= 9 ; $i++) { 
    echo "<tr height='30px'>";
    echo "<th>".$i."</th>";
for ($j=1; $j <= 9 ; $j++) {
    echo "<td>";    
    $result=$i * $j; 
    echo $i."*".$j."=".$result." ";
    echo "</td>";    
}
echo "</tr>";
}
?>