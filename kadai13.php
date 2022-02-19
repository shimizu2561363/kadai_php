<?php

// 課題１
function double($i){
    $result=$i*2;
    return $result;
}

// 課題２
function addition($a,$b){
    $result=$a+$b;
    return $result;
}

// 課題３
function multiprication($arr){
    $result=1;
    foreach($arr as $i){
        $result=$result*$i;
    }
    return $result;
}

// 課題４
function max_array($arr){
    $max_number=$arr[0];
    foreach($arr as $a){
        if($max_number<$a){
            $max_number=$a;
        }
    }
    return $max_number;
}

// 課題５
// strip_tags:文字列からHTMLおよびPHP タグを取り除く
// 使用例
$text = '<p>Test paragraph.</p><!-- Comment --> <a href="#fragment">Other text</a>';
echo strip_tags($text);
echo "\n";

// array_push:要素を配列の最後に追加する
// 使用例
$list=["yamada","takahashi","saitou"];
array_push($list,"kondou","kanada");
print_r($list);
echo "\n";

// array_merge:指定した複数の配列を1つにマージする
// 使用例
$list1=["yamada","katou"];
$list2=["kanada","siina"];
$all_list=array_merge($list1,$list2);
echo $all_list;
echo "\n";

// time,mktime:UNIXタイムスタンプを取得する
// 使用例
$now_time=time();
echo $now_time;
echo "\n";
$time = mktime(9);
echo $time;
echo "\n";

// date:フォーマットを指定して日付の文字列を取得する
// 使用例
date_default_timezone_set('Asia/Tokyo');
echo date("Y/m/d H:i:s");
echo "\n";

?>