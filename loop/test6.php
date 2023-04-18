<?php
// 請用while迴圈建立複利的本利和，計算10000元5年複利2.5％的本利和
$money = 10000;
$year = 1;
$rate = 2.5;
$earn = 0;
while ($year++ <= 5) {
    $earn = $money * (1 + $rate / 100) ** $year;    
}    
echo $earn;