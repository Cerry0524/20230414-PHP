<?php

$name='Tom';
$age=48;
$total=10*100;

echo "<span style='color:blue;font-size:24px';>我的名字叫：".$name."</span>";
echo "<br>年紀是：".$age;
echo "<br>總共是：".$total."<br>";

define("PI",3.1415);

echo PI;
echo "<br>";
echo 10*10*PI;
echo "<hr>";
// 可變（動態）變數
$name='mack';
$$name=55;

echo $mack;
echo $$name;
echo "<hr>";

$num1=10;
$num2=25;
echo '$num1=' . $num1;
echo "<br>";
echo '$num2=' . $num2;
echo "<br>";
echo " + =>";
echo $num1+$num2;
echo "<br>";
echo " - =>";
echo $num1+$num2;
echo "<br>";
echo " * =>";
echo $num1*$num2;
echo "<br>";
echo " / =>";
echo $num1/$num2;
echo "<br>";
echo $num1%$num2;
echo "<br>";
echo "<hr>";
// 指派運算字
$name='大耳狗';
['name'=>'大耳狗'];
echo "<hr>";
// 三元運算子
$socre=50;
$level=($socre >= 60)?'及格':'不及格';
echo $level;
echo "<br>";
$socre=70;
$level=($socre >= 60)?'及格':'不及格';
echo $level;
echo "<br>";
// 練習交換變數
$a = 10;
$b = 50;
$tmp=$a;
$a=$b;
$b=$tmp;
echo "<br>";
echo $a;
echo "<br>";
echo $b;

?>