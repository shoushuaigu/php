<?php
//clone 与new一个新对象相同
class Demo  
{
    public $name = 'gss';
}
$obj1 = new Demo();
$obj1->name ='ppp';
$obj2 = $obj1; //此为引用复制，相当于一个对象两个名，即改哪个值都跟这边
$obj1->name = 'kkk';
$obj3 = clone $obj1;    //相当于new obj1 是全新的原始的对象
$obj4 = new Demo();
$obj1->name = 'nnn';
echo '<pre>';
echo$obj1->name;    //nnn
echo '<hr>';
echo$obj2->name;    //nnn
echo '<hr>';
echo$obj3->name;    //kkk
echo '<hr>';
echo$obj4->name;    //gss
echo '</pre>';
