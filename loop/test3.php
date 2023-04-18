<?php
// 計算3.5 10 25公斤的運費+物流處理費
$weight = 25;
// 物流基本費199元
$basecost = 199;
$allcost = 0;
// 1~5公斤每公斤50元
// 超過5公斤，每公斤30元
if ( $weight < 5) {
    echo $weight * 50 + $basecost;
}else{
    $allcost = ( $weight - 5 )*30 + 5*50 + $basecost;
    echo $allcost;
}