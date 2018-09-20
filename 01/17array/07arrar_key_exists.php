<?php
// array_key_exists($key,$arr)检测数组中有无键为$key的元素，返回布尔值
$arr =['name'=>'gss','age'=>18,'sex'=>'man',[1,2,3]];
var_dump(array_key_exists('name',$arr));
if(array_key_exists('name',$arr)){
    echo '有元素';
}else{
    echo '无元素';
};
echo '<hr/>';
// in_array($value,$arr,true);判断某值是否在数组中(区分大小写)，true表示开启严格模式（区分数据类型），返回布尔
echo in_array('18',$arr,false);     //true
echo '<hr/>';
$arr2=[1,'2',3];
echo in_array($arr2,$arr,false);    //true
echo '<hr/>';
// array_search($value,$arr,true);查询某值在数组中的键名；返回键名
echo array_search($arr2,$arr,false); //0
echo '<hr/>';
echo array_search('man',$arr,true);     //sex