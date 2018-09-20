<?php
$var1 = 'js';
$var2 = $var1;
echo $var1.'---'.$var2;
echo '<hr>';
$var2 = 'css';
echo $var1.'---'.$var2;
echo '<hr>';
// 引用，相当于一个值的多个名字,用&符。
$var3 = &$var1;
echo $var1.'---'.$var2.'---'.$var3;
echo '<hr>';
$var3 = 'html';
echo $var1.'---'.$var2.'---'.$var3;
echo '<hr>';
// 用变量值当变量名
$v1 = '_name';
$$v1 = 'age';
echo $v1;
echo '<hr>';
echo $$v1;
echo '<hr>';
echo $_name;
// 作用域
$siteName = 'www.victorg.club';
function getSiteName(){
    $siteName ='谷守帅的网站';
    return $siteName;
};
echo '<hr>';
echo $siteName;
echo '<hr>';
echo getSiteName();
// 全局变量$GLOABLS
print '<pre>';
print_r($GLOBALS['siteName'].'====');
print '</pre>';
// static静态变量供重复使用
function sum1(){
    $cont =10;
    return $cont+=10;
};
echo sum1(),sum1(); //20,20
echo '<hr>';
function sum2(){
    static $count = 10;
    return $count+= 10;
};
echo sum2(),sum2(); //20,30