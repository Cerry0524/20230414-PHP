<?php
// 利用for.while.do-while迴圈建立兩層槽狀顯示九九乘法表
// for
for ($i = 1; $i <= 9; $i++) { 
    for ($j = 1; $j <= 9; $j++) { 
        $result1 = $i * $j;
        echo $i."*".$j."=".$result1; 
    }
    echo "<br>";
}
echo "<hr>";
//while
$a = 1;
$b = 1;
while ($a <= 9) {
    while ($b <= 9) {
        $result2 = $a * $b;
        echo $a."*".$b."=".$result2;  
    $b += 1;
    }
    echo "<br>";
    $a += 1;
    $b = 1;
}
echo "<hr>";
// do...while
$x = 0;
$y = 0;
do {
   $x += 1;
   do {
    $y += 1;
    $result3 = $x * $y;
    echo $x."*".$y."=".$result3;     
   } while ($y <= 8);
   echo "<br>";
   $y = 0;
} while ($x <= 8);