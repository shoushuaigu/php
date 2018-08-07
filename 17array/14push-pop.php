<?php
// array_push($arr,'value');    从尾部添加，只能按索引形式添加,返回数组长度
// array_pop($arr);     从尾部删除元素，返回被删除的元素值
$arr =['name'=>'gss','age'=>18];
echo '<hr>';
echo '<pre>';
echo array_push($arr,'add');
print_r($arr);
echo '</pre>';
echo '<hr>';
echo '<pre>';
echo array_push($arr,'third','four');
print_r($arr);
echo '</pre>';
echo '<hr>';
echo '<pre>';
echo array_pop($arr);
print_r($arr);
echo '</pre>';
// 从头部插入或删除
// array_unshift($arr,'v','v2');入队操作,返回长度
// array_shift($arr);出队操作
echo '<hr>';
echo '<pre>';
echo array_shift($arr);
print_r($arr);
echo '</pre>';
echo '<hr>';
echo '<pre>';
echo array_unshift($arr,'css','js');
print_r($arr);
echo '</pre>';
// array_rand($arr,2);在数组中随机取2个键返回数组（默认是1个，返回键名）
echo '<hr>';
echo '<hr>';
$arr_r = ['name'=>'gss',1,2,'age'=>18,'sex'=>'man'];
$rand_1 = array_rand($arr_r);
echo($rand_1);
$rand_2 = array_rand($arr_r,2);
echo '<pre>';
print_r($rand_2);
echo '</pre>';
foreach($rand_2 as $key=>$value){
    echo $key.'--'.$value.'<br/>';
    echo $arr_r[$value].'<br/>';
}
// shuffle($arr);打乱数组形成新的索引数组，成功返回1，失败返回0
echo '<hr>';
echo '<hr>';
$arr_s =['唐山','秦皇岛','city'=>'北京'];
if(shuffle($arr_s)){
    echo '<pre>';
    print_r($arr_s);
    echo '</pre>';
}else{
    echo shuffle($arr_s);
};
//array_sum($arr);数组内元素求和，自动转换类型
echo '<hr>';
echo '<hr>';
$arr_sum =[1,'1','1php','js1','p1p'];
echo array_sum($arr_sum);   //3,数组开头的字符串能转换类型参与运算
// range(1,10,2)  生成1到10步长为2的数组;
$arr_rang = range(1,10,2);
echo '<pre>';
print_r($arr_rang);
echo '</pre>';
