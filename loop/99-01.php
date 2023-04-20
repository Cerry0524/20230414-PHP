<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>99乘法表</title>
    <style>
        table{
            background-color: lightblue;
            font-size: 10px;
        }
    </style>
</head>
<body>

<?php
echo "<table border = 1px>";
for($i=0;$i<=9;$i++){
    echo "<tr>";    
    echo "<td>".$i."</td>";
    for($j=1;$j<=9;$j++){       
        $result = $i * $j;       
        echo "<td align=center height=30px>";
        echo $i."x".$j."=".$result."&nbsp";
        echo "</td>";
    }
    echo "</tr>";
}
echo "</table>";
?>
</body>
</html>