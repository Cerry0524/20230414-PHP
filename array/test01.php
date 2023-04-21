<style>
table{
    border: 4px solid black;
    border-collapse:collapse;
}
tr,td{
    border: 1px solid black;    
}

</style>
<?php

$students=[
    "姓名"=>["judy","amo","john","peter","hebe"],
    "國文"=>[95,88,45,59,71],
    "英文"=>[64,78,60,32,62],
    "數學"=>[70,54,68,77,80],
    "地理"=>[90,81,70,54,62],
    "歷史"=>[84,71,62,42,64]
];
echo "<pre>";
print_r($students);
echo "</pre>";

echo "<br>";
echo "<br>";
echo "<br>";

$students=[
    "科目"=>["國文","英文","數學","地理","歷史"],
    "judy"=>[95,64,70,90,84],
    "amo"=>[88,78,54,81,71],
    "john"=>[45,60,68,70,62],
    "peter"=>[59,32,77,54,42],
    "hebe"=>[71,62,80,62,64]
];
echo "<pre>";
print_r($students);
echo "</pre>";

echo "<table>";

foreach($students as $stu => $scores){
    echo "<tr>";
    echo "<td>".$stu."</td>";
    foreach($scores as $sub => $score){
        echo "<td>".$score."</td>";
        echo "-";
    }
    echo "</tr>";  
}

echo "</table>";