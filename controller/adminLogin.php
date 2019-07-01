<?php
//开启session
session_id("login");
session_start();
date_default_timezone_set('PRC');
header('content-type:text/html;charset=utf-8');

//1.包含所需文件
error_reporting(0);
require_once '../model/PdoMySQL.class.php';
require_once '../model/config.php';

//对输入的转义
if (!function_exists(get_magic_quotes_gpc) || !get_magic_quotes_gpc()) {
    foreach (array('_COOKIE', '_POST', '_GET') as $v) {
        foreach ($$v as $kk => $vv) {
            $kk{0} != '_' && $$v[$kk] = addslashes($vv);
        }
    }
}

//2.接收信息
$username = addslashes($_POST['username']);
$password = base64_encode($_POST['password']);
$act = $_REQUEST['operation'];
$table = 'admin';

//3.得到连接对象
$PdoMySQL = new PdoMySQL();
if ($act === 'login') {
    $_SESSION["username"] = $username;
    $_SESSION["password"] = $password;
    //记住密码,自动登录

    //session开始，存储用户信息
    if ($username == "") {
        echo '<script language="JavaScript">window.alert("请输入用户名"),location.href="../admin/index.php";</script>';
    } else if ($password == "") {
        echo '<script language="JavaScript">window.alert("请输入密码"),location.href="../admin/index.php";</script>';
    }
    $sql = "select * from " . $table . " where username=? and password=?";
    $pdo = new PDO('mysql:host=localhost;dbname=db_cro', 'root', 'root');
    $stmt = $pdo->prepare($sql);
    $stmt->execute(array($username, $password));
    $row1 = $stmt->fetch();
    if ($row1['id'] != "") {
        echo '<script>window.location.href="../admin/main.php";</script>';

    } else {
        echo '<script language="JavaScript">window.alert("账号或密码错误"),location.href="../admin/index.php";</script>';
    }
}
