<?php
class Demo
{
    public $name;
    public $age;
    public $sex;
    public function showInfo(){
        return $this->name.$this->age.$this->sex;
    }
    public function __construct($name,$age,$sex){
        $this->name = $name;
        $this->age = $age;
        $this->sex = $sex;
    }
    public function __destruct(){   //对象销毁时调用
        echo '当前对象被销毁了';
    }
}
$obj = new Demo('gss',18,'man');
echo '<hr>';
echo $obj->name;
echo '<hr>';
echo $obj->showInfo();
echo '<hr>';
