<?php
$arr=range(1,10);
$i=0;
while($i<count($arr)){
    echo $arr[$i].'<br/>';
    $i++;
};

$arr2 = ['name'=>'谷守帅','age'=>18,'sex'=>'男'];
$i=0;
while($i<count($arr2)){
    echo key($arr2).'===>'.current($arr2).'<br/>';
    next($arr2);
    $i++;
};