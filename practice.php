<?php
echo 'hello php!';

$a = 3;
$b = 7;
echo $a + $b;

$array_month = ['1月', '2月','3月','4月','5月','6月','7月','8月','9月','10月','11月','12月'];
echo $array_month[7];

$hello = "Hello,";
$name = "Hiroko";
$world = "'s World!";
echo $hello , $name , $world;

$teac_boost = "tech";
echo $teac_boost . "boost";

$calender2018_calendar = [
  "January" => "1月",
  "February" => "2月",
  "March" => "3月",
  "April" => "4月",
  "May" => "5月",
  "June" => "6月",
  "July" => "7月",
  "August" => "8月",
  "September" => "9月",
  "October" => "10月",
  "November" => "11月",
  "December" => "12月"
];

// 12月を表示する
echo $calender2018_calendar["December"];

$name = "奥田浩子";
// もし　$name が　奥田浩子　なら、ifのあとの｛｝の中のコードが実行される
// それ以外なら、　else　のあとの｛｝の中のコートが実行される
if ($name = "奥田浩子") {
  echo "私は奥田浩子です";
} else {
  echo "あなたの名前ではありません";
}

for ($i = 1; $i <= 100000; $i++) {
  $total += $i;
}  
  echo $total;
  
$fruits = array("orange","peach","grape","apple","watermelon");
// $fruits から一つずつ要素を取り出して、$fruit に代入される
foreach($fruits as $fruit){
  echo "要素は" . $fruit;
  echo "\n";
}

/* for文の始めの値を定義する */
$start = 1;
/* for文の終わりの値を定義する */
$end = 100;

for ($i = $start; $i <= $end; $i++) {

  // 5で割り切れたら{}内を実行する
  if ($i % 5 == 0 ) {
    echo $i;
  }
}