<?php
// array_multisort($arr,SORT_ASC,$arr2,SORT_DESC);(升序，降序)
// 给多维或多个数组排序
// 要求：作为参数的数组的长度必须相同，否则会报错
// 排序其实只以第一个参数为准，第一个数组可以控制升序降序，然后其他数组都按照原有对应关系重新排列
// 如下两个数组原有对应关系是1对5，2对43对3.。。
// array_multisort($arr,SORT_NUMERIC,SORT_DESC,$arr2,SORT_STRING,SORT_ASC);
// SORT_NUMERIC：按数字类型排序
// SORT_STRING：按字符串类型排序
$arr1 = [1,2,3,4,5];
$arr2 = [5,4,3,2,1];
array_multisort($arr1,SORT_DESC, $arr2);
echo '<pre>';
print_r($arr1);
print_r($arr2);
echo '</pre>';
// 多维数组排序
$arr =[
    ['name'=>'gss','age'=>28],
    ['name'=>'zls','age'=>20],
    ['name'=>'lsh','age'=>20],
    ['name'=>'gxs','age'=>25],
];
// 首先循环拆成姓名和年龄两个数组
foreach ($arr as $key => $value) {
    $name[$key] = $value['name'];
    $age[$key] = $value['age'];
};
echo '<hr>';
echo '<pre>';
print_r($name);
print_r($age);
echo '</pre>';
// 按年龄升序按姓名降序
array_multisort($age,SORT_ASC,$name,SORT_DESC,$arr);
echo '<hr>';
echo '<pre>';
print_r($arr);
echo '</pre>';