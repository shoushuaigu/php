<?php
/* 索引数组和关联数组 */
// 自动索引
$arr1 = [1,2,3];
print_r($arr1);
echo '<hr>';
// 自定义索引
$arr2 = [1=>10,2=>20,4=>30,'n'=>40,1.1=>11];
print_r($arr2);
echo '<hr>';
// 关联数组
$arr3 = ['id'=>1,'id'=>2,'num'=>3];
print_r($arr3);
echo '<hr>';
$obj = new StdClass();
$obj->name = 'gss';
$arr = [
    'name'=>'谷守帅',
    'age'=>18,
    'list'=>['html','css','js'],
    'user'=>$obj
];
print_r($arr);
echo '<hr>';
echo ($arr['user']->name);
echo '<hr>';
var_dump($arr);
// 数组增删改(根据键名))
$arr_b =['name'=>'gss','age'=>18];
echo '<hr>';
print_r($arr_b);
$arr_b[]='添加';
echo '<hr>';
print_r($arr_b);
$arr_b['sex']='男';
echo '<hr>';
print_r($arr_b);
$arr_b['age']=28;
echo '<hr>';
print_r($arr_b);
// 删除
unset($arr_b[0]);
echo '<hr>';
print_r($arr_b);
echo '<hr>';
print_r(count($arr_b).'数组内元素数量');
echo '<hr>';
// 清空数组
foreach ($arr_b as $key => $value) {
    echo '-'.$arr_b[$key].'-'.$key.'-'.$value.'-';
    unset($arr_b[$key]);
}
echo '<hr>';
print_r($arr_b);
echo '<hr>';
// 重建数组索引（针对索引数组）
$arr_index = [1,2,3,4];
print_r($arr_index);
unset($arr_index[1]);
print_r($arr_index);
$arr_index = array_values($arr_index);
print_r($arr_index);
echo '<hr>';
// 删除数组
unset($arr_b);
