<?php
// 1~10 までを足した値を返す関数
function sum(){
    
    // $result は結果を保存する変数
    $result = 0;
    
    // $i は 1 からはじまり $max より大きくなるまでループする
    for($i = 1; $i <= 10; $i++){
        
        // $result に $i を順番に足していく
        $result += $i;
    }
    
              // $result を結果として返す
    return $result;          
}

// 関数を実行する
echo sum(100);
?>


<?php
// 1から100までを順番に表示する関数
function print_number(){
    
    for($i = 0; $i < 100; $i++){
        echo $i;
    }
}
?>

<?php
$string = "ABCDEF";
echo strlen($string);
?>

<?php

$string = "i love Ruby!";

// Ruby という文字列を PHP に置換する
$new_string = str_replace("Ruby","PHP", $string);

echo $new_string;
?>

<?php
$array = array(1,2,3,4,5,6,7,8,9,10);
echo count($array)
?>

<?php
$array = array(2,5,9,7,3,1,8,6,4);

// 配列を昇順（小さい順）にソートする
asort($array);
// print_rで表示する
print_r($array);

// $array を降順（大きい順）にソートする
arsort($array);
// print_rで表示する
print_r($array);
?>

<?php
// 数値を2倍にして返す関数
function sum($max){
    $result = 0;
    for($i = 1; $i <=$max; $i++){
        $result *2= $i;
    }
    return $resutl;
}
echo sum(100)
?>

