<?php
$arr =[1,2,3,3,4,5,[1,1,6,[9,8]]];
echo count($arr);
echo '<hr>';
echo count($arr,1); //开启查询多维数组
echo '<hr>';
// array_count_values   检查值出现的次数并将值作为键，出现次数作为值形成数组
//所以被检测数组的值只能是整数或者字符串
$arr2 =['name'=>'gss','age'=>18,'num'=>18,'count'=>'18',18,'18','other'=>'gss'];
$arr3 =array_count_values($arr2);
echo '<pre>';
print_r($arr3); //[gss] => 2 [18] => 5
echo '</pre>';
// array_unique()删除数组中值重复的元素并形成新数组
$arr4 = ['name'=>'gss','age'=>18,'num'=>'18'];
$arr5 = array_unique($arr4);
echo '<pre>';
print_r($arr5);
echo '</pre>';

