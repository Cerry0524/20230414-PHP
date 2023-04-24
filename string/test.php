<h1>字串取代</h1>
將”aaddw1123”改成”*********”
<?php
$str1="aaddw1123";
// 錯誤作法
$str_tmp=[];
for ($i=0; $i < strlen($str1) ; $i++) { 
    $str_tmp[]=str_replace(mb_substr($str1,$i,1),"*",$str1);
}
echo "<pre>";
print_r($str_tmp);
echo "</pre>";

// 正確作法
echo str_replace($str1,"*********",$str1);
?>
<hr>
<h1>字串分割</h1>

將”this,is,a,book”依”,”切割後成為陣列

<?php
$str="this,is,a,book";
$str_row=explode(",",$str);
echo "<pre>";
print_r($str_row);
echo "</pre>";
?>
<hr>
<h1>字串組合</h1>

將上例陣列重新組合成“this is a book”

<?php
echo join("&nbsp",$str_row);
?>

<hr>
<h1>子字串取用</h1>

將” The reason why a great man is great is that he resolves to be a great man”只取前十字成為” The reason…”

<?php
$str=" The reason why a great man is great is that he resolves to be a great man";
echo "<br>";

echo mb_substr($str,0,11)."...";


?>

<style>
    .keyword{
        font-size: larger;
        color: blue;
        text-shadow: 2px 2px 2px gray;
    }
</style>

<hr>
<h1>尋找字串與HTML、css整合應用</h1>
<ol>
<li>給定一個句子，將指定的關鍵字放大</li>  
<li>“學會PHP網頁程式設計，薪水會加倍，工作會好找”</li> 
<li>請將上句中的 “程式設計” 放大字型或變色.</li>   
</ol>
<?php
$homepage="學會PHP網頁程式設計，薪水會加倍，工作會好找";
$keyword="程式設計";
// 方法一
$tmp=explode($keyword,$homepage);

echo "<pre>";
print_r($tmp);
echo "</pre>";

echo $tmp[0];
echo "<span class='keyword'>".$keyword."</span>";
echo $tmp[1];
echo "<br>";
// 方法二
$keywd="<span class='keyword'>程式設計</span>";
echo str_replace($keyword,$keywd,$homepage);
echo "<br>";
// 方法三
$homepage="學會PHP網頁程式設計，薪水會加倍，工作會好找";
$keywd="<span class='keyword'>".$keyword."</span>";
$keyword="程式設計";
echo str_replace($keyword,$keywd,$homepage);
