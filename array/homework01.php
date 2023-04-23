<style>
    *{
        border: 1px solid gray;
        border-collapse: collapse;
        text-align: center;
    }
</style>
<?php
// 宣告$result為矩陣
$result=[];
// 運算99乘法表
for ($i=0; $i <= 9 ; $i++) { 
    for ($j=0; $j <= 9; $j++) {
        
        if($i==0 && $j==0){
            $result[]="";
            
        }else if($j==0){
            $result[]=$i;
            
        }else if($i==0){
            $result[]=$j;
            
        }else{
            $result[]=$i*$j;
        
        }
    }
}

//利用foreach公式列印出來
// 建立表格
echo "<table>";
// 呼叫列印$result指定結果輸出為$string,鍵值為$row
foreach($result as $row => $string){
    
    if($row % 10 == 0){
        echo "<tr>";
    }
    
    echo "<td>";
    echo $string;
    echo "</td>";
    
    if($row % 10 == 9){
        echo "</tr>";
    }
}
echo "</table>";
?>
