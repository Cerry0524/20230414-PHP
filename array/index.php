<?php
// $a[1]="A";
// $a['001']="BBB";
// $a['name']="mack";
// $a['parent_name']="mack";
// // $a='cdef';
// echo "<pre>";
// print_r($a);
// echo "</pre>";

// $b[]="B";
// $b[]="C";
// $b[]="D";
// $b[]="E";
// $b[]="F";
// echo "<pre>";
// print_r($b);
// echo "</pre>";



// $c=["A","B","C"];
// $c[]="D";
// $c['total']=4;
// $c[]="E";

// echo "<pre>";
// print_r($c);
// echo "</pre>";

// $e=["a","b"];
// $f[]="a";
// $e[5]="b";

// echo "<pre>";
// print_r($f);print_r($e);
// echo "</pre>";
// echo $a[1];
// echo $a['001'];
// echo $a['name'];

// echo "<br>";
// echo $b[0];
// echo "<br>";
// echo $c[2];
// echo "<br>";
$a=[
    '數學'=>[
                [       
                '性命'=>'小名',
                '成績'=>98
                ]
            ],
    '數學'=>[
            '姓名'=>'大笨豬',
            '成績'=>150,
            '年齡'=>50
    ]
            ];
echo "<pre>";
print_r($a);
echo "</pre>";

if (is_array($a)) {
    echo "是";
}else{
    echo "NO";
}

if (in_array('大笨豬',$a)) {
    echo "是";
}else{
    echo "NO";
}

if (sort('大笨豬',$a)) {
    echo "是";
}else{
    echo "NO";
}

sort