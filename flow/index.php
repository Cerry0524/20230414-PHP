<?php
$score=90;

if($score>=90){
    $level="A";
}else{
    if($score>=80){
        $level="B";
    }else{
        if($score>=70){
            $level="C";
        }else{
            if($score>=60){
                $level="D";
            }else{
                $level="E";
}}}}

switch($level){
    case "A":
        echo "表現優良";
        break;
    case "B":
        echo "值得肯定";
        break;
    case "C":
        echo "需要練習";
        break;
    case "D":
        echo "加強基本功";
        break;
    default:
    echo "去死吧";
}

echo "<hr>";
// 簡化語法
if($score >=90)      {$level="A";
}else if($score >=80){$level="B";
}else if($score >=70){$level="C";
}else if($score >=60){$level="D";
}else                {$level="E";
}
// switch改成match
$level = 59;
$result = match(true){
    $level >= 90 => "表現優良<br>",
    $level >= 80 => "值得肯定<br>",
    $level >= 70 => "需要練習<br>",
    $level >= 60 => "加強基本功<br>",
    default => "去死吧<br>"
};
echo $result;