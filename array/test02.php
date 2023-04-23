<?php
echo "<table border=1px solid black>";
$row=[];
for ($i=1; $i <= 9; $i++) { 
    
    for ($j=1; $j <= 9; $j++) { 
        
        $row[]="$i X $j =".$i*$j;   
      
    }  

    foreach($row as $k => $str){
        if($k%9==0){
            echo "<tr>";}
        echo "<td>";
        echo $str;
        echo "</td>";
        if($k%9==8){
            echo "</tr>";
        }
    }
  
}
echo "</table>";