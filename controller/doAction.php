<?php
//开启session
session_id("AdminLogin");
session_start();
date_default_timezone_set('PRC');
header('content-type:text/html;charset=utf-8');

//1.包含所需文件
require_once '../utils/swiftmailer-master/lib/swift_required.php';
require_once '../model/PdoMySQL.class.php';
require_once '../model/config.php';
require_once 'pwd.php';
require_once  'Response.php';

//接受信息
$username = addslashes($_REQUEST['username']);
$password = md5($_REQUEST['password']);
$action = $_REQUEST["action"];
$operation = $_REQUEST["operation"];
$email = $_REQUEST['email'];
$table = 'admin';

//3.得到连接对象
$PdoMySQL = new PdoMySQL();

if($operation==='register'){
    if($_REQUEST['username']==""){
        echo  '<script language="JavaScript">window.alert("请输入用户名"),location.href="../index.html";</script>';
    }else if($_REQUEST['password']==""){
        echo  '<script language="JavaScript">window.alert("请输入密码"),location.href="../index.html";</script>';
    }

    $regtime=time();
    $token=md5($username.$password.$regtime);
    $token_exptime=$regtime+24*3600;//过期时间
    $data=compact('username','password','email','token','token_exptime','regtime');
    $res=$PdoMySQL->add($data, $table);
    $lastInsertId=$PdoMySQL->getLastInsertId();

    if($res){
        //发送邮件，以QQ邮箱为例
        //配置邮件服务器，得到传输对象
        $transport=Swift_SmtpTransport::newInstance('smtp.qq.com',465,"ssl");
        //设置登陆帐号和密码
        $transport->setUsername('704568245@qq.com');
        $transport->setPassword($emailPassword);

        //得到发送邮件对象Swift_Mailer对象
        $mailer=Swift_Mailer::newInstance($transport);
        //得到邮件信息对象

        $message=Swift_Message::newInstance();
        //设置管理员的信息
        $message->setFrom(array('704568245@qq.com'=>$username));
        //将邮件发给谁
        $message->setTo(array($email=>$email));
        //设置邮件主题
        $message->setSubject('激活邮件');
        $url="http://".$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF']."?act=active&token={$token}";
        $urlencode=urlencode($url);
        $str=<<<EOF
		亲爱的{$username}您好~！感谢您注册我们北望科技有限公司网站<br/>
		请点击此链接激活帐号即可登陆！<br/>
		<a href="{$url}">{$urlencode}</a>
		<br/>
		如果点此链接无反映，可以将其复制到浏览器中来执行，链接的有效时间为24小时。		
EOF;
        $message->setBody("{$str}",'text/html','utf-8');
        try{
            if($mailer->send($message)){
                echo "恭喜您{$username}注册成功，请到邮箱激活之后登陆<br/>";
                echo '3秒钟后跳转到登陆页面';
                echo '<meta http-equiv="refresh" content="3;url=index.html#tologin"/>';
            }else{
                $PdoMySQL->delete($table,'id='.$lastInsertId);
                echo '注册失败，请重新注册';
                echo '3秒钟后跳转到注册页面';
                echo '<meta http-equiv="refresh" content="3;url=index.html#toregister"/>';
            }
        }catch(Swift_ConnectionException $e){
            echo '邮件发送错误'.$e->getMessage();
        }
    }else{
        echo '<script language="JavaScript">window.alert("注册失败,请重试"),location.href="../admin/index.html";</script>';
    }
}else if($operation==='login'){

    $salt = "CROAdmin";
    $identidier = md5($salt.md5($username.$salt));
    $userid = $_REQUEST['userid'];

    $time = time()+60*60*24*7;
    $currentime = time();

    $allrow = $PdoMySQL->find($table,"username='{$username}' and password='{$password}'");
    $PdoMySQL->update(["time"=>$time,"identifier"=>$identidier],$table,"username='{$username}' and password='{$password}'");

    $autoRows = $PdoMySQL->find($table,"username='".$username."' and identifier='".$userid."'");

    if(count($autoRows) == 1){
        if($currentime < $autoRows[0]["time"]){
            setcookie('AdminAuth',base64_encode($autoRows[0]["id"]));
            Response::show(200,"登陆成功",$autoRows[0]);
        }else{
            Response::show(201,"登录信息已失效，请重新登录");
        }
    }else{
        if(count($allrow) > 0){
            Response::show(200,"登陆成功",$allrow[0]);
        }else {
            Response::show(201,"登录失败");
        }
    }

}else if($operation == 'seek'){

    $row = $PdoMySQL->find($table,"email='{$email}'");
    $username = $row[0]['username'];

    $transport=Swift_SmtpTransport::newInstance('smtp.qq.com',465,"ssl");
    //设置登陆帐号和密码
    $transport->setUsername('704568245@qq.com');
    $transport->setPassword($emailPassword);

    //得到发送邮件对象Swift_Mailer对象
    $mailer=Swift_Mailer::newInstance($transport);
    //得到邮件信息对象

    $message=Swift_Message::newInstance();
    //设置管理员的信息
    $message->setFrom(array('704568245@qq.com'=>$username));
    //将邮件发给谁
    $message->setTo(array($email=>$email));
    //设置邮件主题
    $message->setSubject('北望生物科技有限公司网站找回密码邮件');
    $url = "http://".$_SERVER['HTTP_HOST']."/CRO_WEB_HZ/admin/"."register.html?show=resetPassword-box&email={$email}";
    $urlencode = urlencode($url);
    $resetPasswordUrl =  "http://".$_SERVER['HTTP_HOST']."/CRO_WEB_HZ/admin/"."register.html?email={$email}&show=resetPassword-box";
    $str=<<<EOF
		亲爱的{$username}您好~！感谢您使用我们北望科技有限公司网站<br/>
		请点击此链接重置密码！<br/>
		<a href="{$resetPasswordUrl}">{$urlencode}</a>
		<br/>
		如果点此链接无反映，可以将其复制到浏览器中来执行，链接的有效时间为24小时。		
EOF;
    $message->setBody("{$str}",'text/html','utf-8');

    try{
        if($mailer->send($message)){
            Response::show(200,"密码重置邮件已经发送到该邮箱，请打开邮箱重设密码");
        }else{
            Response::show(201,"发生错误，请联系客服QQ：2679943834");
        }
    }catch(Swift_ConnectionException $e){
        Response::show(201,'邮件发送错误'.$e->getMessage());
    }

}else if($operation == "reset"){

    $res=$PdoMySQL->update(array('password'=>md5($_REQUEST["resetPassword"])),$table,'email="'.$email.'"');
    if($res){
        echo '<script language="JavaScript">window.alert("重置成功,3秒钟后跳转到登陆页面"),location.href="../admin/index.html";</script>';
    }else{
        echo '<script language="JavaScript">window.alert("重置失败，请联系客服QQ：2679943834"),location.href="../admin/index.html";</script>';
    }

}else if($operation ==='quit'){
    setcookie("AdminAuth","");
    Response::show(200,"账号退出成功","","json");
}

?>


