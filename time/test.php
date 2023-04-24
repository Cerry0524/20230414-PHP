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
    <li>2023-4-24 14:9:5</li>
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
echo "今天是西元".date("Y年n月j",$daytime);
echo date("N")>=6?"是假日":"是工作日";
// if(date("N",$daytime)>=6){
//     echo "假日";
// }else{
//     echo "上班日";
// }
?>


<h1>利用迴圈來計算連續五個周一的日期</h1>
<ol>
 例:
    <li>2023-04-24 星期一</li>
    <li>2023-10-11 星期一</li>
    <li>2023-10-18 星期一</li>
    <li>2023-10-25 星期一</li>
    <li>2023-11-01 星期一</li>
</ol>
<?php
$today=strtotime("now");
$week=date("N",$today);
$gap=1-$week;
$seconds=strtotime("$gap days",$today);
// $monday=date("Y-m-d l",$seconds);

for ($i=0; $i < 5 ; $i++) { 
    echo date("Y-m-d l",strtotime("+$i weeks",$seconds));
    echo "<br>";
}


?>


<h1>線上月曆製作</h1>
<ol>
    <li>以表格方式呈現整個月份的日期</li>
    <li>可以在特殊日期中顯示資訊(假日或紀念日)</li>
    <li>嘗試以block box或flex box的方式製作月曆</li>
</ol>


<style>
    table,td{
        border: 1px solid black;
        border-collapse:collapse ;

    }
</style>

<?php


$today=strtotime("now");
// 先抓今天日期
$month=date("n",$today);
// 抓出今天是幾月(取不補零的)
$day=date("t",$today);
// 抓出本月有幾天(沒有閏月問題)
$firstDate=date("Y-n-1",$today);
// 當月第一天
$finalDate=date("Y-n-t",$today);
// 當月最後一天
$firstDateWeek=date("w",strtotime($firstDate));
// 當月第一天星期幾
$finalDateWeek=date("w",strtotime($finalDate));
// 當月最後一天星期幾
$weeks=ceil(($day+$firstDateWeek)/7);
// 當月有幾週
$firstWeekSpace=$firstDateWeek-1;
// 當月最後一天星期幾

// 我自己做的回去驗證
// if($firstDateWeek%7!=0){
//     echo ceil($day/7)+1;
// }else{
//     echo ceil($day/7);
// }

echo "月".$month;
echo "<br>";
echo "日".$day;
echo "<br>";
echo "第一天".$firstDate;
echo "<br>";
echo "最後一天".$finalDate;
echo "<br>";
echo "本月第1天".$firstDateWeek;
echo "<br>";
echo "本月最後1天".$finalDateWeek;
echo "<br>";
echo "週數".$weeks;
echo "<br>";




echo "<table>";
echo "<tr>";
echo "<td>日</td>";
echo "<td>一</td>";
echo "<td>二</td>";
echo "<td>三</td>";
echo "<td>四</td>";
echo "<td>五</td>";
echo "<td>六</td>";
echo "</tr>";
// 星期列直接打不用複雜化
for ($i=0; $i < $weeks ; $i++) { 
    echo "<tr>";
    for ($j=0; $j < 7; $j++) { 
        echo "<td>";

       if($i==0 && $j<$firstDateWeek){
            echo "&nbsp";
       }else if($i==$weeks-1 && $j>$finalDateWeek){
            echo "&nbsp";
       }else{
           echo $j+7*$i-$firstWeekSpace;
       }

        echo "</td>";
    }
    echo "</tr>";
}
echo "</table>";



