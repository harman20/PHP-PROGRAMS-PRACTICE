<?php

$arr1=array("mohali","chandigarh","punjab");

$str1=implode("*",$arr1);     //array to string
echo $str1;
echo "<br>";
var_dump($str1);
echo "<br>";
print_r($arr1);
echo "<br>";

$str2="hello world";

$arr2=explode("+",$str2);  //string to array

print_r($arr2);
echo "<br>";

var_dump($arr2);
echo "<br>";
$a2=array_reverse($arr2);
var_dump($a2);
echo array_count_values($a2);
?>