<?php
/**
 * Created by PhpStorm.
 * User: geek
 * Date: 2017/4/4
 * Time: 上午11:37
 */
//header('content-type:text.html;charset=utf-8');
//error_reporting(0);
require_once '../model/PdoMySQL.class.php';
require_once '../model/config.php';
require_once 'Response.php';

class EmployeeService
{
    private $tableName = "resume";
    private $type = "";

    private $resumeId = "";
    private $username = "";
    private $gender = "";
    private $job = "";
    private $birthday = "";
    private $phone = "";
    private $email = "";
    private $experience = "";

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

    public function operateService()
    {
        self . $this->type = $_REQUEST["type"];
        self . $this->resumeId = $_REQUEST["resumeId"];
        self . $this->username = $_REQUEST["username"];
        self . $this->gender = $_REQUEST["gender"];
        self . $this->job = $_REQUEST["job"];
        self . $this->birthday = $_REQUEST["birthday"];
        self . $this->phone = $_REQUEST["phone"];
        self . $this->email = $_REQUEST["email"];
        self . $this->experience = $_REQUEST["experience"];

        $mysqlPdo = new PdoMySQL();
        if ($this->type === "select") {
            $allrows = $mysqlPdo->find($this->tableName);
            Response::show(200, '简历信息返回成功', $allrows, 'json');
        } else if ($this->type === "delete") {

            $deleteRes = $mysqlPdo->delete($this->tableName, "id=$this->resumeId ");
            if ($deleteRes || $deleteRes == 0) {
                Response::show(200, "删除成功", "", "json");
            } else {
                Response::show(201, "删除失败", "", "json");
            }
        } else {

            $time = date("Y年m月d日");

            $data = ["username" => $this->username, "gender" => $this->gender, "job" => $this->job, "birthday" => $this->birthday, "phone" => $this->phone, "email" => $this->email, "experience" => $this->experience, "time" => $time];
            $Res = $mysqlPdo->add($data, $this->tableName);

            $lastInsertId = $mysqlPdo->getLastInsertId();
            if ($Res) {
                echo '<script>window.location.href = "../resume-delivery.php?m=as"</script>';
            } else {
                echo '<script>window.location.href = "../resume-delivery.php?m=af"</script>';
            }

        }

    }
}

$employeeService = EmployeeService::getInstance();
$employeeService->operateService();
