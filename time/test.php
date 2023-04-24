<h1>給定兩個日期，計算中間間隔天數</h1>
<?php
date_default_timezone_set("Asia/Taipei");
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


?>

<h1>利用date()函式的格式化參數，完成以下的日期格式呈現</h1>

<ol>
    <li>2023/04/24</li>
    <li>4月24日 Monday</li>
    <li>2023-04-24 14:9:5</li>
    <li>2023-04-24 14:9:05</li>
    <li>今天是西元2023年4月24 上班日(或假日)</li>
</ol>

<?php
$now="2023-04-24 14:9:5";
$daytime=strtotime($now);
echo date("Y/m/d",$daytime);
echo "<br>";
echo date("n月j日 l",$daytime);
echo "<br>";
echo date("Y-n-j G:").(int)date("i").":".(int)date("s",$daytime);
// 沒有不補零的分跟秒，要自己用int取整數來完成
echo "<br>";
echo date("Y-m-d H:i:s",$daytime);
echo "<br>";
echo "今天是西元".date("Y年m月d",$daytime);
if(date("N",$daytime)>=6){
    echo "假日";
}else{
    echo "上班日";
}