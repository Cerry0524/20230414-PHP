<?php
// 繩索170公分利用while迴圈計算要對折幾次才會小於20公分
$i = 170;
$a = 0;
while (($i / 2) >= 20) {    
    $a += 1;    
}
echo $a;