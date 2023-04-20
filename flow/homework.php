<H1>閏年判斷 match作法</H1>
公元年分除以4可整除，為閏年。<br>
公元年分除以4可整除但除以100不可整除，為閏年。<br>
公元年分除以100不可整除但除以400可整除，為閏年。<br>
<?php
$year = 2400;
$result = match(true){
    $year%4 == 0 => "閏年",
    ( $year%4 == 0 && $year%100 != 0 ) == true => "閏年",
    ( $year%100 != 0 && $year%400 == 0 ) == true => "閏年",
    default => "平年"
};
echo $year."是".$result;
?>
<H1>閏年判斷 if-else作法</H1>
公元年分除以4可整除(閏年)。<br>


公元年分除以4可整除(閏年)。  除以100不可整除(閏年)。<br>


公元年分除以4可整除(閏年)。  除以100不可整除(閏年)。 除400可整除(閏年)。<br>
<?php
if ($year%4 == 0){
    // 閏年
    if ($year%100 != 0){
        // 閏年
        if($year%400 ==0){
            echo "閏年";
        }else{
            echo "平年";
        }
    }else{
        echo "平年";
    }
}else{
    echo "平年";
}
?>




<?php
echo $year."是";
if ($year%4 != 0) {
    // 平年
     if($year%100 == 0){
        //  平年
        if($year%400 != 0){
             // 平年
            echo "平年";
        }
        else{echo "閏年";}
    }
    else{echo "閏年";}
}
else{echo "閏年";}
?>
