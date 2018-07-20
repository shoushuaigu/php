<?php
// 可变函数和回掉函数
function add($n,$n2){
    return $n+$n2;
};
function div($n,$n2){
    return $n/$n2;
};
echo add(10,5);
echo '<hr>';
echo div(10,5);
echo '<hr>';
$nall = 'add';
echo $nall(20,10);
echo '<hr>';
$nall = 'div';
echo $nall(20,10);
// 可变函数调用：call_user_func_array($fnName,[$n1,$n2]);
echo '<hr>';
echo call_user_func_array($nall,[8,2]);
// 回掉函数
function cl($nall,$n1,$n2){
    return $nall($n1,$n2);
};
echo '<hr>';
echo cl('add',1,1);
echo '<hr>';
echo cl('div',1,1);
function cl2($nall,$n1,$n2){
    return call_user_func_array($nall,[$n1,$n2]);
};
echo '<hr>';
echo cl2('add',1,1);
echo '<hr>';
echo cl2('div',1,1);
