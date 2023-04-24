<?php

$sky=["甲", "乙", "丙", "丁", "戊", "己", "庚", "辛", "壬", "癸"];
$land=["子", "丑", "寅", "卯", "辰", "巳", "午", "未", "申", "酉", "戌", "亥"];
$skyland=[$sky,$land];

for($i=0;$i<60;$i++){
    $skyland=$sky[$i%10].$land[$i%12];
}
echo "<pre>";
print_r($skyland);
echo "</pre>";

$year=2053;

