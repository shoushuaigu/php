<?php
// 引入其他php文件中的类
// 1，require、include
/* require('./03requiredClass.php');
echo (new Demo)->name;
echo (new Demo('www'))->name;       //传参给__construct方法
echo (new Demo)->__construct('aaa');    //不管用
echo (new Demo)->name; */
// 2、__autoload()  当引用一个不存在的类时，会自动调用此方法，自用引入类名相同的文件
function __autoload($className){
    $path = $className.'.php';
    if(file_exists($path)){     //检测文件是否存在
        require_once($path);
    }else {
        echo $path. '不存在此文件或类名不对';
    }
}
echo (new Demo('autoload'))->name;  //Demo类名与demo文件名需一样（不区分大小写）Demo与demo.php中的类名Demo需一致
echo '<hr>';
// 3、自定义autoload
// function loaderAuto($className){
//     $path = $className.'.php';
//     if(file_exists($path)){
//         require_once($path);
//     }else{
//         echo $path.'不存在此文件或类名不对';
//     }
// }
// spl_autoload_register('loaderAuto');
// echo (new Test(20))->age;
class loader
{
    // public function loaderauto($className)
    // {
    // // 用public定义需要实例化调用spl_autoload_register([(new loader) , 'loaderauto'])
    //     $path = $className . '.php';
    //     if (file_exists($path)) {
    //         require_once($path);
    //     } else {
    //         echo $path . '不存在此文件或类名不对';
    //     }
    // }
    static function loaderauto($className){
    // 用static定义方法后能直接调用，如下spl_autoload_register(['loader','loaderauto']);
        $path = $className . '.php';
        if(file_exists($path)){
            require_once($path);
        }else{
            echo $path.'不存在此文件或类名不对';
        }
    }
    
}
spl_autoload_register(['loader','loaderauto']);
echo (new Test(30))->age;
