<?php
echo "<table border=1px >";
for ($i=0; $i <=9; $i++) { 
    echo "<th width=80px>".$i."</th>";
}
echo "<br>";
for ($i=1; $i <= 9 ; $i++) { 
    echo "<tr height=30px>";
    echo "<th>".$i."</th>";
    for ($j=1; $j <= 9 ; $j++) {
        echo "<td>";
        echo $i."*".$j."=".$i * $j." ";
        echo "</td>";    
    }
echo "</tr>";
}
