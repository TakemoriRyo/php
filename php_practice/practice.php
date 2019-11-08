<?php  
$a = 3;
$b = 7;
echo $a + $b;

$array = ["1月","2月","3月","4月","5月","6月","７月","8月"];
echo $array[7];

$hello = "HELLO,";
$name = "Takemori";
$world = "'s World!";
echo $hello.$name.$world;

$tech_boost = "tech";
$tech_boost .= " boost";
echo $tech_boost;

$calendar_2018 = [
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
echo $calendar_2018["December"];