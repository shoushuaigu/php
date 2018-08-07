<?php
// 序列化与反序列化
class Demo
{
    public $name = 'gss';
    public $age = 18;
    public function show(){
        echo $this->name,$this->age;
    }
    public function __sleep(){
        // 用于限制元素是否参与序列化
        // 序列化时自动调用，把需要序列化的属性名写在数组中，
        // 为写的不会被序列化
        return ['name'];
    }
    public function __wakeup(){
        $this->name='谷守帅';
    }
}
$obj = new Demo();
$serializeStr = serialize($obj);
echo $serializeStr;
echo '<hr>';
$obj2 = unserialize($serializeStr);
print_r ($obj2);
echo '<hr>';
print_r ($obj);
echo $obj2->name;
?>