<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>菱形自己做</title>
    <style>
        body{
            font-family: 'Courier New', Courier, monospace;
        }
    </style>
</head>
<body>
    
<h1>矩形</h1>
<?php
for ($i=0; $i < 9 ; $i++) { 
    
    for ($j=0; $j < 9; $j++) { 
        echo "*";

    }
    echo "<br>";
}
?>

<h1>直角三角形</h1>
<?php
$n=9;
for ($i=1; $i <= $n ; $i++) { 
    
    for ($j=1; $j <= $i; $j++) { 
        echo "*";

    }
    echo "<br>";
}
?>

<h1>倒直角三角形</h1>
<?php
$n=9;
for ($i=1; $i <= $n ; $i++) { 
    
    for ($j=1; $j <= ($n+1)-$i; $j++) { 
        echo "*";

    }
    echo "<br>";
}
?>

<h1>正三角形</h1>
<?php
$n=5;
for ($i=1; $i <= $n ; $i++) { 
    
    for ($j=1; $j <= $n - $i; $j++) { 
        echo "&nbsp";        
    }
    for ($k=1; $k <= $i * 2 - 1 ; $k++) { 
        echo "*";
    }
    echo "<br>";
}
?>

<h1>倒正三角形</h1>
<?php
$n=5;
for ($i=1; $i <= $n ; $i++) { 
    
    for ($j=1; $j <= ($i - 1); $j++) { 
        echo "&nbsp";        
    }
    for ($k=1; $k <= ($n * 2 - $i - $j + 1); $k++) { 
        echo "*";
    }
    echo "<br>";
}
?>


<h1>菱形</h1>
<?php
$n=9;

$n=($n%2==0)?$n+1:$n;

$tmp=0;
for ($i=1; $i <= $n ; $i++) { 
    
    $tmp=($i < ceil($n/2))? $i:($n + 1 - $i);


    for ($j=1; $j <= (ceil($n/2) - $tmp); $j++) { 
        echo "&nbsp";        
    }

    for ($k=1; $k <= ($tmp * 2) - 1; $k++) { 
        echo "*";
    }
    echo "<br>";
}
?>

<h1>菱形中空</h1>
<?php
$n=9;

$n=($n%2==0)?$n+1:$n;

$tmp=0;
for ($i=1; $i <= $n ; $i++) { 
    
    $tmp=($i < ceil($n/2))? $i:($n + 1 - $i);


    for ($j=1; $j <= (ceil($n/2) - $tmp); $j++) { 
        echo "&nbsp";        
    }

    for ($k=1; $k <= ($tmp * 2) - 1; $k++) { 
        if ( $tmp == 7 - $j - $k || $tmp ==($k - 1)/2 + 1){
            echo "*";           
        }else{
            echo "&nbsp"; 
        }
    }
    echo "<br>";
}
?>

<h1>菱形中空十字</h1>
<?php
$n=9;

$n=($n%2==0)?$n+1:$n;

$tmp=0;
for ($i=1; $i <= $n ; $i++) { 
    
    $tmp=($i < ceil($n/2))? $i:($n + 1 - $i);


    for ($j=1; $j <= (ceil($n/2) - $tmp); $j++) { 
        echo "&nbsp";        
    }

    for ($k=1; $k <= ($tmp * 2) - 1; $k++) { 
        if ( $tmp == 7 - $j - $k || $tmp ==($k - 1)/2 + 1){
            echo "*";           
        }else if( $tmp == ceil($n/2) || $tmp == $k ){
            echo "*";  
        }else{
            echo "&nbsp"; 
        }
    }
    echo "<br>";
}
?>
</body>
</html>

