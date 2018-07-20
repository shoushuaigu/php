<?php
$name = 'gss';
$age = 25;
$is_married = false;
echo '姓名'.$name;
echo '<hr/>';
echo '年龄'.$age;
echo '<hr/>';
echo $name.'类型'.gettype($name);
echo '<hr/>';
echo $age.'类型'.gettype($age);
echo '<hr/>';
var_dump ($is_married);
echo '<hr/>';
var_dump ($name);
echo '<hr>';
// $age = '25';
// echo '年龄'.$age;
$age_str = (string)$age;
echo $age_str.'类型'.gettype($age_str);
if(is_string($age_str)){
    echo '是字符串类型';
}else{
    echo '不是string类型';
}
settype($age,'string');
echo '<hr/>';
echo gettype($age);

