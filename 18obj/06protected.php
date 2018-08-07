<?php
// protected受保护属性，extends继承
class Demo
{
    protected $name;
    protected $age;
    protected function show(){
        // 受保护的只能被子类继承，不能外部调用
        return $this->name.'==='.$this->age;
    }
    public function showP(){
        return $this->name.'==='.$this->age;
    }
    public function __construct($name,$age){
        $this->name=$name;
        $this->age=$age;
    }
    public function __get($name){
        return $this->$name;
    }
}
// 子类，继承父类
class Son extends Demo
{
    protected $sex;
    public function __construct($name,$age,$sex)
    {
        parent::__construct($name,$age);
        $this->sex=$sex;
    }
    // 重写受保护的show方法，子类重写父类方法时权限不能低于以前
    public function show(){
        return parent::show().'==='.$this->sex;
    }
}

$obj = new Demo('谷守帅',18);
// echo $obj->show();      //受保护的方法不能外部调用
echo $obj->showP();
$obj2 = new Son('达人',20,'男');
// echo $obj->sex;      //没有此属性
echo '<hr>';
echo $obj2->sex;      //男
echo '<hr>';
echo $obj->showP();
echo '<hr>';
echo $obj2->show();

