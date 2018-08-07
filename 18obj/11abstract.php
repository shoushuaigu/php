<?php
// abstract抽象类和方法
// 抽象类不能被实例化，其中的方法也只能被子类调用和定义逻辑
abstract class Demo     //抽象类
{
    public $name;
    public function __construct($name)
    {
        $this->name= $name;
    }
    abstract public function show();    //抽象方法
    public function getName(){
        echo $this->name;
    }
}
class Son extends Demo
{
    //子类中必须实现抽象类中的所有抽象方法
    public function show(){
        echo $this->name;
    }
}
$obj = new Son('lmml');
$obj->getName();    //抽象类中的普通方法能正常调用
$obj->show();

