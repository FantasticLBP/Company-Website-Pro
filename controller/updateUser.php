<?php
/**
 * Created by PhpStorm.
 * User: geek
 * Date: 2017/4/4
 * Time: 上午11:37
 */
header('content-type:text.html;charset=utf-8');
require_once '../model/PdoMySQL.class.php';
require_once '../model/config.php';
require_once 'Response.php';

class UpdateUser
{
    private $tableName = "user";
    private $id = "";
    private $username = "";
    private $password = "";
    private $telephone = "";
    private $birthday = "";
    private $gender = "";
    private $email = "";
    private $address = "";

    protected static $_instance = null;

    protected function __construct()
    {

    }

    protected function __clone()
    {
        // TODO: Implement __clone() method.
    }

    public function getInstance()
    {
        if (self::$_instance === null) {
            self::$_instance = new self();
        }
        return self::$_instance;
    }

    public function updateUsers()
    {
        self . $this->id = $_REQUEST["userid"];
        self . $this->username = $_REQUEST["username"];
        self . $this->password = $_REQUEST["password"];
        self . $this->telephone = $_REQUEST["telephone"];
        self . $this->gender = $_REQUEST["gender"];
        self . $this->birthday = $_REQUEST["birthday"];
        self . $this->address = $_REQUEST["address"];
        self . $this->email = $_REQUEST["email"];

        $mysqlPdo = new PdoMySQL();

        $res = $mysqlPdo->update(["username" => $this->username, "password" => $this->password, "telephone" => $this->telephone,
            "gender" => $this->gender, "birthday" => $this->birthday, "email" => $this->email, "address" => $this->address]
            , $this->tableName, "id=$this->id");
        if ($res) {
            //Response::show(200, '用户信息修改成功', "", 'json');
            echo '<script>alert("用户信息更新成功");window.location.href = "../admin/user.php";</script>';
        } else {
            Response::show(201, '用户信息修改失败', "", 'json');
        }

    }
}

$userUpdater = UpdateUser::getInstance();
$userUpdater->updateUsers();
