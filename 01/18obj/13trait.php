<?php
// trait类可以认为是私有代码段，不能被实例化，通过use引入调用，trait类中的语法和普通类一样
// 不能有常量
trait test{
    public $name = 'gss';
    function show(){
        echo $this->name;
        echo '<hr>';
    }
}
trait test2{
    public $age =18;
    function show(){
        echo $this->name.$this->age;
        echo '<hr>';
    }
}
trait test3{
    public $sex = 'man';
    use test2{
        test2::show as show2;
    }
    function show(){
        echo $this->name.$this->age.$this->sex;
        echo '<hr>';
    }
}
trait test4{
    function show(){
        echo '多个重名的方法';
    }
}
class Demo
{
    use test,test3,test4{
        // 方法重名可以规定默认用哪个，还能重命名
        test::show insteadOf test3,test4;
        test3::show as show3;
        test4::show as show4;
        // test::show as show1;
    }
    // function show(){
    //     echo '方法重名时优先级：子类>trait>父类';
    // }
}
$obj = new Demo();
$obj->show();
// $obj->show1();
$obj->show2();
$obj->show3();
$obj->show4();

