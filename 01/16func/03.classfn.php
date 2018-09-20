<?php
// 回调方式调用对象或类中的方法
class Says{
    static function f1($s1,$s2){    //静态方法
        return '我在'.$s1.'吃着'.$s2;
    }
    public function f2($s1,$s2){
        return '我在'.$s1.'吃着'.$s2;
    }
};
// call_user_func_array();
// 调用静态方法时['Says','f1']
echo call_user_func_array(['Says','f1'],['人民广场','炸鸡']);
echo '<hr/>';
// 调用不同方法[(new Says),'f2']
echo call_user_func_array([(new Says),'f2'],['巴黎铁塔','法棍']);
echo '<hr/>';
