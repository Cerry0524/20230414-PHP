<?php
// 利用for.while.do/while迴圈從4到100顯示4的倍數
// for
for ($i=4; $i <= 100; $i += 4) {         
        echo $i ."<br>";
    } 
// while
$a = 1;
while (($a * 4) <= 100) {
    echo $a * 4;
    echo "<br>";
    $a += 1;
}
// do.while
$b = 0;
do {$b += 1;
    echo $b * 4;
    echo "<br>";
} while (($b * 4) <= 96);