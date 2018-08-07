<?php
class Demo{
    public $name;
    public function __construct($name='谷守帅'){    
        //__construct为内置函数，调用类时自动执行，参数传给类，不传此方法
        $this->name = $name;
    }
}