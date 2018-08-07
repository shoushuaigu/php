<?php
// 接口类用interface定义和抽象类差不多
interface Demo{
    const SITENAME ='VICTOR的网站';      //属性必须是常量
    function show();        //方法必须是抽象方法且用public,可省略
}
interface Demo2{
    const WWW= 'www.victorg.club';
    function show2();
}
class Son implements Demo,Demo2   //继承用implements，可继承多个类。子类中被继承的父类键属性共享
{
    function show(){
        echo 'show1：'.self::SITENAME.'网址是：'.self::WWW;
    }
    function show2(){
        echo 'show2：'.self::SITENAME . '网址是：' . self::WWW;
    }
}
$obj = new Son();
$obj->show();
echo '<hr>';
$obj->show2();
