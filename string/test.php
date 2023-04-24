<?php
$str1="aaddw1123";
$str_tmp=[];
for ($i=0; $i < strlen($str1) ; $i++) { 
    $str_tmp[]=str_replace(mb_substr($str1,$i,1),"*",$str1);
}
echo "<pre>";
print_r($str_tmp);
echo "</pre>";


echo str_replace($str1,"*********",$str1);