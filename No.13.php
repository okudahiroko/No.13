<?php
// 数値を2倍にして返す関数
function outputDouble($num){
    $result = $num * 2;
    echo $result;
}
outputDouble(5);
echo "\n";
?>

<?php
// $a と $b を仮引数に持ち、$a と $b を足した結果を返す関数
function f($a, $b){
    return $a + $b;
   }
echo f(1,2);
?>

<?php
// $arr という配列の仮引数を持ち、数値が入った配列array(1, 3, 5 ,7, 9) を渡すとその要素をすべてかけた結果を返す関数
function multiplyArray(array$array): float{
    $num = 1;
    foreach ($array as $value){
        $num *= $value;
    }    
    return $num;
}
$list = [1,3,5,7,9];
$result = multiplyArray($list);
print("配列の計算結果:".$result);
?>

<?php
// 配列の中で一番大きい値を返す max_array という関数
$arr = array(7,5,8,14,3,11);
function max_array($arr){
  $result = 0;
  foreach((array)$arr as $a){
    if ($result < $a) {
      $result = $a;
  }
}
return $result;
}
echo max_array($arr);
 ?>

<?php
$string = '<a href="http://google.com">Google</a>';
$result = strip_tags($string);
echo $result;
?>

<?php
$fruits = ["apple","orange"];
array_push($fruits,"banana","melon");
print_r($fruits);
?>

<?php
$array1 = ["1月","2月","3月"];
$array2 = ["4月","5月","6月"];
$array3 = ["7月","8月","9月"];
$array = array_merge($array1,$array2,$array3);
print_r($array);
?>
　　　　　　　　
<?php
$timestamp = time() + (60 * 60 * 24) *7;
$next_week = date('Y年m月d日H時i分s秒', $timestamp);
print $next_week
?>

<?php
echo date("l",mktime(0,0,0,1,1,2010));
?>