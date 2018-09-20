<?php
// 引入文件分两种方式：1.require:开头引入.2.include：程序运行中引入
require '04required.php';
echo show1($s1);
echo '<hr/>';
$t=true;
if($t){
    include '04included.php';
    echo show2();
}else{
    echo '啦啦啦';
}