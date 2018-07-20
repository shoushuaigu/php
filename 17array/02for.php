<?php
// for循环索引数组
$arr1 = range(2,10,2);    //生成2~10,步长为2整数
// print_r($arr1);
for($i=0;$i<count($arr1);$i++){
    echo $arr1[$i].'<br/>';
}
// for循环关联数组
$arr2 = ['name'=>'谷守帅','age'=>18,'sex'=>'男'];
// print_r($arr2);
for($i=0;$i<count($arr2);$i++){
    echo key($arr2).'===>'.current($arr2).'<br/>';
    next($arr2);
}