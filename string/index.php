<?php

echo "<H3>substr()</H3>";
// substr()
$str="今天天氣很好";
$str2="Today is a good day";
$str3="Today今　天 is天 a很好 good day";
echo $str;
echo "<br>";
echo $str2;
echo "<br>";
// PHP字串是從0開始算，其他程式語言不一定
echo substr($str2,1,2);
// 上面從1開始是錯的
echo "<br>";
echo substr($str,0,3);
// 中文字是「3」個碼串起來才是一個
echo "<hr>";
echo "<H3>mb_substr()</H3>";
// mb_substr目前主流針對雙語言
echo "<br>";
echo mb_substr($str,0,2);
// mb_substr針對英文語系也是OK
echo "<br>";
echo mb_substr($str2,0,2);
echo $str3;
echo "<br>";
// mb_substr針對中英文混合語系也OK
// 半形空白就是一個位元
// 全形空白是一個中文位元
// 但是mb_substr程式效率比較差
echo "<br>";
echo mb_substr($str3,0,10);

// trim 過濾掉頭尾的字串空白
// 但是中間的會留著
// 避免使用者輸入不小心輸入空白影響結果
echo "<hr>";
echo "<H3>Trim()</H3>";
$str="　　　今天  天氣  很好        ";
echo "<br>";

echo $str;
echo "<br>";
$str2="     今天 天氣 很好";
echo $str2;
echo "<br>";
echo trim($str);
echo "<br>";
echo trim($str2);

echo "<hr>";
echo "<H3>str_repeat()</H3>";
// str_repeat 重複字串特定的字元
echo str_repeat($str,10);

echo "<hr>";
echo "<H3>str_replace()</H3>";
// str_replace 重複字串特定的字元
$str="今天天氣很好";
$replace="很糟";
echo str_replace("很好",$replace,$str);
// 取代字串(搜尋的字,要取代的內容,原始文章出處);
echo str_replace("很好",$replace,str_replace("天","日",$str));
echo "<br>";
// 可以用下下面的用法直接一次取代兩個結果
echo str_replace(["天","很好"],["日",$replace],$str);

echo "<hr>";
echo "<H3>explode()</H3>";
// 使用特定字串或字元或符號切割字串
// 只有PHP使用explode其他程式語言大多用spilt<如js等>
// 執行完畢後輸出字串陣列
$str="非洲國家肯亞一個基督教自殺邪教組織的傳教士向信眾洗腦指稱「餓死才能見到上帝」，當地警方在該組織附近森林挖出的屍體不斷增加，目前已達47具，該國內政部長基圖爾·金迪基（Kithure Kindiki）表示，已封鎖800 英畝（約323.752公頃）的森林，並宣佈為犯罪現場。";
$ex=explode("，",$str);
echo "<pre>";
print_r($ex);
echo "</pre>";
// 上面應用適合在取摘要時

// 抓取檔案副檔名的應用方式
$file="list.doc";
$sub=explode(".",$file);
echo "<pre>";
print_r($sub);
echo "</pre>";
// 可得知副檔名在1鍵位置
echo $sub[1];

echo "<hr>";
echo "<H3>implode()/join()</H3>";
// 合併字串功能
echo implode(",",$ex);
// 回傳也是一個字串
echo join(",",$ex);
// 改用join結果也是一樣的

echo "<hr>";
echo "<H3>strpos()</H3>";
// 返回某字元在字串中首次出現的位置
$str="今天天氣很好";
$search="天氣";
echo "用英文字元算是第".strpos($str,$search)."個";
// 只會找到第一個位址
echo "<br>";
// 也有中文語系用法mb_strpos
echo "用中文字元算是第".mb_strpos($str,$search)."個";

echo "<hr>";
echo "<H3>strlen()</H3>";
// 計算	字串長度 會連空白也算
echo "用英文字元算有".strlen($str)."個字元（空白也算）";
echo "<br>";
// 也有中文語系用法mb_strpos
echo "用中文字元算有".mb_strlen($str)."個字元（空白也算）";
