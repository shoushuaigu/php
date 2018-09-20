<?php
// 对象封装，私有属性
class Demo
{
    private $name;
    private $age;
    private $sex;
    public function __construct($name,$age,$sex){
        $this->name = $name;
        $this->age = $age;
        $this->sex = $sex;
    }
    // __get __set __isset __unset
    public function __get($name){
        return $this->$name;
    }
    public function __set($name,$value){
        return $this->$name = $value;
    }
    public function __isset($name){
        return isset($this->$name);
    }
    public function __unset($name){
        unset($this->$name);
    }
}
$obj = new Demo('gss',18,'man');
echo $obj->name;    //私有属性外部访问不到,通过__get方法访问
$obj->name = '谷守帅';
echo $obj->name;
echo isset($obj->name)?'存在':'不存在';
echo '<hr>';
echo $obj->age;
unset($obj->age);
// echo $obj->age;
