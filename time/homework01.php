<style>
    table,td{
        border: 2px solid black;
        border-collapse:collapse ;
        text-align: center;
        font-size: 24px;    
    }
    .sun,.sat{
        background-color: pink;
    }
</style>
<h1>線上月曆製作</h1>
<ol>
    <li>以表格方式呈現整個月份的日期</li>
    <li>可以在特殊日期中顯示資訊(假日或紀念日)</li>
    <li>嘗試以block box或flex box的方式製作月曆</li>
</ol>
    
<?php

$today=strtotime('2023-05-24');
// 今天日期
$month=date("n",$today);
// 取當日的月份，用n表示月份不取零避免程式錯誤
$day=date("t",$today);
// 取當月整月天數用t參數
$firstDate=date("Y-n-1",$today);
// 取當月第1日
$finalDate=date("Y-n-t",$today);
// 取當月最後1日
$firstDateWeek=date("w",strtotime($firstDate));
// 取當月第1日星期幾
$finalDateWeek=date("w",strtotime($finalDate));
// 取當月最後1日星期幾
$weeks=date(ceil(($day+$firstDateWeek)/7));
// 當月有幾週
$firstWeekSpace=$firstDateWeek-1;
// 月初有幾個空白日

echo "今天日期".date("Y-m-d",$today);
echo "<br>";
echo "本月月份".$month;
echo "<br>";
echo "整月天數".$day;
echo "<br>";
echo "當月第1日".$firstDate;
echo "<br>";
echo "當月最後1日".$finalDate;
echo "<br>";
echo "當月第1日星期".$firstDateWeek;
echo "<br>";
echo "取當月最後1日星期".$finalDateWeek;
echo "<br>";
echo "當月有幾週".$weeks;
echo "<br>";
echo "<br>";
// 製作月曆表格
echo "<table>";
echo "<tr>";
echo "<td class='sun'>日</td>";
echo "<td>一</td>";
echo "<td>二</td>";
echo "<td>三</td>";
echo "<td>四</td>";
echo "<td>五</td>";
echo "<td class='sat'>六</td>";
echo "</tr>";
// 製作抬頭星期標籤
for ($i=0; $i < $weeks; $i++) { 
    // 月曆週次
    echo "<tr>";
    for ($j=0; $j < 7; $j++) { 
        // 月曆星期
        if($j==0 || $j==6){
            echo "<td class='sun'>";
        }else{
            echo "<td>";
        }
        if ($i==0) {
            
            if ($j < $firstDateWeek) {
                
                echo "&nbsp";

            }else{

                echo $j+$i*7-$firstWeekSpace;

            }
        }
        else if($i==$weeks-1){

            if ($j > $finalDateWeek) {
                
                echo "&nbsp";

            }else{

                echo $j+$i*7-$firstWeekSpace;

            }

        }else{

            echo $j+$i*7-$firstWeekSpace;

        }
        echo "</td>";
    }
    echo "</tr>";
}
echo "</table>";


