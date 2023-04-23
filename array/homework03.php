<H1>閏年判斷</H1>
公元年分除以4可整除，為閏年。<br>
公元年分除以4可整除但除以100不可整除，為閏年。<br>
公元年分除以100不可整除但除以400可整除，為閏年。<br>
<?php
$years=[];
for($year=1900 ;$year <= 2000 ; $year++){

    if( ($year %4 == 0) && ($year %100 != 0 ) || ($year %100 != 0 && $year%400 == 0 ) ){
        $years[]=[
            "年分"=>$year,
            "狀態"=>"閏年"
        ];
    }
}
echo "<pre>";
print_r($years);
echo "</pre>";

echo "<table>";
echo "<tr>";
echo "<td></td>";
echo "<td>年分</td>";
echo "<td>狀態</td>";
echo "</tr>";
foreach ($years as $year => $states) {
    echo "<tr>";
    echo "<td>$year</td>";
    foreach($states as $ok => $score){
        echo "<td>$score</td>";
    }
    echo "</tr>";
}

echo "</table>";

