<?php
//开启session
session_id("login");
session_start();
date_default_timezone_set('PRC');
header('content-type:text/html;charset=utf-8');

//1.包含所需文件
require_once '../utils/swiftmailer-master/lib/swift_required.php';
require_once '../model/PdoMySQL.class.php';
require_once '../model/config.php';
require_once 'pwd.php';
require_once 'Response.php';

//接受信息
$username = addslashes($_REQUEST['username']);
$telephone = $_REQUEST["telephone"];
$email = $_REQUEST['email'];
$address = $_REQUEST["address"];
$password = md5($_REQUEST['password']);
$action = $_REQUEST["action"];
$userid = $_REQUEST['userid'];
//数据表
$table = "user";

//3.得到连接对象
$PdoMySQL = new PdoMySQL();

//检查用户名是否注册
if ($action == "checkUserName") {

    $allRow = $PdoMySQL->find($table, "username = '{$username}'");
    Response::show(200, "该账号已存在，请登陆", $allRow, 'json');

}
//检查邮箱是否注册
else if ($action == "checkEmail") {
    $allRow = $PdoMySQL->find($table, "email = '{$email}'");
    if (count($allRow) > 0) {
        Response::show(200, "该邮箱已注册");
    } else {
        Response::show(201, "该邮箱未注册");
    }
}
//找回密码
else if ($action == "seekPassword") {
    $row = $PdoMySQL->find($table, "email='{$_REQUEST["seekEmail"]}'");
    $username = $row[0]['username'];

    //发送邮件，以QQ邮箱为例
    //配置邮件服务器，得到传输对象
    $transport = Swift_SmtpTransport::newInstance('smtp.qq.com', 465, "ssl");
    //设置登陆帐号和密码
    $transport->setUsername('704568245@qq.com');
    $transport->setPassword($emailPassword);

    //得到发送邮件对象Swift_Mailer对象
    $mailer = Swift_Mailer::newInstance($transport);
    //得到邮件信息对象

    $message = Swift_Message::newInstance();
    //设置管理员的信息
    $message->setFrom(array('704568245@qq.com' => $username));
    //将邮件发给谁
    $message->setTo(array($_REQUEST["seekEmail"] => $_REQUEST["seekEmail"]));
    //设置邮件主题
    $message->setSubject('北望生物科技有限公司网站找回密码邮件');
    $url = "http://" . $_SERVER['HTTP_HOST'] . "/CRO_WEB_HZ/" . "register.html?show=resetPassword-box&email={$_REQUEST["seekEmail"]}";
    $urlencode = urlencode($url);
    $resetPasswordUrl = "http://" . $_SERVER['HTTP_HOST'] . "/CRO_WEB_HZ/" . "register.html?email={$_REQUEST["seekEmail"]}&show=resetPassword-box";
    $str = <<<EOF
		亲爱的{$username}您好~！感谢您使用我们北望科技有限公司网站<br/>
		请点击此链接重置密码！<br/>
		<a href="{$resetPasswordUrl}">{$urlencode}</a>
		<br/>
		如果点此链接无反映，可以将其复制到浏览器中来执行，链接的有效时间为24小时。
EOF;
    $message->setBody("{$str}", 'text/html', 'utf-8');
    try {
        if ($mailer->send($message)) {
            echo '<script language="JavaScript">window.alert("密码重置邮件已经发送到该邮箱，请打开邮箱重设密码"),location.href="../index.php";</script>';
        } else {
            echo '<script language="JavaScript">window.alert("发生错误，请联系客服QQ：2679943834"),location.href="../index.php";</script>';
        }
    } catch (Swift_ConnectionException $e) {
        echo '邮件发送错误' . $e->getMessage();
    }

}
//注册
else if ($action == "register") {
    $regtime = time();
    //完成注册的功能
    $token = md5(uniqid(rand(), true));

    $data = compact('username', 'password', 'telephone', 'email', 'address', 'token', 'token_exptime', 'regtime');
    $res = $PdoMySQL->add($data, $table);
    $lastInsertId = $PdoMySQL->getLastInsertId();

    if ($res) {
        //发送邮件，以QQ邮箱为例
        //配置邮件服务器，得到传输对象
        $transport = Swift_SmtpTransport::newInstance('smtp.qq.com', 465, "ssl");
        //设置登陆帐号和密码
        $transport->setUsername('704568245@qq.com');
        $transport->setPassword($emailPassword);

        //得到发送邮件对象Swift_Mailer对象
        $mailer = Swift_Mailer::newInstance($transport);
        //得到邮件信息对象

        $message = Swift_Message::newInstance();
        //设置管理员的信息
        $message->setFrom(array('704568245@qq.com' => $username));
        //将邮件发给谁
        $message->setTo(array($email => $email));
        //设置邮件主题
        $message->setSubject('北望生物科技有限公司激活邮件');
        $url = "http://" . $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF'] . "?action=active&token={$token}";
        $urlencode = urlencode($url);

        $str = <<<EOF
      亲爱的{$username}您好~！感谢您注册我们的网站<br/>
      请点击此链接激活帐号即可登陆！<br/>
      <a href="{$url}">{$urlencode}</a>
      <br/>
      如果点此链接无反映，可以将其复制到浏览器中来执行，此链接的有效时间为24小时。
EOF;
        $message->setBody("{$str}", 'text/html', 'utf-8');
        try {
            if ($mailer->send($message)) {
                Response::show(200, "恭喜您注册成功，请到邮箱激活之后登陆");
            } else {
                $PdoMySQL->delete($table, 'id=' . $lastInsertId);
                Response::show(201, "注册失败，请重新注册'");
            }
        } catch (Swift_ConnectionException $e) {
            Response::show(202, '邮件发送错误' . $e->getMessage());
        }
    } else {
        Response::show(203, "用户注册失败,3秒钟后跳转到注册页面");
    }
}
//登录
else if ($action == "login") {
    $salt = "CRO";
    $identidier = md5($salt . md5($username . $salt));
    $token = md5(uniqid(rand(), true));
    $time = time() + 60 * 60 * 24 * 7;
    $currentime = time();

    $allrow = $PdoMySQL->find($table, "username='{$username}' and password='{$password}'");
    $PdoMySQL->update(["time" => $time, "identifier" => $identidier], $table, "username='{$username}' and password='{$password}'");

    $autoRows = $PdoMySQL->find($table, "username='" . $username . "' and identifier='" . $userid . "'");

    if (count($autoRows) == 1) {
        if ($currentime < $autoRows[0]["time"]) {
            setcookie('auth', base64_encode($autoRows[0]["id"]));
            Response::show(200, "登陆成功", $autoRows[0]);
        } else {
            Response::show(201, "登录信息已失效，请重新登录");
        }
    } else {
        if (count($allrow) > 0) {
            Response::show(200, "登陆成功", $allrow[0]);
        } else {
            Response::show(201, "登录失败");
        }
    }

}
//退出登陆
else if ($action == "lougout") {
    Response::show(200, "账号退出成功", "", "json");
}
//重置密码
else if ($action == "reset") {

    $res = $PdoMySQL->update(array('password' => md5($_REQUEST["resetPassword"])), $table, 'email="' . $email . '"');
    if ($res) {
        echo '<script language="JavaScript">window.alert("重置成功,3秒钟后跳转到登陆页面"),location.href="../index.php";</script>';
    } else {
        echo '<script language="JavaScript">window.alert("重置失败，请联系客服QQ：2679943834"),location.href="../index.php";</script>';
    }
}
//点击邮箱里面的激活链接激活注册账号
else if ($action == "active") {
    $token = addslashes($_GET['token']);

    $statusResult = $PdoMySQL->find($table, "token='{$token}'");

    if (count($statusResult) > 0) {
        if ($statusResult[0]["status"] == 1) {
            echo '<script language="JavaScript">window.alert("账号已激活,请直接登陆"),location.href="../index.php";</script>';
            return;
        }
    }

    $row = $PdoMySQL->find($table, "token='{$token}' AND status=0");
    $now = time();

    if ($now > $row[0]['token_exptime']) {
        //发送邮件，以QQ邮箱为例
        //配置邮件服务器，得到传输对象
        $transport = Swift_SmtpTransport::newInstance('smtp.qq.com', 465, "ssl");
        //设置登陆帐号和密码
        $transport->setUsername('704568245@qq.com');

        $transport->setPassword($emailPassword);

        //得到发送邮件对象Swift_Mailer对象
        $mailer = Swift_Mailer::newInstance($transport);
        //得到邮件信息对象
        $message = Swift_Message::newInstance();
        //设置管理员的信息
        $message->setFrom(array('704568245@qq.com' => $row[0]["username"]));
        //将邮件发给谁
        $message->setTo(array($row[0]["email"] => $row[0]["email"]));
        //设置邮件主题
        $message->setSubject('北望生物科技有限公司激活邮件');
        $url = "http://" . $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF'] . "?action=active&token={$row[0]["token"]}";
        $urlencode = urlencode($url);
        $str = <<<EOF
      亲爱的{$row[0]["username"]}您好~！感谢您注册我们的网站<br/>
      请点击此链接激活帐号即可登陆！<br/>
      <a href="{$url}">{$urlencode}</a>
      <br/>
      如果点此链接无反映，可以将其复制到浏览器中来执行，此链接的有效时间为24小时。
EOF;
        $message->setBody("{$str}", 'text/html', 'utf-8');
        try {
            if ($mailer->send($message)) {
                echo '<script language="JavaScript">window.alert("激活时间过期，已重新发送激活邮件，请登陆邮箱激活账号");</script>';
            } else {
                $PdoMySQL->delete($table, 'id=' . $row[0]["id"]);
                echo '<script language="JavaScript">window.alert("发生错误，请联系客服QQ：2679943834");</script>';
            }
        } catch (Swift_ConnectionException $e) {
            echo '<script language="JavaScript">window.alert("发生错误，请联系客服QQ：2679943834");</script>';
        }
    } else {
        $res = $PdoMySQL->update(array('status' => 1), $table, 'id=' . $row[0]['id']);
        if ($res) {
            echo '<script language="JavaScript">window.alert("激活成功,3秒钟后跳转到登陆页面"),location.href="../index.php";</script>';
        } else {
            echo '<script language="JavaScript">window.alert("激活失败，请联系客服QQ：2679943834"),location.href="../contact-us.php";</script>';
        }
    }
}
