<?php
// list和echo都是语言结构，可放等号左边
$arr = range(1,5);
list($a,$b,$c,,$e)=$arr;    //list定义变量，逐个接受数组中的值，只能是索引从0开始的索引数组
echo $a,'---',$b,'---',$c,'---',$e;
// each()逐个遍历数组并将每个元素以键、值、索引、值的形式组成数组;并且指针自动下移一位。
$arr2=['唐山','保定','秦皇岛'];
echo '<pre>';
print_r(each($arr2)); //形成数组，元素有：0=>0,1=>'唐山',key=>0,value=>'唐山';
print_r(each($arr2)); //形成数组，元素有：0=>1,1=>'保定',key=>1,value=>'保定';
print_r(each($arr2)); //形成数组，元素有：0=>2,1=>'秦皇岛',key=>2,value=>'秦皇岛';
echo '<pre>';
// lsit和each结合while循环数组
$arr3 = ['name'=>'谷守帅','age'=>18,'sex'=>'男'];
while(list($key,$value)=each($arr3)){
    echo $key.'==>'.$value;
};