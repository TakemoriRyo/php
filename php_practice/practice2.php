<?php
$name = "Takemori";
if($name = "Takemori"){
    echo "私は".$name."です。";
}else{
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
foreach($fruits as $fruit){
    echo $fruit.",";
}
echo "\n";

$start = 1;
$end = 100;

for($i = $start; $i <= $end; $i++){
  if($i % 5 == 0){
    echo $i.",";
  }
}