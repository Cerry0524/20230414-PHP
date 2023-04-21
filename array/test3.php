<style>
    .area-1,.area-2{
        display:inline-block;
        width: 35px;
        height: 35px;
        border:1px solid #ccc;
        text-align: center;
        line-height: 33px;
        border-radius: 50%;
    }
    .area-1{
        background-color: #0f0;    
    }
    .area-2{
        background-color: orange; 
    }
</style>
<?php
// 亂數取要前小後大
$x=[];

while ( count($x) < 6 ) {    
    $tmp=rand(1,38);
    // 先產生一個虛擬值去判斷是否有重複
    // 如果有重複就不做任何事情
    // 繼續執行陣列

    if(in_array($tmp,$x)==true){
    }else{
        
        $x[]=$tmp;

    }
    echo "<pre>";
    print_r($x);
    echo "</pre>";
    // 上述程式可以幫助自己了解程式有沒有多跑幾次
}

   
foreach( $x as $num){
    echo "<span class='area-1'>".$num."</span>";
}

echo "<br><span class='area-2'>".rand(1,8)."</span>";