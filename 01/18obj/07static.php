<?php
/* 访问限制符：
    public:公共符   内外、子类都能调用
    private:私有符  只能内部调用
    protected:受保护的  内部和子类调用
*/
/* 成员状态符：
    静态： self  parent static  静态方法只能调用静态属性
        self:指向被调用类本身,初始化就绑定了
        static:指向类本身，运行中绑定（延迟静态绑定），如下$sex,父类中未定义但能通过子类调用父类方法使用，但直接调用父类方法还是会找不到该属性
        parent:指向父类
    非静态：$this(为变量)
*/
class Father
{
    public static $name;
    private static $age;
    public $aa=10;
    public function __construct($name,$age)
    {
        self::$name = $name;
        self::$age = $age;
    }
    public static function show(){
        return self::$name.self::$age.'====';
    }
    public function display(){
        return self::$name . self::$age . '===='.$this->aa;
    }
    public static function getSex(){
        return static::$sex.'性别';
    }
}
class Son extends Father
{
    protected static $sex='nan';
    public static function getName(){
        return parent::$name.'$age是私有属性，子类不能调用';
    }
}

echo Father::$name;
echo '<hr>';
echo Father::show();
echo '<hr>';
$obj = new Father('谷守帅',18,'男');
echo $obj->show();
echo '<hr>';
echo Father::$name;
echo '<hr>';
echo Father::show();
echo '<hr>';
echo $obj::show();
echo '<hr>';
echo $obj->show();  //对象访问静态方法能用两种方式
echo '<hr>';
echo $obj::$name;   //对象访问静态属性只能用：：形式
echo '<hr>';
echo Son::getName();
echo '<hr>';
$bool = $obj instanceof Father; //判断一个实例是否为某类的实例，返回布尔值
echo $bool;
$className = get_class($obj);
echo '<hr>';
echo $className;
echo '<hr>';
echo Son::getSex();
echo '<hr>';
echo $obj->display();