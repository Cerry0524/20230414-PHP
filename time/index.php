<?php
// 執行本程式時預設時區
date_default_timezone_set("Asia/Taipei"); 
echo date("Y-m-d H:i:s");
// 年-月-日 時-分-秒
echo "<br>";
// 字串轉時間
// strtotime(“+1 days”,$date_string)
echo strtotime("now");
$yestoday=strtotime("now")-(60*60*24);
echo $yestoday;
echo "<br>";
echo date("Y-m-d H:i:s",$yestoday);

echo "<br>";
$today=strtotime("now");
echo "現在時間".$today."秒";
echo "<br>";
echo "可讀日期字串".date("Y-m-d H:i:s",$today);

$tomorrow=strtotime("+1 day",$today);
echo "<br>";
echo "明天".date("Y-m-d H:i:s",$today);

echo "<br>";
$yestoday=strtotime("-1 day",$today);
echo "昨天".date("Y-m-d H:i:s",$yestoday);

echo "<br>";
$nextweek=strtotime("+1 week",$today);
echo "下週".date("Y-m-d H:i:s",$nextweek);

echo "<br>";
$lastweek=strtotime("-1 week",$today);
echo "上週".date("Y-m-d H:i:s",$lastweek);

// 另外還有一個mktime格式很固定
