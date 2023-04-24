<!-- 使用for迴圈來產生以下的數列 -->
<!-- 1,3,5,7,9……n -->
<?php
$n = 200;
$total = 0;
for ($i = 1 ; $i <= $n ; $i+=2){
    echo $i.",";
    $total += $i;
}
echo "<hr>";
// 10,20,30,40,50,60……n
$n = 200;
$total = 0;
for ($i = 10 ; $i <= $n ; $i+=10){
    echo $i.",";
    $total += $i;
}
echo "<hr>";
// 3,5,7,11,13,17……97
$n = 97;

echo "<hr>";
for($i=3;$i<=$n;$i++){

    $check=false;
    // 檢查是否可被整除，預設不行
    for ($j=2 ; $j < $i ; $j++){

        if($i%$j==0){

         $check=true;
        // 被整除了,修正$check變數為true
         break;
        // 程式結束跳出
        }
    }
     
     if($check==false){
        // 檢查$check變數如果沒被整除過
         echo $i . ",";     
        //  印出$i
     }
}