<?php
session_start();
echo session_id();
$_SESSION['name'] ='gss';
$_SESSION['domain']='www.viocorg.club';
echo $_SESSION['name'];
echo $_SESSION['domain'];
// 逐个删除，同数组删除一样
unset($_SESSION['name']);
// 全部删除
session_destroy();