<?php
function double($number){
    return $number * 2;
}
echo double(10);
echo "\n";

function total($a, $b){
    return $a + $b;
}
echo total(5, 5);
echo "\n";

$arr = array(1,3,5,7,9);
echo array_product($arr);
echo "\n";

$max = 0;
function max_array($arr){
    $max_number = $arr[0];
    foreach($arr as $a){
        if ($max_number < $a){
            $max_number = $a;
        }
    }
    return $max_number;
}
echo max_array($arr);
echo "\n";

$tag = "<h1>こんにちは</h1>"."<p>こんばんは</p>";
echo strip_tags($tag,"<p>");
echo "\n";

array_push($arr,11,13,15);
print_r($arr);

$second = array(2,4,6,8,10,12,14);
$array = array_merge($arr,$second);
echo asort($array);
print_r($array);
echo"\n";

echo time();
echo "\n";

date_default_timezone_set('UTC');
echo date("y-m-d-l", mktime(0, 0, 0, 11, 9, 2019));
?>