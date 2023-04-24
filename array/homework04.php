<?php
$baseyear=1024;
$sky=['甲', '乙', '丙', '丁', '戊', '己', '庚', '辛', '壬', '癸'];
$earth=['子', '丑', '寅', '卯', '辰', '巳', '午', '未', '申', '酉', '戌', '亥'];
$skyearth=[];
$skyearth1=[];

for($i=0;$i<60;$i++) {
    $skyearth[]=[
        "天干" => $sky[$i%10],
        "地支" => $earth[$i%12]
    ];
    $skyearth1[]=$sky[$i%10].$earth[$i%12];
    
}

echo "<pre>";
print_r($skyearth1);
echo "</pre>";
echo "<pre>";
print_r($skyearth);
echo "</pre>";

$year=2099;
echo $skyearth[($year-$baseyear)%60][($year-$baseyear)%60];