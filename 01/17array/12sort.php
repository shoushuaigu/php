<?php
// 排序(改变原数组)
// 升序 sort    降序 rsort  根据值形成索引数组
$arr1=[4=>2,3=>5,10=>3,30=>66,15=>44,7=>2,2=>8];
$arr2=['d'=>'java','a'=>'javascript','w'=>'php','p'=>'python','i'=>'html'];
// echo '<hr>';
// sort($arr1);
// sort($arr2);
// echo '<pre>';
// print_r($arr1);
// print_r($arr2);
// echo '</pre>';
// echo '<hr>';
// rsort($arr1);
// rsort($arr2);
// echo '<pre>';
// print_r($arr1);
// print_r($arr2);
// echo '</pre>';

// ksort krsort 根据键名升序降序
echo '<hr>';
echo '<hr>';
ksort($arr1);
ksort($arr2);
echo '<pre>';
print_r($arr1);
print_r($arr2);
echo '</pre>';
echo '<hr>';
krsort($arr1);
krsort($arr2);
echo '<pre>';
print_r($arr1);
print_r($arr2);
echo '</pre>';
// asort arsort 按值升序降序但保留键
echo '<hr>';
echo '<hr>';
asort($arr1);
asort($arr2);
echo '<pre>';
print_r($arr1);
print_r($arr2);
echo '</pre>';
echo '<hr>';
arsort($arr1);
arsort($arr2);
echo '<pre>';
print_r($arr1);
print_r($arr2);
echo '</pre>';
