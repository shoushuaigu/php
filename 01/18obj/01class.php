<?php
class Demo{
    public $name='谷守帅';  //公共属性
    private $age=18;    //私有属性、直供类内部调用
    protected $sex='man';   //受保护的属性、直供类内部调用
    public function getName(){
        return $this->name;
    }
    public function getAge(){
        return $this->age;
    }
    public function getSex(){
        return $this->sex;
    }
    public function getSelf(){
        return new self();  //指向原始类
    }
    public function getStatic(){
        return new static();    //指向被调用的类
    }
};
class Demo1 extends demo{   //子类，继承父类所有属性方法
    public function getParent(){
        return new parent();
    }
}
$obj = new Demo();
echo $obj->name;
echo $obj->getAge();
echo $obj->getSex();
// $obj2===$obj  true  类的实例都是引用，相等
$obj2=$obj;
echo get_class($obj);   //get_class();某实例类的名称
echo get_class($obj2);
echo '<hr>';
echo (new Demo1)->getName();
echo '<hr>';
$obj3 = (new Demo1)->getParent();   
echo $obj3->getAge();
echo get_class($obj3);  //Demo
$obj4 = (new Demo)->getSelf();
echo '<hr>';
echo $obj4->getSex();
echo get_class($obj4);  //Demo
echo '<hr>';
$obj5 = (new Demo1)->getStatic();
echo $obj5->getName();
echo get_class($obj5);  //Demo1 
echo '<hr>';
$obj6 = (new Demo)->getStatic();
echo $obj6->getName();
echo get_class($obj6);  //Demo