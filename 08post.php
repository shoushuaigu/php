<?php
// $register =<<<'form'
//     <form action="" method="post">
//         <input name="name">
//         <input name="age">
//         <input type="submit" value="提交">
//     </form>
// form;
// echo $register;
echo '<pre>';
print_r($_POST);
echo '</pre>';
if(!isset($_COOKIE['name'])){
    header('Location:09cookie.php?action=login');
}else{
    echo '欢迎';
}