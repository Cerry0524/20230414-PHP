<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table,th,td{
            border: 1px solid black;
            height: 20px;
            text-align: center;
            border-collapse: collapse;
        }
        th{
            background-color: lightsteelblue;
            width: 30px;
        }
        
    </style>
</head>
<body>
    
<?php
// 舊的寫法兩個迴圈
// echo "<table>";
// for ($i=0; $i <=9; $i++) { 
//     if($i == 0){
//         echo "<th>&nbsp</th>";
//     }
//         else{echo "<th>".$i."</th>";
// }}

// for ($i=1; $i <= 9 ; $i++) { 
//     echo "<tr>";
//     echo "<th>".$i."</th>";
//     for ($j=1; $j <= 9 ; $j++) {
//         echo "<td>";
//         echo $i * $j;
//         echo "</td>";    
//     }
// echo "</tr>";
// }

// 修正成一個迴圈
echo "<table>";
for ($i=0; $i <= 9 ; $i++) { 
    echo "<tr>";
    if($i == 0){
        echo "<th>&nbsp</th>";
    }else
    echo "<th>".$i."</th>";
    for ($j=1; $j <= 9 ; $j++) {
        if ($i == 0) {
            echo "<th>".$j."</th>";
        }else{
            echo "<td>";
            echo $i * $j;
            echo "</td>";    
        }
    }
echo "</tr>";
}
echo "</table>";
?>
<br>
<br>
<!-- 老師解法簡單 -->
<?php
echo "<table>";
for ($i=0; $i <= 9 ; $i++) { 
    echo "<tr>";
    for ($j=0; $j <= 9 ; $j++) {
        echo "<td>";        
        if($i == 0 && $j == 0){
            echo "&nbsp";
        }else if($i == 0){
            echo $j;
        }else if($j == 0){
            echo $i;
        }else if($j+$i==10){

        }else{         
            echo $i * $j;
        }
        echo "</td>";    
    }
echo "</tr>";
}
echo "</table>";
?>
</body>
</html>