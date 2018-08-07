<?php
// 数组的指针
/* key() current() next() prev() reset() end()*/
$arr=['name'=>'html','css','js'];
echo '<pre>';
print_r($arr);
echo '<pre>';
// key()当前指针的键名 current()当前指针的值
echo '<hr/>';
echo key($arr).'==='.current($arr);
// next()下移当前指针
next($arr);
echo '<hr/>';
echo key($arr).'==='.current($arr);
prev($arr);
echo '<hr/>';
echo key($arr).'==='.current($arr);
end($arr);
echo '<hr/>';
echo key($arr).'==='.current($arr);
next($arr);
echo '<hr/>';
echo key($arr).'==='.current($arr);     //指针超出数组长度时为空
reset($arr);
echo '<hr/>';
echo key($arr).'==='.current($arr);