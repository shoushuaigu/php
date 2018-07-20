<?php
// array_values()取出数组中所有的值重构成索引数组
$arr = ['name'=>'谷守帅','age'=>18,'sex'=>'男'];
$arr_index = array_values($arr);
echo '<pre>';
print_r($arr_index);
echo '<pre>';
// array_keys()取出数组中所有的建重构成索引数组
echo '<pre>';
print_r(array_keys($arr));
echo '<pre>';
