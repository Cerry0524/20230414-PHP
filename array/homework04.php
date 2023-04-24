<?php
$sky=["甲", "乙", "丙", "丁", "戊", "己", "庚", "辛", "壬", "癸"];
$earth=["子", "丑", "寅", "卯", "辰", "巳", "午", "未", "申", "酉", "戌", "亥"];
$skyearth=[];
$j=0;
for ($i=0; $i < 60; $i++) { 
    
    while($j < 60) { 

        $skyearth[]=[
            "天干"=>$sky[$i%10],
            "地支"=>$earth[$j%12]
        ];
        $j+=1;
        if ($i%10==0) {
            break;
        }
    }

;
}
    
echo "<table>";
foreach($skyearth as $i => $g){
    
    if ($i%10==0) {
        echo "<tr>";
    }
    
    foreach($g as $result){
        echo "<td>";
        echo $result;
        echo "</td>";
    }  
    
    if ($i%10==9) {
        echo "<tr>";
    }
}
echo "</table>";
