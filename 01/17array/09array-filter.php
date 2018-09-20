<?php
// 数组过滤器array_filter($arr,clb);
// 循环一个数组，每个值经过回掉函数判断，满足true时返回
$arr = [1,2,3,4,5,6];
function odd($n){
    return $n & 1;  //按位‘与’运算，只有基数能返回1
};
function even($n){
    return !($n & 1);
};
$arr_odd = array_filter($arr,'odd');
$arr_even= array_filter($arr,'even');
echo '<pre>';
print_r($arr_odd);
echo '</pre>';
echo '<pre>';
print_r($arr_even);
echo '</pre>';