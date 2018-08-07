<?php
// namespace命名空间
namespace tests1;
const NAME = '谷守帅';
function getName($name='gss'){
    echo $name;
    echo '<hr>';
}
class Test1
{
    private $sex='man';
    function __get($name){
        return $this->$name;
    }
    function __set($name,$value){
        $this->$name=$value;
    }
}
echo '当前命名空间' . __NAMESPACE__;
echo '<hr>';
echo NAME;
echo '<hr>';
getName(NAME);
$obj1= new Test1();
echo $obj1->sex;
$obj1->sex='woman';
echo '<hr>';
echo $obj1->sex;
echo '<hr>';
namespace test2;
use tests1\Test1 as tests1;     //引用其他空间类并重命名
const NAME = '谷守帅2';
function getName($name = 'gss2')
{
    echo $name;
    echo '<hr>';
}
class Test1
{
    private $sex = 'man2';
    function __get($name)
    {
        return $this->$name;
    }
    function __set($name, $value)
    {
        $this->$name = $value;
    }
}
echo '当前命名空间'.__NAMESPACE__;
echo '<hr>';
echo NAME;
echo \tests1\NAME;   //在不同命名空间之间的调用
echo '<hr>';
getName(NAME);
\tests1\getName();
$obj1 = new Test1();
$obj2 = new Tests1();
echo $obj1->sex;
echo $obj2->sex;
$obj1->sex = 'woman';
echo '<hr>';
echo $obj1->sex;