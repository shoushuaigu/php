<?php
//对象的遍历也可以用foreach实现，但设计到私有、受保护、和静态属性，
// 所以不能直接在外部遍历所有属性，需在内部定义方法，外部调用
// 其中静态属性不能遍历得到
class Demo
{
    public $name;
    private $age;
    protected $sex;
    public static $home;
    function __construct($name,$age,$sex,$home)
    {
        $this->name = $name;
        $this->age = $age;
        $this->sex = $sex;
        self::$home = $home;
    }
    function query(){
        foreach ($this as $key => $value) {
            echo $key.'==>'.$value.'<br>';
        }
        echo self::$home;
    }
}
$obj = new Demo('谷守帅','18','男','唐山');
$obj->query();
