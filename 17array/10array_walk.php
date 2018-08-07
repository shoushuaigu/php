<?php
// array_walk($arr,clb)
// array_walk:循环数组更新数组
$arr =['name'=>'gss','age'=>18];
function clb($a,$b){    //($value,$key)
    echo $a.'==>'.$b.'<br/>';
};
// 循环
array_walk($arr,'clb');
echo '<hr>';
// 更新
function clb1(&$v,$k){
    $v .='_add';
};
// 给元素添加后缀
function clb2(&$v,$k,$suffix){  //suffix:后缀
    $v.=$suffix;
};
array_walk($arr,'clb1');
array_walk($arr,'clb');
echo '<hr>';
array_walk($arr,'clb2','.txt');
array_walk($arr,'clb');
