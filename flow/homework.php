<?php
$year = 2016;
$result = match(true){
    $year%4 != 0 => "平年",
    ( $year%4 == 0 && $year%100 != 0 ) == true => "閏年",
    ( $year%100 == 0 & $year%400 != 0 ) == true => "平年",
    default => "正常"
};
echo $result;
