<?php
// array_map(clb,$arr1,$arr2...);
// 将回调函数作用到每一个数组上，将值形成一个新的索引数组返回
// 回调函数的参数个数必须与数组个数一致
$arr1=[1,2,3];
$arr2=['唐山','秦皇岛','石家庄','保定'];
function clb($v1,$v2){
    return '第'.$v1.'座城市是'.$v2;
};
$arr3 = array_map('clb',$arr1,$arr2);
echo '<pre>';
print_r($arr3);
echo '</pre>';