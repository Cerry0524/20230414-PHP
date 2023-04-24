<h1>給定兩個日期，計算中間間隔天數</h1>
<?php
 
$date1="2023-04-24";
$date2="2023-10-07";
$start=strtotime($date1);
$end=strtotime($date2);

$gap=($end-$start)/(24*60*60);

echo "距離".date("Y-m-d",$end)."還有".$gap."天";
?>

<h1>計算距離自己下一次生日還有幾天</h1>
<?php
$now=date("Y-m-d");
$now=strtotime("$now");
$birthday=strtotime("2023-05-24");

$days=($birthday-$now)/(24*60*60);

echo "距離下一次生日".date("Y-m-d",$birthday)."還有".$days."天";