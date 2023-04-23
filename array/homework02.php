<style>
    .item{
        display: inline-block;
        border-radius: 50%;
        width: 40px;
        height: 40px;
        font-size: 30px;
        line-height: 40px;
        text-align: center;
    }
    .item1{
        background:radial-gradient(circle at center,lightyellow 20%,yellow 60%,orange 70%,gray 100%);
    }
    .item2{
        background:radial-gradient(circle at center,lightblue 20%,blue 70%,darkblue 85%,gray 100%);
    }
</style>
<?php
// 宣告$result為矩陣
$result=[];
// 計算矩陣次數跑六次時，要記得起始鍵是0
while(count($result)<6){
    $tmp=rand(1,39);
    echo "第".(count($result)+1)."次選號數字是".$tmp;
    if(in_array($tmp,$result) != true){
        $result[]=$tmp;
        // 驗證程式是否正確執行
        echo "<pre>";
        print_r($result);
        echo "</pre>";
    }else{ 
        echo "重複，不存入矩陣<br>";
    }
}

foreach($result as $row){
    echo "<span class='item item1'>";
    echo $row;
    echo "</span>";
}
echo "<br>";
echo "<span class='item item2'>";
echo rand(1,6);
echo "</span>";
