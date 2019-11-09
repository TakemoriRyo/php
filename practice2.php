<?php
$name = "Takemori";
if ($name = "Takemori"){
    echo "私は".$name."です。";
}else {
    echo "あなたの名前ではありません";
};
echo "\n";

$total = 0;
for ($i = 0; $i <= 10000; $i++) {
    $total += $i;
}
echo "合計は".$total."です";
echo "\n";

$fruits = array("バナナ","キウイ","りんご","ぶどう","いちご");
foreach ($fruits as $fruit){
    echo $fruit.",";
}
echo "\n";

$start = 1;
$end = 100;

for ($i = $start; $i <= $end; $i++){
  if ($i % 5 == 0){
    echo $i.",";
  }
}

function sum($max){
    $result = 0;
    for ($i = 1; $i <= $max; $i++){
        $result += $i;
    }
    return $result;
}
echo sum(100);
echo "\n";

$string = "ABCDEFG";
echo strlen($string);
echo "\n";

$change = "I love Ruby!";
$new_change = str_replace("Ruby","PHP",$change);
echo $new_change;
echo "\n";

$array = array(1,2,3,4,5,6,7,8,9,10);
echo count($array);
echo "\n";

echo asort($array);
print_r($array);
echo "\n";

echo arsort($array);
print_r($array);
?>