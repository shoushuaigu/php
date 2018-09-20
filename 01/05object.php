<?php
class Student{
    public $name = '谷守帅';
    public $age = 25;
    public $sex = '男';
    public function getInfo(){
        return '姓名：'.$this->name.'<br>'.'年龄'.$this->age.'<br>'.'性别'.$this->sex;

    }
}
$s1 = new Student;
echo $s1->name;
echo $s1->age;
echo $s1->sex;
echo $s1->getInfo();
// 标准类stdClass
$s2 = new stdClass();
$s2->name='gss';
$s2->fn = function(){
    return '阿斯达';
};
echo '<hr>';
print $s2->name;
// 标准类的方法调用用call_user_func
print call_user_func($s2->fn);
// 强制转换为对象
echo '<hr>';
print '<pre>';  //格式化
print_r((object)[1,2,3]);
print_r((object)1);
print_r((object)'gss');
print_r((object)false);
print_r((object)null);
print_r((object)'');
print '</pre>';

