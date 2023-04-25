<style>
    table,td{
        border: 2px solid blue;
        border-collapse:collapse ;
        
        width: 120px;
        height: 40px;
        
        font-size: 10px;
    }
    .weekend{
        background-color: pink;
    }
</style>
<?php

$today=strtotime("2023-06-07");

$month=date('n',$today);

$day=date("t",$today);

$firstDate=date("Y-n-1",$today);
$finalDate=date("Y-n-t",$today);

$firstDateWeek=date("w",strtotime($firstDate));
$finalDateWeek=date("w",strtotime($finalDate));

$weeks= ceil(($firstDateWeek+$day)/7);

$firstWeekSpace=$firstDateWeek-1;

echo "今天是".$today;
echo "<br>";
echo "本月是".$month;
echo "<br>";
echo "本月有".$day."天";
echo "<br>";
echo "本月第1天是".$firstDate;
echo "<br>";
echo "本月最後1天是".$finalDate;
echo "<br>";
echo "本月第1天是星期".$firstDateWeek;
echo "<br>";
echo "本月最後1天是星期".$finalDateWeek;
echo "<br>";
echo "本月有".$weeks."週";
echo "<br>";

// 畫表格填入標題列
echo "<table>";
echo "<tr text-align: center;>";
echo "<td class='weekend'>日</td>";
echo "<td>一</td>";
echo "<td>二</td>";
echo "<td>三</td>";
echo "<td>四</td>";
echo "<td>五</td>";
echo "<td class='weekend'>六</td>";
echo "</tr>";
// 先算週次＄i迴圈
for ($i=0; $i < $weeks ; $i++) { 
    
    echo "<tr>";
    
    // 次算星期一週七天$j<7
    for ($j=0; $j < 7; $j++) { 
        
        if($j==0 || $j==6){
            
            echo "<td class='weekend'>";
        
        }else{

            echo "<td>";

        }


        // 再來判斷如何填入數字;
        // if($i==0){
            
        //     // 第一行填入內容選擇
        //     if ($j < $firstDateWeek) {
                
        //         echo "&nbsp";
                
        //     }else{
                
        //         // $i跟$j關聯性是$j+$i*7-$week
        //         echo $j+$i*7-$firstWeekSpace;
                
        //     }
        // }else if($i==$weeks-1){
            
        //     // 最後一行填入內容選擇
        //     if ($j > $firstDateWeek) {
                
        //         echo "&nbsp";
                
        //     }else{
                
        //         echo $j+$i*7-$firstWeekSpace;
                
        //     }
        // }else{

        //     echo $j+$i*7-$firstWeekSpace;

        // }

        // 成功縮減公式
        if(($i==0  && $j < $firstDateWeek)||( $i==$weeks-1 && $j > $firstDateWeek) ){                         
            
                echo "&nbsp";
            
            }else{

                echo $j+$i*7-$firstWeekSpace;
                
            }
    
            echo "</td>";
  
    }
    echo "</tr>";
}

echo "</table>";

        


