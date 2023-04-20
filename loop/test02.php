
<style>
    *{
        font-family: 'Courier New', Courier, monospace;
    }
</style>
<?php
// 垂直三角形
for($i=0;$i<5;$i++){

    for($j=0;$j<($i+1);$j++){
        echo "*";
    }
    echo "<br>";
}
// 倒直角三角形
for($i=0;$i<5;$i++){

    for($j=0;$i+$j < 5;$j++){
        echo "*";
    }
    echo "<br>";
}
// 正三角形
for ($x=0; $x < 5; $x++) { 
         
    for ($y=0; $y < (5 - 1) - $x; $y++) { 
        echo "&nbsp";
    }     
    for ($z=0; $z < 2*$x+1; $z++){
        echo "*";
    }
echo "<br>"; 
}  
// 倒正三角形
for ($x=0; $x < 4; $x++) { 
         
    for ($y=0; $y< $x+1; $y++) { 
        echo "&nbsp";
    }     
    for ($z=0; $z <((3-$x)*2+1); $z++){
        echo "*";
    }
echo "<br>";   
}

// 菱形2
// $f = 8;
// for ($x=0; $x < $f; $x++) { 
//          if($x<=$f/2){
//              for ($y=0; $y < $f- 1 - $x; $y++) { 
//                  echo "&nbsp";}
//          }else{
//              for ($y=0; $y< $x+1; $y++) { 
//                  echo "&nbsp";
//                 }
//             }     
        
//         echo "<br>";     
//         if($x>$f/2){
//             for ($z=0; $z < 2*$x+1; $z++){
//                 echo "*";
//         }else{
//             for ($z=0; $z <((3-$x)*2+1); $z++){
//                 echo "*";
//                 }
//             }
//         }
// echo "<br>";   
// }
// 菱形3
$n=9;
$tmp =0;

for($i=0;$i<9;$i++){

    // if($i<5){
    //     $tmp=$i;
    // }else{
    //     $tmp=8-$i;
    // }
    $tmp=($i<5)?$i:8-$i;

    for ($j=0; $j<(4-$tmp); $j++) { 
        echo "&nbsp";
    }     
    for ($k=0; $k <($tmp*2+1); $k++){
        echo "*";
    }
    echo "<br>";
}
// 矩型
