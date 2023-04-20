<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
<style>
    *{
        font-family: 'Courier New', Courier, monospace;
    }
</style>
</head>
<body>
    
<?php
// 矩形空白
$n=13;
for ($i=0; $i < $n ; $i++) { 
    for ($j=0; $j < $n ; $j++) { 
        if($i==0 || $i==($n-1)){
            echo "*";
        }else if($j==0 || $j==($n-1)){
                echo "*";
        }else{
            echo "&nbsp";
        }
    }
    echo "<br>";
}
// 矩形X
$n=13;
for ($i=0; $i < $n ; $i++) { 
    for ($j=0; $j < $n ; $j++) { 
        if($i==0 || $i==($n-1)){
            echo "*";
        }else if($j==0 || $j==($n-1)){
                echo "*";
        }else if($i+$j==$n-1 || $i==$j){
                echo "*";
        }else{
            echo "&nbsp";
        }
    }
    echo "<br>";
}
// 菱形空白
$n=9;
$tmp =0;
$center=ceil($n/2);
for($i=0;$i<9;$i++){

    $tmp=($i<ceil($n/2))?$i:8-$i;

    for ($j=0; $j<(ceil($n/2)-1-$tmp); $j++) { 
        echo "&nbsp";
    }     
    for ($k=0; $k <($tmp*2+1); $k++){
        if($k==$center-$tmp || $k==$tmp){
            echo "*";
        }else{
            echo "&nbsp";            
        }
    }
    echo "<br>";
}
?>

</body>
</html>