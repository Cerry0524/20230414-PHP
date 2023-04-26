<style>
    .container{
        display: flex;
    }
</style>
<?php

$today=strtotime("2023-01-01");

$month=date('n',$today);

$day=date("t",$today);

$firstDate=date("Y-n-1",$today);
$finalDate=date("Y-n-t",$today);

$firstDateWeek=date("w",strtotime($firstDate));
$finalDateWeek=date("w",strtotime($finalDate));

$weeks= ceil(($firstDateWeek+$day)/7);

$firstWeekSpace=$firstDateWeek-1;

$holiday=[];
// 宣告假日矩陣



for ($i=0; $i < $weeks ; $i++) { 
    
    for ($j=0; $j < 7; $j++) { 
        
        
        if(($i==0  && $j < $firstDateWeek)||( $i==$weeks-1 && $j > $firstDateWeek) ){                         
            echo "&nbsp";
        }else{
            echo $j+$i*7-$firstWeekSpace;
        }
        
    }

}


// 建立假日矩陣
for($i=1;$i<=12;$i++){
    for($j=1;$j<=date('t',))
}



        


