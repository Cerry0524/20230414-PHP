<style>
    .container{
        display: flex;
        flex-direction: column;
        flex-basis: 100%;
    }
    .week{
        flex-basis: 15%;
        background-color: lightcyan;
        border: 1px solid black;
        height: 80px;

        display: flex;
        margin: 0px 0px;
    }
    .week:nth-child(odd){

        background-color: lightblue;
        
    }
    .title{
        font-size: 30px;
        text-align: center;
        padding: 20px 90px;
        height: 40px;
    }
    .day{
        font-size: 30px;
    }
    .week>.weekend{
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


echo "<div class='container'>";
echo "<div class='week'>";
echo "<div class='week title weekend'>日</div>";    
echo "<div class='week title'>一</div>";    
echo "<div class='week title'>二</div>";    
echo "<div class='week title'>三</div>";    
echo "<div class='week title'>四</div>";    
echo "<div class='week title'>五</div>";    
echo "<div class='week title weekend'>六</div>";    
echo "</div>";
for ($i=0; $i < $weeks ; $i++) { 
    
    echo "<div class='week'>";
    
    for ($j=0; $j < 7; $j++) {    

        echo ($j==0 || $j==6)?"<div class='week weekend day'>":"<div class='week day'>";
        
        echo (($i==0  && $j < $firstDateWeek)||( $i==$weeks-1 && $j > $firstDateWeek))?"&nbsp":($j+$i*7-$firstWeekSpace);
        
        echo "</div>";    
    }
    echo "</div>";
}
echo "</div>";

?>



