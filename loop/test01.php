<?php
// 直角三角形
echo "直角三角形";
echo "<br>";
for ($i=0; $i < 5; $i++) { 
    echo "*";
    for ($j=0; $j < $i; $j++) {
    echo "*";
    }
    echo "<br>";
}

// 倒直角三角形
echo "倒直角三角形";
echo "<br>";
for ($a=5; $a > 0; $a--) { 
    echo "*";   
    for ($b=$a-1; $b > 0; $b--) { 
    echo "*";   
    }
    echo "<br>";
}
// 正三角形
echo "正三角形";
echo "<br>";
$f = 5;

for ($x=0; $x < $f; $x++) { 
    echo "&nbsp&nbsp";
       
    for ($y=$x+1; $y < $f; $y++) { 
        echo "&nbsp&nbsp";
    }     
    echo "*";
    for ($z=0; $z < $x; $z++){
        echo "**";
    }
echo "<br>";   
}

//菱形
echo "菱形";
echo "<br>";
$f = 4;

for ($x=0; $x < $f; $x++) { 
    echo "&nbsp&nbsp&nbsp&nbsp";
       
    for ($y=$x+1; $y < $f; $y++) { 
        echo "&nbsp&nbsp";
    }     
    echo "*";
    for ($z=0; $z < $x; $z++){
        echo "**";
    }
echo "<br>";  
}
$f = 5;
for ($x=0; $x < $f; $x++) { 
    echo "&nbsp&nbsp";
       
    for ($y=0; $y < $x; $y++) { 
        echo "&nbsp&nbsp";
    }     
    echo "*";
    for ($z=$x+1; $z < $f; $z++){
        echo "**";
    }
echo "<br>";  
}

//矩型1
echo "矩型1";
echo "<br>";

for ($i=1; $i <= 7 ; $i++) { 
    
    for ($j=1; $j <= 7; $j++) {
        if ($i%6 == 1) {
            echo "*";            
        }else{           
            if ($j%6 == 1) {
                echo "*";            
            }else{
                echo "&nbsp&nbsp";
            }
        }
    }
    echo "<br>";
}

//矩型2
echo "矩型2";
echo "<br>";

for ($i=1; $i <= 7 ; $i++) { 
    
    for ($j=1; $j <= 7; $j++) {
        
        if ($i%6 == 1) {
            echo "*";            
        }else{           
            if ($j%6 == 1) {
                echo "*";            
            }else{
                if ($i == $j or $i+$j == 8) {
                    echo "*";                      
                    }else{
                        echo "&nbsp&nbsp";
                    }
            }
        }
    }
    echo "<br>";
}

//挖空菱形
echo "挖空菱形";
echo "<br>";

$f = 4;

for ($x=0; $x < $f; $x++) { 
    echo "&nbsp&nbsp&nbsp&nbsp";
       
    for ($y=$x+1; $y < $f; $y++) { 
        echo "&nbsp&nbsp";
    }     
    echo "*";
    for ($z=0; $z < $x; $z++){
        if($x == $y){
            echo "*";
        }else{
          echo "&nbsp&nbsp";
        }
    }
echo "<br>";  
}
$f = 5;
for ($x=0; $x < $f; $x++) { 
    echo "&nbsp&nbsp";
       
    for ($y=0; $y < $x; $y++) { 
        echo "&nbsp&nbsp";
    }     
    echo "*";
    for ($z=$x+1; $z < $f; $z++){
        echo "**";
    }
echo "<br>";  
}
