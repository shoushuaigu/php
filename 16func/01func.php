<?php
echo 'function';
function showSom($data){
    return $data;
};
echo showSom('参数');
$num =10;
function showNum($a){
    return $a+=10;
};
echo showNum($num); //20
echo $num;  //10
//引用参数，可改变全局变量
function showNum2(&$a){
    return $a+=10;
};
echo showNum2($num);    //20
echo $num;  //20
echo '<hr>';
// 实参和形参
function shows($n1=1,$n2=2,$n3=3){
    echo $n1 + $n2 + $n3;
};
shows();
echo '<hr>';
shows(10,20);
echo '<hr>';
shows(10,20,30);
// func_get_args,func_get_arg获取实参数组
function shows2(){
    echo '<pre>';
    var_dump(func_get_args());
    var_dump(func_get_arg(1));
    echo '</pre>';
}
echo '<hr>';
shows2(1,'守帅',3);

