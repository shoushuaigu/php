<?php
// 匿名函数、闭包
$fn = function($n1){
    return $n1;
};
echo $fn('匿名函数调用');
// 闭包：在一个函数内调用匿名函数并将返回值返回;
echo '<hr/>';
function display($d){
    $fn2=function($data){
        return $data;
    };
    return $fn2($d);
};
echo display('闭包函数调用');
echo '<hr/>';
// 匿名函数调用外部变量
function display2($d){
    $d2='外部变量';
    $fn3 = function($data)use($d2){
        return $data.$d2;
    };
    return $fn3($d);
};
echo display2('匿名函数调用');
