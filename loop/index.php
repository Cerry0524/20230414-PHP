<?php
// 遞增迴圈
$total = 0;
for ( $i = 1;$i <= 10; $i++){
    echo "|".$i;
    $total += $i;
};
echo "<hr>";
// 遞減迴圈
for ( $i = 60;$i >=20; $i--){
    echo "|".$i;
    $total += $i;
}