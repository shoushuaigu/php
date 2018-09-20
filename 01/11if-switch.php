<?php
// echo <<<'num'
//     <form action="" method="post">
//         <input type="number" name="num">
//         <input type="submit" value="提交">
//     </form>
// num;
// $num = $_POST['num'];
// if(!isset($_POST['num'])){
//     echo '请输入数字';
//     return FALSE;
// }
// if($num%2==0){
//     echo $num.'是偶数';
// }else{
//     echo $num.'是基数';
// }
/* switch */
echo <<<'list'
    <form action="" method="post">
        <datalist id="lang">
            <option value="html"></option>
            <option value="css"></option>
            <option value="js"></option>
            <option value="php"></option>
        </datalist>
        <label for="lang">请选择课程</label>
        <input name="lang" list="lang">
        <input type="submit" value="提交">
    </form>
list;
switch($_POST['lang']){
    case 'html':
        echo 'html是超文本脚本语言';
        break;
    case 'css':
        echo 'css是样式表';
        break;
    case 'js':
        echo 'js是浏览器端脚本语言';
        break;
    case 'php':
        echo 'php是服务端脚本语言';
        break;
    default:
        echo '新语言';
        break;
}
