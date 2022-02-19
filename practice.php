<?php
$name="shimizu";
if($name=="shimizu"){
    echo "私は".$name."です";
}else{
    echo "あなたの名前ではありません";
}
echo "\n";

for($num=1;$num<10000;$num++){
    $all+=$num;
}
echo $all;
echo "\n";

$fruits=["ringo","mikan","banana","papaia","dorian"];
foreach($fruits as $one){
    echo $one;
    echo "\t";
}
echo "\n";

$start=1;
$end=100;
for($i=$start;$i<$end+1;$i++){
    if($i%5==0){
        echo $i;
        echo "\t";
    }
}
echo "\n";