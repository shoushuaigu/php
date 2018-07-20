<?php
if($_GET['action']=='login'){
    if($_POST['username']=='admin'&&$_POST['pwd']=='123456'){
        setcookie('name', $_POST['username'],time()+3600*24);
        header('Location:08post.php');
    }else{
        echo '<script>alert("输入有误")</script>';
    }
}else{
    setcookie('name','',time()-1);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>?action=login" method="post">
        <fieldset>
            <legend>用户登录：</legend>
            <label for="user-name">用户名：</label>
            <input type="text" name="username">
            <label for="pwd">密码：</label>
            <input type="password" name="pwd">
            <input type="submit" value="提交">
        </fieldset>
    </form>
</body>
</html>