<?php
// __call($method,$args) 调用不存在的方法是自动调用
// __callStatic($method,$args)  调用不存在的静态方法是自动偶用
class Demo
{
    public function __call($method,$args){
        $argsStr='';
        foreach ($args as $value) {
            $argsStr .= $value.',';
        }
        echo '方法'.$method.'('.$argsStr.')不存在';
    }
    public static function __callStatic($method,$args){
        $argsStr = '';
        foreach ($args as $value) {
            $argsStr .= $value . ',';
        }
        echo '静态方法' . $method . '(' . $argsStr . ')不存在';
    }
}
$obj = new Demo();
$obj->test('a','b');
echo '<hr>';
Demo::test('jj');
